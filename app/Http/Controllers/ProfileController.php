<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use App\Traits\Loggable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class ProfileController extends Controller
{
    use Loggable;
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.backend.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();
        $user->fill($request->validated());

        // Upload foto profil jika ada
        if ($request->hasFile('foto_profil')) {
            // Hapus foto lama jika ada
            if ($user->foto_profil && Storage::disk('public')->exists($user->foto_profil)) {
                Storage::disk('public')->delete($user->foto_profil);
            }

            $file = $request->file('foto_profil');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('profile-photos', $fileName, 'public');
            $user->foto_profil = $path;
        }

        $changed = $this->getChangedValues($user, $request->validated());
        $user->save();

        // Log action (only if something changed)
        if (!empty($changed['old']) || $request->hasFile('foto_profil')) {
            $this->logAction(
                'update',
                $user,
                "Memperbarui profil sendiri",
                $changed['old'],
                $changed['new']
            );
        }

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Update the user's email address.
     */
    public function updateEmail(Request $request): RedirectResponse
    {
        $user = $request->user();

        $validated = $request->validate([
            'email' => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
                Rule::unique(User::class)->ignore($user->id),
            ],
        ]);

        $oldEmail = $user->email;
        $user->email = $validated['email'];

        // Email langsung terverifikasi tanpa perlu verifikasi ulang
        $user->email_verified_at = now();

        $user->save();

        // Log action
        $this->logAction(
            'update',
            $user,
            "Memperbarui email dari {$oldEmail} ke {$user->email}",
            ['email' => $oldEmail],
            ['email' => $user->email]
        );

        return Redirect::route('profile.edit')->with('status', 'email-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    /**
     * Display list of users (only for super admin)
     */
    public function index(): View
    {
        if (!Auth::user()->isSuperAdmin()) {
            abort(403, 'Unauthorized action.');
        }

        $users = User::orderBy('created_at', 'desc')->paginate(20);

        return view('profile.backend.users.index', [
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new user (only for super admin)
     */
    public function create(): View
    {
        if (!Auth::user()->isSuperAdmin()) {
            abort(403, 'Unauthorized action.');
        }

        return view('profile.backend.users.create');
    }

    /**
     * Store a newly created user (only for super admin)
     */
    public function store(Request $request): RedirectResponse
    {
        if (!Auth::user()->isSuperAdmin()) {
            abort(403, 'Unauthorized action.');
        }

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => ['required', 'in:user,admin,super_admin,humas'],
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => $validated['role'],
        ]);

        // Log action
        $this->logAction(
            'create',
            $user,
            "Membuat user baru: {$user->name} ({$user->email}) dengan role {$user->role}",
            null,
            ['name' => $user->name, 'email' => $user->email, 'role' => $user->role]
        );

        return Redirect::route('users.index')
            ->with('success', 'User berhasil dibuat!');
    }

    /**
     * Show the form for editing a user (only for super admin)
     */
    public function editUser(User $user): View
    {
        if (!Auth::user()->isSuperAdmin()) {
            abort(403, 'Unauthorized action.');
        }

        return view('profile.backend.users.edit', [
            'user' => $user,
        ]);
    }

    /**
     * Update a user (only for super admin)
     */
    public function updateUser(Request $request, User $user): RedirectResponse
    {
        if (!Auth::user()->isSuperAdmin()) {
            abort(403, 'Unauthorized action.');
        }

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users,email,'.$user->id],
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
            'role' => ['required', 'in:user,admin,super_admin,humas'],
        ]);

        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->role = $validated['role'];

        $changed = $this->getChangedValues($user, $validated);

        if (!empty($validated['password'])) {
            $user->password = Hash::make($validated['password']);
            $changed['new']['password'] = '***'; // Don't log actual password
        }

        $user->save();

        // Log action
        $this->logAction(
            'update',
            $user,
            "Memperbarui user: {$user->name} ({$user->email})",
            $changed['old'],
            $changed['new']
        );

        return Redirect::route('users.index')
            ->with('success', 'User berhasil diperbarui!');
    }

    /**
     * Delete a user (only for super admin)
     */
    public function destroyUser(User $user): RedirectResponse
    {
        if (!Auth::user()->isSuperAdmin()) {
            abort(403, 'Unauthorized action.');
        }

        // Prevent super admin from deleting themselves
        if ($user->id === Auth::id()) {
            return Redirect::route('users.index')
                ->with('error', 'Anda tidak dapat menghapus akun sendiri.');
        }

        // Get user data before delete
        $userData = $user->toArray();
        $description = "Menghapus user: {$user->name} ({$user->email})";

        $user->delete();

        // Log action
        $this->logAction(
            'delete',
            null,
            $description,
            $userData,
            null
        );

        return Redirect::route('users.index')
            ->with('success', 'User berhasil dihapus!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
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

        $users = User::orderBy('created_at', 'desc')->get();

        return view('profile.users.index', [
            'users' => $users,
        ]);
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

        $user->delete();

        return Redirect::route('users.index')
            ->with('success', 'User berhasil dihapus!');
    }
}

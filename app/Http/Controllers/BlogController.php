<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource (Admin).
     */
    public function index()
    {
        if (!Auth::user()->isAdminOrSuperAdmin()) {
            abort(403, 'Unauthorized action.');
        }

        $blogs = Blog::with('user')->orderBy('created_at', 'desc')->get();

        return view('profile.blogs.index', [
            'blogs' => $blogs,
        ]);
    }

    /**
     * Display a listing of the resource (Frontend).
     */
    public function frontend(Request $request)
    {
        $query = Blog::published()->with('user');

        // Filter by category if provided
        if ($request->has('kategori') && $request->kategori) {
            $query->where('kategori', $request->kategori);
        }

        $blogs = $query->orderBy('created_at', 'desc')->paginate(9);

        // Get all categories for filter
        $categories = Blog::published()
            ->whereNotNull('kategori')
            ->distinct()
            ->pluck('kategori')
            ->sort();

        return view('profile.frontend.blogs.index', [
            'blogs' => $blogs,
            'categories' => $categories,
            'selectedCategory' => $request->kategori,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Auth::user()->isAdminOrSuperAdmin()) {
            abort(403, 'Unauthorized action.');
        }

        return view('profile.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!Auth::user()->isAdminOrSuperAdmin()) {
            abort(403, 'Unauthorized action.');
        }

        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'excerpt' => 'nullable|string|max:500',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120', // max 5MB
            'kategori' => 'nullable|string|max:100',
            'status' => 'required|in:draft,published',
        ]);

        // Generate slug
        $slug = Str::slug($validated['judul']);
        $originalSlug = $slug;
        $counter = 1;
        while (Blog::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }
        $validated['slug'] = $slug;

        // Upload gambar jika ada
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('blog-images', $fileName, 'public');
            $validated['gambar'] = $path;
        }

        $validated['user_id'] = Auth::id();

        Blog::create($validated);

        return redirect()->route('blogs.index')
            ->with('success', 'Blog berhasil dibuat!');
    }

    /**
     * Display the specified resource (Frontend).
     */
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)
            ->published()
            ->with('user')
            ->firstOrFail();

        // Increment views
        $blog->increment('views');

        return view('profile.frontend.blogs.show', [
            'blog' => $blog,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        if (!Auth::user()->isAdminOrSuperAdmin()) {
            abort(403, 'Unauthorized action.');
        }

        return view('profile.blogs.edit', [
            'blog' => $blog,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        if (!Auth::user()->isAdminOrSuperAdmin()) {
            abort(403, 'Unauthorized action.');
        }

        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'excerpt' => 'nullable|string|max:500',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'kategori' => 'nullable|string|max:100',
            'status' => 'required|in:draft,published',
        ]);

        // Update slug jika judul berubah
        if ($blog->judul !== $validated['judul']) {
            $slug = Str::slug($validated['judul']);
            $originalSlug = $slug;
            $counter = 1;
            while (Blog::where('slug', $slug)->where('id', '!=', $blog->id)->exists()) {
                $slug = $originalSlug . '-' . $counter;
                $counter++;
            }
            $validated['slug'] = $slug;
        }

        // Upload gambar baru jika ada
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($blog->gambar && Storage::disk('public')->exists($blog->gambar)) {
                Storage::disk('public')->delete($blog->gambar);
            }

            $file = $request->file('gambar');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('blog-images', $fileName, 'public');
            $validated['gambar'] = $path;
        }

        $blog->update($validated);

        return redirect()->route('blogs.index')
            ->with('success', 'Blog berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        if (!Auth::user()->isAdminOrSuperAdmin()) {
            abort(403, 'Unauthorized action.');
        }

        // Hapus gambar jika ada
        if ($blog->gambar && Storage::disk('public')->exists($blog->gambar)) {
            Storage::disk('public')->delete($blog->gambar);
        }

        $blog->delete();

        return redirect()->route('blogs.index')
            ->with('success', 'Blog berhasil dihapus!');
    }
}

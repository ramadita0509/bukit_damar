<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AddBlogImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Mapping blog slug dengan gambar yang sesuai dari assets
        $blogImages = [
            'bazar-murah-di-balai-warga-31-desember-2025' => 'assets/img/services.jpg',
            'pertandingan-futsal-u-12-se-rw-17-desa-singajaya' => 'assets/img/features.png',
            'update-perbaikan-longsor-di-blok-cf-20' => 'assets/img/alt-features.png',
            'family-gathering-rt-002-rw-017-1-januari-2026' => 'assets/img/about.jpg',
            'pengajian-maulid-nabi-di-masjid-al-hidayah-2-februari-2026' => 'assets/img/values-1.png',
        ];

        foreach ($blogImages as $slug => $imagePath) {
            $blog = Blog::where('slug', $slug)->first();

            if ($blog && !$blog->gambar) {
                $sourcePath = public_path($imagePath);

                // Check if source file exists
                if (File::exists($sourcePath)) {
                    // Create blog-images directory if not exists
                    $storagePath = storage_path('app/public/blog-images');
                    if (!File::exists($storagePath)) {
                        File::makeDirectory($storagePath, 0755, true);
                    }

                    // Get file extension
                    $extension = File::extension($sourcePath);
                    $fileName = 'blog_' . $slug . '_' . time() . '.' . $extension;
                    $destinationPath = $storagePath . '/' . $fileName;

                    // Copy file to storage
                    if (File::copy($sourcePath, $destinationPath)) {
                        // Update blog with image path
                        $blog->gambar = 'blog-images/' . $fileName;
                        $blog->save();

                        $this->command->info("✓ Image added to blog: {$blog->judul}");
                    } else {
                        $this->command->warn("✗ Failed to copy image for blog: {$blog->judul}");
                    }
                } else {
                    $this->command->warn("✗ Source image not found: {$imagePath} for blog: {$blog->judul}");
                }
            } elseif ($blog && $blog->gambar) {
                $this->command->info("⊘ Blog already has image: {$blog->judul}");
            }
        }

        $this->command->info('Blog images seeding completed!');
    }
}

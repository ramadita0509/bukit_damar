@extends('layouts.frontend')

@php
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
@endphp

@section('title', $blog->judul . ' - Website Bukit Damar')

@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1>{{ $blog->judul }}</h1>
            <p class="lead">{{ $blog->kategori ?? 'Blog Bukit Damar' }}</p>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
          <div class="col-lg-8">
            <div class="content" data-aos="fade-up">
              <!-- Meta Information -->
              <div class="mb-4" style="display: flex; flex-wrap: wrap; gap: 15px; align-items: center; padding: 15px; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-radius: 10px; border-left: 4px solid #0ea2e7;">
                <div class="d-flex align-items-center" style="gap: 8px;">
                  <i class="bi bi-clock" style="color: #0ea2e7; font-size: 1.1rem;"></i>
                  <span style="color: #2c3e50; font-size: 0.9rem;">{{ $blog->created_at->format('d M Y, H:i') }}</span>
                </div>
                @if($blog->kategori)
                  <div class="d-flex align-items-center" style="gap: 8px;">
                    <i class="bi bi-folder" style="color: #28a745; font-size: 1.1rem;"></i>
                    <a href="{{ route('blog.index', ['kategori' => $blog->kategori]) }}" style="color: #28a745; text-decoration: none; font-size: 0.9rem; font-weight: 500;">{{ $blog->kategori }}</a>
                  </div>
                @endif
                <div class="d-flex align-items-center" style="gap: 8px;">
                  <i class="bi bi-eye" style="color: #6c757d; font-size: 1.1rem;"></i>
                  <span style="color: #6c757d; font-size: 0.9rem;">{{ $blog->views }} views</span>
                </div>
              </div>

              <!-- Featured Image -->
              @if($blog->gambar)
                <div class="text-center mb-4">
                  <img src="{{ Storage::url($blog->gambar) }}" alt="{{ $blog->judul }}" class="img-fluid" style="max-width: 100%; height: auto; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                </div>
              @endif

              <!-- Title -->
              <h2 class="mb-4" style="color: #0ea2e7; font-size: 2rem; font-weight: 600; line-height: 1.3;">
                <i class="bi bi-journal-text me-2"></i>{{ $blog->judul }}
              </h2>

              <!-- Content -->
              <div class="blog-content">
                @php
                  // Process content to ensure proper formatting
                  $content = $blog->konten;

                  // Check if content has HTML tags
                  $hasHtml = strip_tags($content) !== $content;

                  if (!$hasHtml) {
                    // Process plain text content
                    $lines = explode("\n", $content);
                    $formattedContent = '';
                    $inList = false;
                    $currentParagraph = '';

                    foreach ($lines as $index => $line) {
                      $line = trim($line);

                      // Skip empty lines
                      if (empty($line)) {
                        // Close list if open
                        if ($inList) {
                          $formattedContent .= '</ul>';
                          $inList = false;
                        }
                        // Close paragraph if open
                        if (!empty($currentParagraph)) {
                          $formattedContent .= '<p>' . $currentParagraph . '</p>';
                          $currentParagraph = '';
                        }
                        continue;
                      }

                      // Check if it's a heading (starts with emoji or **text** on single line)
                      if (preg_match('/^[📅🛍️💰🎉🎊💡⚡🔥]/u', $line) || preg_match('/^\*\*[^*]+\*\*$/', $line)) {
                        // Close list if open
                        if ($inList) {
                          $formattedContent .= '</ul>';
                          $inList = false;
                        }
                        // Close paragraph if open
                        if (!empty($currentParagraph)) {
                          $formattedContent .= '<p>' . $currentParagraph . '</p>';
                          $currentParagraph = '';
                        }
                        // Process heading
                        $headingText = preg_replace('/\*\*(.+?)\*\*/', '<strong>$1</strong>', e($line));
                        $formattedContent .= '<h3>' . $headingText . '</h3>';
                      }
                      // Check if it's a list item (starts with -)
                      elseif (preg_match('/^-\s(.+)$/', $line, $matches)) {
                        // Close paragraph if open
                        if (!empty($currentParagraph)) {
                          $formattedContent .= '<p>' . $currentParagraph . '</p>';
                          $currentParagraph = '';
                        }
                        // Open list if not already open
                        if (!$inList) {
                          $formattedContent .= '<ul>';
                          $inList = true;
                        }
                        // Process list item
                        $itemText = preg_replace('/\*\*(.+?)\*\*/', '<strong>$1</strong>', e($matches[1]));
                        $formattedContent .= '<li>' . $itemText . '</li>';
                      }
                      // Regular text line
                      else {
                        // Close list if open
                        if ($inList) {
                          $formattedContent .= '</ul>';
                          $inList = false;
                        }
                        // Add to current paragraph
                        $lineText = preg_replace('/\*\*(.+?)\*\*/', '<strong>$1</strong>', e($line));
                        if (!empty($currentParagraph)) {
                          $currentParagraph .= '<br>';
                        }
                        $currentParagraph .= $lineText;
                      }
                    }

                    // Close any open tags
                    if ($inList) {
                      $formattedContent .= '</ul>';
                    }
                    if (!empty($currentParagraph)) {
                      $formattedContent .= '<p>' . $currentParagraph . '</p>';
                    }

                    echo $formattedContent;
                  } else {
                    // Content already has HTML, just display it
                    echo $content;
                  }
                @endphp
              </div>

              <!-- Author Card -->
              <div class="mt-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); padding: 25px; border-radius: 10px; border-left: 4px solid #0ea2e7;">
                <div class="d-flex align-items-center">
                  @if($blog->user->foto_profil)
                    <img src="{{ Storage::url($blog->user->foto_profil) }}" class="rounded-circle flex-shrink-0" alt="{{ $blog->user->name }}" style="width: 80px; height: 80px; object-fit: cover; margin-right: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                  @else
                    <div class="rounded-circle flex-shrink-0 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px; background: linear-gradient(135deg, #0ea2e7 0%, #0d6efd 100%); margin-right: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                      <i class="bi bi-person text-white" style="font-size: 2rem;"></i>
                    </div>
                  @endif
                  <div>
                    <h4 style="color: #2c3e50; margin-bottom: 5px; font-size: 1.25rem;">
                      <i class="bi bi-person-circle me-2" style="color: #0ea2e7;"></i>{{ $blog->user->name }}
                    </h4>
                    <p style="color: #6c757d; margin-bottom: 0; font-size: 0.95rem;">
                      Penulis blog kegiatan Bukit Damar
                    </p>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="col-lg-4">
            <div class="sidebar">
              <div class="sidebar-item recent-posts mb-4" data-aos="fade-up" data-aos-delay="100">
                <h3 class="sidebar-title mb-4" style="font-size: 1.25rem; font-weight: 600; color: #2c3e50; padding-bottom: 0.75rem; border-bottom: 2px solid #0ea2e7;">
                  <i class="bi bi-journal-text me-2" style="color: #0ea2e7;"></i>Blog Terbaru
                </h3>
                <div class="mt-3">
                  @php
                    $recentBlogs = \App\Models\Blog::published()
                      ->where('id', '!=', $blog->id)
                      ->orderBy('created_at', 'desc')
                      ->limit(5)
                      ->get();
                  @endphp
                  @forelse($recentBlogs as $recentBlog)
                    <a href="{{ route('blog.show', $recentBlog->slug) }}" style="text-decoration: none; display: block; margin-bottom: 1rem;">
                      <div class="info-card" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-left: 4px solid #0ea2e7; padding: 1rem; border-radius: 8px; transition: all 0.3s; box-shadow: 0 2px 4px rgba(0,0,0,0.05);" onmouseover="this.style.transform='translateX(5px)'; this.style.boxShadow='0 4px 8px rgba(0,0,0,0.1)'; this.style.borderLeftColor='#0d6efd'" onmouseout="this.style.transform='translateX(0)'; this.style.boxShadow='0 2px 4px rgba(0,0,0,0.05)'; this.style.borderLeftColor='#0ea2e7'">
                        <div class="d-flex align-items-start">
                          @if($recentBlog->gambar)
                            <div class="flex-shrink-0 me-3">
                              <img src="{{ Storage::url($recentBlog->gambar) }}" alt="{{ $recentBlog->judul }}" style="width: 60px; height: 60px; object-fit: cover; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                            </div>
                          @else
                            <div class="flex-shrink-0 me-3">
                              <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #0ea2e7 0%, #0d6efd 100%); border-radius: 8px; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                                <i class="bi bi-journal-text text-white" style="font-size: 1.5rem;"></i>
                              </div>
                            </div>
                          @endif
                          <div class="flex-grow-1">
                            <h4 style="font-size: 0.95rem; font-weight: 600; color: #2c3e50; margin-bottom: 0.25rem; line-height: 1.4;">{{ Str::limit($recentBlog->judul, 60) }}</h4>
                            <p style="font-size: 0.75rem; color: #6c757d; margin-bottom: 0;">
                              <i class="bi bi-clock me-1"></i>{{ $recentBlog->created_at->format('d M Y') }}
                            </p>
                          </div>
                          <div class="flex-shrink-0">
                            <i class="bi bi-arrow-right" style="color: #0ea2e7;"></i>
                          </div>
                        </div>
                      </div>
                    </a>
                  @empty
                    <div class="text-center py-3">
                      <i class="bi bi-journal-x fs-4 text-muted d-block mb-2"></i>
                      <p class="text-muted mb-0" style="font-size: 0.875rem;">Belum ada blog lain</p>
                    </div>
                  @endforelse
                </div>
              </div>

              <div class="sidebar-item tags mb-4" data-aos="fade-up" data-aos-delay="200">
                <h3 class="sidebar-title mb-4" style="font-size: 1.25rem; font-weight: 600; color: #2c3e50; padding-bottom: 0.75rem; border-bottom: 2px solid #28a745;">
                  <i class="bi bi-folder me-2" style="color: #28a745;"></i>Kategori
                </h3>
                <div class="mt-3" style="display: flex; flex-wrap: wrap; gap: 0.5rem;">
                  @php
                    $categories = \App\Models\Blog::published()
                      ->whereNotNull('kategori')
                      ->distinct()
                      ->pluck('kategori')
                      ->sort();
                  @endphp
                  @forelse($categories as $category)
                    <a href="{{ route('blog.index', ['kategori' => $category]) }}"
                       style="display: inline-block; padding: 0.5rem 1rem; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); color: #2c3e50; border-radius: 20px; text-decoration: none; font-size: 0.875rem; transition: all 0.3s; border: 1px solid #dee2e6;"
                       onmouseover="this.style.background='linear-gradient(135deg, #28a745 0%, #218838 100%)'; this.style.color='#fff'; this.style.borderColor='#28a745'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 4px 8px rgba(40,167,69,0.3)'"
                       onmouseout="this.style.background='linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%)'; this.style.color='#2c3e50'; this.style.borderColor='#dee2e6'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                      <i class="bi bi-folder me-1"></i>{{ $category }}
                    </a>
                  @empty
                    <a href="{{ route('blog.index') }}"
                       style="display: inline-block; padding: 0.5rem 1rem; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); color: #2c3e50; border-radius: 20px; text-decoration: none; font-size: 0.875rem; transition: all 0.3s; border: 1px solid #dee2e6;"
                       onmouseover="this.style.background='linear-gradient(135deg, #28a745 0%, #218838 100%)'; this.style.color='#fff'; this.style.borderColor='#28a745'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 4px 8px rgba(40,167,69,0.3)'"
                       onmouseout="this.style.background='linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%)'; this.style.color='#2c3e50'; this.style.borderColor='#dee2e6'; this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                      Blog
                    </a>
                  @endforelse
                </div>
              </div>

              <!-- Informasi Terkait -->
              <div class="sidebar-item recent-posts mb-4" data-aos="fade-up" data-aos-delay="250">
                <h3 class="sidebar-title mb-4" style="font-size: 1.25rem; font-weight: 600; color: #2c3e50; padding-bottom: 0.75rem; border-bottom: 2px solid #ffc107;">
                  <i class="bi bi-info-circle me-2" style="color: #ffc107;"></i>Informasi Terkait
                </h3>
                <div class="mt-3">
                  <a href="{{ url('/') }}#team" style="text-decoration: none; display: block; margin-bottom: 1rem;">
                    <div class="info-card" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-left: 4px solid #0ea2e7; padding: 1rem; border-radius: 8px; transition: all 0.3s; box-shadow: 0 2px 4px rgba(0,0,0,0.05);" onmouseover="this.style.transform='translateX(5px)'; this.style.boxShadow='0 4px 8px rgba(0,0,0,0.1)'; this.style.borderLeftColor='#0d6efd'" onmouseout="this.style.transform='translateX(0)'; this.style.boxShadow='0 2px 4px rgba(0,0,0,0.05)'; this.style.borderLeftColor='#0ea2e7'">
                      <div class="d-flex align-items-start">
                        <div class="flex-shrink-0 me-3">
                          <div style="width: 40px; height: 40px; background: #0ea2e7; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-people-fill text-white"></i>
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <h4 style="font-size: 1rem; font-weight: 600; color: #2c3e50; margin-bottom: 0.25rem;">Kepengurusan RT</h4>
                          <p style="font-size: 0.875rem; color: #6c757d; margin-bottom: 0;">
                            <i class="bi bi-building me-1"></i>Struktur Organisasi
                          </p>
                        </div>
                        <div class="flex-shrink-0">
                          <i class="bi bi-arrow-right" style="color: #0ea2e7;"></i>
                        </div>
                      </div>
                    </div>
                  </a>

                  <a href="{{ route('blog.index') }}" style="text-decoration: none; display: block;">
                    <div class="info-card" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-left: 4px solid #28a745; padding: 1rem; border-radius: 8px; transition: all 0.3s; box-shadow: 0 2px 4px rgba(0,0,0,0.05);" onmouseover="this.style.transform='translateX(5px)'; this.style.boxShadow='0 4px 8px rgba(0,0,0,0.1)'; this.style.borderLeftColor='#218838'" onmouseout="this.style.transform='translateX(0)'; this.style.boxShadow='0 2px 4px rgba(0,0,0,0.05)'; this.style.borderLeftColor='#28a745'">
                      <div class="d-flex align-items-start">
                        <div class="flex-shrink-0 me-3">
                          <div style="width: 40px; height: 40px; background: #28a745; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                            <i class="bi bi-journal-text text-white"></i>
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <h4 style="font-size: 1rem; font-weight: 600; color: #2c3e50; margin-bottom: 0.25rem;">Semua Blog</h4>
                          <p style="font-size: 0.875rem; color: #6c757d; margin-bottom: 0;">
                            <i class="bi bi-list-ul me-1"></i>Lihat Semua Artikel
                          </p>
                        </div>
                        <div class="flex-shrink-0">
                          <i class="bi bi-arrow-right" style="color: #28a745;"></i>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    @push('styles')
    <style>
      /* Override hero section untuk halaman - setengah layar dengan background */
      #hero.hero {
        min-height: 50vh !important;
        padding: 60px 0 60px 0 !important;
        display: flex !important;
        align-items: center !important;
      }

      #hero.hero h1 {
        font-size: 36px !important;
        line-height: 44px !important;
        margin-bottom: 15px !important;
      }

      #hero.hero p.lead {
        font-size: 18px !important;
        margin-bottom: 0 !important;
      }

      /* Blog Content Styling - User Friendly Reading */
      .blog-content {
        line-height: 1.9;
        color: #2c3e50;
        font-size: 1.1rem;
        word-spacing: 0.05em;
        letter-spacing: 0.01em;
      }

      /* Paragraphs */
      .blog-content p {
        margin-bottom: 1.5rem;
        text-align: justify;
        line-height: 1.9;
        font-size: 1.1rem;
      }

      .blog-content p:last-child {
        margin-bottom: 0;
      }

      /* Headings */
      .blog-content h1,
      .blog-content h2,
      .blog-content h3,
      .blog-content h4,
      .blog-content h5,
      .blog-content h6 {
        color: #2c3e50;
        margin-top: 2.5rem;
        margin-bottom: 1.25rem;
        font-weight: 600;
        line-height: 1.4;
      }

      .blog-content h1 {
        font-size: 2.25rem;
        color: #0ea2e7;
        border-bottom: 3px solid #0ea2e7;
        padding-bottom: 0.75rem;
        margin-top: 2rem;
      }

      .blog-content h2 {
        font-size: 1.875rem;
        color: #0ea2e7;
        border-bottom: 2px solid #0ea2e7;
        padding-bottom: 0.5rem;
        margin-top: 2.25rem;
      }

      .blog-content h3 {
        font-size: 1.5rem;
        color: #28a745;
        margin-top: 2rem;
      }

      .blog-content h4 {
        font-size: 1.25rem;
        color: #6c757d;
        margin-top: 1.75rem;
      }

      .blog-content h5 {
        font-size: 1.1rem;
        margin-top: 1.5rem;
      }

      .blog-content h6 {
        font-size: 1rem;
        margin-top: 1.5rem;
      }

      /* Lists */
      .blog-content ul,
      .blog-content ol {
        margin-bottom: 1.5rem;
        margin-top: 1rem;
        padding-left: 2.5rem;
        line-height: 1.9;
      }

      .blog-content ul {
        list-style-type: disc;
      }

      .blog-content ol {
        list-style-type: decimal;
      }

      .blog-content li {
        margin-bottom: 0.75rem;
        line-height: 1.9;
        padding-left: 0.5rem;
      }

      .blog-content ul li {
        list-style-type: disc;
        margin-left: 0.5rem;
      }

      .blog-content ol li {
        list-style-type: decimal;
        margin-left: 0.5rem;
      }

      .blog-content li p {
        margin-bottom: 0.5rem;
      }

      .blog-content ul ul,
      .blog-content ol ol,
      .blog-content ul ol,
      .blog-content ol ul {
        margin-top: 0.75rem;
        margin-bottom: 0.75rem;
      }

      /* Images */
      .blog-content img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
        margin: 2rem auto;
        display: block;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      }

      .blog-content figure {
        margin: 2rem 0;
        text-align: center;
      }

      .blog-content figure img {
        margin: 0 auto;
      }

      .blog-content figcaption {
        margin-top: 0.75rem;
        font-size: 0.9rem;
        color: #6c757d;
        font-style: italic;
      }

      /* Blockquotes */
      .blog-content blockquote {
        border-left: 4px solid #0ea2e7;
        padding: 1.25rem 1.5rem;
        margin: 2rem 0;
        font-style: italic;
        color: #495057;
        background-color: #f8f9fa;
        border-radius: 0 8px 8px 0;
        line-height: 1.8;
      }

      .blog-content blockquote p {
        margin-bottom: 0.75rem;
      }

      .blog-content blockquote p:last-child {
        margin-bottom: 0;
      }

      /* Tables */
      .blog-content table {
        width: 100%;
        margin: 2rem 0;
        border-collapse: collapse;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        border-radius: 8px;
        overflow: hidden;
      }

      .blog-content table th,
      .blog-content table td {
        padding: 1rem;
        border: 1px solid #dee2e6;
        text-align: left;
      }

      .blog-content table th {
        background-color: #0ea2e7;
        color: #fff;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.9rem;
        letter-spacing: 0.5px;
      }

      .blog-content table tr:nth-child(even) {
        background-color: #f8f9fa;
      }

      .blog-content table tr:hover {
        background-color: #e9ecef;
      }

      /* Links */
      .blog-content a {
        color: #0ea2e7;
        text-decoration: none;
        transition: all 0.3s;
        border-bottom: 1px solid transparent;
      }

      .blog-content a:hover {
        color: #0d6efd;
        border-bottom-color: #0d6efd;
      }

      /* Strong and Emphasis */
      .blog-content strong,
      .blog-content b {
        font-weight: 600;
        color: #2c3e50;
      }

      .blog-content em,
      .blog-content i {
        font-style: italic;
      }

      /* Code */
      .blog-content code {
        background-color: #f8f9fa;
        padding: 0.2rem 0.4rem;
        border-radius: 4px;
        font-family: 'Courier New', monospace;
        font-size: 0.9em;
        color: #e83e8c;
      }

      .blog-content pre {
        background-color: #2c3e50;
        color: #f8f9fa;
        padding: 1.5rem;
        border-radius: 8px;
        overflow-x: auto;
        margin: 2rem 0;
        line-height: 1.6;
      }

      .blog-content pre code {
        background-color: transparent;
        padding: 0;
        color: inherit;
      }

      /* Horizontal Rule */
      .blog-content hr {
        border: none;
        border-top: 2px solid #dee2e6;
        margin: 2.5rem 0;
      }

      /* Div and Section spacing */
      .blog-content div {
        margin-bottom: 1rem;
      }

      /* Remove extra spacing from nested elements */
      .blog-content > *:first-child {
        margin-top: 0;
      }

      .blog-content > *:last-child {
        margin-bottom: 0;
      }

      .sidebar {
        position: sticky;
        top: 100px;
      }

      .sidebar-title {
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 1rem;
        color: #2c3e50;
      }

    </style>
    @endpush

@endsection


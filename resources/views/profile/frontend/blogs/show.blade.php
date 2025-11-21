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

    <!-- Blog Details Section -->
    <section id="blog-details" class="blog-details section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
          <div class="col-lg-8">
            <article class="article">
              <div class="post-img text-center mb-4">
                @if($blog->gambar)
                  <img src="{{ Storage::url($blog->gambar) }}" alt="{{ $blog->judul }}" class="img-fluid" style="border-radius: 10px; max-height: 500px; object-fit: cover; width: 100%;">
                @else
                  <div style="width: 100%; height: 400px; background: linear-gradient(135deg, #0ea2e7 0%, #0d6efd 100%); display: flex; align-items: center; justify-content: center; border-radius: 10px;">
                    <i class="bi bi-journal-text text-white" style="font-size: 5rem;"></i>
                  </div>
                @endif
              </div>

              <h2 class="title">{{ $blog->judul }}</h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center">
                    <i class="bi bi-person"></i>
                    <a href="#">{{ $blog->user->name }}</a>
                  </li>
                  <li class="d-flex align-items-center">
                    <i class="bi bi-clock"></i>
                    <time datetime="{{ $blog->created_at->format('Y-m-d') }}">{{ $blog->created_at->format('d M Y, H:i') }}</time>
                  </li>
                    @if($blog->kategori)
                      <li class="d-flex align-items-center">
                        <i class="bi bi-folder"></i>
                        <a href="{{ route('blog.index', ['kategori' => $blog->kategori]) }}">{{ $blog->kategori }}</a>
                      </li>
                    @endif
                  <li class="d-flex align-items-center">
                    <i class="bi bi-eye"></i>
                    <span>{{ $blog->views }} views</span>
                  </li>
                </ul>
              </div>

              <div class="content">
                {!! nl2br(e($blog->konten)) !!}
              </div>

              <div class="meta-bottom">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  @if($blog->kategori)
                    <li><a href="{{ route('blog.index', ['kategori' => $blog->kategori]) }}">{{ $blog->kategori }}</a></li>
                  @else
                    <li><a href="{{ route('blog.index') }}">Blog</a></li>
                  @endif
                </ul>
                <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li><a href="#">Bukit Damar</a></li>
                  <li><a href="#">Kegiatan</a></li>
                </ul>
              </div>

            </article>

            <div class="blog-author d-flex align-items-center">
              <img src="{{ asset('assets/img/team/team-1.jpg') }}" class="rounded-circle flex-shrink-0" alt="">
              <div>
                <h4>{{ $blog->user->name }}</h4>
                <p>
                  Penulis blog kegiatan Bukit Damar
                </p>
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

              <div class="sidebar-item tags" data-aos="fade-up" data-aos-delay="200">
                <h3 class="sidebar-title mb-3" style="font-size: 1.25rem; font-weight: 600; color: #2c3e50; padding-bottom: 0.75rem; border-bottom: 2px solid #28a745;">
                  <i class="bi bi-folder me-2" style="color: #28a745;"></i>Kategori
                </h3>
                <ul class="mt-3" style="list-style: none; padding: 0; display: flex; flex-wrap: wrap; gap: 0.5rem;">
                  @php
                    $categories = \App\Models\Blog::published()
                      ->whereNotNull('kategori')
                      ->distinct()
                      ->pluck('kategori')
                      ->sort();
                  @endphp
                  @forelse($categories as $category)
                    <li>
                      <a href="{{ route('blog.index', ['kategori' => $category]) }}"
                         style="display: inline-block; padding: 0.375rem 0.75rem; background-color: #f8f9fa; color: #2c3e50; border-radius: 20px; text-decoration: none; font-size: 0.875rem; transition: all 0.3s; border: 1px solid #dee2e6;"
                         onmouseover="this.style.backgroundColor='#28a745'; this.style.color='#fff'; this.style.borderColor='#28a745'; this.style.transform='translateY(-2px)'"
                         onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='#2c3e50'; this.style.borderColor='#dee2e6'; this.style.transform='translateY(0)'">
                        <i class="bi bi-folder me-1"></i>{{ $category }}
                      </a>
                    </li>
                  @empty
                    <li>
                      <a href="{{ route('blog.index') }}"
                         style="display: inline-block; padding: 0.375rem 0.75rem; background-color: #f8f9fa; color: #2c3e50; border-radius: 20px; text-decoration: none; font-size: 0.875rem; transition: all 0.3s; border: 1px solid #dee2e6;"
                         onmouseover="this.style.backgroundColor='#28a745'; this.style.color='#fff'; this.style.borderColor='#28a745'; this.style.transform='translateY(-2px)'"
                         onmouseout="this.style.backgroundColor='#f8f9fa'; this.style.color='#2c3e50'; this.style.borderColor='#dee2e6'; this.style.transform='translateY(0)'">
                        Blog
                      </a>
                    </li>
                  @endforelse
                </ul>
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

      .article {
        background: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 0 30px rgba(0, 0, 0, 0.1);
      }

      .article .title {
        font-size: 28px;
        font-weight: 600;
        margin-bottom: 20px;
        color: #2c3e50;
      }

      .meta-top {
        margin-bottom: 20px;
        padding-bottom: 20px;
        border-bottom: 1px solid #eee;
      }

      .meta-top ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        font-size: 14px;
        color: #666;
      }

      .meta-top ul li {
        display: flex;
        align-items: center;
        gap: 5px;
      }

      .meta-top ul li i {
        color: #0ea2e7;
      }

      .content {
        line-height: 1.8;
        color: #555;
        font-size: 16px;
        margin-bottom: 30px;
      }

      .content p {
        margin-bottom: 15px;
      }

      .meta-bottom {
        padding-top: 20px;
        border-top: 1px solid #eee;
        display: flex;
        align-items: center;
        gap: 15px;
        flex-wrap: wrap;
      }

      .meta-bottom i {
        color: #0ea2e7;
      }

      .meta-bottom ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
      }

      .meta-bottom ul li a {
        color: #666;
        text-decoration: none;
        padding: 5px 10px;
        background: #f8f9fa;
        border-radius: 5px;
        transition: 0.3s;
      }

      .meta-bottom ul li a:hover {
        background: #0ea2e7;
        color: #fff;
      }

      .blog-author {
        background: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
        margin-top: 30px;
      }

      .blog-author img {
        width: 80px;
        height: 80px;
        margin-right: 20px;
      }

      .sidebar {
        background: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 0 30px rgba(0, 0, 0, 0.1);
      }

      .sidebar-title {
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 20px;
        color: #2c3e50;
      }

    </style>
    @endpush

@endsection


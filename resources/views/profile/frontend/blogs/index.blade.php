@extends('layouts.frontend')

@php
use Illuminate\Support\Facades\Storage;
@endphp

@section('title', 'Blog - Website Bukit Damar')

@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1>Blog & Kegiatan</h1>
            <p class="lead">Informasi Terbaru tentang Kegiatan di Bukit Damar</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Blog Section -->
    <section id="blog" class="blog section">
      <div class="container" data-aos="fade-up">

        <!-- Category Filter -->
        @if($categories->count() > 0)
          <div class="row mb-4" data-aos="fade-up" data-aos-delay="50">
            <div class="col-12">
              <div class="d-flex flex-wrap align-items-center gap-2 justify-content-center">
                <a href="{{ route('blog.index') }}"
                   class="btn {{ !$selectedCategory ? 'btn-primary' : 'btn-outline-primary' }} btn-sm"
                   style="border-radius: 20px;">
                  <i class="bi bi-grid me-1"></i>Semua
                </a>
                @foreach($categories as $category)
                  <a href="{{ route('blog.index', ['kategori' => $category]) }}"
                     class="btn {{ $selectedCategory == $category ? 'btn-primary' : 'btn-outline-primary' }} btn-sm"
                     style="border-radius: 20px;">
                    <i class="bi bi-folder me-1"></i>{{ $category }}
                  </a>
                @endforeach
              </div>
            </div>
          </div>
        @endif

        @if($selectedCategory)
          <div class="row mb-3" data-aos="fade-up" data-aos-delay="75">
            <div class="col-12">
              <div class="alert alert-info d-flex align-items-center justify-content-between" role="alert">
                <div>
                  <i class="bi bi-info-circle me-2"></i>
                  Menampilkan blog dengan kategori: <strong>{{ $selectedCategory }}</strong>
                  <span class="badge bg-primary ms-2">{{ $blogs->total() }} artikel</span>
                </div>
                <a href="{{ route('blog.index') }}" class="btn btn-sm btn-outline-light">
                  <i class="bi bi-x-circle me-1"></i>Hapus Filter
                </a>
              </div>
            </div>
          </div>
        @endif

        <div class="row gy-4">
          @forelse($blogs as $blog)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
              <article class="entry">
                <div class="entry-img">
                  @if($blog->gambar)
                    <img src="{{ Storage::url($blog->gambar) }}" alt="{{ $blog->judul }}" class="img-fluid">
                  @else
                    <div style="width: 100%; height: 250px; background: linear-gradient(135deg, #0ea2e7 0%, #0d6efd 100%); display: flex; align-items: center; justify-content: center; border-radius: 5px;">
                      <i class="bi bi-journal-text text-white" style="font-size: 4rem;"></i>
                    </div>
                  @endif
                </div>

                <h2 class="entry-title">
                  <a href="{{ route('blog.show', $blog->slug) }}">{{ $blog->judul }}</a>
                </h2>

                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center">
                      <i class="bi bi-person"></i>
                      <a href="#">{{ $blog->user->name }}</a>
                    </li>
                    <li class="d-flex align-items-center">
                      <i class="bi bi-clock"></i>
                      <time datetime="{{ $blog->created_at->format('Y-m-d') }}">{{ $blog->created_at->format('d M Y') }}</time>
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

                <div class="entry-content">
                  <p>{{ $blog->excerpt }}</p>
                  <div class="read-more">
                    <a href="{{ route('blog.show', $blog->slug) }}">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </article>
            </div>
          @empty
            <div class="col-12">
              <div class="text-center py-5">
                <i class="bi bi-journal-x fs-1 text-muted d-block mb-3"></i>
                <h4 class="text-muted">Belum ada blog yang tersedia</h4>
                <p class="text-muted">Blog akan segera hadir. Silakan kembali lagi nanti.</p>
              </div>
            </div>
          @endforelse
        </div>

        <!-- Pagination -->
        @if($blogs->hasPages())
          <div class="row mt-4">
            <div class="col-12">
              <div class="d-flex justify-content-center">
                {{ $blogs->appends(request()->query())->links() }}
              </div>
            </div>
          </div>
        @endif

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

      .entry {
        box-shadow: 0px 0 30px rgba(0, 0, 0, 0.1);
        padding: 30px;
        height: 100%;
        border-radius: 5px;
        transition: 0.3s;
      }

      .entry:hover {
        box-shadow: 0px 0 30px rgba(0, 0, 0, 0.15);
        transform: translateY(-5px);
      }

      .entry-img {
        overflow: hidden;
        margin-bottom: 20px;
        border-radius: 5px;
      }

      .entry-img img {
        transition: 0.3s;
        width: 100%;
        height: 250px;
        object-fit: cover;
      }

      .entry:hover .entry-img img {
        transform: scale(1.1);
      }

      .entry-title {
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 15px;
      }

      .entry-title a {
        color: #2c3e50;
        text-decoration: none;
        transition: 0.3s;
      }

      .entry-title a:hover {
        color: #0ea2e7;
      }

      .entry-meta {
        margin-bottom: 15px;
      }

      .entry-meta ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        font-size: 14px;
        color: #666;
      }

      .entry-meta ul li {
        display: flex;
        align-items: center;
        gap: 5px;
      }

      .entry-meta ul li i {
        color: #0ea2e7;
      }

      .entry-content {
        margin-top: 15px;
      }

      .entry-content p {
        color: #666;
        line-height: 1.8;
        margin-bottom: 15px;
      }

      .read-more a {
        color: #0ea2e7;
        text-decoration: none;
        font-weight: 500;
        transition: 0.3s;
      }

      .read-more a:hover {
        color: #0d6efd;
      }

      /* Category Filter Styles */
      .btn-outline-primary {
        transition: all 0.3s;
      }

      .btn-outline-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }

      .btn-primary {
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      }
    </style>
    @endpush

@endsection


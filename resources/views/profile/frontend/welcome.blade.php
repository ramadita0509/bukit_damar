@extends('layouts.frontend')

@php
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
@endphp

@section('title', 'Beranda - Website Bukit Damar')

@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">Website Resmi Cluster Bukit Damar Citra Indah City</h1>
            <p data-aos="fade-up" data-aos-delay="100">Temukan informasi terbaru tentang Cluster Bukit Damar Citra Indah City Desa Singajaya Kecamatan Jonggol Kabupaten Bogor</p>
            <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
              <a href="{{ route('tentang') }}" class="btn-get-started">Tentang Bukit Damar <i class="bi bi-arrow-right"></i></a>
              <a href="https://www.youtube.com/@clusterbukitdamar569" class="glightbox btn-watch-video d-flex align-items-center justify-content-center ms-0 ms-md-4 mt-4 mt-md-0"><i class="bi bi-play-circle"></i><span>Video Bukit Damar</span></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="{{ asset('assets/img/hero-img.png') }}" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Blog Section -->
    <section id="blog" class="blog section">
        <div class="container section-title" data-aos="fade-up">
          <h2>Blog & Kegiatan</h2>
          <p>Informasi Terbaru tentang Kegiatan di Bukit Damar</p>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
          @php
            $latestBlogs = \App\Models\Blog::published()
              ->orderBy('created_at', 'desc')
              ->limit(6)
              ->get();
          @endphp

          <div class="row gy-4">
            @forelse($latestBlogs as $blog)
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
                        <i class="bi bi-clock"></i>
                        <time datetime="{{ $blog->created_at->format('Y-m-d') }}">{{ $blog->created_at->format('d M Y') }}</time>
                      </li>
                    @if($blog->kategori)
                      <li class="d-flex align-items-center">
                        <i class="bi bi-folder"></i>
                        <a href="{{ route('blog.index', ['kategori' => $blog->kategori]) }}">{{ $blog->kategori }}</a>
                      </li>
                    @endif
                    </ul>
                  </div>

                  <div class="entry-content">
                    <p>{{ Str::limit($blog->excerpt, 100) }}</p>
                    <div class="read-more">
                      <a href="{{ route('blog.show', $blog->slug) }}">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </article>
              </div>
            @empty
              <div class="col-12 text-center py-5">
                <i class="bi bi-journal-x fs-1 text-muted d-block mb-3"></i>
                <h4 class="text-muted">Belum ada blog yang tersedia</h4>
                <p class="text-muted">Blog akan segera hadir. Silakan kembali lagi nanti.</p>
              </div>
            @endforelse
          </div>

          @if($latestBlogs->count() > 0)
            <div class="row mt-4">
              <div class="col-12 text-center">
                <a href="{{ route('blog.index') }}" class="btn-get-started">
                  Lihat Semua Blog <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          @endif
        </div>
    </section>

    <!-- Visi Misi Section -->
    <section id="visi-misi" class="visi-misi section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Visi & Misi</h2>
        <p>Visi dan Misi RT 002 RW 017 Bukit Damar<br></p>
      </div><!-- End Section Title -->

      <div class="container">

        <!-- Visi Section -->
        <div class="row mb-5" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">
            <div class="visi-misi-box p-4 mb-4" style="background: #f8f9fa; border-radius: 10px; border-left: 4px solid #0ea2e7;">
              <h3 class="mb-3" style="color: #0ea2e7;">
                <i class="bi bi-bullseye me-2"></i>Visi
              </h3>
              <div class="visi-content">
                <p class="lead mb-3" style="font-weight: 600; color: #2c3e50;">
                  Terwujudnya lingkungan RT yang rukun, aman, tertib, dan sejahtera.
                </p>
                <p class="mb-0" style="color: #555;">
                  Mewujudkan lingkungan RT yang harmonis dan nyaman bagi seluruh warga.
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Misi Section -->
        <div class="row" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-12">
            <h3 class="mb-4" style="color: #0ea2e7;">
              <i class="bi bi-list-check me-2"></i>Misi
            </h3>
          </div>
        </div>

        <div class="row gy-4">

          <div class="col-xl-6" data-aos="zoom-out" data-aos-delay="100">
            <img src="{{ asset('assets/img/features.png') }}" class="img-fluid" alt="Visi Misi RT">
          </div>

          <div class="col-xl-6 d-flex">
            <div class="row align-self-center gy-4">

              <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-box d-flex align-items-start">
                  <i class="bi bi-people-fill me-3" style="color: #0ea2e7; font-size: 1.5rem; margin-top: 0.25rem;"></i>
                  <div>
                    <h4 style="color: #2c3e50; margin-bottom: 0.5rem;">Menjaga Kerukunan</h4>
                    <p style="color: #666; margin-bottom: 0;">Menjalin kerukunan antarwarga, umat beragama, dan bernegara melalui interaksi sosial dan kegiatan bersama.</p>
                  </div>
                </div>
              </div><!-- End Misi Item -->

              <div class="col-md-12" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-box d-flex align-items-start">
                  <i class="bi bi-shield-check me-3" style="color: #0ea2e7; font-size: 1.5rem; margin-top: 0.25rem;"></i>
                  <div>
                    <h4 style="color: #2c3e50; margin-bottom: 0.5rem;">Keamanan & Kebersihan</h4>
                    <p style="color: #666; margin-bottom: 0;">Meningkatkan kerja sama dalam menjaga dan memelihara kebersihan, keindahan, serta keamanan lingkungan.</p>
                  </div>
                </div>
              </div><!-- End Misi Item -->

              <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                <div class="feature-box d-flex align-items-start">
                  <i class="bi bi-person-check-fill me-3" style="color: #0ea2e7; font-size: 1.5rem; margin-top: 0.25rem;"></i>
                  <div>
                    <h4 style="color: #2c3e50; margin-bottom: 0.5rem;">Pelayanan Publik</h4>
                    <p style="color: #666; margin-bottom: 0;">Mewujudkan pelayanan kepada masyarakat yang jujur, adil, transparan, dan responsif.</p>
                  </div>
                </div>
              </div><!-- End Misi Item -->

              <div class="col-md-12" data-aos="fade-up" data-aos-delay="500">
                <div class="feature-box d-flex align-items-start">
                  <i class="bi bi-hand-thumbs-up-fill me-3" style="color: #0ea2e7; font-size: 1.5rem; margin-top: 0.25rem;"></i>
                  <div>
                    <h4 style="color: #2c3e50; margin-bottom: 0.5rem;">Pemberdayaan Masyarakat</h4>
                    <p style="color: #666; margin-bottom: 0;">Mendorong partisipasi aktif warga dalam kegiatan kemasyarakatan dan program pembangunan di wilayah RT.</p>
                  </div>
                </div>
              </div><!-- End Misi Item -->

              <div class="col-md-12" data-aos="fade-up" data-aos-delay="600">
                <div class="feature-box d-flex align-items-start">
                  <i class="bi bi-building me-3" style="color: #0ea2e7; font-size: 1.5rem; margin-top: 0.25rem;"></i>
                  <div>
                    <h4 style="color: #2c3e50; margin-bottom: 0.5rem;">Kemitraan dengan Pemerintah</h4>
                    <p style="color: #666; margin-bottom: 0;">Membantu ketua RW dan pemerintah desa/kelurahan dalam mengumpulkan data, menyampaikan informasi, dan melaksanakan program.</p>
                  </div>
                </div>
              </div><!-- End Misi Item -->

              <div class="col-md-12" data-aos="fade-up" data-aos-delay="700">
                <div class="feature-box d-flex align-items-start">
                  <i class="bi bi-graph-up-arrow me-3" style="color: #0ea2e7; font-size: 1.5rem; margin-top: 0.25rem;"></i>
                  <div>
                    <h4 style="color: #2c3e50; margin-bottom: 0.5rem;">Peningkatan Kesejahteraan</h4>
                    <p style="color: #666; margin-bottom: 0;">Berupaya meningkatkan kesejahteraan warga melalui program-program yang relevan sesuai potensi lingkungan.</p>
                  </div>
                </div>
              </div><!-- End Misi Item -->

              <div class="col-md-12" data-aos="fade-up" data-aos-delay="800">
                <div class="feature-box d-flex align-items-start">
                  <i class="bi bi-heart-fill me-3" style="color: #0ea2e7; font-size: 1.5rem; margin-top: 0.25rem;"></i>
                  <div>
                    <h4 style="color: #2c3e50; margin-bottom: 0.5rem;">Pelestarian Budaya</h4>
                    <p style="color: #666; margin-bottom: 0;">Menjaga dan melestarikan nilai-nilai kekeluargaan dan gotong royong.</p>
                  </div>
                </div>
              </div><!-- End Misi Item -->

            </div>
          </div>

        </div>

      </div>

    </section><!-- /Visi Misi Section -->

    <!-- Berita Section -->
    <section id="berita" class="berita section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Fasilitas</h2>
        <p>Fasilitas yang ada di Bukit Damar<br></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="berita-item item-orange position-relative">
                <i class="bi bi-broadcast icon"></i>
                <h3>Masjid Al Hidayah</h3>
                <p>Masjid Al Hidayah adalah masjid yang ada di Bukit Damar. Masjid ini adalah masjid yang ada di Bukit Damar.</p>
                <a href="{{ route('fasilitas.masjid') }}" class="read-more stretched-link"><span>Baca Selengkapnya</span> <i class="bi bi-arrow-right"></i></a>
                </div>
            </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="berita-item item-cyan position-relative">
              <i class="bi bi-trophy icon"></i>
              <h3>Damar Sport Center</h3>
              <p>Program futsal gratis untuk anak-anak setiap hari Minggu pagi jam 06:30-08:30 WIB. Mari dukung anak-anak kita untuk aktif berolahraga!</p>
              <a href="{{ route('fasilitas.dsc') }}" class="read-more stretched-link"><span>Baca Selengkapnya</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="berita-item item-teal position-relative">
              <i class="bi bi-easel icon"></i>
              <h3>Damar Park</h3>
              <p>Damar Park adalah taman yang ada di Bukit Damar. Taman ini adalah taman yang ada di Bukit Damar.</p>
              <a href="{{ route('fasilitas.damar-park') }}" class="read-more stretched-link"><span>Baca Selengkapnya</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="berita-item item-red position-relative">
              <i class="bi bi-bounding-box-circles icon"></i>
              <h3>Balai Warga</h3>
              <p>Balai Warga adalah tempat yang ada di Bukit Damar. Balai Warga ini adalah balai warga yang ada di Bukit Damar.</p>
              <a href="{{ route('fasilitas.balai-warga') }}" class="read-more stretched-link"><span>Baca Selengkapnya</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="berita-item item-pink position-relative">
              <i class="bi bi-chat-square-text icon"></i>
              <h3>Meeting Point</h3>
              <p>Meeting Point adalah meeting point yang ada di Bukit Damar. Meeting Point ini adalah meeting point yang ada di Bukit Damar.</p>
              <a href="{{ route('fasilitas.meeting-point') }}" class="read-more stretched-link"><span>Baca Selengkapnya</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="berita-item item-indigo position-relative">
              <i class="bi bi-calendar4-week icon"></i>
              <h3>Keamanan</h3>
              <p>Keamanan adalah keamanan yang ada di Bukit Damar. Keamanan ini adalah keamanan yang ada di Bukit Damar.</p>
              <a href="{{ route('fasilitas.keamanan') }}" class="read-more stretched-link"><span>Baca Selengkapnya</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Berita Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kepengurusan RT</h2>
        <p>Kepengurusan RT 002 RW 017 Bukit Damar</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 col-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('assets/img/team/team-1.jpg') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Fernando Sihombing</h4>
                <span>Ketua RT</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 col-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('assets/img/team/team-2.jpg') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Beben</h4>
                <span>Sekertaris RT</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 col-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('assets/img/team/team-3.jpg') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Sugeng</h4>
                <span>Bendahara RT</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 col-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('assets/img/team/team-4.jpg') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Nelson</h4>
                <span>Humas RT</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-12 text-center mt-5" data-aos="fade-up" data-aos-delay="500">
            <a href="{{ route('kepengurusan') }}" class="btn-get-started" style="display: inline-flex; align-items: center; gap: 0.5rem;">
              Selengkapnya <i class="bi bi-arrow-right"></i>
            </a>
          </div>

        </div>

      </div>

    </section><!-- /Team Section -->



    @push('styles')
    <style>
      /* Membatasi ukuran gambar di mobile agar tidak full screen dan 4 card per row */
      @media (max-width: 768px) {
        .team .row.gy-4 {
          --bs-gutter-y: 1rem;
          --bs-gutter-x: 0.5rem;
        }

        .team .team-member {
          margin-bottom: 15px;
        }

        .team .team-member .member-img {
          max-height: 150px;
          overflow: hidden;
        }

        .team .team-member .member-img img {
          width: 100%;
          height: 100%;
          object-fit: cover;
          object-position: center;
          max-height: 150px;
        }

        .team .team-member .member-info {
          padding: 8px 10px 15px 10px;
        }

        .team .team-member .member-info h4 {
          font-size: 14px;
          margin-bottom: 3px;
        }

        .team .team-member .member-info span {
          font-size: 11px;
        }

        .team .team-member .member-info p {
          font-size: 10px;
          padding-top: 8px;
          line-height: 16px;
          display: -webkit-box;
          -webkit-line-clamp: 3;
          -webkit-box-orient: vertical;
          overflow: hidden;
        }
      }

      @media (max-width: 576px) {
        .team .team-member .member-img {
          max-height: 120px;
        }

        .team .team-member .member-img img {
          max-height: 120px;
        }

        .team .team-member .member-info h4 {
          font-size: 12px;
        }

        .team .team-member .member-info span {
          font-size: 10px;
        }

        .team .team-member .member-info p {
          font-size: 9px;
          line-height: 14px;
          -webkit-line-clamp: 2;
        }
      }

      /* Blog Entry Styles */
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
    </style>
    @endpush

  </main>

  @endsection

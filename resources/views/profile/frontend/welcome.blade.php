@extends('layouts.frontend')

@section('title', 'Informasi Pembuatan Surat Kematian - Website Bukit Damar')

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
                <a href="{{ route('blog.masjid') }}" class="read-more stretched-link"><span>Baca Selengkapnya</span> <i class="bi bi-arrow-right"></i></a>
                </div>
            </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="berita-item item-cyan position-relative">
              <i class="bi bi-trophy icon"></i>
              <h3>Damar Sport Center</h3>
              <p>Program futsal gratis untuk anak-anak setiap hari Minggu pagi jam 06:30-08:30 WIB. Mari dukung anak-anak kita untuk aktif berolahraga!</p>
              <a href="{{ route('blog.dsc') }}" class="read-more stretched-link"><span>Baca Selengkapnya</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="berita-item item-teal position-relative">
              <i class="bi bi-easel icon"></i>
              <h3>Damar Park</h3>
              <p>Damar Park adalah taman yang ada di Bukit Damar. Taman ini adalah taman yang ada di Bukit Damar.</p>
              <a href="{{ route('blog.damar-park') }}" class="read-more stretched-link"><span>Baca Selengkapnya</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="berita-item item-red position-relative">
              <i class="bi bi-bounding-box-circles icon"></i>
              <h3>Balai Warga</h3>
              <p>Balai Warga adalah tempat yang ada di Bukit Damar. Balai Warga ini adalah balai warga yang ada di Bukit Damar.</p>
              <a href="{{ route('blog.balai-warga') }}" class="read-more stretched-link"><span>Baca Selengkapnya</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="berita-item item-pink position-relative">
              <i class="bi bi-chat-square-text icon"></i>
              <h3>Meeting Point</h3>
              <p>Meeting Point adalah meeting point yang ada di Bukit Damar. Meeting Point ini adalah meeting point yang ada di Bukit Damar.</p>
              <a href="{{ route('blog.meeting-point') }}" class="read-more stretched-link"><span>Baca Selengkapnya</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="berita-item item-indigo position-relative">
              <i class="bi bi-calendar4-week icon"></i>
              <h3>Keamanan</h3>
              <p>Keamanan adalah keamanan yang ada di Bukit Damar. Keamanan ini adalah keamanan yang ada di Bukit Damar.</p>
              <a href="{{ route('blog.keamanan') }}" class="read-more stretched-link"><span>Baca Selengkapnya</span> <i class="bi bi-arrow-right"></i></a>
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

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('assets/img/team/team-1.jpg') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Fernando Sihombing</h4>
                <span>Ketua RT</span>
                <p>Saya adalah Ketua RT 002 RW 017 Desa Singajaya, Kecamatan Jonggol, Kabupaten Bogor. Saya bertugas untuk mengelola data penduduk, pengaduan masyarakat, dan melaksanakan kegiatan-kegiatan masyarakat.</p>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('assets/img/team/team-2.jpg') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Beben</h4>
                <span>Sekertaris RT</span>
                <p>Saya adalah Sekertaris RT 002 RW 017 Desa Singajaya, Kecamatan Jonggol, Kabupaten Bogor. Saya bertugas untuk mengelola dokumen RT, mengelola data penduduk, dan melaksanakan kegiatan-kegiatan masyarakat.</p>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('assets/img/team/team-3.jpg') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Sugeng</h4>
                <span>Bendahara RT</span>
                <p>Saya adalah Bendahara RT 002 RW 017 Desa Singajaya, Kecamatan Jonggol, Kabupaten Bogor. Saya bertugas untuk mengelola keuangan RT, mengelola data keuangan, dan melaksanakan kegiatan-kegiatan masyarakat.</p>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('assets/img/team/team-4.jpg') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Nelson</h4>
                <span>Humas RT</span>
                <p>Saya adalah Humas RT 002 RW 017 Desa Singajaya, Kecamatan Jonggol, Kabupaten Bogor. Saya bertugas untuk mengelola media sosial RT, mengelola data penduduk, dan melaksanakan kegiatan-kegiatan masyarakat.</p>
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


  </main>

  @endsection

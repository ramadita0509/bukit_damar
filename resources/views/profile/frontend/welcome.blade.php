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
              <a href="#about" class="btn-get-started">Mulai Sekarang <i class="bi bi-arrow-right"></i></a>
              <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center justify-content-center ms-0 ms-md-4 mt-4 mt-md-0"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="{{ asset('assets/img/hero-img.png') }}" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Visi Misi Section -->
    <section id="features" class="features section">

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

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Check Our Services<br></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item item-cyan position-relative">
              <i class="bi bi-activity icon"></i>
              <h3>Nesciunt Mete</h3>
              <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
              <a href="#" class="read-more stretched-link"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item item-orange position-relative">
              <i class="bi bi-broadcast icon"></i>
              <h3>Eosle Commodi</h3>
              <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
              <a href="#" class="read-more stretched-link"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
              <i class="bi bi-easel icon"></i>
              <h3>Ledo Markt</h3>
              <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
              <a href="#" class="read-more stretched-link"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item item-red position-relative">
              <i class="bi bi-bounding-box-circles icon"></i>
              <h3>Asperiores Commodi</h3>
              <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
              <a href="#" class="read-more stretched-link"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item item-indigo position-relative">
              <i class="bi bi-calendar4-week icon"></i>
              <h3>Velit Doloremque.</h3>
              <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
              <a href="#" class="read-more stretched-link"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item item-pink position-relative">
              <i class="bi bi-chat-square-text icon"></i>
              <h3>Dolori Architecto</h3>
              <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
              <a href="#" class="read-more stretched-link"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->


    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Check our latest work</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">Product</li>
            <li data-filter=".filter-branding">Branding</li>
            <li data-filter=".filter-books">Books</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="{{ asset('assets/img/portfolio/app-1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('assets/img/portfolio/app-1.jpg') }}" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="{{ asset('assets/img/portfolio/product-1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('assets/img/portfolio/product-1.jpg') }}" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="{{ asset('assets/img/portfolio/branding-1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Branding 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('assets/img/portfolio/branding-1.jpg') }}" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="{{ asset('assets/img/portfolio/books-1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Books 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('assets/img/portfolio/books-1.jpg') }}" title="Branding 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="{{ asset('assets/img/portfolio/app-2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('assets/img/portfolio/app-2.jpg') }}" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="{{ asset('assets/img/portfolio/product-2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('assets/img/portfolio/product-2.jpg') }}" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="{{ asset('assets/img/portfolio/branding-2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Branding 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('assets/img/portfolio/branding-2.jpg') }}" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="{{ asset('assets/img/portfolio/books-2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Books 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('assets/img/portfolio/books-2.jpg') }}" title="Branding 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="{{ asset('assets/img/portfolio/app-3.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('assets/img/portfolio/app-3.jpg') }}" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="{{ asset('assets/img/portfolio/product-3.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('assets/img/portfolio/product-3.jpg') }}" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="{{ asset('assets/img/portfolio/branding-3.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Branding 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('assets/img/portfolio/branding-3.jpg') }}" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="{{ asset('assets/img/portfolio/books-3.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Books 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('assets/img/portfolio/books-3.jpg') }}" title="Branding 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->


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
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
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
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
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
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
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
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Nelson</h4>
                <span>Humas RT</span>
                <p>Saya adalah Humas RT 002 RW 017 Desa Singajaya, Kecamatan Jonggol, Kabupaten Bogor. Saya bertugas untuk mengelola media sosial RT, mengelola data penduduk, dan melaksanakan kegiatan-kegiatan masyarakat.</p>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('assets/img/team/team-4.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Danu</h4>
                <span>Keamanan RT</span>
                <p>Saya adalah Keamanan RT 002 RW 017 Desa Singajaya, Kecamatan Jonggol, Kabupaten Bogor. Saya bertugas untuk mengelola keamanan RT, mengelola data keamanan, dan melaksanakan kegiatan-kegiatan masyarakat.</p>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('assets/img/team/team-4.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Alief</h4>
                <span>Sarana dan Prasarana RT</span>
                <p>Saya adalah Sarana dan Prasarana RT 002 RW 017 Desa Singajaya, Kecamatan Jonggol, Kabupaten Bogor. Saya bertugas untuk mengelola sarana dan prasarana RT, mengelola data sarana dan prasarana, dan melaksanakan kegiatan-kegiatan masyarakat.</p>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('assets/img/team/team-4.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Andi M Sadli</h4>
                <span>Kerohanian RT</span>
                <p>Saya adalah Kerohanian RT 002 RW 017 Desa Singajaya, Kecamatan Jonggol, Kabupaten Bogor. Saya bertugas untuk mengelola kerohanian RT, mengelola data kerohanian, dan melaksanakan kegiatan-kegiatan masyarakat.</p>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('assets/img/team/team-4.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Suparmo</h4>
                <span>Damar Sport Center</span>
                <p>Saya adalah Damar Sport Center RT 002 RW 017 Desa Singajaya, Kecamatan Jonggol, Kabupaten Bogor. Saya bertugas untuk mengelola Damar Sport Center, mengelola data Damar Sport Center, dan melaksanakan kegiatan-kegiatan masyarakat.</p>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('assets/img/team/team-4.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Bayu</h4>
                <span>Ekonomi Kreatif RT</span>
                <p>Saya adalah Ekonomi Kreatif RT 002 RW 017 Desa Singajaya, Kecamatan Jonggol, Kabupaten Bogor. Saya bertugas untuk mengelola ekonomi kreatif RT, mengelola data ekonomi kreatif, dan melaksanakan kegiatan-kegiatan masyarakat.</p>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('assets/img/team/team-4.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sandi</h4>
                <span>Lingkungan RT</span>
                <p>Saya adalah Lingkungan RT 002 RW 017 Desa Singajaya, Kecamatan Jonggol, Kabupaten Bogor. Saya bertugas untuk mengelola lingkungan RT, mengelola data lingkungan, dan melaksanakan kegiatan-kegiatan masyarakat.</p>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('assets/img/team/team-4.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Rama</h4>
                <span>Komdigi RT</span>
                <p>Saya adalah Komdigi RT 002 RW 017 Desa Singajaya, Kecamatan Jonggol, Kabupaten Bogor. Saya bertugas untuk mengelola komdigi RT, mengelola data komdigi, dan melaksanakan kegiatan-kegiatan masyarakat.</p>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="{{ asset('assets/img/team/team-4.jpg') }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Kevin</h4>
                <span>Kepemudaan RT</span>
                <p>Saya adalah Kepemudaan RT 002 RW 017 Desa Singajaya, Kecamatan Jonggol, Kabupaten Bogor. Saya bertugas untuk mengelola kepemudaan RT, mengelola data kepemudaan, dan melaksanakan kegiatan-kegiatan masyarakat.</p>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->


  </main>

  @endsection

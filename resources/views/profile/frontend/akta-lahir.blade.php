<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Website Bukit Damar</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('assets/img/logo.png') }}" alt="">
        <h1 class="sitename">Bukit Damar</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ url('/') }}">Beranda<br></a></li>
          <li><a href="#about">Visi & Misi</a></li>
          <li><a href="#services">Kepengurusan</a></li>
          <li><a href="#portfolio">Pengumuman</a></li>
          <li class="dropdown"><a href="#"><span>Pusat Informasi</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Persyaratan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="{{ url('/ktp') }}" >Pembuatan KTP atau KK </a></li>
                  <li><a href="{{ url('/domisili') }}">Pembuatan Domisili</a></li>
                  <li><a href="{{ url('/akta-lahir') }}">Pembuatan Akta Lahir</a></li>
                  <li><a href="{{ url('/surat-kematian') }}">Pembuatan Surat Kematian</a></li>
                </ul>
              </li>
              <li><a href="{{ url('/izin-usaha') }}">Informasi Izin Usaha</a></li>
              <li><a href="{{ url('/skck') }}" class="active">Informasi SKCK</a></li>
              <li><a href="{{ url('/biaya-nikah') }}">Informasi Biaya Nikah</a></li>
            </ul>
          </li>
          <li><a href="{{ url('/kontak') }}">Kontak</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="d-flex align-items-center gap-2 ms-2">
        @if (Route::has('login'))
          @auth
            <a class="btn-getstarted flex-md-shrink-0" href="{{ url('/dashboard') }}">Dashboard</a>
          @else
            <a class="btn-getstarted flex-md-shrink-0" href="{{ route('login') }}">Login</a>
            @if (Route::has('register'))
              <a class="btn-getstarted flex-md-shrink-0" href="{{ route('register') }}" style="background: transparent; border: 2px solid var(--color-primary, #0d42ff); color: var(--color-primary, #0d42ff); margin-left: 0.5rem;">Register</a>
            @endif
          @endauth
        @else
          <a class="btn-getstarted flex-md-shrink-0" href="{{ url('/') }}#about">Get Started</a>
        @endif
      </div>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section" style="padding-top: 120px;">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1>Informasi Pembuatan Akta Kelahiran</h1>
            <p class="lead">Pembuatan Akta Kelahiran</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Content Section -->
    <section class="section">
      <div class="container" data-aos="fade-up">

        <!-- Persyaratan -->
        <div class="row mb-5">
          <div class="col-lg-12">
            <div class="card shadow-sm border-0 bg-light">
              <div class="card-body p-4">
                <h3 class="mb-4"><i class="bi bi-calendar-check me-2"></i>Persyaratan</h3>
                <p class="mb-0">
                <strong>Persyaratan Pembuatan Akta Kelahiran</strong> adalah sebagai berikut : <br>
                <ul class="mb-0">
                  <li>Surat keterangan lahir dari dokter/bidan/penolong kelahiran</li>
                  <li>Fotokopi Akta Nikah/Kutipan Akta Perkawinan orangtua (dilegalisir)</li>
                  <li>Fotokopi KK dan KTP-el orangtua</li>
                  <li>Fotokopi KTP-el 2 (dua) orang saksi</li>
              </div>
            </div>
          </div>
        </div>

               <!-- Catatan Penting -->
               <div class="row mb-5">
                <div class="col-lg-12">
                  <div class="card shadow-sm border-warning border-2">
                    <div class="card-header bg-warning text-dark">
                      <h4 class="mb-0"><i class="bi bi-exclamation-triangle me-2"></i>Catatan Penting</h4>
                    </div>
                    <div class="card-body p-4">
                      <ul class="mb-0">
                        <li class="mb-2">
                          <strong>Pencatatan kelahiran tidak dipungut biaya </strong>
                        <li class="mb-2">
                            Surat kuasa di atas materai cukup bagi yang dikuasakan, dilampiri fotokopi KTP-el penerima kuasa
                        <li class="mb-2">
                                <strong>Untuk orang asing, ditambah : </strong>
                          <ul class="mt-2">
                            <li>Fotokopi Surat Keterangan Tempat Tinggal (SKTT) orangtua bagi pemegang Izin Tinggal Terbatas (ITAS)</li>
                            <li>Fotokopi paspor (dilegalisir).</li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

      </div>
    </section>

  </main>

  <footer id="footer" class="footer">
    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Bukit Damar</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>

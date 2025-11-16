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
            <h1>Informasi SKCK</h1>
            <p class="lead">Surat Keterangan Catatan Kepolisian</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Content Section -->
    <section class="section">
      <div class="container" data-aos="fade-up">

        <!-- Pengertian SKCK -->
        <div class="row mb-5">
          <div class="col-lg-12">
            <div class="card shadow-sm border-0">
              <div class="card-body p-4">
                <h3 class="mb-4"><i class="bi bi-info-circle me-2"></i>Pengertian SKCK</h3>
                <p class="mb-3">
                  <strong>Surat Keterangan Catatan Kepolisian</strong> (disingkat <strong>SKCK</strong>), sebelumnya dikenal sebagai <strong>Surat Keterangan Kelakuan Baik</strong> (disingkat <strong>SKKB</strong>) adalah surat keterangan yang diterbitkan oleh Polri yang berisikan catatan kejahatan seseorang. Dahulu, sewaktu bernama SKKB, surat ini hanya dapat diberikan yang tidak/belum pernah tercatat melakukan tindakan kejahatan hingga tanggal dikeluarkannya SKKB tersebut.
                </p>
                <p class="mb-0">
                  Surat Keterangan Catatan Kepolisian atau SKCK adalah surat keterangan resmi yang diterbitkan oleh POLRI melalui fungsi Intelkam kepada seseorang pemohon/warga masyarakat untuk memenuhi permohonan dari yang bersangkutan atau suatu keperluan karena adanya ketentuan yang mempersyaratkan, berdasarkan hasil penelitian biodata dan catatan Kepolisian yang ada tentang orang tersebut. <em>(Vide Peraturan Kapolri Nomor 18 Tahun 2014)</em>
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Masa Berlaku -->
        <div class="row mb-5">
          <div class="col-lg-12">
            <div class="card shadow-sm border-0 bg-light">
              <div class="card-body p-4">
                <h3 class="mb-4"><i class="bi bi-calendar-check me-2"></i>Masa Berlaku</h3>
                <p class="mb-0">
                  SKCK memiliki masa berlaku sampai dengan <strong>6 (enam) bulan</strong> sejak tanggal diterbitkan. Jika telah melewati masa berlaku dan bila dirasa perlu, SKCK dapat diperpanjang oleh yang bersangkutan.
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Tata Cara -->
        <div class="row mb-5">
          <div class="col-lg-12">
            <h2 class="mb-4"><i class="bi bi-list-check me-2"></i>Tata Cara Mendapatkan SKCK</h2>
          </div>
        </div>

        <!-- Membuat SKCK Baru -->
        <div class="row mb-4">
          <div class="col-lg-12">
            <div class="card shadow-sm border-0">
              <div class="card-header bg-primary text-white">
                <h4 class="mb-0"><i class="bi bi-file-earmark-plus me-2"></i>Membuat SKCK Baru</h4>
              </div>
              <div class="card-body p-4">
                <ol class="mb-0">
                  <li class="mb-2">Membawa <strong>Surat Pengantar</strong> dari Kantor Kelurahan tempat domisili pemohon.</li>
                  <li class="mb-2">Membawa <strong>fotocopy KTP/SIM</strong> sesuai dengan domisili yang tertera di surat pengantar dari Kantor Kelurahan.</li>
                  <li class="mb-2">Membawa <strong>fotocopy Kartu Keluarga</strong>.</li>
                  <li class="mb-2">Membawa <strong>fotocopy Akta Kelahiran/Kenal Lahir</strong>.</li>
                  <li class="mb-2">Membawa <strong>Pas Foto terbaru dan berwarna</strong> ukuran 4×6 sebanyak <strong>6 lembar</strong>.</li>
                  <li class="mb-2">Mengisi <strong>Formulir Daftar Riwayat Hidup</strong> yang telah disediakan di kantor Polisi dengan jelas dan benar.</li>
                  <li class="mb-0">Pengambilan <strong>Sidik Jari</strong> oleh petugas.</li>
                </ol>
              </div>
            </div>
          </div>
        </div>

        <!-- Memperpanjang SKCK -->
        <div class="row mb-5">
          <div class="col-lg-12">
            <div class="card shadow-sm border-0">
              <div class="card-header bg-success text-white">
                <h4 class="mb-0"><i class="bi bi-arrow-repeat me-2"></i>Memperpanjang Masa Berlaku SKCK</h4>
              </div>
              <div class="card-body p-4">
                <ol class="mb-0">
                  <li class="mb-2">Membawa <strong>lembar SKCK lama yang asli/legalisir</strong> (maksimal telah habis masanya selama 1 tahun).</li>
                  <li class="mb-2">Membawa <strong>fotocopy KTP/SIM</strong>.</li>
                  <li class="mb-2">Membawa <strong>fotocopy Kartu Keluarga</strong>.</li>
                  <li class="mb-2">Membawa <strong>fotocopy Akta Kelahiran/Kenal Lahir</strong>.</li>
                  <li class="mb-2">Membawa <strong>Pas Foto terbaru yang berwarna</strong> ukuran 4×6 sebanyak <strong>3 lembar</strong>.</li>
                  <li class="mb-0">Mengisi <strong>formulir perpanjangan SKCK</strong> yang disediakan di kantor Polisi.</li>
                </ol>
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
                    <strong>Polsek tidak menerbitkan SKCK</strong> untuk keperluan :
                    <ul class="mt-2">
                      <li>Melamar / melengkapi administrasi PNS / CPNS.</li>
                      <li>Pembuatan visa / keperluan lain yang bersifat antar-negara.</li>
                    </ul>
                  </li>
                  <li class="mb-0">
                    <strong>Polsek/Polres penerbit SKCK</strong> harus sesuai dengan alamat KTP/SIM pemohon.
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

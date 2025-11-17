@extends('layouts.frontend')

@section('title', 'Informasi Pembuatan Surat Kematian - Website Bukit Damar')

@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1>Informasi Izin Usaha</h1>
            <p class="lead">Informasi Izin Usaha</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Content Section -->
    <section class="section">
      <div class="container" data-aos="fade-up">

        <!-- Persyaratan -->
        <div class="row mb-3">
            <div class="col-lg-12">
              <div class="card shadow-sm border-0 bg-light">
                <div class="card-body p-3">
                  <h3 class="mb-3"><i class="bi bi-calendar-check me-2"></i>Persyaratan</h3>
                  <p class="mb-2">
                  <strong>Persyaratan Izin Usaha</strong> adalah sebagai berikut :
                  </p>
                  <ul class="mb-0" style="line-height: 1.8;">
                    <li>Surat Pengantar dari RT dan RW tempat warga tinggal dan menetap.</li>
                    <li>Fotocopy KTP Pemilik Usaha.</li>
                    <li>Fotocopy KK Pemilik Usaha.</li>
                    <li>Fotocopy Izin Tempat Usaha (jika ada).</li>
                    <li>Fotocopy Surat Izin Tempat Usaha (jika ada).</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

        <!-- Tata Cara -->
        <div class="row mb-3">
          <div class="col-lg-12">
            <h3 class="mb-3"><i class="bi bi-list-check me-2"></i>Prosedur Pelayanan</h3>
          </div>
        </div>

        <!-- Membuat surat kematian -->
        <div class="row mb-3">
          <div class="col-lg-12">
            <div class="card shadow-sm border-0">
              <div class="card-body p-3">
                <ol class="mb-0" style="line-height: 1.8;">
                  <li class="mb-1">Pemohon Datang ke Kelurahan Dengan Membawa Persyaratan</li>
                  <li class="mb-1">Pemohon Meminta Formulir Kepada Petugas</li>
                  <li class="mb-1">Pemohon Mengisi Formulir dan Menyerahkan Kepada Petugas</li>
                  <li class="mb-1">Petugas Melakukan Verifikasi dan Mengajukan Kepada Lurah atau Petugas yang Berwenang Menandatangani.</li>
                  <li class="mb-1">Petugas Membuat Surat  Pengantar Permohona Akta Kematian dan Mengajukan Kepada Lurah atau Petugas yang Berwenang Menandatangani.</li>
                  <li class="mb-1">Petugas Mencatat dalam Pembukuan dan Menyerahkan Surat Yang Sudah Ditandatangani Kepada Pemohon</li>
                  <li class="mb-1">Pemohon Datang ke Kecamatan</li>
                  <li class="mb-0">Pemohon Datang ke Disdukcapil.</li>
                </ol>
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
    </style>
    @endpush

@endsection

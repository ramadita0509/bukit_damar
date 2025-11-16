@extends('layouts.frontend')

@section('title', 'Informasi Pembuatan Surat Kematian - Website Bukit Damar')

@section('content')

  <!-- Hero Section -->
  <section id="hero" class="hero section" style="padding-top: 120px;">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1>Informasi Pembuatan Surat Kematian</h1>
          <p class="lead">Pembuatan Surat Kematian</p>
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
                <strong>Persyaratan Pembuatan Surat Kematian</strong> adalah sebagai berikut :
              </p>
              <ul class="mb-0" style="line-height: 1.8;">
                <li>Surat Pengantar RT diketahui RW</li>
                <li>Formulir (Tersedia di Kelurahan)</li>
                <li>KTP Asli Yang Meninggal</li>
                <li>KK Dimana Yang Meninggal Terdaftar</li>
                <li>Surat Keterangan Kematian dari Dokter/Rumah Sakit/Kepolisian</li>
                <li>Fotocopy KTP Elektronik Pelapor/Pemohon</li>
                <li>Surat Tanda Melapor diri (STMD) dari Kepolisian Bagi Warga Negara Asing (WNA)</li>
                <li>Rekomendasi dari Kantor Kesbangpolinmas Bagi Warga Negara Asing (WNA)</li>
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

@endsection

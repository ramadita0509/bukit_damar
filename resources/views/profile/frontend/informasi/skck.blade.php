@extends('layouts.frontend')

@section('title', 'Informasi Pembuatan Surat Kematian - Website Bukit Damar')

@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section">
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


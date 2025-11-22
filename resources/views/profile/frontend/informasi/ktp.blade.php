@extends('layouts.frontend')

@section('title', 'Informasi Pembuatan KTP atau KK - Website Bukit Damar')

@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1>Informasi Pembuatan KTP atau KK</h1>
            <p class="lead">Pembuatan KTP atau KK</p>
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
                <h3 class="mb-4"><i class="bi bi-info-circle me-2"></i>Pengertian Kartu Keluarga</h3>
                <p class="mb-3">
                  <strong>Kartu Keluarga</strong> (disingkat <strong>KK</strong>) Kartu Keluarga adalah Kartu Identitas Keluarga yang memuat data tentang susunan, hubungan dan jumlah anggota keluarga yang ada dalam satu rumah/ bangunan. Kartu Keluarga wajib dimiliki oleh setiap keluarga.
                  Kartu keluarga dicetak rangkap 3 yang masing-masing dipegang oleh Kepala Keluarga, Ketua RT dan Kantor Kelurahan. Kartu Keluarga (KK) adalah Dokumen milik Pemda setempat dan karena itu tidak boleh mencoret, mengubah, mengganti, menambah isi data yang tercantum dalam Kartu Keluarga.
                </p>
                <p class="mb-0">
                  Setiap terjadi perubahan karena Mutasi Data dan Mutasi Biodata, wajib dilaporkan kepada Dinas Kependudukan dan Pencatatan Sipil dan akan diterbitkan Kartu Keluarga (KK) yang baru. Pendatang baru yang belum mendaftarkan diri atau belum berstatus penduduk setempat, nama dan identitasnya tidak boleh dicantumkan dalam Kartu Keluarga sebelum mengurus pencabutan berkas di daerah asalnya disertai dengan dokumen yang lengkap.
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Persyaratan -->
        <div class="row mb-5">
          <div class="col-lg-12">
            <div class="card shadow-sm border-0 bg-light">
              <div class="card-body p-4">
                <h3 class="mb-4"><i class="bi bi-calendar-check me-2"></i>Persyaratan</h3>
                <div class="mb-4">
                  <strong>Persyaratan Pembuatan Kartu Keluarga</strong> adalah sebagai berikut:
                  <ul class="mt-2 mb-4">
                    <li>Surat Pengantar dari Pengurus Rukun Tetangga (RT) dan/atau Rukun Warga (RW) tempat warga tinggal dan menetap.</li>
                    <li>Kartu Keluarga Lama</li>
                    <li>Surat Nikah atau Akta Cerai bagi yang membuat KK karena perkawinan / perceraian</li>
                    <li>Surat Keterangan Lahir / Akta Kelahiran</li>
                    <li>Surat Pengangkatan Anak</li>
                    <li>Surat Keterangan Pendaftaran Penduduk Tetap bagi WNA</li>
                  </ul>
                </div>
                <div>
                  <strong>Persyaratan Pembuatan Kartu Tanda Penduduk (KTP)</strong> adalah sebagai berikut:
                  <ul class="mt-2 mb-0">
                    <li>Sudah berusia 17 tahun atau sudah pernah menikah.</li>
                    <li>Surat pengantar RT/RW dan Kepala Desa/Lurah (tidak atas Nama)</li>
                    <li>Foto Copy Kartu Keluarga diketahui Camat.</li>
                    <li>Mengisi data Formulir Permohonan KTP (F1).</li>
                    <li>Khusus bagi KTP yang habis masa berlakunya dalam tahun berjalan cukup melampirkan KTP Asli yang sudah habis masa berlakunya, Formulir Permohonan dan Surat Pengantar dari Desa diketahui Camat.</li>
                    <li>Surat Kehilangan dari Kepolisian/ Ketua RT bagi yang KTPnya hilang.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Lampiran Formulir -->
        <div class="row mb-5">
          <div class="col-lg-12">
            <div class="card shadow-sm border-0">
              <div class="card-body p-4">
                <h3 class="mb-4"><i class="bi bi-file-earmark-text me-2"></i>Lampiran Formulir</h3>
                <p class="mb-4">Berikut adalah formulir yang dapat Anda download untuk keperluan pembuatan KTP atau KK:</p>
                <div class="d-flex flex-wrap align-items-center gap-3">
                  <a href="{{ route('ktp.download-pdf') }}" class="btn btn-primary btn-lg">
                    <i class="bi bi-file-earmark-pdf me-2"></i>Download Formulir PDF
                  </a>
                  <small class="text-muted">
                    <i class="bi bi-filetype-pdf me-1"></i>Format: PDF
                  </small>
                </div>
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

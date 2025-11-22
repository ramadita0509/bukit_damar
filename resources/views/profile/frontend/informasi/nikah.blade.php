@extends('layouts.frontend')

@section('title', 'Informasi Surat Nikah - Website Bukit Damar')

@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1>Informasi Surat Nikah</h1>
            <p class="lead">Persyaratan dan Prosedur Pembuatan Surat Keterangan Nikah</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Content Section -->
    <section class="section">
      <div class="container" data-aos="fade-up">

        <!-- Pengertian -->
        <div class="row mb-5">
          <div class="col-lg-12">
            <div class="card shadow-sm border-0">
              <div class="card-body p-4">
                <h3 class="mb-4"><i class="bi bi-info-circle me-2"></i>Pengertian Surat Keterangan Nikah</h3>
                <p class="mb-3">
                  <strong>Surat Keterangan Nikah</strong> adalah dokumen resmi yang dikeluarkan oleh Kantor Urusan Agama (KUA) yang berfungsi sebagai bukti sah bahwa seseorang telah melakukan pernikahan secara resmi menurut hukum yang berlaku. Surat ini diperlukan untuk berbagai keperluan administratif seperti pembuatan Kartu Keluarga (KK), perubahan status di KTP, dan keperluan lainnya.
                </p>
                <p class="mb-0">
                  Untuk mengurus surat keterangan nikah (surat nikah), persyaratannya meliputi dokumen pribadi seperti KTP, Kartu Keluarga, dan akta lahir, serta surat-surat dari kelurahan (N1, N2, N4) yang diajukan setelah mendapatkan pengantar dari RT/RW. Biaya nikah adalah gratis jika dilakukan di Kantor Urusan Agama (KUA) pada jam kerja, dan Rp 600.000 jika dilakukan di luar KUA atau di luar jam kerja.
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Persyaratan Umum -->
        <div class="row mb-5">
          <div class="col-lg-12">
            <div class="card shadow-sm border-0 bg-light">
              <div class="card-body p-4">
                <h3 class="mb-4"><i class="bi bi-calendar-check me-2"></i>Persyaratan Umum</h3>
                <p class="mb-3">Berikut adalah persyaratan umum yang harus dipenuhi untuk mengurus surat keterangan nikah:</p>
                <ul class="mb-0" style="line-height: 2;">
                  <li><strong>Surat pengantar dari RT/RW:</strong> Dibawa ke kelurahan untuk mendapatkan surat-surat yang diperlukan.</li>
                  <li><strong>Surat Keterangan Belum Menikah (Model N1):</strong> Dikeluarkan oleh kelurahan.</li>
                  <li><strong>Surat Keterangan Asal-Usul (Model N2):</strong> Dikeluarkan oleh kelurahan.</li>
                  <li><strong>Surat Persetujuan Mempelai (Model N4):</strong> Dikeluarkan oleh kelurahan.</li>
                  <li><strong>Fotokopi KTP dan Kartu Keluarga:</strong> Masing-masing calon mempelai.</li>
                  <li><strong>Fotokopi Akta Kelahiran.</strong></li>
                  <li><strong>Pas foto:</strong> Ukuran 3x4 atau 2x3 dengan latar belakang yang ditentukan (misalnya, biru atau merah).</li>
                  <li><strong>Surat rekomendasi dari KUA:</strong> Jika pernikahan dilakukan di luar KUA wilayah Anda.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Persyaratan Tambahan -->
        <div class="row mb-5">
          <div class="col-lg-12">
            <div class="card shadow-sm border-0">
              <div class="card-body p-4">
                <h3 class="mb-4"><i class="bi bi-file-earmark-plus me-2"></i>Persyaratan Tambahan</h3>
                <p class="mb-3">Berikut adalah persyaratan tambahan yang mungkin diperlukan sesuai kondisi:</p>
                <ul class="mb-0" style="line-height: 2;">
                  <li><strong>Bagi yang sudah pernah menikah:</strong> Akta cerai atau surat keterangan kematian pasangan.</li>
                  <li><strong>Bagi yang belum mencapai batas usia minimal:</strong> Surat dispensasi dari pengadilan.</li>
                  <li><strong>Bagi anggota TNI/POLRI:</strong> Surat izin dari atasan.</li>
                  <li><strong>Bagi calon istri yang calon suami tidak berada di daerahnya:</strong> Pas foto 3x2 dengan latar belakang merah, dan surat keterangan dari camat yang ditandatangani kepala desa.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Biaya -->
        <div class="row mb-5">
          <div class="col-lg-12">
            <div class="card shadow-sm border-0" style="background: linear-gradient(135deg, #e7f3ff 0%, #d0e7ff 100%);">
              <div class="card-body p-4">
                <h3 class="mb-4"><i class="bi bi-cash-coin me-2"></i>Biaya</h3>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <div class="p-3 bg-white rounded" style="border-left: 4px solid #28a745;">
                      <h5 style="color: #28a745; margin-bottom: 0.5rem;">
                        <i class="bi bi-check-circle me-2"></i>Gratis
                      </h5>
                      <p class="mb-0" style="color: #555;">
                        Jika proses pernikahan dilakukan di Kantor Urusan Agama (KUA) pada jam kerja (Senin-Jumat, pukul 07.30-16.00).
                      </p>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <div class="p-3 bg-white rounded" style="border-left: 4px solid #ffc107;">
                      <h5 style="color: #ffc107; margin-bottom: 0.5rem;">
                        <i class="bi bi-currency-exchange me-2"></i>Rp 600.000
                      </h5>
                      <p class="mb-0" style="color: #555;">
                        Jika pernikahan dilakukan di luar KUA atau di luar jam kerja.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Prosedur -->
        <div class="row mb-5">
          <div class="col-lg-12">
            <div class="card shadow-sm border-0">
              <div class="card-body p-4">
                <h3 class="mb-4"><i class="bi bi-list-ol me-2"></i>Prosedur Pengurusan</h3>
                <ol style="line-height: 2;">
                  <li>Mendapatkan surat pengantar dari RT/RW setempat.</li>
                  <li>Mengajukan surat pengantar ke kelurahan untuk mendapatkan surat-surat yang diperlukan (N1, N2, N4).</li>
                  <li>Menyiapkan semua dokumen yang diperlukan (KTP, KK, Akta Kelahiran, Pas Foto).</li>
                  <li>Mengajukan permohonan ke Kantor Urusan Agama (KUA) dengan membawa semua dokumen yang telah disiapkan.</li>
                  <li>Menunggu proses verifikasi dan persetujuan dari KUA.</li>
                  <li>Melakukan proses pernikahan sesuai jadwal yang ditentukan.</li>
                  <li>Menerima surat keterangan nikah setelah proses pernikahan selesai.</li>
                </ol>
              </div>
            </div>
          </div>
        </div>

        <!-- Informasi Penting -->
        <div class="row mb-5">
          <div class="col-lg-12">
            <div class="alert alert-info" role="alert" style="background-color: #e7f3ff; border-left: 4px solid #0ea2e7; padding: 1.5rem; border-radius: 10px;">
              <h5 style="color: #0ea2e7; margin-bottom: 1rem;">
                <i class="bi bi-info-circle me-2"></i>Informasi Penting
              </h5>
              <ul class="mb-0" style="line-height: 2; color: #2c3e50;">
                <li>Pastikan semua dokumen yang diperlukan sudah lengkap sebelum mengajukan permohonan.</li>
                <li>Pas foto harus sesuai dengan ketentuan yang berlaku (ukuran dan latar belakang).</li>
                <li>Untuk pernikahan di luar KUA atau di luar jam kerja, pastikan sudah menyiapkan biaya tambahan sebesar Rp 600.000.</li>
                <li>Jika ada persyaratan tambahan yang diperlukan, pastikan sudah disiapkan terlebih dahulu.</li>
                <li>Untuk informasi lebih lanjut, silakan menghubungi Kantor Urusan Agama (KUA) setempat atau pengurus RT/RW.</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Lampiran Formulir -->
        <div class="row mb-5">
          <div class="col-lg-12">
            <div class="card shadow-sm border-0">
              <div class="card-body p-4">
                <h3 class="mb-4"><i class="bi bi-file-earmark-text me-2"></i>Lampiran Formulir</h3>
                <p class="mb-4">Berikut adalah informasi lengkap tentang persyaratan surat nikah yang dapat Anda download:</p>
                <div class="d-flex flex-wrap align-items-center gap-3">
                  <a href="{{ route('nikah.download-pdf') }}" class="btn btn-primary btn-lg">
                    <i class="bi bi-file-earmark-pdf me-2"></i>Download Surat Pengantar Nikah
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


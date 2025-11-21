@extends('layouts.frontend')

@section('title', 'Informasi Pembuatan Surat Kematian - Website Bukit Damar')

@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1>Informasi Pembuatan Surat Keterangan Domisili</h1>
            <p class="lead">Pembuatan Surat Keterangan Domisili</p>
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
                <h3 class="mb-4"><i class="bi bi-info-circle me-2"></i>Pengertian Domisili</h3>
                <p class="mb-3">
                  <strong>Domisili adalah alamat, tempat di mana seseorang tinggal secara resmi. Seperti yang tertulis dalam KBBI, domisili adalah tempat kediaman sah atau resmi dari seseorang.
                  </strong>
                    Domisili juga bisa diartikan sebagai alamat tempat tinggal saat ini. Informasi mengenai domisili seseorang sering kali diperlukan untuk mengurus kepentingan administrasi kependudukan, syarat pernikahan, perbankan, pajak, dan lain-lain.
                </p>
                <p class="mb-0">
                <strong> Bolehkah Domisili dan Alamat KTP Berbeda?</strong> Mungkin banyak yang menyadari bahwa alamat yang tertera di KTP berbeda dengan tempat ia tinggal sekarang. Misalnya, alamat yang tertera di KTP adalah Malang, sedangkan kamu saat ini tinggal di Jakarta.
                </p>
                <p class="mb-0">
                Maka, bisa disimpulkan bahwa domisili di Jakarta, sedangkan alamat di KTP Malang. Jika hanya tinggal sementara, perbedaan ini biasanya tidak menimbulkan masalah tertentu.
                </p>
                <p class="mb-0"></p>
                Namun, bila anda berencana untuk menetap di Jakarta, maka alamat KTP yang masih di Malang sebaiknya diubah ke Jakarta dengan mengikuti prosedur dari Disdukcapil.</em>
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
                <p class="mb-0">
                <strong>Sebelum melakukan pengajuan surat domisili, </strong> beberapa persyaratan yang perlu dilengkapi adalah sebagai berikut:
                <ul class="mb-0">
                  <li>Kartu identitas atau KTP asli dan fotokopi.</li>
                  <li>Pas foto 3x4.</li>
                  <li>Kartu keluarga dan fotokopinya.</li>
                  <li>Surat pengantar dari ketua RT dan RW domisili asli.</li>
                  <li>Surat permohonan dengan materai Rp10.000.</li>
                  <br>

                </ul>
                <strong> Setelah itu, untuk mengajukan surat domisili, prosedur yang perlu dilewati </strong> adalah sebagai berikut :
                <ul class="mb-0">
                  <li>Membawa surat pengantar dari ketua RT dan RW..</li>
                  <li>Memberikan berkas kepada petugas kelurahan.</li>
                  <li>Setelah petugas mengecek kelengkapan berkas, petugas akan mulai memproses keterangan domisili.</li>
                  <li>Mengisi data Formulir Perohonan KTP (F1).</li>
                  <li>Setelah surat tercetak, maka bisa langsung digunakan.</li>
                </ul>
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
                    <p class="mb-0">
                <strong>Apabila anda berencana untuk pindah domisili, langkah-langkah dalam cara membuat surat pindah domisili adalah sebagai berikut:</strong><br><br>
                  <ul class="mb-0">
                    <li class="mb-2"> Siapkan KTP dan KK terlebih dahulu, kemudian mintalah surat pengantar dari ketua RT dan RW.</li>
                    <li class="mb-2"> Laporkan permohonan pindah domisili ke kantor Kelurahan atau Kecamatan.</li>
                    <li class="mb-2"> Isi formulir perpindahan yang tersedia di kantor Kelurahan untuk mendapatkan surat keterangan.</li>
                    <li class="mb-2"> Serahkan surat keterangan tersebut ke kantor Kecamatan.</li>
                    <li class="mb-2"> Setelah semua dokumen lengkap, ajukan surat pengantar dari RT dan RW, KTP, KK, serta surat keterangan ke Disdukcapil.</li>
                    <li class="mb-2"> Disdukcapil akan menerbitkan surat keterangan pindah domisili.</li>
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
                  <p class="mb-4">Berikut adalah formulir yang dapat Anda download untuk keperluan pembuatan Surat Keterangan Domisili:</p>
                  <div class="d-flex flex-wrap align-items-center gap-3">
                    <a href="{{ route('domisili.download-pdf') }}" class="btn btn-primary btn-lg">
                      <i class="bi bi-file-earmark-pdf me-2"></i>Download Surat Keterangan Domisili
                    </a>
                    <small class="text-muted">
                      <i class="bi bi-filetype-pdf me-1"></i>Format: PDF
                    </small>
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

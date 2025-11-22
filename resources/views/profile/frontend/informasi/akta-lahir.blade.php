@extends('layouts.frontend')

@section('title', 'Informasi Pembuatan Surat Kematian - Website Bukit Damar')

@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section">
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

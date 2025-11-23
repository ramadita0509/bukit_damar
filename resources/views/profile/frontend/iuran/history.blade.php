@extends('layouts.frontend')

@section('title', 'History Pembayaran Iuran - Website Bukit Damar')

@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1>History Pembayaran Iuran</h1>
            <p class="lead">Riwayat Pembayaran Iuran Warga Anda</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Content Section -->
    <section class="section">
      <div class="container" data-aos="fade-up">

        @if(session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        <div class="row mb-4">
          <div class="col-12">
            <div class="alert alert-info">
              <i class="bi bi-info-circle me-2"></i>
              <strong>Informasi:</strong> Setelah mengupload bukti transfer, pembayaran Anda akan ditinjau oleh admin. Untuk info lebih lanjut silakan kontak WA bendahara agar segera di proses.
              <hr class="my-2">
              <div class="mt-2">
                <strong>Kontak Bendahara:</strong><br>
                <i class="bi bi-person me-1"></i> Bendahara 1 : Bpk Mayko, WA : <a href="https://wa.me/6285220019336" target="_blank" class="text-decoration-none">085220019336</a><br>
                <i class="bi bi-person me-1"></i> Bendahara 2 : Bpk Sugeng, WA : <a href="https://wa.me/6289624314334" target="_blank" class="text-decoration-none">089624314334</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="card shadow-sm border-0">
              <div class="card-header bg-white border-bottom d-flex justify-content-between align-items-center">
                <h4 class="mb-0"><i class="bi bi-clock-history me-2"></i>Riwayat Pembayaran</h4>
                <a href="{{ route('iuran.create') }}" class="btn btn-primary btn-sm">
                  <i class="bi bi-plus-circle me-2"></i>Bayar Iuran Baru
                </a>
              </div>
              <div class="card-body p-0">
                @if($iuranWargas->count() > 0)
                  <div class="table-responsive">
                    <table class="table table-hover mb-0">
                      <thead class="table-light">
                        <tr>
                          <th style="width: 120px;">Tanggal</th>
                          <th style="width: 150px;">Jumlah</th>
                          <th>Catatan</th>
                          <th style="width: 120px;" class="text-center">Status</th>
                          <th style="width: 100px;" class="text-center">Bukti</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($iuranWargas as $iuranWarga)
                          <tr>
                            <td>{{ $iuranWarga->tanggal_transfer->format('d/m/Y') }}</td>
                            <td class="fw-bold text-success">
                              Rp {{ number_format($iuranWarga->jumlah, 0, ',', '.') }}
                            </td>
                            <td>
                              {{ $iuranWarga->catatan ? Str::limit($iuranWarga->catatan, 50) : '-' }}
                              @if($iuranWarga->catatan_admin && $iuranWarga->status == 'rejected')
                                <br><small class="text-danger">Alasan ditolak: {{ $iuranWarga->catatan_admin }}</small>
                              @endif
                            </td>
                            <td class="text-center">
                              @if($iuranWarga->status == 'pending')
                                <span class="badge bg-warning text-dark">
                                  <i class="bi bi-clock me-1"></i>Menunggu
                                </span>
                              @elseif($iuranWarga->status == 'approved')
                                <span class="badge bg-success">
                                  <i class="bi bi-check-circle me-1"></i>Disetujui
                                </span>
                              @elseif($iuranWarga->status == 'rejected')
                                <span class="badge bg-danger">
                                  <i class="bi bi-x-circle me-1"></i>Ditolak
                                </span>
                              @endif
                            </td>
                            <td class="text-center">
                              @if($iuranWarga->bukti_transfer)
                                <a href="{{ route('iuran.bukti', basename($iuranWarga->bukti_transfer)) }}" target="_blank" class="btn btn-sm btn-outline-primary" title="Lihat Bukti">
                                  <i class="bi bi-image"></i>
                                </a>
                              @else
                                <span class="text-muted">-</span>
                              @endif
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                @else
                  <div class="text-center p-5">
                    <i class="bi bi-inbox fs-1 text-muted"></i>
                    <p class="text-muted mt-3">Belum ada riwayat pembayaran iuran.</p>
                    <a href="{{ route('iuran.create') }}" class="btn btn-primary">
                      <i class="bi bi-plus-circle me-2"></i>Bayar Iuran Sekarang
                    </a>
                  </div>
                @endif
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


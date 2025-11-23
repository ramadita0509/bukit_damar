@extends('layouts.frontend')

@php
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
@endphp

@section('title', 'Laporan Iuran Warga - Website Bukit Damar')

@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1>Laporan Iuran Warga</h1>
            <p class="lead">Laporan Pembayaran Iuran Warga RT 002 RW 017 Bukit Damar</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Content Section -->
    <section class="section">
      <div class="container" data-aos="fade-up">

        <!-- Filter Section -->
        <div class="row mb-4 filter-section">
          <div class="col-lg-12">
            <div class="card shadow-sm border-0">
              <div class="card-body p-4">
                <h4 class="mb-3"><i class="bi bi-funnel me-2"></i>Filter Laporan</h4>
                <form method="GET" action="{{ route('iuran.laporan') }}" class="row g-3">
                  <div class="col-md-3">
                    <label for="bulan" class="form-label">Bulan</label>
                    <select class="form-select" id="bulan" name="bulan">
                      <option value="">Pilih Bulan</option>
                      <option value="01" {{ request('bulan') == '01' ? 'selected' : '' }}>Januari</option>
                      <option value="02" {{ request('bulan') == '02' ? 'selected' : '' }}>Februari</option>
                      <option value="03" {{ request('bulan') == '03' ? 'selected' : '' }}>Maret</option>
                      <option value="04" {{ request('bulan') == '04' ? 'selected' : '' }}>April</option>
                      <option value="05" {{ request('bulan') == '05' ? 'selected' : '' }}>Mei</option>
                      <option value="06" {{ request('bulan') == '06' ? 'selected' : '' }}>Juni</option>
                      <option value="07" {{ request('bulan') == '07' ? 'selected' : '' }}>Juli</option>
                      <option value="08" {{ request('bulan') == '08' ? 'selected' : '' }}>Agustus</option>
                      <option value="09" {{ request('bulan') == '09' ? 'selected' : '' }}>September</option>
                      <option value="10" {{ request('bulan') == '10' ? 'selected' : '' }}>Oktober</option>
                      <option value="11" {{ request('bulan') == '11' ? 'selected' : '' }}>November</option>
                      <option value="12" {{ request('bulan') == '12' ? 'selected' : '' }}>Desember</option>
                    </select>
                  </div>
                  <div class="col-md-3">
                    <label for="tahun" class="form-label">Tahun</label>
                    <select class="form-select" id="tahun" name="tahun">
                      <option value="">Pilih Tahun</option>
                      @for($i = Carbon::now('Asia/Jakarta')->year; $i >= Carbon::now('Asia/Jakarta')->year - 5; $i--)
                        <option value="{{ $i }}" {{ request('tahun') == $i ? 'selected' : '' }}>{{ $i }}</option>
                      @endfor
                    </select>
                  </div>
                  <div class="col-md-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" id="status" name="status">
                      <option value="">Semua Status</option>
                      <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Menunggu</option>
                      <option value="approved" {{ request('status') == 'approved' ? 'selected' : '' }}>Disetujui</option>
                      <option value="rejected" {{ request('status') == 'rejected' ? 'selected' : '' }}>Ditolak</option>
                    </select>
                  </div>
                  <div class="col-md-3 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary w-100">
                      <i class="bi bi-search me-2"></i>Tampilkan
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- Summary Cards -->
        @php
          $selectedBulan = $bulan ?? request('bulan', Carbon::now('Asia/Jakarta')->format('m'));
          $selectedTahun = $tahun ?? request('tahun', Carbon::now('Asia/Jakarta')->format('Y'));
          $bulanNama = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        @endphp

        <div class="row mb-4">
          <div class="col-md-3 mb-3">
            <div class="card shadow-sm border-0 border-start border-4 border-primary">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <h6 class="text-muted mb-2">Total Iuran</h6>
                    <h3 class="mb-0 text-primary">Rp {{ number_format($totalIuran ?? 0, 0, ',', '.') }}</h3>
                    <small class="text-muted">{{ $totalCount ?? 0 }} pembayaran</small>
                  </div>
                  <div class="bg-primary bg-opacity-10 p-3 rounded">
                    <i class="bi bi-wallet2 fs-2 text-primary"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card shadow-sm border-0 border-start border-4 border-success">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <h6 class="text-muted mb-2">Disetujui</h6>
                    <h3 class="mb-0 text-success">Rp {{ number_format($totalApproved ?? 0, 0, ',', '.') }}</h3>
                    <small class="text-muted">{{ $countApproved ?? 0 }} pembayaran</small>
                  </div>
                  <div class="bg-success bg-opacity-10 p-3 rounded">
                    <i class="bi bi-check-circle fs-2 text-success"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card shadow-sm border-0 border-start border-4 border-warning">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <h6 class="text-muted mb-2">Menunggu</h6>
                    <h3 class="mb-0 text-warning">Rp {{ number_format($totalPending ?? 0, 0, ',', '.') }}</h3>
                    <small class="text-muted">{{ $countPending ?? 0 }} pembayaran</small>
                  </div>
                  <div class="bg-warning bg-opacity-10 p-3 rounded">
                    <i class="bi bi-clock fs-2 text-warning"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card shadow-sm border-0 border-start border-4 border-danger">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <h6 class="text-muted mb-2">Ditolak</h6>
                    <h3 class="mb-0 text-danger">Rp {{ number_format($totalRejected ?? 0, 0, ',', '.') }}</h3>
                    <small class="text-muted">{{ $countRejected ?? 0 }} pembayaran</small>
                  </div>
                  <div class="bg-danger bg-opacity-10 p-3 rounded">
                    <i class="bi bi-x-circle fs-2 text-danger"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Laporan Detail -->
        <div class="row mb-5">
          <div class="col-lg-12">
            <div class="card shadow-sm border-0">
              <div class="card-header bg-white border-bottom">
                <div class="d-flex justify-content-between align-items-center">
                  <h4 class="mb-0"><i class="bi bi-table me-2"></i>Detail Pembayaran Iuran</h4>
                  <div class="d-flex gap-2 align-items-center">
                    <span class="badge bg-primary">
                      {{ $selectedBulan ? $bulanNama[(int)$selectedBulan] : 'Semua' }} {{ $selectedTahun }}
                      @if($status)
                        - {{ ucfirst($status) }}
                      @endif
                    </span>
                    @if(auth()->user()->canManageTransactions())
                      <a href="{{ route('iuran.laporan.export-pdf', ['bulan' => $bulan, 'tahun' => $tahun, 'status' => $status]) }}" class="btn btn-sm btn-danger" target="_blank">
                        <i class="bi bi-file-earmark-pdf me-1"></i>Export PDF
                      </a>
                      <a href="{{ route('iuran.pending') }}" class="btn btn-sm btn-warning">
                        <i class="bi bi-clock-history me-1"></i>Kelola Pending
                      </a>
                      <a href="{{ route('iuran.checklist') }}" class="btn btn-sm btn-success">
                        <i class="bi bi-check2-square me-1"></i>Checklist Iuran
                      </a>
                    @endif
                  </div>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table table-hover mb-0">
                    <thead class="table-light">
                      <tr>
                        <th style="width: 50px;">No</th>
                        <th style="width: 120px;">Tanggal</th>
                        <th>Nama Warga</th>
                        <th style="width: 150px;" class="text-end">Jumlah</th>
                        <th>Catatan</th>
                        <th style="width: 120px;" class="text-center">Status</th>
                        <th style="width: 100px;" class="text-center">Bukti</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse($iuranWargas ?? [] as $index => $iuranWarga)
                        <tr>
                          <td>{{ $iuranWargas->firstItem() + $index }}</td>
                          <td>{{ $iuranWarga->tanggal_transfer->format('d/m/Y') }}</td>
                          <td>
                            <strong>{{ $iuranWarga->user->name }}</strong>
                            @if($iuranWarga->user->email)
                              <br><small class="text-muted">{{ $iuranWarga->user->email }}</small>
                            @endif
                          </td>
                          <td class="text-end fw-bold text-success">
                            Rp {{ number_format($iuranWarga->jumlah, 0, ',', '.') }}
                          </td>
                          <td>
                            {{ $iuranWarga->catatan ? Str::limit($iuranWarga->catatan, 50) : '-' }}
                            @if($iuranWarga->catatan_admin && $iuranWarga->status == 'rejected')
                              <br><small class="text-danger">Alasan: {{ Str::limit($iuranWarga->catatan_admin, 50) }}</small>
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
                      @empty
                        <tr>
                          <td colspan="7" class="text-center py-4 text-muted">
                            <i class="bi bi-inbox fs-1 d-block mb-2"></i>
                            Tidak ada data pembayaran iuran untuk periode yang dipilih
                          </td>
                        </tr>
                      @endforelse
                    </tbody>
                  </table>
                </div>

                <!-- Pagination -->
                @if($iuranWargas->hasPages())
                  <div class="card-footer bg-white border-top">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="text-muted">
                        Menampilkan {{ $iuranWargas->firstItem() }} sampai {{ $iuranWargas->lastItem() }} dari {{ $iuranWargas->total() }} pembayaran
                      </div>
                      <div>
                        {{ $iuranWargas->appends(request()->query())->links() }}
                      </div>
                    </div>
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
      /* Override hero section untuk halaman laporan - setengah layar dengan background */
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


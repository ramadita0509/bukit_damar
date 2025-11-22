@extends('layouts.frontend')

@php
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
@endphp

@section('title', 'Laporan Keuangan - Website Bukit Damar')

@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1>Laporan Keuangan</h1>
            <p class="lead">Laporan Keuangan Bulanan RT 002 RW 017 Desa Singajaya</p>
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
                <form method="GET" action="{{ route('laporan') }}" class="row g-3">
                  <div class="col-md-4">
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
                  <div class="col-md-4">
                    <label for="tahun" class="form-label">Tahun</label>
                    <select class="form-select" id="tahun" name="tahun">
                      <option value="">Pilih Tahun</option>
                      @for($i = Carbon::now('Asia/Jakarta')->year; $i >= Carbon::now('Asia/Jakarta')->year - 5; $i--)
                        <option value="{{ $i }}" {{ request('tahun') == $i ? 'selected' : '' }}>{{ $i }}</option>
                      @endfor
                    </select>
                  </div>
                  <div class="col-md-4 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary w-100">
                      <i class="bi bi-search me-2"></i>Tampilkan Laporan
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
          <div class="col-md-4 mb-3">
            <div class="card shadow-sm border-0 border-start border-4 border-success">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <h6 class="text-muted mb-2">Total Pemasukan</h6>
                    <h3 class="mb-0 text-success">Rp {{ number_format($totalPemasukan ?? 0, 0, ',', '.') }}</h3>
                  </div>
                  <div class="bg-success bg-opacity-10 p-3 rounded">
                    <i class="bi bi-arrow-down-circle fs-2 text-success"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card shadow-sm border-0 border-start border-4 border-danger">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <h6 class="text-muted mb-2">Total Pengeluaran</h6>
                    <h3 class="mb-0 text-danger">Rp {{ number_format($totalPengeluaran ?? 0, 0, ',', '.') }}</h3>
                  </div>
                  <div class="bg-danger bg-opacity-10 p-3 rounded">
                    <i class="bi bi-arrow-up-circle fs-2 text-danger"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card shadow-sm border-0 border-start border-4 border-primary">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <h6 class="text-muted mb-2">Saldo</h6>
                    <h3 class="mb-0 text-primary">Rp {{ number_format($saldo ?? 0, 0, ',', '.') }}</h3>
                  </div>
                  <div class="bg-primary bg-opacity-10 p-3 rounded">
                    <i class="bi bi-wallet2 fs-2 text-primary"></i>
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
                  <h4 class="mb-0"><i class="bi bi-table me-2"></i>Detail Transaksi</h4>
                  <div class="d-flex gap-2 align-items-center">
                    <span class="badge bg-primary">
                      {{ $selectedBulan ? $bulanNama[(int)$selectedBulan] : 'Semua' }} {{ $selectedTahun }}
                    </span>
                    @if(auth()->user()->canManageTransactions())
                      <a href="{{ route('transaksi.index') }}" class="btn btn-sm btn-success">
                        <i class="bi bi-plus-circle me-1"></i>Tambah Transaksi
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
                        <th style="width: 120px;">Tanggal</th>
                        <th>Keterangan</th>
                        <th>Kategori</th>
                        <th class="text-end" style="width: 180px;">Pemasukan</th>
                        <th class="text-end" style="width: 180px;">Pengeluaran</th>
                        <th class="text-end" style="width: 180px;">Saldo</th>
                        <th style="width: 80px;" class="text-center">Bukti</th>
                        @if(auth()->user()->canManageTransactions() || auth()->user()->canDeleteTransactions())
                          <th style="width: 120px;" class="text-center">Aksi</th>
                        @endif
                      </tr>
                    </thead>
                    <tbody>
                      @php
                        $saldoBerjalan = 0;
                      @endphp
                      @forelse($transaksi ?? [] as $item)
                        @php
                          $pemasukan = $item->jenis == 'pemasukan' ? $item->jumlah : 0;
                          $pengeluaran = $item->jenis == 'pengeluaran' ? $item->jumlah : 0;
                          $saldoBerjalan += $pemasukan - $pengeluaran;
                        @endphp
                        <tr>
                          <td>{{ $item->tanggal->format('d/m/Y') }}</td>
                          <td>{{ $item->keterangan }}</td>
                          <td>
                            <span class="badge bg-secondary">{{ $item->kategori }}</span>
                          </td>
                          <td class="text-end text-success fw-bold">
                            @if($pemasukan > 0)
                              Rp {{ number_format($pemasukan, 0, ',', '.') }}
                            @else
                              -
                            @endif
                          </td>
                          <td class="text-end text-danger fw-bold">
                            @if($pengeluaran > 0)
                              Rp {{ number_format($pengeluaran, 0, ',', '.') }}
                            @else
                              -
                            @endif
                          </td>
                          <td class="text-end fw-bold {{ $saldoBerjalan >= 0 ? 'text-primary' : 'text-danger' }}">
                            Rp {{ number_format($saldoBerjalan, 0, ',', '.') }}
                          </td>
                          <td class="text-center">
                            @if($item->bukti)
                              <a href="{{ Storage::url($item->bukti) }}" target="_blank" class="btn btn-sm btn-info" title="Lihat Bukti">
                                <i class="bi bi-image"></i>
                              </a>
                            @else
                              <span class="text-muted">-</span>
                            @endif
                          </td>
                          @if(auth()->user()->canManageTransactions() || auth()->user()->canDeleteTransactions())
                            <td class="text-center">
                              <div class="btn-group" role="group">
                                @if(auth()->user()->canManageTransactions())
                                  <a href="{{ route('transaksi.edit', $item) }}" class="btn btn-sm btn-warning" title="Edit">
                                    <i class="bi bi-pencil"></i>
                                  </a>
                                @endif
                                @if(auth()->user()->canDeleteTransactions())
                                  <form action="{{ route('transaksi.destroy', $item) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus transaksi ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" title="Hapus">
                                      <i class="bi bi-trash"></i>
                                    </button>
                                  </form>
                                @endif
                              </div>
                            </td>
                          @endif
                        </tr>
                      @empty
                        <tr>
                          <td colspan="{{ auth()->user()->canManageTransactions() || auth()->user()->canDeleteTransactions() ? '8' : '7' }}" class="text-center py-4 text-muted">
                            <i class="bi bi-inbox fs-1 d-block mb-2"></i>
                            Tidak ada data transaksi untuk periode yang dipilih
                            <br>
                            @if(auth()->user()->canManageTransactions())
                              <a href="{{ route('transaksi.index') }}" class="btn btn-sm btn-primary mt-2">
                                <i class="bi bi-plus-circle me-1"></i>Tambah Transaksi Pertama
                              </a>
                            @endif
                          </td>
                        </tr>
                      @endforelse
                    </tbody>
                    <tfoot class="table-light">
                      <tr>
                        <th colspan="3" class="text-end">TOTAL:</th>
                        <th class="text-end text-success">Rp {{ number_format($totalPemasukan ?? 0, 0, ',', '.') }}</th>
                        <th class="text-end text-danger">Rp {{ number_format($totalPengeluaran ?? 0, 0, ',', '.') }}</th>
                        <th class="text-end text-primary">Rp {{ number_format($saldo ?? 0, 0, ',', '.') }}</th>
                        <th></th>
                        @if(auth()->user()->canManageTransactions() || auth()->user()->canDeleteTransactions())
                          <th></th>
                        @endif
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Print Header (only visible when printing) -->
        <div class="print-only mb-4">
          <h2 class="text-center">LAPORAN KEUANGAN</h2>
          <h4 class="text-center">RT 002 RW 017 Desa Singajaya</h4>
          <p class="text-center">Kecamatan Jonggol, Kabupaten Bogor</p>
          <p class="text-center"><strong>Periode:</strong> {{ $selectedBulan ? $bulanNama[(int)$selectedBulan] : 'Semua' }} {{ $selectedTahun }}</p>
          <p class="text-center"><strong>Tanggal Cetak:</strong> {{ Carbon::now('Asia/Jakarta')->format('d F Y H:i:s') }}</p>
          <hr>
        </div>

        <!-- Export Button -->
        <div class="row mb-5 export-section">
          <div class="col-lg-12">
            <div class="card shadow-sm border-0">
              <div class="card-body p-4">
                <h5 class="mb-3"><i class="bi bi-download me-2"></i>Download & Export</h5>
                <div class="row g-3">
                  <div class="col-md-6">
                    <label for="pilih_file_pdf" class="form-label">Pilih File Laporan Iuran PDF</label>
                    @if($laporanIuran->count() > 0)
                      <select class="form-select" id="pilih_file_pdf" onchange="updateDownloadLink()">
                        <option value="">-- Pilih File PDF --</option>
                        @foreach($laporanIuran as $item)
                          @php
                            $bulanNama = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                            $label = ($item->bulan ? $bulanNama[(int)$item->bulan] . ' ' : '') . $item->tahun;
                            if($item->judul) {
                              $label .= ' - ' . $item->judul;
                            }
                          @endphp
                          <option value="{{ $item->id }}" data-url="{{ route('laporan.iuran-pdf', ['id' => $item->id]) }}">
                            {{ $label }}
                          </option>
                        @endforeach
                      </select>
                      <a href="#" id="btn-download-pdf" class="btn btn-outline-danger mt-2 w-100" style="display: none;">
                        <i class="bi bi-file-earmark-pdf me-2"></i>Download Laporan Iuran PDF
                      </a>
                    @else
                      <p class="text-muted mb-2">Belum ada file PDF yang diupload</p>
                      @if(auth()->user()->canManageTransactions())
                        <a href="{{ route('laporan-iuran.index') }}" class="btn btn-sm btn-info">
                          <i class="bi bi-upload me-1"></i>Upload File PDF
                        </a>
                      @endif
                    @endif
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Export Laporan Keuangan</label>
                    <div class="d-flex flex-column gap-2">
                      <a href="{{ route('laporan.export-excel', ['bulan' => $bulan, 'tahun' => $tahun]) }}" class="btn btn-outline-success">
                        <i class="bi bi-file-earmark-excel me-2"></i>Export Excel
                      </a>
                      @if(auth()->user()->canManageTransactions())
                        <a href="{{ route('laporan-iuran.index') }}" class="btn btn-outline-info">
                          <i class="bi bi-upload me-2"></i>Upload Laporan Iuran PDF
                        </a>
                      @endif
                    </div>
                  </div>
                </div>
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

      @media print {
        body {
          background: white !important;
        }
        .hero, .btn, .card-header .d-flex, .filter-section, .export-section {
          display: none !important;
        }
        .card {
          border: none !important;
          box-shadow: none !important;
          page-break-inside: avoid;
        }
        .card-body {
          padding: 0 !important;
        }
        table {
          border-collapse: collapse !important;
          width: 100% !important;
        }
        table th,
        table td {
          border: 1px solid #000 !important;
          padding: 8px !important;
        }
        .table-responsive {
          overflow: visible !important;
        }
        @page {
          margin: 1cm;
        }
      }
      .print-only {
        display: none;
      }
      @media print {
        .print-only {
          display: block;
        }
      }
    </style>
    @endpush

    @push('scripts')
    <script>
      function updateDownloadLink() {
        const select = document.getElementById('pilih_file_pdf');
        const btnDownload = document.getElementById('btn-download-pdf');
        const selectedOption = select.options[select.selectedIndex];

        if (select.value && selectedOption) {
          const url = selectedOption.getAttribute('data-url');
          btnDownload.href = url;
          btnDownload.style.display = 'block';
        } else {
          btnDownload.style.display = 'none';
        }
      }
    </script>
    @endpush

  @endsection

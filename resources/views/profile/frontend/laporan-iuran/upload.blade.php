@extends('layouts.frontend')

@section('title', 'Upload Laporan Iuran PDF - Website Bukit Damar')

@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1>Upload Laporan Iuran PDF</h1>
            <p class="lead">Upload File PDF Laporan Iuran Warga</p>
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

        @if(session('error'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-triangle me-2"></i>{{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        @if($errors->any())
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-triangle me-2"></i>
            <ul class="mb-0">
              @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        <!-- Form Upload -->
        <div class="row mb-5">
          <div class="col-lg-8">
            <div class="card shadow-sm border-0">
              <div class="card-header bg-white border-bottom">
                <h4 class="mb-0"><i class="bi bi-upload me-2"></i>Upload File PDF</h4>
              </div>
              <div class="card-body p-4">
                <form action="{{ route('laporan-iuran.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf

                  <div class="row mb-3">
                    <div class="col-md-6">
                      <label for="bulan" class="form-label">Bulan (Opsional)</label>
                      <select class="form-select @error('bulan') is-invalid @enderror" id="bulan" name="bulan">
                        <option value="">Pilih Bulan</option>
                        <option value="01" {{ old('bulan') == '01' ? 'selected' : '' }}>Januari</option>
                        <option value="02" {{ old('bulan') == '02' ? 'selected' : '' }}>Februari</option>
                        <option value="03" {{ old('bulan') == '03' ? 'selected' : '' }}>Maret</option>
                        <option value="04" {{ old('bulan') == '04' ? 'selected' : '' }}>April</option>
                        <option value="05" {{ old('bulan') == '05' ? 'selected' : '' }}>Mei</option>
                        <option value="06" {{ old('bulan') == '06' ? 'selected' : '' }}>Juni</option>
                        <option value="07" {{ old('bulan') == '07' ? 'selected' : '' }}>Juli</option>
                        <option value="08" {{ old('bulan') == '08' ? 'selected' : '' }}>Agustus</option>
                        <option value="09" {{ old('bulan') == '09' ? 'selected' : '' }}>September</option>
                        <option value="10" {{ old('bulan') == '10' ? 'selected' : '' }}>Oktober</option>
                        <option value="11" {{ old('bulan') == '11' ? 'selected' : '' }}>November</option>
                        <option value="12" {{ old('bulan') == '12' ? 'selected' : '' }}>Desember</option>
                      </select>
                      @error('bulan')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="col-md-6">
                      <label for="tahun" class="form-label">Tahun <span class="text-danger">*</span></label>
                      <select class="form-select @error('tahun') is-invalid @enderror" id="tahun" name="tahun" required>
                        <option value="">Pilih Tahun</option>
                        @for($i = date('Y'); $i >= date('Y') - 5; $i--)
                          <option value="{{ $i }}" {{ old('tahun', date('Y')) == $i ? 'selected' : '' }}>{{ $i }}</option>
                        @endfor
                      </select>
                      @error('tahun')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="mb-3">
                    <label for="judul" class="form-label">Judul (Opsional)</label>
                    <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul') }}" placeholder="Contoh: Laporan Iuran Bulan Januari 2025">
                    @error('judul')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="mb-3">
                    <label for="file_pdf" class="form-label">File PDF <span class="text-danger">*</span></label>
                    <input type="file" class="form-control @error('file_pdf') is-invalid @enderror" id="file_pdf" name="file_pdf" accept=".pdf" required>
                    <small class="text-muted">Format: PDF, Maksimal: 10MB</small>
                    @error('file_pdf')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="mb-4">
                    <label for="keterangan" class="form-label">Keterangan (Opsional)</label>
                    <textarea class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" rows="3" placeholder="Tambahkan keterangan jika diperlukan">{{ old('keterangan') }}</textarea>
                    @error('keterangan')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="d-flex justify-content-between">
                    <a href="{{ route('laporan') }}" class="btn btn-secondary">
                      <i class="bi bi-arrow-left me-2"></i>Kembali ke Laporan
                    </a>
                    <button type="submit" class="btn btn-primary">
                      <i class="bi bi-upload me-2"></i>Upload PDF
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- Daftar File yang sudah diupload -->
          <div class="col-lg-4">
            <div class="card shadow-sm border-0">
              <div class="card-header bg-white border-bottom">
                <h5 class="mb-0"><i class="bi bi-list-ul me-2"></i>File Terupload</h5>
              </div>
              <div class="card-body p-3">
                @forelse($laporanIuran as $item)
                  <div class="border-bottom pb-2 mb-2">
                    <div class="d-flex justify-content-between align-items-start">
                      <div class="flex-grow-1">
                        <small class="text-muted d-block">
                          @if($item->bulan)
                            {{ ['', 'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'][(int)$item->bulan] }} {{ $item->tahun }}
                          @else
                            {{ $item->tahun }}
                          @endif
                        </small>
                        <small class="d-block text-truncate" style="max-width: 200px;" title="{{ $item->judul ?? $item->nama_file }}">
                          {{ $item->judul ?? $item->nama_file }}
                        </small>
                      </div>
                      <form action="{{ route('laporan-iuran.destroy', $item) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus file ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" title="Hapus">
                          <i class="bi bi-trash"></i>
                        </button>
                      </form>
                    </div>
                  </div>
                @empty
                  <p class="text-muted text-center mb-0">Belum ada file yang diupload</p>
                @endforelse
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


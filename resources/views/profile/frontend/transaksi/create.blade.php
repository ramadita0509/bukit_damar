@extends('layouts.frontend')

@section('title', 'Input Transaksi Keuangan - Website Bukit Damar')

@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1>Input Transaksi Keuangan</h1>
            <p class="lead">Tambah Pemasukan atau Pengeluaran RT 002 RW 017</p>
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

        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="card shadow-sm border-0">
              <div class="card-header bg-white border-bottom">
                <h4 class="mb-0"><i class="bi bi-plus-circle me-2"></i>Form Input Transaksi</h4>
              </div>
              <div class="card-body p-4">
                <form action="{{ route('transaksi.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf

                  <div class="row mb-3">
                    <div class="col-md-6">
                      <label for="jenis" class="form-label">Jenis Transaksi <span class="text-danger">*</span></label>
                      <select class="form-select @error('jenis') is-invalid @enderror" id="jenis" name="jenis" required>
                        <option value="">Pilih Jenis</option>
                        <option value="pemasukan" {{ old('jenis') == 'pemasukan' ? 'selected' : '' }}>Pemasukan</option>
                        <option value="pengeluaran" {{ old('jenis') == 'pengeluaran' ? 'selected' : '' }}>Pengeluaran</option>
                      </select>
                      @error('jenis')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="col-md-6">
                      <label for="tanggal" class="form-label">Tanggal <span class="text-danger">*</span></label>
                      <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" value="{{ old('tanggal', date('Y-m-d')) }}" required>
                      @error('tanggal')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" value="{{ old('keterangan') }}" placeholder="Contoh: Iuran Bulanan Warga" required>
                    @error('keterangan')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="row mb-3">
                    <div class="col-md-6">
                      <label for="kategori" class="form-label">Kategori <span class="text-danger">*</span></label>
                      <select class="form-select @error('kategori') is-invalid @enderror" id="kategori" name="kategori" required>
                        <option value="">Pilih Kategori</option>
                        <optgroup label="Pemasukan">
                          <option value="Iuran" {{ old('kategori') == 'Iuran' ? 'selected' : '' }}>Iuran</option>
                          <option value="Donasi" {{ old('kategori') == 'Donasi' ? 'selected' : '' }}>Donasi</option>
                          <option value="Bantuan" {{ old('kategori') == 'Bantuan' ? 'selected' : '' }}>Bantuan</option>
                          <option value="Lainnya" {{ old('kategori') == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                        </optgroup>
                        <optgroup label="Pengeluaran">
                          <option value="Listrik" {{ old('kategori') == 'Listrik' ? 'selected' : '' }}>Listrik</option>
                          <option value="Air" {{ old('kategori') == 'Air' ? 'selected' : '' }}>Air</option>
                          <option value="Kegiatan" {{ old('kategori') == 'Kegiatan' ? 'selected' : '' }}>Kegiatan</option>
                          <option value="Pemeliharaan" {{ old('kategori') == 'Pemeliharaan' ? 'selected' : '' }}>Pemeliharaan</option>
                          <option value="Operasional" {{ old('kategori') == 'Operasional' ? 'selected' : '' }}>Operasional</option>
                          <option value="Lainnya" {{ old('kategori') == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                        </optgroup>
                      </select>
                      @error('kategori')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="col-md-6">
                      <label for="jumlah" class="form-label">Jumlah (Rp) <span class="text-danger">*</span></label>
                      <input type="number" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" name="jumlah" value="{{ old('jumlah') }}" placeholder="0" min="0" step="0.01" required>
                      @error('jumlah')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="mb-3">
                    <label for="catatan" class="form-label">Catatan (Opsional)</label>
                    <textarea class="form-control @error('catatan') is-invalid @enderror" id="catatan" name="catatan" rows="3" placeholder="Tambahkan catatan jika diperlukan">{{ old('catatan') }}</textarea>
                    @error('catatan')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="mb-4">
                    <label for="bukti" class="form-label">Bukti Transaksi (Opsional)</label>
                    <input type="file" class="form-control @error('bukti') is-invalid @enderror" id="bukti" name="bukti" accept="image/*" onchange="previewImage(this)">
                    <small class="text-muted">Format: JPG, PNG, GIF. Maksimal: 5MB</small>
                    @error('bukti')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div id="preview-container" class="mt-2" style="display: none;">
                      <img id="preview-image" src="" alt="Preview" class="img-thumbnail" style="max-width: 300px; max-height: 300px;">
                    </div>
                  </div>

                  <div class="d-flex justify-content-between">
                    <a href="{{ route('laporan') }}" class="btn btn-secondary">
                      <i class="bi bi-arrow-left me-2"></i>Kembali ke Laporan
                    </a>
                    <button type="submit" class="btn btn-primary">
                      <i class="bi bi-save me-2"></i>Simpan Transaksi
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    @push('scripts')
    <script>
      function previewImage(input) {
        const previewContainer = document.getElementById('preview-container');
        const previewImage = document.getElementById('preview-image');

        if (input.files && input.files[0]) {
          const reader = new FileReader();

          reader.onload = function(e) {
            previewImage.src = e.target.result;
            previewContainer.style.display = 'block';
          }

          reader.readAsDataURL(input.files[0]);
        } else {
          previewContainer.style.display = 'none';
        }
      }
    </script>
    @endpush

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


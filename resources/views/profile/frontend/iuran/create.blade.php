@extends('layouts.frontend')

@section('title', 'Bayar Iuran Warga - Website Bukit Damar')

@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1>Bayar Iuran Warga</h1>
            <p class="lead">Upload Bukti Transfer Pembayaran Iuran Warga</p>
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
                <h4 class="mb-0"><i class="bi bi-upload me-2"></i>Form Upload Bukti Transfer</h4>
              </div>
              <div class="card-body p-4">
                <form action="{{ route('iuran.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf

                  <div class="alert alert-info">
                    <i class="bi bi-info-circle me-2"></i>
                    <strong>Informasi:</strong> Setelah mengupload bukti transfer, pembayaran Anda akan ditinjau oleh admin. Anda akan dapat melihat status pembayaran di halaman history. Untuk info lebih lanjut silakan kontak WA bendahara agar segera di proses.
                    <hr class="my-2">
                    <div class="mt-2">
                      <strong>Kontak Bendahara:</strong><br>
                      <i class="bi bi-person me-1"></i> Bendahara 1 : Bpk Mayko, WA : <a href="https://wa.me/6285220019336" target="_blank" class="text-decoration-none">085220019336</a><br>
                      <i class="bi bi-person me-1"></i> Bendahara 2 : Bpk Sugeng, WA : <a href="https://wa.me/6289624314334" target="_blank" class="text-decoration-none">089624314334</a>
                    </div>
                  </div>

                  <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal Transfer <span class="text-danger">*</span></label>
                    <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" value="{{ old('tanggal', date('Y-m-d')) }}" required>
                    @error('tanggal')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="mb-3">
                    <label for="jumlah" class="form-label">Jumlah Transfer (Rp) <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" name="jumlah" value="{{ old('jumlah') }}" placeholder="1.000.000" required>
                    <input type="hidden" id="jumlah_raw" name="jumlah_raw">
                    <small class="text-muted">Format: 1.000.000 (gunakan titik sebagai pemisah ribuan)</small>
                    @error('jumlah')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="mb-3">
                    <label for="bukti" class="form-label">Bukti Transfer <span class="text-danger">*</span></label>
                    <input type="file" class="form-control @error('bukti') is-invalid @enderror" id="bukti" name="bukti" accept="image/*" onchange="previewImage(this)" required>
                    <small class="text-muted">Format: JPG, PNG, GIF. Maksimal: 5MB</small>
                    @error('bukti')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div id="preview-container" class="mt-2" style="display: none;">
                      <img id="preview-image" src="" alt="Preview" class="img-thumbnail" style="max-width: 300px; max-height: 300px;">
                    </div>
                  </div>

                  <div class="mb-4">
                    <label for="catatan" class="form-label">Catatan (Opsional)</label>
                    <textarea class="form-control @error('catatan') is-invalid @enderror" id="catatan" name="catatan" rows="3" placeholder="Tambahkan catatan jika diperlukan, misalnya: Iuran bulan Januari 2025">{{ old('catatan') }}</textarea>
                    @error('catatan')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="d-flex justify-content-between">
                    <a href="{{ route('iuran.history') }}" class="btn btn-secondary">
                      <i class="bi bi-arrow-left me-2"></i>Kembali ke History
                    </a>
                    <button type="submit" class="btn btn-primary">
                      <i class="bi bi-upload me-2"></i>Upload Bukti Transfer
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

      // Format input jumlah dengan titik
      document.addEventListener('DOMContentLoaded', function() {
        const jumlahInput = document.getElementById('jumlah');
        const jumlahRawInput = document.getElementById('jumlah_raw');
        const form = jumlahInput.closest('form');

        // Format angka dengan titik sebagai pemisah ribuan
        function formatNumber(value) {
          // Hapus semua karakter selain angka
          const numbers = value.replace(/\D/g, '');
          // Format dengan titik sebagai pemisah ribuan
          return numbers.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
        }

        // Saat user mengetik
        jumlahInput.addEventListener('input', function(e) {
          const formatted = formatNumber(e.target.value);
          e.target.value = formatted;
          // Simpan nilai tanpa format untuk dikirim ke server
          jumlahRawInput.value = formatted.replace(/\./g, '');
        });

        // Saat form disubmit, pastikan nilai raw dikirim
        form.addEventListener('submit', function(e) {
          const rawValue = jumlahInput.value.replace(/\./g, '');
          jumlahRawInput.value = rawValue;
          // Ganti nilai input dengan raw value
          jumlahInput.value = rawValue;
        });
      });
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


@extends('layouts.frontend')

@php
use Illuminate\Support\Facades\Storage;
@endphp

@section('title', 'Edit Transaksi Keuangan - Website Bukit Damar')

@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1>Edit Transaksi Keuangan</h1>
            <p class="lead">Ubah Data Pemasukan atau Pengeluaran RT 002 RW 017</p>
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
                <h4 class="mb-0"><i class="bi bi-pencil-square me-2"></i>Form Edit Transaksi</h4>
              </div>
              <div class="card-body p-4">
                <form action="{{ route('transaksi.update', $transaksi) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')

                  <div class="row mb-3">
                    <div class="col-md-6">
                      <label for="jenis" class="form-label">Jenis Transaksi <span class="text-danger">*</span></label>
                      <select class="form-select @error('jenis') is-invalid @enderror" id="jenis" name="jenis" required>
                        <option value="">Pilih Jenis</option>
                        <option value="pemasukan" {{ old('jenis', $transaksi->jenis) == 'pemasukan' ? 'selected' : '' }}>Pemasukan</option>
                        <option value="pengeluaran" {{ old('jenis', $transaksi->jenis) == 'pengeluaran' ? 'selected' : '' }}>Pengeluaran</option>
                      </select>
                      @error('jenis')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="col-md-6">
                      <label for="tanggal" class="form-label">Tanggal <span class="text-danger">*</span></label>
                      <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" value="{{ old('tanggal', $transaksi->tanggal->format('Y-m-d')) }}" required>
                      @error('tanggal')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" value="{{ old('keterangan', $transaksi->keterangan) }}" placeholder="Contoh: Iuran Bulanan Warga" required>
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
                          <option value="Iuran" {{ old('kategori', $transaksi->kategori) == 'Iuran' ? 'selected' : '' }}>Iuran</option>
                          <option value="Donasi" {{ old('kategori', $transaksi->kategori) == 'Donasi' ? 'selected' : '' }}>Donasi</option>
                          <option value="Bantuan" {{ old('kategori', $transaksi->kategori) == 'Bantuan' ? 'selected' : '' }}>Bantuan</option>
                          <option value="Lainnya" {{ old('kategori', $transaksi->kategori) == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                        </optgroup>
                        <optgroup label="Pengeluaran">
                          <option value="Listrik" {{ old('kategori', $transaksi->kategori) == 'Listrik' ? 'selected' : '' }}>Listrik</option>
                          <option value="Air" {{ old('kategori', $transaksi->kategori) == 'Air' ? 'selected' : '' }}>Air</option>
                          <option value="Kegiatan" {{ old('kategori', $transaksi->kategori) == 'Kegiatan' ? 'selected' : '' }}>Kegiatan</option>
                          <option value="Pemeliharaan" {{ old('kategori', $transaksi->kategori) == 'Pemeliharaan' ? 'selected' : '' }}>Pemeliharaan</option>
                          <option value="Operasional" {{ old('kategori', $transaksi->kategori) == 'Operasional' ? 'selected' : '' }}>Operasional</option>
                          <option value="Lainnya" {{ old('kategori', $transaksi->kategori) == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                        </optgroup>
                      </select>
                      @error('kategori')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="col-md-6">
                      <label for="jumlah" class="form-label">Jumlah (Rp) <span class="text-danger">*</span></label>
                      <input type="text" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" name="jumlah" value="{{ old('jumlah', number_format($transaksi->jumlah, 0, ',', '.')) }}" placeholder="1.000.000" required>
                      <input type="hidden" id="jumlah_raw" name="jumlah_raw">
                      <small class="text-muted">Format: 1.000.000 (gunakan titik sebagai pemisah ribuan)</small>
                      @error('jumlah')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="mb-3">
                    <label for="catatan" class="form-label">Catatan (Opsional)</label>
                    <textarea class="form-control @error('catatan') is-invalid @enderror" id="catatan" name="catatan" rows="3" placeholder="Tambahkan catatan jika diperlukan">{{ old('catatan', $transaksi->catatan) }}</textarea>
                    @error('catatan')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="mb-4">
                    <label for="bukti" class="form-label">Bukti Transaksi (Opsional)</label>
                    @if($transaksi->bukti)
                      <div class="mb-2">
                        <p class="mb-1"><strong>Bukti Saat Ini:</strong></p>
                        <img src="{{ Storage::url($transaksi->bukti) }}" alt="Bukti Transaksi" class="img-thumbnail" style="max-width: 300px; max-height: 300px; cursor: pointer;" onclick="showBuktiModal('{{ Storage::url($transaksi->bukti) }}')">
                      </div>
                      <small class="text-muted d-block mb-2">Upload file baru untuk mengganti bukti</small>
                    @endif
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
                      <i class="bi bi-save me-2"></i>Update Transaksi
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

      function showBuktiModal(imageUrl) {
        const modal = new bootstrap.Modal(document.getElementById('buktiModal'));
        document.getElementById('buktiModalImage').src = imageUrl;
        modal.show();
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

    <!-- Modal untuk melihat bukti -->
    <div class="modal fade" id="buktiModal" tabindex="-1" aria-labelledby="buktiModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="buktiModalLabel">Bukti Transaksi</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-center">
            <img id="buktiModalImage" src="" alt="Bukti Transaksi" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

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


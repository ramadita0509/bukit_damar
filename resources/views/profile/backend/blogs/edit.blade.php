@extends('layouts.dashboard')

@section('title', 'Edit Blog - Website Bukit Damar')

@php
  $header = 'Edit Blog';
@endphp

@section('content')

  @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <div class="row">
    <div class="col-12">
      <div class="card shadow-sm border-0">
        <div class="card-header bg-white border-bottom">
          <div class="d-flex justify-content-between align-items-center">
            <h5 class="mb-0"><i class="bi bi-journal-text me-2"></i>Form Edit Blog</h5>
            <a href="{{ route('blogs.index') }}" class="btn btn-sm btn-secondary">
              <i class="bi bi-arrow-left me-1"></i>Kembali
            </a>
          </div>
        </div>
        <div class="card-body p-4">
          <form method="POST" action="{{ route('blogs.update', $blog) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

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

            <!-- Judul -->
            <div class="mb-3">
              <label for="judul" class="form-label">Judul Blog <span class="text-danger">*</span></label>
              <input type="text"
                     class="form-control @error('judul') is-invalid @enderror"
                     id="judul"
                     name="judul"
                     value="{{ old('judul', $blog->judul) }}"
                     required
                     autofocus
                     placeholder="Masukkan judul blog">
              @error('judul')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <!-- Kategori -->
            <div class="mb-3">
              <label for="kategori" class="form-label">Kategori</label>
              @php
                $standardCategories = ['Kegiatan', 'Olahraga', 'Keagamaan', 'Kesehatan', 'Sosial', 'Infrastruktur', 'Pengumuman', 'Berita', 'Pendidikan', 'Ekonomi'];
                $currentKategori = old('kategori', $blog->kategori);
                $isCustomCategory = $currentKategori && !in_array($currentKategori, $standardCategories);
              @endphp
              <select class="form-select @error('kategori') is-invalid @enderror" id="kategori" name="kategori" onchange="toggleCustomCategory(this)">
                <option value="">Pilih Kategori (Opsional)</option>
                <option value="Kegiatan" {{ $currentKategori == 'Kegiatan' ? 'selected' : '' }}>Kegiatan</option>
                <option value="Olahraga" {{ $currentKategori == 'Olahraga' ? 'selected' : '' }}>Olahraga</option>
                <option value="Keagamaan" {{ $currentKategori == 'Keagamaan' ? 'selected' : '' }}>Keagamaan</option>
                <option value="Kesehatan" {{ $currentKategori == 'Kesehatan' ? 'selected' : '' }}>Kesehatan</option>
                <option value="Sosial" {{ $currentKategori == 'Sosial' ? 'selected' : '' }}>Sosial</option>
                <option value="Infrastruktur" {{ $currentKategori == 'Infrastruktur' ? 'selected' : '' }}>Infrastruktur</option>
                <option value="Pengumuman" {{ $currentKategori == 'Pengumuman' ? 'selected' : '' }}>Pengumuman</option>
                <option value="Berita" {{ $currentKategori == 'Berita' ? 'selected' : '' }}>Berita</option>
                <option value="Pendidikan" {{ $currentKategori == 'Pendidikan' ? 'selected' : '' }}>Pendidikan</option>
                <option value="Ekonomi" {{ $currentKategori == 'Ekonomi' ? 'selected' : '' }}>Ekonomi</option>
                <option value="custom" {{ $isCustomCategory ? 'selected' : '' }}>Lainnya (Kustom)</option>
              </select>
              <div id="custom-category-container" class="mt-2" style="display: {{ $isCustomCategory ? 'block' : 'none' }};">
                <input type="text"
                       class="form-control @error('kategori') is-invalid @enderror"
                       id="kategori-custom"
                       name="kategori"
                       value="{{ $isCustomCategory ? $currentKategori : '' }}"
                       placeholder="Masukkan kategori kustom">
                <small class="text-muted">Masukkan nama kategori kustom</small>
              </div>
              @error('kategori')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
              <small class="text-muted">Pilih kategori blog atau biarkan kosong</small>
            </div>

            <!-- Excerpt -->
            <div class="mb-3">
              <label for="excerpt" class="form-label">Ringkasan (Excerpt)</label>
              <textarea class="form-control @error('excerpt') is-invalid @enderror"
                        id="excerpt"
                        name="excerpt"
                        rows="3"
                        placeholder="Ringkasan singkat tentang blog (akan muncul di halaman list blog)">{{ old('excerpt', $blog->excerpt) }}</textarea>
              @error('excerpt')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
              <small class="text-muted">Opsional: Ringkasan singkat blog (maksimal 500 karakter)</small>
            </div>

            <!-- Konten -->
            <div class="mb-3">
              <label for="konten" class="form-label">Konten Blog <span class="text-danger">*</span></label>
              <textarea class="form-control @error('konten') is-invalid @enderror"
                        id="konten"
                        name="konten"
                        rows="15"
                        required
                        placeholder="Tulis konten blog di sini...">{{ old('konten', $blog->konten) }}</textarea>
              @error('konten')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
              <small class="text-muted">Gunakan editor di atas untuk memformat konten, upload gambar, dan lainnya</small>
            </div>

            <!-- Gambar -->
            <div class="mb-3">
              <label for="gambar" class="form-label">Gambar Utama</label>
              @if($blog->gambar)
                <div class="mb-2">
                  <p class="mb-1"><strong>Gambar Saat Ini:</strong></p>
                  <img src="{{ Storage::url($blog->gambar) }}" alt="Gambar Blog" class="img-thumbnail" style="max-width: 400px; max-height: 300px;">
                </div>
                <small class="text-muted d-block mb-2">Upload file baru untuk mengganti gambar</small>
              @endif
              <input type="file"
                     class="form-control @error('gambar') is-invalid @enderror"
                     id="gambar"
                     name="gambar"
                     accept="image/*"
                     onchange="previewImage(this)">
              @error('gambar')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
              <small class="text-muted">Format: JPG, PNG, GIF. Maksimal: 5MB</small>
              <div id="preview-container" class="mt-2" style="display: none;">
                <img id="preview-image" src="" alt="Preview" class="img-thumbnail" style="max-width: 400px; max-height: 300px;">
              </div>
            </div>

            <!-- Status -->
            <div class="mb-4">
              <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
              <select class="form-select @error('status') is-invalid @enderror" id="status" name="status" required>
                <option value="draft" {{ old('status', $blog->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                <option value="published" {{ old('status', $blog->status) == 'published' ? 'selected' : '' }}>Published</option>
              </select>
              @error('status')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
              <small class="text-muted">Pilih status blog. Published akan tampil di halaman frontend.</small>
            </div>

            <div class="d-flex justify-content-between">
              <a href="{{ route('blogs.index') }}" class="btn btn-secondary">
                <i class="bi bi-x-circle me-2"></i>Batal
              </a>
              <button type="submit" class="btn btn-primary">
                <i class="bi bi-save me-2"></i>Update Blog
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  @push('styles')
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-bs4.min.css" rel="stylesheet">
  @endpush

  @push('scripts')
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-bs4.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#konten').summernote({
        height: 500,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'italic', 'underline', 'clear']],
          ['fontname', ['fontname']],
          ['fontsize', ['fontsize']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ],
        callbacks: {
          onImageUpload: function(files) {
            uploadImage(files[0]);
          }
        }
      });

      function uploadImage(file) {
        var formData = new FormData();
        formData.append('file', file);

        $.ajax({
          url: '{{ route("blogs.upload-image") }}',
          method: 'POST',
          data: formData,
          processData: false,
          contentType: false,
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          success: function(response) {
            $('#konten').summernote('insertImage', response.url);
          },
          error: function(xhr) {
            alert('Gagal mengupload gambar: ' + (xhr.responseJSON?.error || 'Terjadi kesalahan'));
          }
        });
      }

      // Pastikan konten dari Summernote tersimpan ke textarea sebelum submit
      $('form').on('submit', function() {
        $('#konten').val($('#konten').summernote('code'));
      });
    });

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

    function toggleCustomCategory(select) {
      const customContainer = document.getElementById('custom-category-container');
      const customInput = document.getElementById('kategori-custom');
      const selectInput = document.getElementById('kategori');

      if (select.value === 'custom') {
        customContainer.style.display = 'block';
        selectInput.name = 'kategori_temp'; // Disable select name
        customInput.name = 'kategori'; // Enable custom input name
        customInput.focus();
      } else {
        customContainer.style.display = 'none';
        selectInput.name = 'kategori'; // Enable select name
        customInput.name = 'kategori_temp'; // Disable custom input name
        customInput.value = ''; // Clear custom input
      }
    }

    // Check on page load if custom category should be shown
    document.addEventListener('DOMContentLoaded', function() {
      const kategoriSelect = document.getElementById('kategori');
      if (kategoriSelect) {
        toggleCustomCategory(kategoriSelect);
      }
    });
  </script>
  @endpush

@endsection


<section>
  <header class="mb-4">
    <h3 class="h5 mb-2">Informasi Profile</h3>
    <p class="text-muted small mb-0">
      Perbarui informasi profil dan alamat email akun Anda. Foto profil akan digunakan sebagai foto creator di blog.
    </p>
  </header>

  @php
    use Illuminate\Support\Facades\Storage;
  @endphp

  <form id="send-verification" method="post" action="{{ route('verification.send') }}">
    @csrf
  </form>

  <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data">
    @csrf
    @method('patch')

    <div class="mb-3">
      <label for="name" class="form-label">Nama</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
      @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $user->email) }}" required autocomplete="username">
      @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror

      @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
        <div class="alert alert-warning mt-2">
          <p class="mb-2">
            Alamat email Anda belum diverifikasi.
            <button form="send-verification" class="btn btn-link p-0 text-decoration-underline">
              Klik di sini untuk mengirim ulang email verifikasi.
            </button>
          </p>

          @if (session('status') === 'verification-link-sent')
            <p class="mb-0 text-success">
              Link verifikasi baru telah dikirim ke alamat email Anda.
            </p>
          @endif
        </div>
      @endif
    </div>

    <!-- Foto Profil -->
    <div class="mb-3">
      <label for="foto_profil" class="form-label">Foto Profil</label>
      @php
        $fotoProfil = $user->foto_profil ?? null;
      @endphp
      @if($fotoProfil)
        <div class="mb-2">
          <p class="mb-1"><strong>Foto Saat Ini:</strong></p>
          <img src="{{ Storage::url($fotoProfil) }}" alt="Foto Profil" class="img-thumbnail" style="max-width: 200px; max-height: 200px; border-radius: 50%;">
        </div>
        <small class="text-muted d-block mb-2">Upload file baru untuk mengganti foto profil</small>
      @endif
      <input type="file"
             class="form-control @error('foto_profil') is-invalid @enderror"
             id="foto_profil"
             name="foto_profil"
             accept="image/*"
             onchange="previewFotoProfil(this)">
      @error('foto_profil')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
      <small class="text-muted">Format: JPG, PNG, GIF. Maksimal: 2MB. Foto ini akan digunakan sebagai foto creator di blog.</small>
      <div id="preview-foto-container" class="mt-2" style="display: none;">
        <img id="preview-foto" src="" alt="Preview" class="img-thumbnail" style="max-width: 200px; max-height: 200px; border-radius: 50%;">
      </div>
    </div>

    <div class="d-flex align-items-center gap-3">
      <button type="submit" class="btn btn-primary">Simpan</button>

      @if (session('status') === 'profile-updated')
        <div class="alert alert-success mb-0 py-2 px-3" role="alert">
          Tersimpan.
        </div>
      @endif
    </div>
  </form>

  <script>
    function previewFotoProfil(input) {
      const previewContainer = document.getElementById('preview-foto-container');
      const previewFoto = document.getElementById('preview-foto');

      if (input.files && input.files[0]) {
        const reader = new FileReader();

        reader.onload = function(e) {
          previewFoto.src = e.target.result;
          previewContainer.style.display = 'block';
        }

        reader.readAsDataURL(input.files[0]);
      } else {
        previewContainer.style.display = 'none';
      }
    }
  </script>
</section>

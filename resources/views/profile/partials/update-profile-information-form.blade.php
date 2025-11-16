<section>
  <header class="mb-4">
    <h3 class="h5 mb-2">Informasi Profile</h3>
    <p class="text-muted small mb-0">
      Perbarui informasi profil dan alamat email akun Anda.
    </p>
  </header>

  <form id="send-verification" method="post" action="{{ route('verification.send') }}">
    @csrf
  </form>

  <form method="post" action="{{ route('profile.update') }}">
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

    <div class="d-flex align-items-center gap-3">
      <button type="submit" class="btn btn-primary">Simpan</button>

      @if (session('status') === 'profile-updated')
        <div class="alert alert-success mb-0 py-2 px-3" role="alert">
          Tersimpan.
        </div>
      @endif
    </div>
  </form>
</section>

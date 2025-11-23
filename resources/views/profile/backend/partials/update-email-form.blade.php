<section>
  <header class="mb-4">
    <h3 class="h5 mb-2">Update Email</h3>
    <p class="text-muted small mb-0">
      Perbarui alamat email akun Anda. Email akan otomatis terverifikasi setelah diupdate.
    </p>
  </header>

  <form method="post" action="{{ route('profile.update-email') }}">
    @csrf
    @method('patch')

    <div class="mb-3">
      <label for="current_email" class="form-label">Email Saat Ini</label>
      <input type="email" class="form-control" id="current_email" value="{{ $user->email }}" disabled readonly style="background-color: #e9ecef;">
      <small class="text-muted">Email yang sedang digunakan</small>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email Baru</label>
      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $user->email) }}" required autocomplete="username" placeholder="Masukkan email baru">
      @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
      <small class="text-muted">Email baru akan otomatis terverifikasi setelah diupdate</small>
    </div>

    <div class="d-flex align-items-center gap-3">
      <button type="submit" class="btn btn-primary">Update Email</button>

      @if (session('status') === 'email-updated')
        <div class="alert alert-success mb-0 py-2 px-3" role="alert">
          Email berhasil diupdate.
        </div>
      @endif
    </div>
  </form>
</section>


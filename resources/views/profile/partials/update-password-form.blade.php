<section>
  <header class="mb-4">
    <h3 class="h5 mb-2">Update Password</h3>
    <p class="text-muted small mb-0">
      Pastikan akun Anda menggunakan password yang panjang dan acak untuk tetap aman.
    </p>
  </header>

  <form method="post" action="{{ route('password.update') }}">
    @csrf
    @method('put')

    <div class="mb-3">
      <label for="update_password_current_password" class="form-label">Password Saat Ini</label>
      <input type="password" class="form-control {{ $errors->updatePassword->has('current_password') ? 'is-invalid' : '' }}" id="update_password_current_password" name="current_password" autocomplete="current-password">
      @if($errors->updatePassword->has('current_password'))
        <div class="invalid-feedback">{{ $errors->updatePassword->first('current_password') }}</div>
      @endif
    </div>

    <div class="mb-3">
      <label for="update_password_password" class="form-label">Password Baru</label>
      <input type="password" class="form-control {{ $errors->updatePassword->has('password') ? 'is-invalid' : '' }}" id="update_password_password" name="password" autocomplete="new-password">
      @if($errors->updatePassword->has('password'))
        <div class="invalid-feedback">{{ $errors->updatePassword->first('password') }}</div>
      @endif
    </div>

    <div class="mb-3">
      <label for="update_password_password_confirmation" class="form-label">Konfirmasi Password</label>
      <input type="password" class="form-control {{ $errors->updatePassword->has('password_confirmation') ? 'is-invalid' : '' }}" id="update_password_password_confirmation" name="password_confirmation" autocomplete="new-password">
      @if($errors->updatePassword->has('password_confirmation'))
        <div class="invalid-feedback">{{ $errors->updatePassword->first('password_confirmation') }}</div>
      @endif
    </div>

    <div class="d-flex align-items-center gap-3">
      <button type="submit" class="btn btn-primary">Simpan</button>

      @if (session('status') === 'password-updated')
        <div class="alert alert-success mb-0 py-2 px-3" role="alert">
          Tersimpan.
        </div>
      @endif
    </div>
  </form>
</section>

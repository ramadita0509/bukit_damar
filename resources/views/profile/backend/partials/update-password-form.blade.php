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
      <div class="input-group">
        <input type="password" class="form-control {{ $errors->updatePassword->has('current_password') ? 'is-invalid' : '' }}" id="update_password_current_password" name="current_password" autocomplete="current-password">
        <button class="btn btn-outline-secondary" type="button" id="toggleCurrentPassword" style="border-color: #ced4da;">
          <i class="bi bi-eye" id="iconCurrentPassword"></i>
        </button>
        @if($errors->updatePassword->has('current_password'))
          <div class="invalid-feedback d-block">{{ $errors->updatePassword->first('current_password') }}</div>
        @endif
      </div>
    </div>

    <div class="mb-3">
      <label for="update_password_password" class="form-label">Password Baru</label>
      <div class="input-group">
        <input type="password" class="form-control {{ $errors->updatePassword->has('password') ? 'is-invalid' : '' }}" id="update_password_password" name="password" autocomplete="new-password">
        <button class="btn btn-outline-secondary" type="button" id="toggleNewPassword" style="border-color: #ced4da;">
          <i class="bi bi-eye" id="iconNewPassword"></i>
        </button>
        @if($errors->updatePassword->has('password'))
          <div class="invalid-feedback d-block">{{ $errors->updatePassword->first('password') }}</div>
        @endif
      </div>
    </div>

    <div class="mb-3">
      <label for="update_password_password_confirmation" class="form-label">Konfirmasi Password</label>
      <div class="input-group">
        <input type="password" class="form-control {{ $errors->updatePassword->has('password_confirmation') ? 'is-invalid' : '' }}" id="update_password_password_confirmation" name="password_confirmation" autocomplete="new-password">
        <button class="btn btn-outline-secondary" type="button" id="toggleConfirmPassword" style="border-color: #ced4da;">
          <i class="bi bi-eye" id="iconConfirmPassword"></i>
        </button>
        @if($errors->updatePassword->has('password_confirmation'))
          <div class="invalid-feedback d-block">{{ $errors->updatePassword->first('password_confirmation') }}</div>
        @endif
      </div>
    </div>

    <script>
      // Toggle Current Password
      document.getElementById('toggleCurrentPassword').addEventListener('click', function() {
        const passwordField = document.getElementById('update_password_current_password');
        const icon = document.getElementById('iconCurrentPassword');
        if (passwordField.type === 'password') {
          passwordField.type = 'text';
          icon.classList.remove('bi-eye');
          icon.classList.add('bi-eye-slash');
        } else {
          passwordField.type = 'password';
          icon.classList.remove('bi-eye-slash');
          icon.classList.add('bi-eye');
        }
      });

      // Toggle New Password
      document.getElementById('toggleNewPassword').addEventListener('click', function() {
        const passwordField = document.getElementById('update_password_password');
        const icon = document.getElementById('iconNewPassword');
        if (passwordField.type === 'password') {
          passwordField.type = 'text';
          icon.classList.remove('bi-eye');
          icon.classList.add('bi-eye-slash');
        } else {
          passwordField.type = 'password';
          icon.classList.remove('bi-eye-slash');
          icon.classList.add('bi-eye');
        }
      });

      // Toggle Confirm Password
      document.getElementById('toggleConfirmPassword').addEventListener('click', function() {
        const passwordField = document.getElementById('update_password_password_confirmation');
        const icon = document.getElementById('iconConfirmPassword');
        if (passwordField.type === 'password') {
          passwordField.type = 'text';
          icon.classList.remove('bi-eye');
          icon.classList.add('bi-eye-slash');
        } else {
          passwordField.type = 'password';
          icon.classList.remove('bi-eye-slash');
          icon.classList.add('bi-eye');
        }
      });
    </script>

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

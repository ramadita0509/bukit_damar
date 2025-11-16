<section>
  <header class="mb-4">
    <h3 class="h5 mb-2 text-danger">Hapus Akun</h3>
    <p class="text-muted small mb-0">
      Setelah akun Anda dihapus, semua sumber daya dan data akan dihapus secara permanen. Sebelum menghapus akun Anda, silakan unduh data atau informasi yang ingin Anda simpan.
    </p>
  </header>

  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmUserDeletion">
    Hapus Akun
  </button>

  <!-- Modal -->
  <div class="modal fade" id="confirmUserDeletion" tabindex="-1" aria-labelledby="confirmUserDeletionLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="post" action="{{ route('profile.destroy') }}">
          @csrf
          @method('delete')

          <div class="modal-header">
            <h5 class="modal-title" id="confirmUserDeletionLabel">Apakah Anda yakin ingin menghapus akun?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <p class="mb-3">
              Setelah akun Anda dihapus, semua sumber daya dan data akan dihapus secara permanen. Silakan masukkan password Anda untuk mengonfirmasi bahwa Anda ingin menghapus akun secara permanen.
            </p>

            <div class="mb-3">
              <label for="delete_password" class="form-label">Password</label>
              <div class="input-group">
                <input type="password" class="form-control {{ $errors->userDeletion->has('password') ? 'is-invalid' : '' }}" id="delete_password" name="password" placeholder="Masukkan password Anda">
                <button class="btn btn-outline-secondary" type="button" id="toggleDeletePassword" style="border-color: #ced4da;">
                  <i class="bi bi-eye" id="iconDeletePassword"></i>
                </button>
                @if($errors->userDeletion->has('password'))
                  <div class="invalid-feedback d-block">{{ $errors->userDeletion->first('password') }}</div>
                @endif
              </div>
            </div>

            <script>
              document.getElementById('toggleDeletePassword').addEventListener('click', function() {
                const passwordField = document.getElementById('delete_password');
                const icon = document.getElementById('iconDeletePassword');
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
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-danger">Hapus Akun</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

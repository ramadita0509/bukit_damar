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
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control {{ $errors->userDeletion->has('password') ? 'is-invalid' : '' }}" id="password" name="password" placeholder="Masukkan password Anda">
              @if($errors->userDeletion->has('password'))
                <div class="invalid-feedback">{{ $errors->userDeletion->first('password') }}</div>
              @endif
            </div>
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

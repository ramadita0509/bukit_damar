@extends('layouts.dashboard')

@section('title', 'Tambah User Baru - Website Bukit Damar')

@php
  $header = 'Tambah User Baru';
@endphp

@section('content')

  @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  @if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <i class="bi bi-exclamation-triangle me-2"></i>{{ session('error') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <div class="row">
    <div class="col-12">
      <div class="card shadow-sm border-0">
        <div class="card-header bg-white border-bottom">
          <div class="d-flex justify-content-between align-items-center">
            <h5 class="mb-0"><i class="bi bi-person-plus me-2"></i>Form Tambah User Baru</h5>
            <a href="{{ route('users.index') }}" class="btn btn-sm btn-secondary">
              <i class="bi bi-arrow-left me-1"></i>Kembali
            </a>
          </div>
        </div>
        <div class="card-body p-4">
          <form method="POST" action="{{ route('users.store') }}">
            @csrf

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

            <!-- Name -->
            <div class="mb-3">
              <label for="name" class="form-label">Nama <span class="text-danger">*</span></label>
              <input type="text"
                     class="form-control @error('name') is-invalid @enderror"
                     id="name"
                     name="name"
                     value="{{ old('name') }}"
                     required
                     autofocus
                     autocomplete="name"
                     placeholder="Masukkan nama lengkap">
              @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <!-- Email Address -->
            <div class="mb-3">
              <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
              <input type="email"
                     class="form-control @error('email') is-invalid @enderror"
                     id="email"
                     name="email"
                     value="{{ old('email') }}"
                     required
                     autocomplete="username"
                     placeholder="contoh@email.com">
              @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <!-- Role -->
            <div class="mb-3">
              <label for="role" class="form-label">Role <span class="text-danger">*</span></label>
              <select class="form-select @error('role') is-invalid @enderror" id="role" name="role" required>
                <option value="">Pilih Role</option>
                <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
                <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="super_admin" {{ old('role') == 'super_admin' ? 'selected' : '' }}>Super Admin</option>
              </select>
              @error('role')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
              <small class="text-muted">Pilih role untuk user baru</small>
            </div>

            <!-- Password -->
            <div class="mb-3">
              <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
              <div class="position-relative">
                <input type="password"
                       class="form-control @error('password') is-invalid @enderror"
                       id="password"
                       name="password"
                       required
                       autocomplete="new-password"
                       placeholder="Masukkan password">
                <button type="button"
                        id="togglePassword"
                        class="btn btn-link position-absolute end-0 top-50 translate-middle-y pe-3 text-decoration-none"
                        style="border: none; background: none;">
                  <i class="bi bi-eye" id="iconPassword"></i>
                </button>
              </div>
              @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
              <small class="text-muted">Minimal 8 karakter</small>
            </div>

            <!-- Confirm Password -->
            <div class="mb-4">
              <label for="password_confirmation" class="form-label">Konfirmasi Password <span class="text-danger">*</span></label>
              <div class="position-relative">
                <input type="password"
                       class="form-control @error('password_confirmation') is-invalid @enderror"
                       id="password_confirmation"
                       name="password_confirmation"
                       required
                       autocomplete="new-password"
                       placeholder="Konfirmasi password">
                <button type="button"
                        id="togglePasswordConfirmation"
                        class="btn btn-link position-absolute end-0 top-50 translate-middle-y pe-3 text-decoration-none"
                        style="border: none; background: none;">
                  <i class="bi bi-eye" id="iconPasswordConfirmation"></i>
                </button>
              </div>
              @error('password_confirmation')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="d-flex justify-content-between">
              <a href="{{ route('users.index') }}" class="btn btn-secondary">
                <i class="bi bi-x-circle me-2"></i>Batal
              </a>
              <button type="submit" class="btn btn-primary">
                <i class="bi bi-save me-2"></i>Simpan User
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  @push('scripts')
  <script>
    // Toggle Password
    document.getElementById('togglePassword').addEventListener('click', function() {
      const passwordField = document.getElementById('password');
      const icon = document.getElementById('iconPassword');
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

    // Toggle Password Confirmation
    document.getElementById('togglePasswordConfirmation').addEventListener('click', function() {
      const passwordField = document.getElementById('password_confirmation');
      const icon = document.getElementById('iconPasswordConfirmation');
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
  @endpush

@endsection

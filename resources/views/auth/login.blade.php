<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Login - Website Bukit Damar</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page" style="background: #f8f9fa; min-height: 100vh; display: flex; align-items: center;">

  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5">
        <!-- Logo Section -->
        <div class="text-center mb-4">
          <a href="{{ url('/') }}" class="d-inline-block text-decoration-none">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo Bukit Damar" style="max-height: 80px; margin-bottom: 15px;">
            <h3 class="mb-1" style="color: #2c3e50; font-weight: 600;">Website Bukit Damar</h3>
            <p class="text-muted mb-0" style="font-size: 14px;">Cluster Bukit Damar Citra Indah City</p>
          </a>
        </div>

        <!-- Login Card -->
        <div class="card shadow-sm border-0">
          <div class="card-header bg-white border-bottom">
            <div class="d-flex justify-content-between align-items-center">
              <h5 class="mb-0"><i class="bi bi-box-arrow-in-right me-2"></i>Login</h5>
              <a href="{{ url('/') }}" class="btn btn-sm btn-secondary">
                <i class="bi bi-house me-1"></i>Beranda
              </a>
            </div>
          </div>
          <div class="card-body p-4">
            <!-- Session Status -->
            @if (session('status'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-2"></i>{{ session('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
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

              <!-- Email Address -->
              <div class="mb-3">
                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                <input type="email"
                       class="form-control @error('email') is-invalid @enderror"
                       id="email"
                       name="email"
                       value="{{ old('email') }}"
                       required
                       autofocus
                       autocomplete="username"
                       placeholder="contoh@email.com">
                @error('email')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
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
                         autocomplete="current-password"
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
              </div>

              <!-- Remember Me -->
              <div class="mb-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="remember_me" name="remember">
                  <label class="form-check-label" for="remember_me">
                    Ingat saya
                  </label>
                </div>
              </div>

              <div class="d-flex justify-content-between align-items-center">
                @if (Route::has('password.request'))
                  <a href="{{ route('password.request') }}" class="text-decoration-none" style="color: #0ea2e7;">
                    <i class="bi bi-question-circle me-1"></i>Lupa password?
                  </a>
                @else
                  <span></span>
                @endif
                <button type="submit" class="btn btn-primary">
                  <i class="bi bi-box-arrow-in-right me-2"></i>Login
                </button>
              </div>
            </form>
          </div>
        </div>

        <!-- Footer -->
        <div class="text-center mt-4">
          <p class="text-muted mb-0" style="font-size: 14px;">
            &copy; {{ date('Y') }} Website Bukit Damar. All rights reserved.
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

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
  </script>

</body>

</html>

<header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container-fluid container-xl position-relative d-flex align-items-center">

    <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
      <img src="{{ asset('assets/img/logo.png') }}" alt="">
      <h1 class="sitename">Bukit Damar</h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Beranda<br></a></li>
        <li><a href="{{ url('/') }}#visi-misi">Visi & Misi</a></li>
        <li><a href="{{ url('/kepengurusan') }}">Kepengurusan</a></li>

        <li class="dropdown">
          <a href="#"><span>Fasilitas</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="{{ route('blog.masjid') }}" class="{{ Request::is('blog/masjid') ? 'active' : '' }}">Masjid</a></li>
            <li><a href="{{ route('blog.dsc') }}" class="{{ Request::is('blog/damar-sport-center') ? 'active' : '' }}">Damar Sport Center</a></li>
            <li><a href="{{ route('blog.damar-park') }}" class="{{ Request::is('blog/damar-park') ? 'active' : '' }}">Damar Park</a></li>
            <li><a href="{{ route('blog.balai-warga') }}" class="{{ Request::is('blog/balai-warga') ? 'active' : '' }}">Balai Warga</a></li>
            <li><a href="{{ route('blog.meeting-point') }}" class="{{ Request::is('blog/meeting-point') ? 'active' : '' }}">Meeting Point</a></li>
            <li><a href="{{ route('blog.keamanan') }}" class="{{ Request::is('blog/keamanan') ? 'active' : '' }}">Keamanan</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#"><span>Pusat Informasi</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li class="dropdown">
              <a href="#"><span>Persyaratan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="{{ url('/ktp') }}" class="{{ Request::is('ktp') ? 'active' : '' }}">Pembuatan KTP atau KK</a></li>
                <li><a href="{{ url('/domisili') }}" class="{{ Request::is('domisili') ? 'active' : '' }}">Pembuatan Domisili</a></li>
                <li><a href="{{ url('/akta-lahir') }}" class="{{ Request::is('akta-lahir') ? 'active' : '' }}">Pembuatan Akta Lahir</a></li>
                <li><a href="{{ url('/surat-kematian') }}" class="{{ Request::is('surat-kematian') ? 'active' : '' }}">Pembuatan Surat Kematian</a></li>
              </ul>
            </li>
            <li><a href="{{ url('/izin-usaha') }}" class="{{ Request::is('izin-usaha') ? 'active' : '' }}">Informasi Izin Usaha</a></li>
            <li><a href="{{ url('/skck') }}" class="{{ Request::is('skck') ? 'active' : '' }}">Informasi SKCK</a></li>
            <li><a href="{{ url('/nikah') }}" class="{{ Request::is('nikah') ? 'active' : '' }}">Informasi Surat Nikah</a></li>
          </ul>
        </li>
        <li><a href="{{ url('/kontak') }}" class="{{ Request::is('kontak') ? 'active' : '' }}">Kontak</a></li>
        {{-- @if (Route::has('login'))
        @auth
          <li><a href="{{ url('/laporan') }}" class="{{ Request::is('laporan') ? 'active' : '' }}">Laporan Keuangan</a></li>
        @endauth
        @endif --}}
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <div class="d-flex align-items-center gap-2 ms-2">
      @if (Route::has('login'))
        @auth
          <a class="btn-getstarted flex-md-shrink-0" href="{{ url('/dashboard') }}">Admin Dashboard</a>
        @else
          <a class="btn-getstarted flex-md-shrink-0" href="{{ route('login') }}">Login</a>
          {{-- @if (Route::has('register'))
            <a class="btn-getstarted flex-md-shrink-0" href="{{ route('register') }}" style="background: transparent; border: 2px solid var(--color-primary, #0d42ff); color: var(--color-primary, #0d42ff); margin-left: 0.5rem;">Register</a>
          @endif --}}
        @endauth
      @else
        <a class="btn-getstarted flex-md-shrink-0" href="{{ url('/') }}#about">Get Started</a>
      @endif
    </div>

  </div>
</header>

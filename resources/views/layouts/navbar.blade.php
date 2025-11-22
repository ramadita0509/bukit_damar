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
          <a role="button" tabindex="0"><span>Fasilitas</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="{{ route('fasilitas.masjid') }}" class="{{ Request::is('fasilitas/masjid') ? 'active' : '' }}">Masjid</a></li>
            <li><a href="{{ route('fasilitas.dsc') }}" class="{{ Request::is('fasilitas/damar-sport-center') ? 'active' : '' }}">Damar Sport Center</a></li>
            <li><a href="{{ route('fasilitas.damar-park') }}" class="{{ Request::is('fasilitas/damar-park') ? 'active' : '' }}">Damar Park</a></li>
            <li><a href="{{ route('fasilitas.balai-warga') }}" class="{{ Request::is('fasilitas/balai-warga') ? 'active' : '' }}">Balai Warga</a></li>
            <li><a href="{{ route('fasilitas.meeting-point') }}" class="{{ Request::is('fasilitas/meeting-point') ? 'active' : '' }}">Meeting Point</a></li>
            <li><a href="{{ route('fasilitas.keamanan') }}" class="{{ Request::is('fasilitas/keamanan') ? 'active' : '' }}">Keamanan</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a role="button" tabindex="0"><span>Pusat Informasi</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="{{ url('/skck') }}" class="{{ Request::is('skck') ? 'active' : '' }}">Informasi SKCK</a></li>
            <li><a href="{{ url('/akta-lahir') }}" class="{{ Request::is('akta-lahir') ? 'active' : '' }}">Informasi Akta Lahir</a></li>
            <li class="dropdown">
                <a role="button" tabindex="0"><span>Persyaratan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="{{ url('/ktp') }}" class="{{ Request::is('ktp') ? 'active' : '' }}">Pembuatan KTP atau KK</a></li>
                  <li><a href="{{ url('/domisili') }}" class="{{ Request::is('domisili') ? 'active' : '' }}">Pembuatan Domisili</a></li>
                  <li><a href="{{ url('/nikah') }}" class="{{ Request::is('nikah') ? 'active' : '' }}">Pembuatan Surat Nikah</a></li>
                  <li><a href="{{ url('/surat-kematian') }}" class="{{ Request::is('surat-kematian') ? 'active' : '' }}">Pembuatan Surat Kematian</a></li>
                  <li><a href="{{ url('/izin-usaha') }}" class="{{ Request::is('izin-usaha') ? 'active' : '' }}">Pembuatan Izin Usaha</a></li>
                </ul>
              </li>
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
        @endauth
      @else
        <a class="btn-getstarted flex-md-shrink-0" href="{{ url('/') }}#about">Get Started</a>
      @endif
    </div>

  </div>
</header>

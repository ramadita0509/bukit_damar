@extends('layouts.dashboard')

@section('title', 'Dashboard - Website Bukit Damar')

@php
  $header = 'Admin Dashboard';
@endphp

@section('content')

  <div class="row">
    <div class="col-12">
      <div class="card shadow-sm border-0">
        <div class="card-body p-4">
          <div class="d-flex align-items-center mb-3">
            <i class="bi bi-speedometer2 fs-3 text-primary me-3"></i>
            <h4 class="mb-0">Selamat Datang, {{ Auth::user()->name }}!</h4>
          </div>
          <p class="text-muted mb-0">Anda telah berhasil login ke sistem.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="row mt-4">
    <div class="col-md-4 mb-3">
      <div class="card shadow-sm border-0 bg-primary text-white">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <i class="bi bi-house-door fs-1 me-3"></i>
            <div>
              <h6 class="mb-0">Beranda</h6>
              <small>Kembali ke halaman utama</small>
            </div>
          </div>
          <a href="{{ url('/') }}" class="btn btn-light btn-sm mt-3">Kunjungi</a>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <div class="card shadow-sm border-0 bg-success text-white">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <i class="bi bi-person-circle fs-1 me-3"></i>
            <div>
              <h6 class="mb-0">Profile</h6>
              <small>Kelola profil Anda</small>
            </div>
          </div>
          <a href="{{ route('profile.edit') }}" class="btn btn-light btn-sm mt-3">Kelola</a>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <div class="card shadow-sm border-0 bg-info text-white">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <i class="bi bi-info-circle fs-1 me-3"></i>
            <div>
              <h6 class="mb-0">Laporan Keuangan</h6>
              <small>Lihat laporan keuangan</small>
            </div>
          </div>
          <a href="{{ url('/laporan') }}" class="btn btn-light btn-sm mt-3">Lihat</a>
        </div>
      </div>
    </div>
  </div>

  @if(Auth::user()->isAdminOrSuperAdmin())
    <div class="row mt-4">
      <div class="col-md-6 mb-3">
        <div class="card shadow-sm border-0 bg-warning text-dark">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <i class="bi bi-journal-text fs-1 me-3"></i>
              <div>
                <h6 class="mb-0">Kelola Blog</h6>
                <small>Buat dan kelola blog kegiatan</small>
              </div>
            </div>
            <a href="{{ route('blogs.index') }}" class="btn btn-dark btn-sm mt-3">Kelola Blog</a>
          </div>
        </div>
      </div>
    </div>
  @endif

  @if(Auth::user()->isSuperAdmin())
    @php
      $totalUsers = \App\Models\User::count();
      $totalAdmins = \App\Models\User::where('role', 'admin')->count();
      $totalSuperAdmins = \App\Models\User::where('role', 'super_admin')->count();
      $totalRegularUsers = \App\Models\User::where('role', 'user')->orWhereNull('role')->count();
    @endphp

    <div class="row mt-4">
      <div class="col-md-3 mb-3">
        <div class="card shadow-sm border-0 bg-danger text-white">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <i class="bi bi-people fs-1 me-3"></i>
              <div>
                <h3 class="mb-0">{{ $totalUsers }}</h3>
                <small>Total Users</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card shadow-sm border-0 bg-warning text-dark">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <i class="bi bi-person-badge fs-1 me-3"></i>
              <div>
                <h3 class="mb-0">{{ $totalAdmins }}</h3>
                <small>Admin</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card shadow-sm border-0 bg-dark text-white">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <i class="bi bi-shield-check fs-1 me-3"></i>
              <div>
                <h3 class="mb-0">{{ $totalSuperAdmins }}</h3>
                <small>Super Admin</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card shadow-sm border-0 bg-secondary text-white">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <i class="bi bi-person fs-1 me-3"></i>
              <div>
                <h3 class="mb-0">{{ $totalRegularUsers }}</h3>
                <small>Regular Users</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-12">
        <div class="card shadow-sm border-0">
          <div class="card-header bg-danger text-white">
            <h5 class="mb-0"><i class="bi bi-people me-2"></i>Kelola Users</h5>
          </div>
          <div class="card-body">
            <p class="mb-3">Sebagai Super Admin, Anda dapat mengelola semua user yang terdaftar di sistem. Anda dapat menambah, mengedit, dan menghapus user.</p>
            <div class="d-flex gap-2">
              <a href="{{ route('users.index') }}" class="btn btn-danger">
                <i class="bi bi-list-ul me-2"></i>Lihat Semua Users
              </a>
              <a href="{{ route('users.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle me-2"></i>Tambah User Baru
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endif

@endsection

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

  <!-- Laporan Iuran Warga -->
  <div class="row mt-4">
    <div class="col-md-12 mb-3">
      <div class="card shadow-sm border-0 bg-primary text-white">
        <div class="card-body">
          <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
              <i class="bi bi-file-earmark-text fs-1 me-3"></i>
              <div>
                <h6 class="mb-0">Lihat Laporan Iuran Warga</h6>
                <small>Lihat laporan pembayaran iuran warga</small>
              </div>
            </div>
            <a href="{{ route('iuran.laporan') }}" class="btn btn-light btn-sm">
              <i class="bi bi-arrow-right me-1"></i>Lihat Laporan
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Pembayaran Iuran untuk Semua User -->
  <div class="row mt-4">
    <div class="col-md-6 mb-3">
      <div class="card shadow-sm border-0 bg-success text-white">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <i class="bi bi-credit-card fs-1 me-3"></i>
            <div>
              <h6 class="mb-0">Bayar Iuran Warga</h6>
              <small>Upload bukti transfer pembayaran iuran</small>
            </div>
          </div>
          <a href="{{ route('iuran.create') }}" class="btn btn-light btn-sm mt-3">Bayar Iuran</a>
        </div>
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <div class="card shadow-sm border-0 bg-info text-white">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <i class="bi bi-clock-history fs-1 me-3"></i>
            <div>
              <h6 class="mb-0">History Pembayaran</h6>
              <small>Lihat riwayat pembayaran iuran Anda</small>
            </div>
          </div>
          <a href="{{ route('iuran.history') }}" class="btn btn-light btn-sm mt-3">Lihat History</a>
        </div>
      </div>
    </div>
  </div>

  @if(Auth::user()->canManageBlogs())
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

  @if(Auth::user()->isAdminOrSuperAdmin())
    <div class="row mt-4">
      <div class="col-md-6 mb-3">
        <div class="card shadow-sm border-0 bg-primary text-white">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <i class="bi bi-clock-history fs-1 me-3"></i>
              <div>
                <h6 class="mb-0">Pembayaran Iuran Pending</h6>
                <small>Kelola pembayaran iuran warga</small>
              </div>
            </div>
            <a href="{{ route('iuran.pending') }}" class="btn btn-light btn-sm mt-3">Lihat Pending</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <div class="card shadow-sm border-0 bg-success text-white">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <i class="bi bi-check2-square fs-1 me-3"></i>
              <div>
                <h6 class="mb-0">Checklist Iuran Warga</h6>
                <small>Checklist pembayaran iuran per bulan</small>
              </div>
            </div>
            <a href="{{ route('iuran.checklist') }}" class="btn btn-light btn-sm mt-3">Lihat Checklist</a>
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
      $totalLogsToday = \App\Models\ActionLog::whereDate('created_at', today())->count();
      $totalLogs = \App\Models\ActionLog::count();
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
        <div class="card shadow-sm border-0 bg-primary text-white">
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
      <div class="col-md-6 mb-3">
        <div class="card shadow-sm border-0 bg-info text-white">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <i class="bi bi-clock-history fs-1 me-3"></i>
              <div>
                <h3 class="mb-0">{{ $totalLogsToday }}</h3>
                <small>Action Logs Hari Ini</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 mb-3">
        <div class="card shadow-sm border-0 bg-primary text-white">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <i class="bi bi-list-check fs-1 me-3"></i>
              <div>
                <h3 class="mb-0">{{ $totalLogs }}</h3>
                <small>Total Action Logs</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-md-6 mb-3">
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

      <div class="col-md-6 mb-3">
        <div class="card shadow-sm border-0">
          <div class="card-header bg-primary text-white">
            <h5 class="mb-0"><i class="bi bi-clock-history me-2"></i>Action Logs</h5>
          </div>
          <div class="card-body">
            <p class="mb-3">Lihat riwayat aktivitas semua user di sistem. Meliputi create, update, delete, dan aktivitas lainnya.</p>
            <a href="{{ route('action-logs.index') }}" class="btn btn-dark">
              <i class="bi bi-list-ul me-2"></i>Lihat Action Logs
            </a>
          </div>
        </div>
      </div>
    </div>
  @endif

@endsection

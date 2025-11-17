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

  @if(Auth::user()->isSuperAdmin())
    <div class="row mt-4">
      <div class="col-12">
        <div class="card shadow-sm border-0">
          <div class="card-header bg-danger text-white">
            <h5 class="mb-0"><i class="bi bi-people me-2"></i>Kelola Users</h5>
          </div>
          <div class="card-body">
            <p class="mb-3">Sebagai Super Admin, Anda dapat mengelola semua user yang terdaftar di sistem.</p>
            <a href="{{ route('users.index') }}" class="btn btn-danger">
              <i class="bi bi-people me-2"></i>Kelola Users
            </a>
          </div>
        </div>
      </div>
    </div>
  @endif

@endsection

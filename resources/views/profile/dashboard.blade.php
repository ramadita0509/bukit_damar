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
              <h6 class="mb-0">Informasi</h6>
              <small>Lihat informasi website</small>
            </div>
          </div>
          <a href="{{ url('/skck') }}" class="btn btn-light btn-sm mt-3">Lihat</a>
        </div>
      </div>
    </div>
  </div>

@endsection

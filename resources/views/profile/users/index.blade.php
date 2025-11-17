@extends('layouts.dashboard')

@section('title', 'Kelola Users - Website Bukit Damar')

@php
  $header = 'Kelola Users';
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
            <h5 class="mb-0"><i class="bi bi-people me-2"></i>Daftar Users</h5>
            <a href="{{ route('dashboard') }}" class="btn btn-sm btn-secondary">
              <i class="bi bi-arrow-left me-1"></i>Kembali ke Dashboard
            </a>
          </div>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-hover mb-0">
              <thead class="table-light">
                <tr>
                  <th style="width: 50px;">No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th style="width: 150px;">Tanggal Daftar</th>
                  <th style="width: 120px;" class="text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @forelse($users as $index => $user)
                  <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>
                      <strong>{{ $user->name }}</strong>
                      @if($user->id === Auth::id())
                        <span class="badge bg-info ms-2">Anda</span>
                      @endif
                    </td>
                    <td>{{ $user->email }}</td>
                    <td>
                      @if($user->role === 'super_admin')
                        <span class="badge bg-danger">Super Admin</span>
                      @elseif($user->role === 'admin')
                        <span class="badge bg-warning text-dark">Admin</span>
                      @else
                        <span class="badge bg-secondary">User</span>
                      @endif
                    </td>
                    <td>{{ $user->created_at->format('d/m/Y') }}</td>
                    <td class="text-center">
                      @if($user->id !== Auth::id())
                        <form action="{{ route('users.destroy', $user) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus user {{ $user->name }}?');">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger" title="Hapus User">
                            <i class="bi bi-trash"></i>
                          </button>
                        </form>
                      @else
                        <span class="text-muted">-</span>
                      @endif
                    </td>
                  </tr>
                @empty
                  <tr>
                    <td colspan="6" class="text-center py-4 text-muted">
                      <i class="bi bi-inbox fs-1 d-block mb-2"></i>
                      Tidak ada user yang terdaftar
                    </td>
                  </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection


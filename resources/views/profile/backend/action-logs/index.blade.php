@extends('layouts.dashboard')

@section('title', 'Action Logs - Website Bukit Damar')

@php
  $header = 'Action Logs (Riwayat Aktivitas)';
@endphp

@section('content')

  <div class="row mb-4">
    <div class="col-12">
      <div class="card shadow-sm border-0">
        <div class="card-header bg-white border-bottom">
          <h5 class="mb-0"><i class="bi bi-clock-history me-2"></i>Filter Logs</h5>
        </div>
        <div class="card-body">
          <form method="GET" action="{{ route('action-logs.index') }}" class="row g-3">
            <div class="col-md-3">
              <label class="form-label">Aksi</label>
              <select name="action" class="form-select">
                <option value="">Semua Aksi</option>
                @foreach($actions as $action)
                  <option value="{{ $action }}" {{ request('action') == $action ? 'selected' : '' }}>
                    {{ ucfirst($action) }}
                  </option>
                @endforeach
              </select>
            </div>
            <div class="col-md-3">
              <label class="form-label">Model Type</label>
              <select name="model_type" class="form-select">
                <option value="">Semua Model</option>
                @foreach($modelTypes as $modelType)
                  <option value="{{ $modelType }}" {{ request('model_type') == $modelType ? 'selected' : '' }}>
                    {{ class_basename($modelType) }}
                  </option>
                @endforeach
              </select>
            </div>
            <div class="col-md-3">
              <label class="form-label">User</label>
              <select name="user_id" class="form-select">
                <option value="">Semua User</option>
                @foreach($users as $user)
                  <option value="{{ $user->id }}" {{ request('user_id') == $user->id ? 'selected' : '' }}>
                    {{ $user->name }}
                  </option>
                @endforeach
              </select>
            </div>
            <div class="col-md-3">
              <label class="form-label">Tanggal Dari</label>
              <input type="date" name="date_from" class="form-control" value="{{ request('date_from') }}">
            </div>
            <div class="col-md-3">
              <label class="form-label">Tanggal Sampai</label>
              <input type="date" name="date_to" class="form-control" value="{{ request('date_to') }}">
            </div>
            <div class="col-md-3">
              <label class="form-label">Cari</label>
              <input type="text" name="search" class="form-control" placeholder="Cari deskripsi..." value="{{ request('search') }}">
            </div>
            <div class="col-md-3 d-flex align-items-end">
              <button type="submit" class="btn btn-primary me-2">
                <i class="bi bi-search me-1"></i>Filter
              </button>
              <a href="{{ route('action-logs.index') }}" class="btn btn-secondary">
                <i class="bi bi-x-circle me-1"></i>Reset
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12">
      <div class="card shadow-sm border-0">
        <div class="card-header bg-white border-bottom">
          <div class="d-flex justify-content-between align-items-center">
            <h5 class="mb-0"><i class="bi bi-list-ul me-2"></i>Daftar Action Logs</h5>
            <div>
              <a href="{{ route('dashboard') }}" class="btn btn-sm btn-secondary">
                <i class="bi bi-arrow-left me-1"></i>Kembali ke Dashboard
              </a>
            </div>
          </div>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-hover mb-0">
              <thead class="table-light">
                <tr>
                  <th style="width: 50px;">No</th>
                  <th>Waktu</th>
                  <th>User</th>
                  <th>Aksi</th>
                  <th>Model</th>
                  <th>Deskripsi</th>
                  <th>IP Address</th>
                  <th style="width: 100px;" class="text-center">Detail</th>
                </tr>
              </thead>
              <tbody>
                @forelse($logs as $index => $log)
                  <tr>
                    <td>{{ $logs->firstItem() + $index }}</td>
                    <td>
                      <small class="text-muted">
                        {{ $log->created_at->setTimezone('Asia/Jakarta')->format('d/m/Y') }}<br>
                        {{ $log->created_at->setTimezone('Asia/Jakarta')->format('H:i:s') }} WIB
                      </small>
                    </td>
                    <td>
                      @if($log->user)
                        <strong>{{ $log->user->name }}</strong><br>
                        <small class="text-muted">{{ $log->user->email }}</small>
                      @else
                        <span class="text-muted">-</span>
                      @endif
                    </td>
                    <td>
                      @php
                        $badgeClass = match($log->action) {
                          'create' => 'bg-success',
                          'update' => 'bg-warning text-dark',
                          'delete' => 'bg-danger',
                          'view' => 'bg-info',
                          'login' => 'bg-primary',
                          'logout' => 'bg-secondary',
                          'upload' => 'bg-primary',
                          'download' => 'bg-info',
                          default => 'bg-secondary',
                        };
                      @endphp
                      <span class="badge {{ $badgeClass }}">{{ ucfirst($log->action) }}</span>
                    </td>
                    <td>
                      @if($log->model_type)
                        <small>{{ class_basename($log->model_type) }}</small>
                        @if($log->model_id)
                          <br><small class="text-muted">ID: {{ $log->model_id }}</small>
                        @endif
                      @else
                        <span class="text-muted">-</span>
                      @endif
                    </td>
                    <td>
                      <small>{{ \Illuminate\Support\Str::limit($log->description, 60) }}</small>
                    </td>
                    <td>
                      <small class="text-muted">{{ $log->ip_address ?? '-' }}</small>
                    </td>
                    <td class="text-center">
                      <a href="{{ route('action-logs.show', $log) }}" class="btn btn-sm btn-info" title="Lihat Detail">
                        <i class="bi bi-eye"></i>
                      </a>
                    </td>
                  </tr>
                @empty
                  <tr>
                    <td colspan="8" class="text-center py-4 text-muted">
                      <i class="bi bi-inbox fs-1 d-block mb-2"></i>
                      Tidak ada action log yang ditemukan
                    </td>
                  </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
        @if($logs->hasPages())
          <div class="card-footer bg-white border-top">
            <div class="d-flex justify-content-center">
              {{ $logs->links() }}
            </div>
          </div>
        @endif
      </div>
    </div>
  </div>

@endsection


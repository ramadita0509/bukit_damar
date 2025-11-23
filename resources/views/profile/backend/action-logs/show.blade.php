@extends('layouts.dashboard')

@section('title', 'Detail Action Log - Website Bukit Damar')

@php
  $header = 'Detail Action Log';
@endphp

@section('content')

  <div class="row">
    <div class="col-12">
      <div class="card shadow-sm border-0 mb-4">
        <div class="card-header bg-white border-bottom">
          <div class="d-flex justify-content-between align-items-center">
            <h5 class="mb-0"><i class="bi bi-info-circle me-2"></i>Informasi Log</h5>
            <div>
              <a href="{{ route('action-logs.index') }}" class="btn btn-sm btn-secondary">
                <i class="bi bi-arrow-left me-1"></i>Kembali
              </a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="row mb-3">
            <div class="col-md-3"><strong>ID Log:</strong></div>
            <div class="col-md-9">#{{ $log->id }}</div>
          </div>
          <div class="row mb-3">
            <div class="col-md-3"><strong>Waktu:</strong></div>
            <div class="col-md-9">
              {{ $log->created_at->setTimezone('Asia/Jakarta')->format('d F Y, H:i:s') }} WIB
              <small class="text-muted">({{ $log->created_at->setTimezone('Asia/Jakarta')->diffForHumans() }})</small>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-3"><strong>User:</strong></div>
            <div class="col-md-9">
              @if($log->user)
                <strong>{{ $log->user->name }}</strong> ({{ $log->user->email }})
                <span class="badge bg-{{ $log->user->role === 'super_admin' ? 'danger' : ($log->user->role === 'admin' ? 'warning' : ($log->user->role === 'humas' ? 'info' : 'secondary')) }} ms-2">
                  {{ ucfirst(str_replace('_', ' ', $log->user->role)) }}
                </span>
              @else
                <span class="text-muted">-</span>
              @endif
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-3"><strong>Aksi:</strong></div>
            <div class="col-md-9">
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
              <span class="badge {{ $badgeClass }} fs-6">{{ ucfirst($log->action) }}</span>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-3"><strong>Model Type:</strong></div>
            <div class="col-md-9">
              @if($log->model_type)
                {{ $log->model_type }}
                @if($log->model_id)
                  <span class="text-muted">(ID: {{ $log->model_id }})</span>
                @endif
              @else
                <span class="text-muted">-</span>
              @endif
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-3"><strong>Deskripsi:</strong></div>
            <div class="col-md-9">{{ $log->description }}</div>
          </div>
          <div class="row mb-3">
            <div class="col-md-3"><strong>IP Address:</strong></div>
            <div class="col-md-9">
              <code>{{ $log->ip_address ?? '-' }}</code>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-3"><strong>User Agent:</strong></div>
            <div class="col-md-9">
              <small class="text-muted">{{ $log->user_agent ?? '-' }}</small>
            </div>
          </div>
        </div>
      </div>

      @if($log->old_values || $log->new_values)
        <div class="card shadow-sm border-0">
          <div class="card-header bg-white border-bottom">
            <h5 class="mb-0"><i class="bi bi-arrow-left-right me-2"></i>Perubahan Data</h5>
          </div>
          <div class="card-body">
            <div class="row">
              @if($log->old_values)
                <div class="col-md-6">
                  <h6 class="text-danger mb-3"><i class="bi bi-arrow-left me-1"></i>Nilai Lama</h6>
                  <pre class="bg-light p-3 rounded" style="max-height: 400px; overflow-y: auto;"><code>{{ json_encode($log->old_values, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) }}</code></pre>
                </div>
              @endif
              @if($log->new_values)
                <div class="col-md-6">
                  <h6 class="text-success mb-3"><i class="bi bi-arrow-right me-1"></i>Nilai Baru</h6>
                  <pre class="bg-light p-3 rounded" style="max-height: 400px; overflow-y: auto;"><code>{{ json_encode($log->new_values, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) }}</code></pre>
                </div>
              @endif
            </div>
          </div>
        </div>
      @endif
    </div>
  </div>

@endsection


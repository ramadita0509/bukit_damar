@extends('layouts.dashboard')

@section('title', 'Kelola Pembayaran Iuran - Website Bukit Damar')

@php
  $header = 'Pembayaran Iuran Pending';
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
            <h5 class="mb-0"><i class="bi bi-clock-history me-2"></i>Pembayaran Iuran Menunggu Persetujuan</h5>
            <div class="d-flex gap-2">
              <a href="{{ route('iuran.checklist') }}" class="btn btn-sm btn-success">
                <i class="bi bi-check2-square me-1"></i>Checklist Iuran
              </a>
              <a href="{{ route('iuran.laporan') }}" class="btn btn-sm btn-secondary">
                <i class="bi bi-arrow-left me-1"></i>Kembali ke Iuran Warga
              </a>
            </div>
          </div>
        </div>
        <div class="card-body p-0">
          @if($iuranWargas->count() > 0)
            <div class="table-responsive">
              <table class="table table-hover mb-0">
                <thead class="table-light">
                  <tr>
                    <th style="width: 50px;">No</th>
                    <th style="width: 120px;">Tanggal</th>
                    <th>Nama Warga</th>
                    <th style="width: 150px;" class="text-end">Jumlah</th>
                    <th>Catatan</th>
                    <th style="width: 100px;" class="text-center">Bukti</th>
                    <th style="width: 200px;" class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($iuranWargas as $index => $iuranWarga)
                    <tr>
                      <td>{{ $index + 1 }}</td>
                      <td>{{ $iuranWarga->tanggal_transfer->format('d/m/Y') }}</td>
                      <td>
                        @if($iuranWarga->user)
                          <strong>{{ $iuranWarga->user->name }}</strong><br>
                          <small class="text-muted">{{ $iuranWarga->user->email }}</small>
                        @else
                          <span class="text-muted">User tidak ditemukan</span>
                        @endif
                      </td>
                      <td class="text-end fw-bold text-success">
                        Rp {{ number_format($iuranWarga->jumlah, 0, ',', '.') }}
                      </td>
                      <td>
                        {{ $iuranWarga->catatan ? Str::limit($iuranWarga->catatan, 50) : '-' }}
                      </td>
                      <td class="text-center">
                        @if($iuranWarga->bukti_transfer)
                          <a href="{{ route('iuran.bukti', basename($iuranWarga->bukti_transfer)) }}" target="_blank" class="btn btn-sm btn-outline-primary" title="Lihat Bukti">
                            <i class="bi bi-image"></i> Lihat
                          </a>
                        @else
                          <span class="text-muted">-</span>
                        @endif
                      </td>
                      <td class="text-center">
                        <div class="btn-group" role="group">
                          <form action="{{ route('iuran.approve', $iuranWarga) }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-success" onclick="return confirm('Apakah Anda yakin ingin menyetujui pembayaran ini?')">
                              <i class="bi bi-check-circle me-1"></i>Setujui
                            </button>
                          </form>
                          <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#rejectModal{{ $iuranWarga->id }}">
                            <i class="bi bi-x-circle me-1"></i>Tolak
                          </button>
                        </div>
                      </td>
                    </tr>

                    <!-- Reject Modal -->
                    <div class="modal fade" id="rejectModal{{ $iuranWarga->id }}" tabindex="-1" aria-labelledby="rejectModalLabel{{ $iuranWarga->id }}" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <form action="{{ route('iuran.reject', $iuranWarga) }}" method="POST">
                            @csrf
                            <div class="modal-header">
                              <h5 class="modal-title" id="rejectModalLabel{{ $iuranWarga->id }}">Tolak Pembayaran Iuran</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <p>Apakah Anda yakin ingin menolak pembayaran iuran dari <strong>{{ $iuranWarga->user ? $iuranWarga->user->name : 'User tidak ditemukan' }}</strong> sebesar <strong>Rp {{ number_format($iuranWarga->jumlah, 0, ',', '.') }}</strong>?</p>
                              <div class="mb-3">
                                <label for="alasan{{ $iuranWarga->id }}" class="form-label">Alasan Penolakan (Opsional)</label>
                                <textarea class="form-control" id="alasan{{ $iuranWarga->id }}" name="alasan" rows="3" placeholder="Masukkan alasan penolakan jika ada"></textarea>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                              <button type="submit" class="btn btn-danger">Tolak Pembayaran</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </tbody>
              </table>
            </div>
          @else
            <div class="text-center p-5">
              <i class="bi bi-check-circle fs-1 text-success"></i>
              <p class="text-muted mt-3">Tidak ada pembayaran iuran yang menunggu persetujuan.</p>
              <a href="{{ route('iuran.laporan') }}" class="btn btn-primary">
                <i class="bi bi-arrow-left me-2"></i>Kembali ke Iuran Warga
              </a>
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>

@endsection


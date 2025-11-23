@extends('layouts.dashboard')

@section('title', 'Kelola Blog - Website Bukit Damar')

@php
  $header = 'Kelola Blog';
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
            <h5 class="mb-0"><i class="bi bi-journal-text me-2"></i>Daftar Blog</h5>
            <div>
              <a href="{{ route('blogs.create') }}" class="btn btn-sm btn-primary me-2">
                <i class="bi bi-plus-circle me-1"></i>Tambah Blog Baru
              </a>
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
                  <th>Judul</th>
                  <th>Kategori</th>
                  <th>Penulis</th>
                  <th>Status</th>
                  <th style="width: 120px;">Views</th>
                  <th style="width: 150px;">Tanggal</th>
                  <th style="width: 150px;" class="text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @forelse($blogs as $blog)
                  <tr>
                    <td>{{ $blogs->firstItem() + $loop->index }}</td>
                    <td>
                      <strong>{{ $blog->judul }}</strong>
                      @if($blog->gambar)
                        <i class="bi bi-image ms-2 text-muted" title="Memiliki gambar"></i>
                      @endif
                    </td>
                    <td>
                      @if($blog->kategori)
                        <span class="badge bg-info">{{ $blog->kategori }}</span>
                      @else
                        <span class="text-muted">-</span>
                      @endif
                    </td>
                    <td>{{ $blog->user->name }}</td>
                    <td>
                      @if($blog->status === 'published')
                        <span class="badge bg-success">Published</span>
                      @else
                        <span class="badge bg-secondary">Draft</span>
                      @endif
                    </td>
                    <td>
                      <i class="bi bi-eye me-1"></i>{{ $blog->views }}
                    </td>
                    <td>{{ $blog->created_at->format('d/m/Y') }}</td>
                    <td class="text-center">
                      <a href="{{ route('blog.show', $blog->slug) }}" class="btn btn-sm btn-info" target="_blank" title="Lihat">
                        <i class="bi bi-eye"></i>
                      </a>
                      <a href="{{ route('blogs.edit', $blog) }}" class="btn btn-sm btn-warning" title="Edit">
                        <i class="bi bi-pencil"></i>
                      </a>
                      <form action="{{ route('blogs.destroy', $blog) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus blog ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" title="Hapus">
                          <i class="bi bi-trash"></i>
                        </button>
                      </form>
                    </td>
                  </tr>
                @empty
                  <tr>
                    <td colspan="8" class="text-center py-4 text-muted">
                      <i class="bi bi-inbox fs-1 d-block mb-2"></i>
                      Belum ada blog yang dibuat
                    </td>
                  </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
        @if($blogs->hasPages())
          <div class="card-footer bg-white border-top py-3">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
              <div class="text-muted small">
                Menampilkan <strong>{{ $blogs->firstItem() }}</strong> sampai <strong>{{ $blogs->lastItem() }}</strong> dari <strong>{{ $blogs->total() }}</strong> blog
              </div>
              <nav aria-label="Page navigation">
                {{ $blogs->links() }}
              </nav>
            </div>
          </div>
        @endif
      </div>
    </div>
  </div>

  @push('styles')
  <style>
    .pagination .page-link {
      font-size: 0.875rem;
      padding: 0.375rem 0.75rem;
    }
  </style>
  @endpush

@endsection


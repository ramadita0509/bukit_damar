@extends('layouts.dashboard')

@php
use Carbon\Carbon;
$header = 'Laporan Iuran Warga';
@endphp

@section('title', 'Laporan Iuran Warga - Website Bukit Damar')

@section('content')

  @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <div class="row mb-4">
    <div class="col-12">
      <div class="card shadow-sm border-0">
        <div class="card-header bg-white border-bottom">
          <div class="d-flex justify-content-between align-items-center">
            <h5 class="mb-0"><i class="bi bi-check2-square me-2"></i>Checklist Pembayaran Iuran Warga</h5>
            <div class="d-flex gap-2">
              <form method="GET" action="{{ route('iuran.checklist') }}" class="d-flex gap-2">
                <select name="tahun" class="form-select form-select-sm" onchange="this.form.submit()">
                  @for($i = Carbon::now('Asia/Jakarta')->year; $i >= Carbon::now('Asia/Jakarta')->year - 5; $i--)
                    <option value="{{ $i }}" {{ $tahun == $i ? 'selected' : '' }}>{{ $i }}</option>
                  @endfor
                </select>
              </form>
              <a href="{{ route('iuran.checklist.export-pdf', ['tahun' => $tahun]) }}" class="btn btn-sm btn-danger" target="_blank">
                <i class="bi bi-file-earmark-pdf me-1"></i>Export PDF
              </a>
              <a href="{{ route('iuran.checklist.export-excel', ['tahun' => $tahun]) }}" class="btn btn-sm btn-success">
                <i class="bi bi-file-earmark-excel me-1"></i>Export Excel
              </a>
              <a href="{{ route('iuran.laporan') }}" class="btn btn-sm btn-secondary">
                <i class="bi bi-arrow-left me-1"></i>Kembali
              </a>
            </div>
          </div>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive" style="max-height: 70vh; overflow-y: auto;">
            <table class="table table-bordered table-hover mb-0" style="font-size: 0.875rem;">
              <thead class="table-light sticky-top">
                <tr>
                  <th style="width: 50px; position: sticky; left: 0; background: white; z-index: 10;">No</th>
                  <th style="min-width: 150px; position: sticky; left: 50px; background: white; z-index: 10;">Nama</th>
                  <th style="min-width: 100px; position: sticky; left: 200px; background: white; z-index: 10;">Status</th>
                  <th style="min-width: 150px; position: sticky; left: 300px; background: white; z-index: 10;">Alamat</th>
                  <th style="width: 80px;" class="text-center">Jan</th>
                  <th style="width: 80px;" class="text-center">Feb</th>
                  <th style="width: 80px;" class="text-center">Mar</th>
                  <th style="width: 80px;" class="text-center">Apr</th>
                  <th style="width: 80px;" class="text-center">Mei</th>
                  <th style="width: 80px;" class="text-center">Jun</th>
                  <th style="width: 80px;" class="text-center">Jul</th>
                  <th style="width: 80px;" class="text-center">Agu</th>
                  <th style="width: 80px;" class="text-center">Sep</th>
                  <th style="width: 80px;" class="text-center">Okt</th>
                  <th style="width: 80px;" class="text-center">Nov</th>
                  <th style="width: 80px;" class="text-center">Des</th>
                  <th style="width: 80px;" class="text-center">THR</th>
                  <th style="width: 80px;" class="text-center">Sosial</th>
                  <th style="width: 120px;" class="text-center fw-bold bg-primary text-white">Total</th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $index => $user)
                  @php
                    $checklist = $checklists[$user->id] ?? null;
                    $role = $user->role ?? 'user';
                    $roleLabels = [
                      'user' => 'Warga',
                      'admin' => 'Admin',
                      'humas' => 'Humas',
                      'super_admin' => 'Super Admin'
                    ];
                    $total = isset($totals[$user->id]) ? $totals[$user->id] : ($checklist ? ($checklist->januari + $checklist->februari + $checklist->maret + $checklist->april +
                             $checklist->mei + $checklist->juni + $checklist->juli + $checklist->agustus +
                             $checklist->september + $checklist->oktober + $checklist->november + $checklist->desember +
                             $checklist->thr + $checklist->sosial) : 0);
                  @endphp
                  <tr>
                    <td style="position: sticky; left: 0; background: white;">{{ $index + 1 }}</td>
                    <td style="position: sticky; left: 50px; background: white; font-weight: 500;">{{ $user->name }}</td>
                    <td style="position: sticky; left: 200px; background: white;">
                      <span class="badge bg-{{ $role == 'user' ? 'primary' : ($role == 'admin' ? 'warning' : ($role == 'humas' ? 'info' : 'danger')) }}">
                        {{ $roleLabels[$role] ?? 'Warga' }}
                      </span>
                    </td>
                    <td style="position: sticky; left: 300px; background: white;">{{ $user->alamat ?? '-' }}</td>
                    @if($checklist)
                      <td class="text-center p-1">
                        <input type="text" class="form-control form-control-sm checklist-input text-end"
                          data-checklist-id="{{ $checklist->id }}"
                          data-field="januari"
                          value="{{ $checklist->januari > 0 ? number_format($checklist->januari, 0, ',', '.') : '' }}"
                          placeholder="0"
                          style="width: 80px; font-size: 0.75rem;">
                      </td>
                      <td class="text-center p-1">
                        <input type="text" class="form-control form-control-sm checklist-input text-end"
                          data-checklist-id="{{ $checklist->id }}"
                          data-field="februari"
                          value="{{ $checklist->februari > 0 ? number_format($checklist->februari, 0, ',', '.') : '' }}"
                          placeholder="0"
                          style="width: 80px; font-size: 0.75rem;">
                      </td>
                      <td class="text-center p-1">
                        <input type="text" class="form-control form-control-sm checklist-input text-end"
                          data-checklist-id="{{ $checklist->id }}"
                          data-field="maret"
                          value="{{ $checklist->maret > 0 ? number_format($checklist->maret, 0, ',', '.') : '' }}"
                          placeholder="0"
                          style="width: 80px; font-size: 0.75rem;">
                      </td>
                      <td class="text-center p-1">
                        <input type="text" class="form-control form-control-sm checklist-input text-end"
                          data-checklist-id="{{ $checklist->id }}"
                          data-field="april"
                          value="{{ $checklist->april > 0 ? number_format($checklist->april, 0, ',', '.') : '' }}"
                          placeholder="0"
                          style="width: 80px; font-size: 0.75rem;">
                      </td>
                      <td class="text-center p-1">
                        <input type="text" class="form-control form-control-sm checklist-input text-end"
                          data-checklist-id="{{ $checklist->id }}"
                          data-field="mei"
                          value="{{ $checklist->mei > 0 ? number_format($checklist->mei, 0, ',', '.') : '' }}"
                          placeholder="0"
                          style="width: 80px; font-size: 0.75rem;">
                      </td>
                      <td class="text-center p-1">
                        <input type="text" class="form-control form-control-sm checklist-input text-end"
                          data-checklist-id="{{ $checklist->id }}"
                          data-field="juni"
                          value="{{ $checklist->juni > 0 ? number_format($checklist->juni, 0, ',', '.') : '' }}"
                          placeholder="0"
                          style="width: 80px; font-size: 0.75rem;">
                      </td>
                      <td class="text-center p-1">
                        <input type="text" class="form-control form-control-sm checklist-input text-end"
                          data-checklist-id="{{ $checklist->id }}"
                          data-field="juli"
                          value="{{ $checklist->juli > 0 ? number_format($checklist->juli, 0, ',', '.') : '' }}"
                          placeholder="0"
                          style="width: 80px; font-size: 0.75rem;">
                      </td>
                      <td class="text-center p-1">
                        <input type="text" class="form-control form-control-sm checklist-input text-end"
                          data-checklist-id="{{ $checklist->id }}"
                          data-field="agustus"
                          value="{{ $checklist->agustus > 0 ? number_format($checklist->agustus, 0, ',', '.') : '' }}"
                          placeholder="0"
                          style="width: 80px; font-size: 0.75rem;">
                      </td>
                      <td class="text-center p-1">
                        <input type="text" class="form-control form-control-sm checklist-input text-end"
                          data-checklist-id="{{ $checklist->id }}"
                          data-field="september"
                          value="{{ $checklist->september > 0 ? number_format($checklist->september, 0, ',', '.') : '' }}"
                          placeholder="0"
                          style="width: 80px; font-size: 0.75rem;">
                      </td>
                      <td class="text-center p-1">
                        <input type="text" class="form-control form-control-sm checklist-input text-end"
                          data-checklist-id="{{ $checklist->id }}"
                          data-field="oktober"
                          value="{{ $checklist->oktober > 0 ? number_format($checklist->oktober, 0, ',', '.') : '' }}"
                          placeholder="0"
                          style="width: 80px; font-size: 0.75rem;">
                      </td>
                      <td class="text-center p-1">
                        <input type="text" class="form-control form-control-sm checklist-input text-end"
                          data-checklist-id="{{ $checklist->id }}"
                          data-field="november"
                          value="{{ $checklist->november > 0 ? number_format($checklist->november, 0, ',', '.') : '' }}"
                          placeholder="0"
                          style="width: 80px; font-size: 0.75rem;">
                      </td>
                      <td class="text-center p-1">
                        <input type="text" class="form-control form-control-sm checklist-input text-end"
                          data-checklist-id="{{ $checklist->id }}"
                          data-field="desember"
                          value="{{ $checklist->desember > 0 ? number_format($checklist->desember, 0, ',', '.') : '' }}"
                          placeholder="0"
                          style="width: 80px; font-size: 0.75rem;">
                      </td>
                      <td class="text-center p-1">
                        <input type="text" class="form-control form-control-sm checklist-input text-end"
                          data-checklist-id="{{ $checklist->id }}"
                          data-field="thr"
                          value="{{ $checklist->thr > 0 ? number_format($checklist->thr, 0, ',', '.') : '' }}"
                          placeholder="0"
                          style="width: 80px; font-size: 0.75rem;">
                      </td>
                      <td class="text-center p-1">
                        <input type="text" class="form-control form-control-sm checklist-input text-end"
                          data-checklist-id="{{ $checklist->id }}"
                          data-field="sosial"
                          value="{{ $checklist->sosial > 0 ? number_format($checklist->sosial, 0, ',', '.') : '' }}"
                          placeholder="0"
                          style="width: 80px; font-size: 0.75rem;">
                      </td>
                      <td class="text-center fw-bold text-primary" style="background-color: #e7f3ff;" data-total-cell>
                        Rp {{ number_format($total, 0, ',', '.') }}
                      </td>
                    @else
                      <td colspan="14" class="text-center text-muted">-</td>
                      <td class="text-center fw-bold">Rp 0</td>
                    @endif
                  </tr>
                @endforeach
              </tbody>
              <tfoot class="table-light">
                <tr id="footer-total-row">
                  <td colspan="4" class="fw-bold text-end" style="position: sticky; left: 0; background: #f8f9fa;">TOTAL PER BULAN:</td>
                  <td class="text-end fw-bold text-primary" data-total-januari>{{ number_format($totalPerBulan['januari'] ?? 0, 0, ',', '.') }}</td>
                  <td class="text-end fw-bold text-primary" data-total-februari>{{ number_format($totalPerBulan['februari'] ?? 0, 0, ',', '.') }}</td>
                  <td class="text-end fw-bold text-primary" data-total-maret>{{ number_format($totalPerBulan['maret'] ?? 0, 0, ',', '.') }}</td>
                  <td class="text-end fw-bold text-primary" data-total-april>{{ number_format($totalPerBulan['april'] ?? 0, 0, ',', '.') }}</td>
                  <td class="text-end fw-bold text-primary" data-total-mei>{{ number_format($totalPerBulan['mei'] ?? 0, 0, ',', '.') }}</td>
                  <td class="text-end fw-bold text-primary" data-total-juni>{{ number_format($totalPerBulan['juni'] ?? 0, 0, ',', '.') }}</td>
                  <td class="text-end fw-bold text-primary" data-total-juli>{{ number_format($totalPerBulan['juli'] ?? 0, 0, ',', '.') }}</td>
                  <td class="text-end fw-bold text-primary" data-total-agustus>{{ number_format($totalPerBulan['agustus'] ?? 0, 0, ',', '.') }}</td>
                  <td class="text-end fw-bold text-primary" data-total-september>{{ number_format($totalPerBulan['september'] ?? 0, 0, ',', '.') }}</td>
                  <td class="text-end fw-bold text-primary" data-total-oktober>{{ number_format($totalPerBulan['oktober'] ?? 0, 0, ',', '.') }}</td>
                  <td class="text-end fw-bold text-primary" data-total-november>{{ number_format($totalPerBulan['november'] ?? 0, 0, ',', '.') }}</td>
                  <td class="text-end fw-bold text-primary" data-total-desember>{{ number_format($totalPerBulan['desember'] ?? 0, 0, ',', '.') }}</td>
                  <td class="text-end fw-bold text-primary" data-total-thr>{{ number_format($totalPerBulan['thr'] ?? 0, 0, ',', '.') }}</td>
                  <td class="text-end fw-bold text-primary" data-total-sosial>{{ number_format($totalPerBulan['sosial'] ?? 0, 0, ',', '.') }}</td>
                  <td class="text-end fw-bold text-white bg-primary" data-grand-total>{{ number_format($grandTotal ?? 0, 0, ',', '.') }}</td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Note Section -->
    <div class="row mt-4">
      <div class="col-12">
        <div class="card shadow-sm border-0">
          <div class="card-header bg-white border-bottom">
            <h5 class="mb-0"><i class="bi bi-sticky me-2"></i>Catatan (Note)</h5>
          </div>
          <div class="card-body">
            <form id="noteForm" method="POST" action="{{ route('iuran.checklist.update-note') }}">
              @csrf
              <input type="hidden" name="tahun" value="{{ $tahun }}">
              <div class="mb-3">
                <label for="note" class="form-label">Catatan Mutasi Transfer</label>
                <textarea class="form-control" id="note" name="note" rows="5" placeholder="Contoh:&#10;mutasi transfer tanpa ada keterangan/informasi,&#10;1 02/03/2024 16:14:59 IPW okt23 jan24 100,000">{{ old('note', $note ?? '') }}</textarea>
                <small class="text-muted">Catatan untuk mutasi transfer atau informasi tambahan terkait pembayaran iuran tahun {{ $tahun }}</small>
              </div>
              <button type="submit" class="btn btn-primary">
                <i class="bi bi-save me-2"></i>Simpan Catatan
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  @push('scripts')
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const inputs = document.querySelectorAll('.checklist-input');
      let updateTimeout;

      // Format angka dengan titik sebagai pemisah ribuan
      function formatNumber(value) {
        const numbers = value.replace(/\D/g, '');
        return numbers.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
      }

      // Parse angka dari format dengan titik
      function parseNumber(value) {
        return parseFloat(value.replace(/\./g, '')) || 0;
      }

      // Update total untuk row tertentu
      function updateTotal(row) {
        const inputs = row.querySelectorAll('.checklist-input');
        let total = 0;
        inputs.forEach(input => {
          total += parseNumber(input.value);
        });
        const totalCell = row.querySelector('td[data-total-cell]');
        if (totalCell) {
          totalCell.textContent = 'Rp ' + formatNumber(total.toString());
        }
      }

      // Update total per bulan di footer
      function updateTotalPerBulan() {
        const rows = document.querySelectorAll('tbody tr');
        const bulanFields = ['januari', 'februari', 'maret', 'april', 'mei', 'juni', 'juli', 'agustus', 'september', 'oktober', 'november', 'desember', 'thr', 'sosial'];
        const totals = {};
        bulanFields.forEach(field => totals[field] = 0);

        // Hitung total per bulan dari semua input
        rows.forEach(row => {
          bulanFields.forEach((field) => {
            const input = row.querySelector(`input[data-field="${field}"]`);
            if (input && !input.disabled) {
              const value = parseNumber(input.value);
              totals[field] += value;
            }
          });
        });

        // Update footer menggunakan data attribute untuk selector yang lebih spesifik
        let grandTotal = 0;
        bulanFields.forEach((field) => {
          const totalCell = document.querySelector(`td[data-total-${field}]`);
          if (totalCell) {
            const totalValue = totals[field] || 0;
            totalCell.textContent = totalValue > 0 ? formatNumber(totalValue.toString()) : '';
            grandTotal += totalValue;
          }
        });

        // Update grand total
        const grandTotalCell = document.querySelector('td[data-grand-total]');
        if (grandTotalCell) {
          grandTotalCell.textContent = formatNumber(grandTotal.toString());
        }
      }

      // Panggil updateTotalPerBulan saat halaman pertama kali load
      updateTotalPerBulan();

      inputs.forEach(input => {
        // Format saat mengetik
        input.addEventListener('input', function(e) {
          const formatted = formatNumber(e.target.value);
          e.target.value = formatted;
          // Update total row
          updateTotal(this.closest('tr'));
          // Update total per bulan di footer (real-time)
          updateTotalPerBulan();
        });

        // Update saat blur (setelah selesai mengetik)
        input.addEventListener('blur', function() {
          const checklistId = this.getAttribute('data-checklist-id');
          const field = this.getAttribute('data-field');
          const rawValue = parseNumber(this.value);
          const originalValue = this.getAttribute('data-original-value') || '0';

          // Jika nilai tidak berubah, tidak perlu update
          if (rawValue == parseNumber(originalValue)) {
            return;
          }

          // Disable input while updating
          this.disabled = true;

          fetch('{{ route("iuran.checklist.update") }}', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
              'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
              checklist_id: checklistId,
              field: field,
              value: rawValue
            })
          })
          .then(response => response.json())
          .then(data => {
            if (data.success) {
              // Update original value
              this.setAttribute('data-original-value', rawValue.toString());
              // Update total untuk row ini
              updateTotal(this.closest('tr'));
              // Update total per bulan (dipanggil lagi untuk memastikan sync dengan server)
              updateTotalPerBulan();
              // Re-enable input
              this.disabled = false;
            } else {
              // Revert value if update failed
              this.value = originalValue ? formatNumber(originalValue) : '';
              this.disabled = false;
              alert('Gagal mengupdate checklist');
            }
          })
          .catch(error => {
            console.error('Error:', error);
            // Revert value on error
            this.value = originalValue ? formatNumber(originalValue) : '';
            this.disabled = false;
            alert('Terjadi kesalahan saat mengupdate checklist');
          });
        });

        // Set original value
        input.setAttribute('data-original-value', parseNumber(input.value).toString());
      });
    });
  </script>
  @endpush

  @push('styles')
  <style>
    .table-responsive {
      border: 1px solid #dee2e6;
    }
    .table th {
      background-color: #f8f9fa !important;
      font-weight: 600;
      text-align: center;
      vertical-align: middle;
    }
    .table td {
      vertical-align: middle;
    }
    .checklist-input {
      border: 1px solid #ced4da;
      padding: 2px 4px;
    }
    .checklist-input:focus {
      border-color: #86b7fe;
      box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    }
    .checklist-input:disabled {
      opacity: 0.6;
      cursor: not-allowed;
      background-color: #e9ecef;
    }
    .sticky-top {
      position: sticky;
      top: 0;
      z-index: 5;
    }
  </style>
  @endpush

@endsection


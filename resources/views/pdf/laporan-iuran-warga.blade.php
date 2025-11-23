<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laporan Iuran Warga</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'DejaVu Sans', Arial, sans-serif;
            font-size: 10px;
        }
        .header {
            text-align: center;
            margin-bottom: 15px;
            border-bottom: 2px solid #000;
            padding-bottom: 10px;
        }
        .header h1 {
            font-size: 18px;
            margin: 5px 0;
            font-weight: bold;
        }
        .header h2 {
            font-size: 14px;
            margin: 3px 0;
        }
        .header p {
            font-size: 10px;
            margin: 2px 0;
        }
        .summary {
            margin: 15px 0;
            padding: 10px;
            background-color: #f5f5f5;
            border: 1px solid #ddd;
        }
        .summary-row {
            display: flex;
            justify-content: space-between;
            margin: 5px 0;
        }
        .summary-label {
            font-weight: bold;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            font-size: 9px;
        }
        th, td {
            border: 1px solid #000;
            padding: 5px;
            text-align: left;
        }
        th {
            background-color: #e0e0e0;
            font-weight: bold;
            text-align: center;
            font-size: 9px;
        }
        td {
            font-size: 9px;
        }
        .text-left {
            text-align: left;
        }
        .text-right {
            text-align: right;
        }
        .text-center {
            text-align: center;
        }
        .status-pending {
            background-color: #fff3cd;
            color: #856404;
            padding: 2px 5px;
            border-radius: 3px;
        }
        .status-approved {
            background-color: #d4edda;
            color: #155724;
            padding: 2px 5px;
            border-radius: 3px;
        }
        .status-rejected {
            background-color: #f8d7da;
            color: #721c24;
            padding: 2px 5px;
            border-radius: 3px;
        }
        .footer {
            margin-top: 20px;
            padding-top: 10px;
            border-top: 1px solid #ddd;
            text-align: right;
            font-size: 9px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>LAPORAN IURAN WARGA</h1>
        <h2>RT 002 RW 017 Bukit Damar</h2>
        <p>Periode: {{ $periode }}</p>
        <p>Tanggal Cetak: {{ \Carbon\Carbon::now('Asia/Jakarta')->format('d F Y H:i:s') }}</p>
    </div>

    <div class="summary">
        <div class="summary-row">
            <span class="summary-label">Total Iuran:</span>
            <span>Rp {{ number_format($totalIuran ?? 0, 0, ',', '.') }} ({{ $totalCount ?? 0 }} pembayaran)</span>
        </div>
        <div class="summary-row">
            <span class="summary-label">Disetujui:</span>
            <span>Rp {{ number_format($totalApproved ?? 0, 0, ',', '.') }} ({{ $countApproved ?? 0 }} pembayaran)</span>
        </div>
        <div class="summary-row">
            <span class="summary-label">Menunggu:</span>
            <span>Rp {{ number_format($totalPending ?? 0, 0, ',', '.') }} ({{ $countPending ?? 0 }} pembayaran)</span>
        </div>
        <div class="summary-row">
            <span class="summary-label">Ditolak:</span>
            <span>Rp {{ number_format($totalRejected ?? 0, 0, ',', '.') }} ({{ $countRejected ?? 0 }} pembayaran)</span>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th style="width: 30px;">No</th>
                <th style="width: 80px;">Tanggal</th>
                <th style="width: 150px;">Nama Warga</th>
                <th style="width: 100px;" class="text-right">Jumlah</th>
                <th style="width: 200px;">Catatan</th>
                <th style="width: 80px;" class="text-center">Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse($iuranWargas ?? [] as $index => $iuranWarga)
                <tr>
                    <td class="text-center">{{ $index + 1 }}</td>
                    <td>{{ $iuranWarga->tanggal_transfer->format('d/m/Y') }}</td>
                    <td class="text-left">
                        <strong>{{ $iuranWarga->user->name }}</strong>
                        @if($iuranWarga->user->email)
                            <br><small>{{ $iuranWarga->user->email }}</small>
                        @endif
                    </td>
                    <td class="text-right">Rp {{ number_format($iuranWarga->jumlah, 0, ',', '.') }}</td>
                    <td class="text-left">
                        {{ $iuranWarga->catatan ? Str::limit($iuranWarga->catatan, 80) : '-' }}
                        @if($iuranWarga->catatan_admin && $iuranWarga->status == 'rejected')
                            <br><small>Alasan: {{ Str::limit($iuranWarga->catatan_admin, 60) }}</small>
                        @endif
                    </td>
                    <td class="text-center">
                        @if($iuranWarga->status == 'pending')
                            <span class="status-pending">Menunggu</span>
                        @elseif($iuranWarga->status == 'approved')
                            <span class="status-approved">Disetujui</span>
                        @elseif($iuranWarga->status == 'rejected')
                            <span class="status-rejected">Ditolak</span>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center" style="padding: 20px;">
                        Tidak ada data pembayaran iuran untuk periode yang dipilih
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="footer">
        <p>Dicetak oleh: {{ Auth::user()->name }}</p>
        <p>Tanggal: {{ \Carbon\Carbon::now('Asia/Jakarta')->format('d F Y H:i:s') }}</p>
    </div>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laporan Keuangan</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'DejaVu Sans', Arial, sans-serif;
            font-size: 9px;
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
            font-size: 8px;
        }
        th, td {
            border: 1px solid #000;
            padding: 4px;
            text-align: left;
        }
        th {
            background-color: #e0e0e0;
            font-weight: bold;
            text-align: center;
            font-size: 8px;
        }
        td {
            font-size: 8px;
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
        .text-success {
            color: #155724;
        }
        .text-danger {
            color: #721c24;
        }
        .text-primary {
            color: #004085;
        }
        .footer {
            margin-top: 20px;
            padding-top: 10px;
            border-top: 1px solid #ddd;
            text-align: right;
            font-size: 9px;
        }
        tfoot th {
            background-color: #f0f0f0;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>LAPORAN KEUANGAN</h1>
        <h2>RT 002 RW 017 Bukit Damar</h2>
        <p>Periode: {{ $periode }}</p>
        <p>Tanggal Cetak: {{ \Carbon\Carbon::now('Asia/Jakarta')->format('d F Y H:i:s') }}</p>
    </div>

    <div class="summary">
        <div class="summary-row">
            <span class="summary-label">Total Pemasukan:</span>
            <span>Rp {{ number_format($totalPemasukan ?? 0, 0, ',', '.') }}</span>
        </div>
        <div class="summary-row">
            <span class="summary-label">Total Pengeluaran:</span>
            <span>Rp {{ number_format($totalPengeluaran ?? 0, 0, ',', '.') }}</span>
        </div>
        <div class="summary-row">
            <span class="summary-label">Saldo:</span>
            <span>Rp {{ number_format($saldo ?? 0, 0, ',', '.') }}</span>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th style="width: 30px;">No</th>
                <th style="width: 80px;">Tanggal</th>
                <th style="width: 200px;">Keterangan</th>
                <th style="width: 100px;">Kategori</th>
                <th style="width: 120px;" class="text-right">Pemasukan</th>
                <th style="width: 120px;" class="text-right">Pengeluaran</th>
                <th style="width: 120px;" class="text-right">Saldo</th>
            </tr>
        </thead>
        <tbody>
            @forelse($transaksiWithSaldo ?? [] as $index => $item)
                <tr>
                    <td class="text-center">{{ $index + 1 }}</td>
                    <td>{{ $item['transaksi']->tanggal->format('d/m/Y') }}</td>
                    <td class="text-left">{{ $item['transaksi']->keterangan }}</td>
                    <td class="text-center">{{ $item['transaksi']->kategori }}</td>
                    <td class="text-right text-success">
                        @if($item['pemasukan'] > 0)
                            Rp {{ number_format($item['pemasukan'], 0, ',', '.') }}
                        @else
                            -
                        @endif
                    </td>
                    <td class="text-right text-danger">
                        @if($item['pengeluaran'] > 0)
                            Rp {{ number_format($item['pengeluaran'], 0, ',', '.') }}
                        @else
                            -
                        @endif
                    </td>
                    <td class="text-right {{ $item['saldo'] >= 0 ? 'text-primary' : 'text-danger' }}">
                        Rp {{ number_format($item['saldo'], 0, ',', '.') }}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center" style="padding: 20px;">
                        Tidak ada data transaksi untuk periode yang dipilih
                    </td>
                </tr>
            @endforelse
        </tbody>
        <tfoot>
            <tr>
                <th colspan="4" class="text-right">TOTAL:</th>
                <th class="text-right text-success">Rp {{ number_format($totalPemasukan ?? 0, 0, ',', '.') }}</th>
                <th class="text-right text-danger">Rp {{ number_format($totalPengeluaran ?? 0, 0, ',', '.') }}</th>
                <th class="text-right text-primary">Rp {{ number_format($saldo ?? 0, 0, ',', '.') }}</th>
            </tr>
        </tfoot>
    </table>

    <div class="footer">
        <p>Dicetak oleh: {{ Auth::user()->name }}</p>
        <p>Tanggal: {{ \Carbon\Carbon::now('Asia/Jakarta')->format('d F Y H:i:s') }}</p>
    </div>
</body>
</html>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Iuran Warga</title>
    <style>
        @page {
            size: A4;
            margin: 2cm;
        }
        body {
            font-family: 'Times New Roman', serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            font-size: 12pt;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 3px solid #000;
            padding-bottom: 15px;
        }
        .header h1 {
            font-size: 18pt;
            font-weight: bold;
            margin: 0 0 10px 0;
        }
        .header h2 {
            font-size: 14pt;
            font-weight: normal;
            margin: 5px 0;
        }
        .info {
            margin-bottom: 20px;
        }
        .info p {
            margin: 5px 0;
            font-size: 11pt;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table th,
        table td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        table th {
            background-color: #f0f0f0;
            font-weight: bold;
            text-align: center;
        }
        table td {
            font-size: 11pt;
        }
        .text-right {
            text-align: right;
        }
        .text-center {
            text-align: center;
        }
        .total-row {
            font-weight: bold;
            background-color: #e8e8e8;
        }
        .footer {
            margin-top: 40px;
            text-align: right;
        }
        .signature {
            margin-top: 60px;
        }
        .no-data {
            text-align: center;
            padding: 20px;
            font-style: italic;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>LAPORAN IURAN WARGA</h1>
        <h2>RT 002 RW 017 Desa Singajaya</h2>
        <h2>Kecamatan Jonggol, Kabupaten Bogor</h2>
    </div>

    <div class="info">
        <p><strong>Periode:</strong> {{ $periode }}</p>
        <p><strong>Tanggal Cetak:</strong> {{ date('d F Y') }}</p>
    </div>

    @if($iuran->count() > 0)
        <table>
            <thead>
                <tr>
                    <th style="width: 5%;">No</th>
                    <th style="width: 15%;">Tanggal</th>
                    <th style="width: 40%;">Keterangan</th>
                    <th style="width: 20%;" class="text-center">Jumlah (Rp)</th>
                    <th style="width: 20%;">Catatan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($iuran as $index => $item)
                    <tr>
                        <td class="text-center">{{ $index + 1 }}</td>
                        <td>{{ $item->tanggal->format('d/m/Y') }}</td>
                        <td>{{ $item->keterangan }}</td>
                        <td class="text-right">{{ number_format($item->jumlah, 0, ',', '.') }}</td>
                        <td>{{ $item->catatan ?? '-' }}</td>
                    </tr>
                @endforeach
                <tr class="total-row">
                    <td colspan="3" class="text-center"><strong>TOTAL IURAN</strong></td>
                    <td class="text-right"><strong>Rp {{ number_format($totalIuran, 0, ',', '.') }}</strong></td>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <div class="info">
            <p><strong>Jumlah Transaksi:</strong> {{ $iuran->count() }} transaksi</p>
            <p><strong>Total Iuran:</strong> Rp {{ number_format($totalIuran, 0, ',', '.') }}</p>
        </div>
    @else
        <div class="no-data">
            <p>Tidak ada data iuran untuk periode {{ $periode }}</p>
        </div>
    @endif

    <div class="footer">
        <div>Singajaya, {{ date('d F Y') }}</div>
        <div class="signature">
            <div>Ketua RT 002 RW 017</div>
            <br><br><br>
            <div>( ........................................ )</div>
        </div>
    </div>
</body>
</html>


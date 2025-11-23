<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laporan Iuran Warga {{ $tahun }}</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: DejaVu Sans, Arial, sans-serif;
            font-size: 8px;
        }
        .header {
            text-align: center;
            margin-bottom: 10px;
        }
        .header h1 {
            font-size: 16px;
            margin: 3px 0;
        }
        .header h2 {
            font-size: 12px;
            margin: 3px 0;
        }
        .header p {
            font-size: 9px;
            margin: 2px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 5px;
            font-size: 7px;
        }
        th, td {
            border: 1px solid #000;
            padding: 2px 3px;
            text-align: left;
        }
        th {
            background-color: #f0f0f0;
            font-weight: bold;
            text-align: center;
            font-size: 7px;
        }
        td {
            text-align: center;
            font-size: 7px;
        }
        .text-left {
            text-align: left;
        }
        .text-right {
            text-align: right;
        }
        .check {
            font-size: 10px;
        }
        .fw-bold {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>LAPORAN IURAN WARGA</h1>
        <h2>RT 002 RW 017 Bukit Damar</h2>
        <p>Tahun: {{ $tahun }}</p>
        <p>Tanggal Cetak: {{ \Carbon\Carbon::now('Asia/Jakarta')->format('d F Y H:i:s') }}</p>
    </div>

    <table>
        <thead>
            <tr>
                <th style="width: 25px;">No</th>
                <th style="width: 100px;">Nama</th>
                <th style="width: 50px;">Status</th>
                <th style="width: 80px;">Alamat</th>
                <th style="width: 35px;">Jan</th>
                <th style="width: 35px;">Feb</th>
                <th style="width: 35px;">Mar</th>
                <th style="width: 35px;">Apr</th>
                <th style="width: 35px;">Mei</th>
                <th style="width: 35px;">Jun</th>
                <th style="width: 35px;">Jul</th>
                <th style="width: 35px;">Agu</th>
                <th style="width: 35px;">Sep</th>
                <th style="width: 35px;">Okt</th>
                <th style="width: 35px;">Nov</th>
                <th style="width: 35px;">Des</th>
                <th style="width: 35px;">THR</th>
                <th style="width: 35px;">Sosial</th>
                <th style="width: 60px;">Total</th>
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
                    $total = $checklist ? ($checklist->januari + $checklist->februari + $checklist->maret + $checklist->april +
                             $checklist->mei + $checklist->juni + $checklist->juli + $checklist->agustus +
                             $checklist->september + $checklist->oktober + $checklist->november + $checklist->desember +
                             $checklist->thr + $checklist->sosial) : 0;
                @endphp
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td class="text-left">{{ $user->name }}</td>
                    <td>{{ $roleLabels[$role] ?? 'Warga' }}</td>
                    <td class="text-left">{{ $user->alamat ?? '-' }}</td>
                    @if($checklist)
                        <td class="text-right">{{ $checklist->januari > 0 ? number_format($checklist->januari, 0, ',', '.') : '' }}</td>
                        <td class="text-right">{{ $checklist->februari > 0 ? number_format($checklist->februari, 0, ',', '.') : '' }}</td>
                        <td class="text-right">{{ $checklist->maret > 0 ? number_format($checklist->maret, 0, ',', '.') : '' }}</td>
                        <td class="text-right">{{ $checklist->april > 0 ? number_format($checklist->april, 0, ',', '.') : '' }}</td>
                        <td class="text-right">{{ $checklist->mei > 0 ? number_format($checklist->mei, 0, ',', '.') : '' }}</td>
                        <td class="text-right">{{ $checklist->juni > 0 ? number_format($checklist->juni, 0, ',', '.') : '' }}</td>
                        <td class="text-right">{{ $checklist->juli > 0 ? number_format($checklist->juli, 0, ',', '.') : '' }}</td>
                        <td class="text-right">{{ $checklist->agustus > 0 ? number_format($checklist->agustus, 0, ',', '.') : '' }}</td>
                        <td class="text-right">{{ $checklist->september > 0 ? number_format($checklist->september, 0, ',', '.') : '' }}</td>
                        <td class="text-right">{{ $checklist->oktober > 0 ? number_format($checklist->oktober, 0, ',', '.') : '' }}</td>
                        <td class="text-right">{{ $checklist->november > 0 ? number_format($checklist->november, 0, ',', '.') : '' }}</td>
                        <td class="text-right">{{ $checklist->desember > 0 ? number_format($checklist->desember, 0, ',', '.') : '' }}</td>
                        <td class="text-right">{{ $checklist->thr > 0 ? number_format($checklist->thr, 0, ',', '.') : '' }}</td>
                        <td class="text-right">{{ $checklist->sosial > 0 ? number_format($checklist->sosial, 0, ',', '.') : '' }}</td>
                        <td class="text-right fw-bold">{{ number_format($total, 0, ',', '.') }}</td>
                    @else
                        <td colspan="14"></td>
                        <td class="text-right">0</td>
                    @endif
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr style="background-color: #f0f0f0; font-weight: bold;">
                <td colspan="4" class="text-left">TOTAL PER BULAN:</td>
                <td class="text-right">{{ number_format($totalPerBulan['januari'] ?? 0, 0, ',', '.') }}</td>
                <td class="text-right">{{ number_format($totalPerBulan['februari'] ?? 0, 0, ',', '.') }}</td>
                <td class="text-right">{{ number_format($totalPerBulan['maret'] ?? 0, 0, ',', '.') }}</td>
                <td class="text-right">{{ number_format($totalPerBulan['april'] ?? 0, 0, ',', '.') }}</td>
                <td class="text-right">{{ number_format($totalPerBulan['mei'] ?? 0, 0, ',', '.') }}</td>
                <td class="text-right">{{ number_format($totalPerBulan['juni'] ?? 0, 0, ',', '.') }}</td>
                <td class="text-right">{{ number_format($totalPerBulan['juli'] ?? 0, 0, ',', '.') }}</td>
                <td class="text-right">{{ number_format($totalPerBulan['agustus'] ?? 0, 0, ',', '.') }}</td>
                <td class="text-right">{{ number_format($totalPerBulan['september'] ?? 0, 0, ',', '.') }}</td>
                <td class="text-right">{{ number_format($totalPerBulan['oktober'] ?? 0, 0, ',', '.') }}</td>
                <td class="text-right">{{ number_format($totalPerBulan['november'] ?? 0, 0, ',', '.') }}</td>
                <td class="text-right">{{ number_format($totalPerBulan['desember'] ?? 0, 0, ',', '.') }}</td>
                <td class="text-right">{{ number_format($totalPerBulan['thr'] ?? 0, 0, ',', '.') }}</td>
                <td class="text-right">{{ number_format($totalPerBulan['sosial'] ?? 0, 0, ',', '.') }}</td>
                <td class="text-right" style="background-color: #0066cc; color: white;">{{ number_format($grandTotal ?? 0, 0, ',', '.') }}</td>
            </tr>
        </tfoot>
    </table>

    @if($note)
    <div style="margin-top: 30px;">
        <h4 style="font-size: 12px; font-weight: bold; margin-bottom: 10px;">NOTE:</h4>
        <div style="font-size: 10px; white-space: pre-line; border: 1px solid #000; padding: 10px;">{{ $note }}</div>
    </div>
    @endif
</body>
</html>


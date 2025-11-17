<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = [
        'tanggal',
        'keterangan',
        'kategori',
        'jenis',
        'jumlah',
        'catatan',
        'bukti',
    ];

    protected $casts = [
        'tanggal' => 'date',
        'jumlah' => 'decimal:2',
    ];

    public function scopePemasukan($query)
    {
        return $query->where('jenis', 'pemasukan');
    }

    public function scopePengeluaran($query)
    {
        return $query->where('jenis', 'pengeluaran');
    }

    public function scopeBulan($query, $bulan)
    {
        return $query->whereMonth('tanggal', $bulan);
    }

    public function scopeTahun($query, $tahun)
    {
        return $query->whereYear('tanggal', $tahun);
    }
}

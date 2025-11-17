<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LaporanIuran extends Model
{
    protected $fillable = [
        'bulan',
        'tahun',
        'nama_file',
        'path_file',
        'judul',
        'keterangan',
    ];

    public function scopeBulan($query, $bulan)
    {
        return $query->where('bulan', $bulan);
    }

    public function scopeTahun($query, $tahun)
    {
        return $query->where('tahun', $tahun);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IuranWarga extends Model
{
    protected $fillable = [
        'user_id',
        'tanggal_transfer',
        'jumlah',
        'bukti_transfer',
        'catatan',
        'status',
        'catatan_admin',
    ];

    protected $casts = [
        'tanggal_transfer' => 'date',
        'jumlah' => 'decimal:2',
    ];

    /**
     * Get the user that owns the iuran warga.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    public function scopeApproved($query)
    {
        return $query->where('status', 'approved');
    }

    public function scopeRejected($query)
    {
        return $query->where('status', 'rejected');
    }
}

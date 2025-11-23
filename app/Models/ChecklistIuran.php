<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChecklistIuran extends Model
{
    protected $fillable = [
        'user_id',
        'tahun',
        'januari',
        'februari',
        'maret',
        'april',
        'mei',
        'juni',
        'juli',
        'agustus',
        'september',
        'oktober',
        'november',
        'desember',
        'thr',
        'sosial',
        'note',
    ];

    protected $casts = [
        'tahun' => 'integer',
        'januari' => 'decimal:2',
        'februari' => 'decimal:2',
        'maret' => 'decimal:2',
        'april' => 'decimal:2',
        'mei' => 'decimal:2',
        'juni' => 'decimal:2',
        'juli' => 'decimal:2',
        'agustus' => 'decimal:2',
        'september' => 'decimal:2',
        'oktober' => 'decimal:2',
        'november' => 'decimal:2',
        'desember' => 'decimal:2',
        'thr' => 'decimal:2',
        'sosial' => 'decimal:2',
    ];

    /**
     * Get total amount for this checklist
     */
    public function getTotalAttribute()
    {
        return $this->januari + $this->februari + $this->maret + $this->april +
               $this->mei + $this->juni + $this->juli + $this->agustus +
               $this->september + $this->oktober + $this->november + $this->desember +
               $this->thr + $this->sosial;
    }

    /**
     * Get the user that owns the checklist.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

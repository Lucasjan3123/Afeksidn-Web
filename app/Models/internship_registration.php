<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class internship_registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'position_id',
        'status',
        'asal_daerah',
        'semester',
        'jurusan',
        'universitas',
        'alasan',
        'kelebihan',
        'kekurangan',
        'harapan',
        'one_description',
        'bukti_follow',
        'cv',
        'portofolio'
    ];

    public function position()
    {
        return $this->belongsTo(internshipPosition::class, 'position_id');
    }
}

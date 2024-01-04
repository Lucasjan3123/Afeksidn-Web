<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class internshipPosition extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    protected $fillable = [
        'nama_posisi',
        'tipe_kerja',
        'slug',
        'tempat',
        'jobdesc',
        'status',
        'kualifikasi'
    ];

    public function registrations()
    {
        return $this->hasMany(internship_registration::class, 'position_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketLayananNonProfessional extends Model
{
    use HasFactory;
    protected $table = 'paket_non_professionals';
    protected $guarded = ['id'];
    protected $fillable = [
        'layanan_nonProfessionals_id',
        'nama_paket',
        'harga'
    ];

    public function layanan_non_professionals()
    {
        return $this->belongsTo(LayananNonProfessional::class, 'layanan_nonProfessionals_id', 'id');
    }

    // public function pembayaran_layanans()
    // {
    //     return $this->hasMany(PembayaranLayanan::class, 'paket_layanan_non_professional_id', 'id');
    // }

    public function pembayaran_layanans()
    {
        return $this->hasMany(PembayaranLayanan::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketProfesionalConseling extends Model
{
    use HasFactory;
    protected $table = 'paket_profesional_conselings';
    protected $fillable = [
        'nama_paket',
        'professional_conseling_id',
        'harga',
    ];

    public function professional_conseling_id()
    {
        return $this->belongsTo(profresional_conseling::class, 'profesional_conseling_id', 'id_profConseling');
    }

    public function pembayaran_layanans()
    {
        return $this->hasMany(PembayaranLayanan::class, 'paket_professional_conseling_id', 'id');
    }
}

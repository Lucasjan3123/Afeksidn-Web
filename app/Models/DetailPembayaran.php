<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPembayaran extends Model
{
    use HasFactory;

    protected $table = 'detail_pembayarans';

    protected $fillable = [
        'pembayaran_layanan_id',
        'tgl_konsultasi',
        'jam_konsultasi',
        'detail_masalah',
        'kode_bayar_1',
        'kode_bayar_2',
        'expired_date'
    ];

    public function pembayaran_layanan()
    {
        return $this->belongsTo(PembayaranLayanan::class, 'pembayaran_layanan_id', 'id');
    }
}

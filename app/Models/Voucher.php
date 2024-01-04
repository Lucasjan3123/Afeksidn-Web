<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;
    protected $table = 'vouchers';
    protected $fillable = [
        'kode',
        'nama_voucher',
        'jumlah_diskon',
        'stok_voucher',
        'expired_date',
    ];
}

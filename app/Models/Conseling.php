<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conseling extends Model
{
    use HasFactory;

    protected $table = "conselings";
    protected $fillable = ["namaConseling"];

    public function pembayaran_layanan()
    {
        return $this->hasMany(PembayaranLayanan::class);
    }
}

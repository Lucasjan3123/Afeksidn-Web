<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentoring extends Model
{
    use HasFactory;

    protected $table = "mentorings";
    protected $fillable = ["namaMentoring"];

    public function pembayaran_layanan()
    {
        return $this->hasMany(PembayaranLayanan::class);
    }
}

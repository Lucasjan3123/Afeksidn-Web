<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ecourse extends Model
{
    use HasFactory;

    protected $table = "ecourse";
    protected $fillable = ["nama_course","instruktur","deskripsi","durasi","level","harga","link_akses", 'cover_ecourse'];
}

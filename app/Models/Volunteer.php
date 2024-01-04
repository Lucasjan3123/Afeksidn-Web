<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;

    protected $table = 'volunteers';

    protected $fillable = [
        "user_id",
        "volunteer_category",
        "pekerjaan",
        "instansi",
        "divisi",
        "alasan",
        "bukti_follow",
        "cv",
        "portofolio"];



    public function user2()
    {
        return $this->belongsTo(User::class, 'user_id', 'id_user');
    }
}

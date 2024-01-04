<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ebook extends Model
{
    use HasFactory;
    protected $table = "ebook";
    protected $fillable = ["judul","penulis","tahun_terbit","kategori_ebook_id","deskripsi","harga","format-file","cover_ebook"];

    public function categoryEbook()
    {
        return $this->belongsTo(categoryEbook::class, 'kategori_ebook_id', 'id');
    }
    
}

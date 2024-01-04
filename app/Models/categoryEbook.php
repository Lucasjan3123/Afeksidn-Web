<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoryEbook extends Model
{
    use HasFactory;

    protected $table = "category_ebook";
    protected $fillable = ["nama_kategori_ebook"];

    public function ebook()
    {
        return $this->hasMany(Ebook::class);
    }
}

<?php

namespace App\Models;

use App\Models\Psikolog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class profresional_conseling extends Model
{
    use HasFactory;

    protected $table = "professional_conselings";
    protected $fillable = [
        'jenis_layanan',
        "namaPengalaman",
        'slug'
    ];

    // public function pembayaran_layanan()
    // {
    //     return $this->hasMany(PembayaranLayanan::class);
    // }

    public function paket_professional_conseling()
    {
        return $this->hasMany(PaketProfessionalConseling::class, 'professional_conseling_id', 'id_profConseling');
    }

    // public function psikologs()
    // {
    //     return $this->hasMany(Psikolog::class, 'professional_conseling_id', 'id');
    // }

    /**
     * The psikolog_professional that belong to the profresional_conseling
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function psikolog_professional(): BelongsToMany
    {
        return $this->belongsToMany(Psikolog::class, 'psikologprofesional', 'layanan_profesional_konseling_id', 'psikolog_id');
    }
}

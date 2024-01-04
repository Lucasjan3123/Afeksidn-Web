<?php

namespace App\Models;

use App\Models\EventTransaction;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, CanResetPassword;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';

    protected $fillable = [
        'nama',
        'email',
        'jenisKelamin',
        'password',
        'umur',
        'google_id',
        'no_whatsapp',
        'instansi',
        'domisili'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function event_transaction()
    {
        return $this->hasMany(EventTransaction::class);
    }

    public function volunteers()
    {
        return $this->hasMany(Volunteer::class);
    }

    public function konselors()
    {
        return $this->hasMany(Konselor::class);
    }

    public function pembayaran_layanan()
    {
        return $this->hasMany(PembayaranLayanan::class);
    }
}
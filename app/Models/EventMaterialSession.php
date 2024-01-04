<?php

namespace App\Models;

use App\Models\Event;
use App\Models\Psikolog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EventMaterialSession extends Model
{
    use HasFactory;

    protected $fillable = [
        "title_sesi",
        "event_id",
        "pembicara_id",
    ];

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }

    public function pembicara()
    {
        return $this->belongsTo(Psikolog::class, 'pembicara_id');
    }
}
<?php

namespace App\Models;

use App\Models\User;
use App\Models\Event;
use App\Models\Voucher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EventTransaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'event_id',
        'voucher_id',
        'ref_transaction_event',
        'payment_method',
        'total_payment',
        'fee_transaction',
        'date_order',
        'status',
        'info',
        'bukti_follow',
        'bukti_linkedin',
        'bukti_share',
        'kode_bayar_1',
        'kode_bayar_2',
    ];

    protected $guarded = [
        'id'
    ];

    public function voucher()
    {
        return $this->belongsTo(Voucher::class, 'voucher_id');
    }

    public function user () {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function event () {
        return $this->belongsTo(Event::class, 'event_id');
    }
}

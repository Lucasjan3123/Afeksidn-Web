<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        // 'https://afeksi.ahay.my.id/midtrans/callback',
        'https://afeksi.ahay.my.id/api/midtrans/callback',
        // 'http://127.0.0.1:8000/midtrans/callback',
        //'https://f900-125-166-3-41.ngrok-free.app/api/midtrans/notification-hooks',
        'https://18ef-125-166-0-137.ngrok-free.app/api/midtrans/callback',
    ];
}

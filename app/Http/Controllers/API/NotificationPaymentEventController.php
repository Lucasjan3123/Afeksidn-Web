<?php

namespace App\Http\Controllers\API;

use Midtrans\Config;
use Midtrans\Notification;
use Illuminate\Http\Request;
use App\Models\EventTransaction;
use App\Models\PembayaranLayanan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class NotificationPaymentEventController extends Controller
{
    public function callback(Request $request)
    {   
        //set konfigurasi midtrans
        Config::$serverKey = 'SB-Mid-server-jCrOnrL8Qbl30LMOknfYOxtJ';
        Config::$isProduction = false;
        Config::$isSanitized = true;
        Config::$is3ds = true;
        // config::$isProduction = config('midtrans.isProduction');
        // config::$isSanitized = config('midtrans.isSanitized');
        // config::$is3ds = config('midtrans.is3ds');

        //buat instance midtrans notification
        $notification = new Notification();
        $order = explode('-',  $notification->order_id);

        // cek kesesuaian
        $orderID = $notification->order_id;
        $statusCode =  $notification->status_code;
        $grossAmount =  $notification->gross_amount;

        $reqSignature =  $notification->signature_key;

        $signature = hash('sha512', $orderID.$statusCode.$grossAmount.config('midtrans.midtrans.server_key'));

        if ($signature != $reqSignature) {
            return response()->json([
                "message" => "Invalid Signature"], 401);
        }

        //assign ke variabel untuk memudahkan coding
        $status = $notification->transaction_status;
        $type = $notification->payment_type;
        $fraud = $notification->fraud_status;
        $order_id = $order[1];

        //cari transaksi berdasarkan id
        if (substr($notification->order_id, 0, 3) == 'WEB') {
            $transaction = EventTransaction::where('ref_transaction_event', $notification->order_id)->firstOrFail();
        } else if (substr($notification->order_id, 0, 4) == 'PROF' || substr($notification->order_id, 0, 3) == 'DEV') {
            $transaction = PembayaranLayanan::where('ref_transaction_layanan', $notification->order_id)->firstOrFail();
        }
        // 

        if (!$order) {
            return response()->json(["message" => "Invalid Order"], 400);        
        }
        //$transaction = EventTransaction::where('ref_transaction_event', $notification->order_id)->firstOrFail();
        //handle notification status midtrans
        if($status == 'capture'){
            if ($type == 'credit_card') {
                if ($fraud == 'challenge') {
                    $transaction->status = 'CHALLENGE';
                }else{
                    $transaction->status = 'SUCCESS';
                }
            }
        }
        else if($status == 'settlement') {
            $transaction->status = 'PAID';
        }
        else if($status == 'pending') {
            $transaction->status = 'PENDING';
        }
        else if($status == 'deny') {
            $transaction->status = 'UNPAID';
        }
        else if($status == 'expire') {
            $transaction->status = 'EXPIRED';
        }
        else if($status == 'cancel') {
            $transaction->status = 'FAILED';
        }

        //simpan transaksi
        $transaction->update([
            'status' => $transaction->status
        ]);


        if ($transaction) {
            if ($status == 'capture' && $fraud == 'challenge') {
                return response()->json([
                    'meta' => [
                    'code' => 200,
                    'message' => 'Midtrans Payment Challenge'
                    ]
                ]);
            }
            else if ($transaction) {
                if ($status == 'capture' && $fraud == 'challenge') {
                    return response()->json([
                        'meta' => [
                        'code' => 200,
                        'message' => 'Midtrans Payment Challenge'
                        ]
                    ]);
                }
        }
        else {
                return response()->json([
                    'meta' => [
                    'code' => 200,
                    'message' => 'Midtrans Payment not Settlement'
                    ]
                ]);
            }
        }
    }

    public function finishRedirect(Request $request)
    {
        return view('pages.detail-campaign');
    }

    public function unfinishRedirect(Request $request)
    {
        return view('pages.unfinish');
    }

    public function errorRedirect(Request $request)
    {
        return view('pages.error');
    }
}
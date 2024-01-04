<?php

namespace App\Services\Midtrans\PembayaranEvent;

use \Midtrans\Config;
use Illuminate\Support\Facades\Auth;

class EwalletService
{
    public function gopay($method, $data)
    {
        $serverkey = config('midtrans.midtrans.server_key');
        // dd($serverkey);
        $serverBase64 = base64_encode($serverkey . ':');
        // dd($serverBase64);
        $url = config('midtrans.midtrans.url');
        // dd($url);
        $reference = $data['reference'];
        // dd($reference);
        $total_amount = $data["harga_event"];
        $body = [
            "payment_type" => $method,
            "transaction_details" => [
                "order_id"      => $reference,
                "gross_amount"  => $total_amount
            ],
            "customer_details"  => [
                "email"  => Auth::user()->email,
                "first_name" => Auth::user()->nama,
                "phone"=> Auth::user()->no_whatsapp
            ],
            "gopay" => [
                'enable_callback' => true,         // optional
                'callback_url' => env('URL_WEB')   // optional
            ]
        ];

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url, // your preferred url
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($body),
            CURLOPT_HTTPHEADER => [
                // Set here requred headers
                "Accept: application/json",
                "Authorization: Basic " . $serverBase64,
                "Content-type: application/json",
            ],
        ));

        $response = curl_exec($curl);
        //dd($response);
        $err = curl_error($curl);
        curl_close($curl);
        $response = json_decode($response, true);
        return $response ?: $err;
    }

    public function qris($method, $data)
    {
        $serverkey = config('midtrans.midtrans.server_key');
        $serverBase64 = base64_encode($serverkey . ':');
        $url = config('midtrans.midtrans.url');
        $reference = $data['reference'];
        $total_amount = $data["harga_event"];
        $body = [
            "payment_type" => $method,
            "transaction_details" => [
                "order_id"      => $reference,
                "gross_amount"  => $total_amount
            ],
            "customer_details"  => [
                // "email"  => Auth::user()->email,
                // "first_name" => Auth::user()->nama,
                // "phone"=> Auth::user()->no_whatsapp
                "email"  => 'rifqialfiansyah@student.ac.id',
                "first_name" => 'rifqi alfian',
                "phone"=> '089798686863'
            ],
            "qris" => [
                "acquirer" => "gopay"
            ]
        ];
        // dd($body);

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url, // your preferred url
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($body),
            CURLOPT_HTTPHEADER => [
                // Set here requred headers
                "accept: application/json",
                "authorization: Basic " . $serverBase64,
                "content-type: application/json",
            ],
        ));

        $response = curl_exec($curl);
        //dd($response);
        $err = curl_error($curl);
        curl_close($curl);
        $response = json_decode($response, true);
        return $response ?: $err;
    }

    public function shopeePay($method, $data)
    {
        $serverkey = config('midtrans.midtrans.server_key');
        $serverBase64 = base64_encode($serverkey . ':');
        $url = config('midtrans.midtrans.url');
        $reference = $data['reference'];
        $total_amount = $data["harga_event"];
        $body = [
            "payment_type" => $method,
            "transaction_details" => [
                "order_id"      => $reference,
                "gross_amount"  => $total_amount
            ],
            "item_details" => [
                [
                    "id" => $data['event_id'],
                    "price" => $total_amount,
                    "quantity" => 1,
                    "name" => $data['title_event']
                ]
            ],
            "customer_details"  => [
                    "email"  => Auth::user()->email,
                    "first_name" => Auth::user()->nama,
                    "phone"=> Auth::user()->no_whatsapp
                ],
            "shopeepay" => [
                "callback_url" => env('URL_WEB')
            ]
        ];
        // dd($body);

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url, // your preferred url
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($body),
            CURLOPT_HTTPHEADER => [
                // Set here requred headers
                "accept: application/json",
                "authorization: Basic " . $serverBase64,
                "content-type: application/json",
            ],
        ));

        $response = curl_exec($curl);
        //dd($response);
        $err = curl_error($curl);
        curl_close($curl);
        $response = json_decode($response, true);
        return $response ?: $err;
    }
}

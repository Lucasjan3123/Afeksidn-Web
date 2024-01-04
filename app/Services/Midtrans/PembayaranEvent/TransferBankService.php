<?php 

namespace App\Services\Midtrans\PembayaranEvent;

use Illuminate\Support\Facades\Auth;

class TransferBankService
{

    public function bank($method, $data) {      // PAYMENT MENGGUNAKAN BNI, BRI, BCA ,CIMB
        $serverkey = config('midtrans.midtrans.server_key');
        $serverBase64 = base64_encode($serverkey.':');
        $url = config('midtrans.midtrans.url');
        $reference = $data['reference'];
        $total_amount = $data["harga_event"] ;
        $body = [
            "payment_type" => "bank_transfer",
            "transaction_details" => [
                "order_id"      => $reference,
                "gross_amount"  => $total_amount
                ],
            "bank_transfer"     => [
                    "bank"  => $method
                ],
            "customer_details"  => [
                    "email"  => Auth::user()->email,
                    "first_name" => Auth::user()->nama,
                    "phone"=> Auth::user()->no_whatsapp
                ]
            ];
        //dd($body);
        $curl = curl_init();
        curl_setopt_array($curl, array(
                CURLOPT_URL => $url,// your preferred url
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
                    "authorization: Basic ".$serverBase64 ,
                    "content-type: application/json",
                ],
            ));

            $response = curl_exec($curl);
            // dd($response);
            $err = curl_error($curl);
            curl_close($curl);
            $response =json_decode($response, true);
            return $response ?: $err;

    }

    // MANDIRI VA
    public function mandiri($method, $data) {
        $serverkey = config('midtrans.midtrans.server_key');
        $serverBase64 = base64_encode($serverkey.':');
        $url = config('midtrans.midtrans.url');
        $reference = $data['reference'];
        $total_amount = $data["harga_event"] ;
        $body = [
            "payment_type" => "echannel",
            "transaction_details" => [
                "order_id"      => $reference,
                "gross_amount"  => $total_amount
                ],
            "echannel" => [
                "bill_info1" => "Payment:",
                "bill_info2" => "Online purchase"
                ],
            "customer_details"  => [
                    "email"  => Auth::user()->email,
                    "first_name" => Auth::user()->nama,
                    "phone"=> Auth::user()->no_whatsapp
                ]
            ];
        
        $curl = curl_init();
        curl_setopt_array($curl, array(
                CURLOPT_URL => $url,// your preferred url
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
                    "authorization: Basic ".$serverBase64 ,
                    "content-type: application/json",
                ],
            ));

            $response = curl_exec($curl);
            //dd($response);
            $err = curl_error($curl);
            curl_close($curl);
            $response =json_decode($response, true);
            return $response ?: $err;
    }

    // PERMATA VA
    public function permata($method, $data) {
        $serverkey = config('midtrans.midtrans.server_key');
        $serverBase64 = base64_encode($serverkey.':');
        $url = config('midtrans.midtrans.url');
        $reference = $data['reference'];
        $total_amount = $data["harga_event"] ;
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
                ]
            ];
        
        $curl = curl_init();
        curl_setopt_array($curl, array(
                CURLOPT_URL => $url,// your preferred url
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
                    "authorization: Basic ".$serverBase64 ,
                    "content-type: application/json",
                ],
            ));

            $response = curl_exec($curl);
            //dd($response);
            $err = curl_error($curl);
            curl_close($curl);
            $response =json_decode($response, true);
            return $response ?: $err;
    }
}

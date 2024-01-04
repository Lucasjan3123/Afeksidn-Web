<?php

namespace App\Http\Controllers\Transaksi\Event;

use Carbon\Carbon;
use App\Models\bank;
use App\Models\Voucher;
use Illuminate\Http\Request;
use App\Models\EventTransaction;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use App\Services\Midtrans\PembayaranEvent\CstoreService;
use App\Services\Midtrans\PembayaranEvent\EwalletService;
use App\Services\Midtrans\PembayaranEvent\TransferBankService;
// use \Midtrans\Config;

class WebinarTransaksiController extends Controller
{
    public function pembayaran($ref_transaction_event) {
        $data = EventTransaction::with(
            'user',
            'event')
            ->where('ref_transaction_event', $ref_transaction_event)
            ->firstOrFail();

        $data->event->time_start = Carbon::parse($data->time_start)->format('H:i');
        $data->event->time_finish = Carbon::parse($data->event->time_finish)->format('H:i');
        $data->event->date_event = Carbon::parse($data->event->date_event)->format('d F Y');

        return view('pages.Kegiatan.pembayaran-webinar',[
            'data' => $data
        ]);
    }


    public function checkoutWebinar(Request $request, $ref_transaction_event) {
        if (isset($request->btnBatalVoucher)) {
            session()->forget('apply');
            return back();
        } else if (isset($request->btnApplyVoucher)) {
            if (isset($request->input_code)) {
                $now = Carbon::now();
                $kode = Voucher::where('kode', $request->input_code)->where('expired_date', '>=', $now)->where('stok_voucher', '>', 0)->first();
                if (!$kode) {
                    return back()->with('error', 'Code Voucher is Invalid');
                }
                session()->put('apply', [
                    'kode' => $kode->kode,
                    'diskon' => $kode->jumlah_diskon,
                    'pesan' => "Berhasil Menerapkan Voucher",
                    'bank' => $request->bank
                ]);
                return back();
            }
            return back()->with('error', 'Code Voucher is Null');
        }

        $validate = Validator::make($request->all(), [
            "bank" => 'required',
            "ref" => 'required',
        ]);

        if ($validate->fails()) {
            return back()->with('message', 'Harap Pilih Bank');
        }

        $voucher_id = Voucher::where('kode', $request->input_code)->pluck('id')->first();
        $bank = bank::where('id', $request->bank)->pluck('bank')->first();
        $response = $this->klasifikasiPaymentMethod($bank, $ref_transaction_event, $voucher_id);
        // response -------------------
        if($response["status_code"] != 201 ) {
            Alert::alert()->html('<h4 class="fw-bold text-danger">FAILED PAYMENT METHOD</h4>', '<p>There was some error in the system, Please try again later or change the Payment Method.<br><br>Error: <span class="pt-2 fw-bold ">500 Server Error</span></p>');
            return back();
        }
        if($request->input_code != null ) {
            $stok = Voucher::where('kode', $request->input_code)->pluck('stok_voucher')->first();
            Voucher::where('id', $voucher_id)->update([
                'stok_voucher' => $stok - 1
            ]);
        }
        $getData =EventTransaction::where('ref_transaction_event', $ref_transaction_event)->first();
        // ambil data
        if ($bank == 'bni' || $bank == 'bri' || $bank == 'bca' || $bank == 'cimb' || $bank == 'permata') {
            $va = '<h6 style="text-transform:uppercase;">' . $bank . ' VA = ' . $getData->kode_bayar_1 . '</h6>';
            $pesan = "Silahkan Lengkapi Pembayaran Sebelum <br><strong>" . $getData->updated_at->addDay(1)->format('l, d M Y') . "</strong> pukul </strong>" . $getData->updated_at->format('H:i') . "</strong>";
        } 
//-------- mandiri
        else if ($bank == 'mandiri') {
            $va =   '<h6 style="text-transform:uppercase;">' . $bank . ' Bill Key = ' . $getData->kode_bayar_1 . '</h6>
                    <h6 style="text-transform:uppercase;">' . $bank . ' Bill Code = ' . $getData->kode_bayar_2 . '</h6>';
            $pesan = "Silahkan Lengkapi Pembayaran Sebelum <br><strong>" . $getData->updated_at->addDay(1)->format('l, d M Y') . "</strong> pukul </strong>" . $getData->updated_at->format('H:i') . "</strong>";
        } 
//------------ INDOMARET
        else if ($bank == 'indomaret') {
            $va =   '<h6 style="text-transform:uppercase;">' . $bank . ' Kode Pembayaran = ' . $getData->kode_bayar_1 . '</h6>
                    <h6 style="text-transform:uppercase;">Kode Merchant = ' . $getData->kode_bayar_2 . '</h6>
                    ';
            $pesan = "Silahkan Lengkapi Pembayaran Sebelum <br><strong>" . $getData->updated_at->addDay(1)->format('l, d M Y') . "</strong> pukul </strong>" . $getData->updated_at->format('H:i') . "</strong>";
        }
//-------------------------- ALFAMART-------------------
        else if ($bank == 'alfamart') {
            $va =   '<h6 style="text-transform:uppercase;">' . $bank . ' Kode Pembayaran = ' . $getData->kode_bayar_1 . '</h6>';
            $pesan = "Silahkan Lengkapi Pembayaran Sebelum <br><strong>" . $getData->updated_at->addDay(1)->format('l, d M Y') . "</strong> pukul </strong>" . $getData->updated_at->format('H:i') . "</strong>";
        }
//--------------------- SHOPPERPAY-----------------
        else if ($bank == 'shopeepay') {
            $va =   '<center><a style="text-transform:uppercase;" href="'.$getData->kode_bayar_1.'" class="btn btn-primary">Bayar Sekarang</a></center>';
            $pesan = "Silahkan Lengkapi Pembayaran Sebelum <br><strong>".$getData->updated_at->format('l, d M Y')."</strong> pukul </strong>".$getData->updated_at->addMinutes(15)->format('H:i')."</strong>";
        }
//--------------------------- GOPAY------------------
        else if ($bank == 'gopay') {
            $va =   '<center>
                        <a style="text-transform:uppercase;" href="' . $getData->kode_bayar_1 . '"  class="btn btn-primary">Bayar Sekarang</a>
                    </center>';
            $pesan = "Silahkan Lengkapi Pembayaran Sebelum <br><strong>".$getData->updated_at->format('l, d M Y')."</strong> pukul </strong>".$getData->updated_at->addMinutes(15)->format('H:i')."</strong>";
        }
        session()->forget('apply');
        Session::flash('popupAfterMentoring', [
                'kode' => $va,
                'pesan' => $pesan 
            ]);
        return Redirect::to('/'.$ref_transaction_event.'/notification-webinar/success');
    }


// ----------------KLASIFIKASI PAYMENT METHODE--------------------------
// 
public function klasifikasiPaymentMethod($bank, $ref, $voucher_id)
    {
        $data = EventTransaction::with('event', 'user')->where('ref_transaction_event', $ref)->first();
        $diskon = Voucher::where('id', $voucher_id)->first();
        $voucher_id == null ? $potongan = 0 : $potongan = $diskon->jumlah_diskon; 
        // CEK PAYMENT METHOD YANG DIPILIH
        if ($bank == 'bni' || $bank == 'bri' || $bank == 'bca' ||  $bank == 'cimb'){
            $data = [
                "reference" => $ref,
                "harga_event" => $data->event->price_event - $potongan,
                "nama"  => $data->user->nama,
                "email"  => $data->user->email,
                "no_tlpn" => $data->user->no_whatsapp
            ];

            $result = new TransferBankService();
            $res = $result->bank($bank, $data);
            //CEK KODE RESPON
            if ($res["status_code"] != 201) {
                $responseError = [
                    'status_code' => $res["status_code"],
                    'message' => $res['status_message']
                ];
                return $responseError;
            }
            // SET UPDATE TABLE TRANSAKSI EVENT
            EventTransaction::where('ref_transaction_event', $res["order_id"])->update([
                "payment_method" => $bank,
                "total_payment" => $res["gross_amount"],
                "kode_bayar_1" => $res["va_numbers"][0]["va_number"],
                "fee_transaction" => 0,
                "status" => "PENDING",
                "updated_at" => $res["transaction_time"]
            ]);
            $responData = [
                "status_code" => $res["status_code"],
                "message" =>  $res["status_message"],
            ];
            return $responData;
        }
//-------------- CEK PAYMENT METHOD YANG DIPILIH MISAL PERMATA
        else if ($bank == 'permata') {
            $data = [
                    "reference" => $ref,
                    "harga_event" => $data->event->price_event - $potongan,
                    "nama"  => $data->user->nama,
                    "email"  => $data->user->email,
                    "no_tlpn" => $data->user->no_whatsapp
            ];

            $result = new TransferBankService();
            $res = $result->permata($bank, $data);
            //CEK KODE RESPON
            if ($res["status_code"] != 201) {
            $responseError = [
                    'status_code' => $res["status_code"],
                    'message' => $res['status_message']
                ];
                return $responseError;
            }
            // SET UPDATE TABLE TRANSAKSI EVENT
            EventTransaction::where('ref_transaction_event', $res["order_id"])->update([
                "payment_method" => $bank,
                "total_payment" => $res["gross_amount"],
                "kode_bayar_1" => $res["permata_va_number"],
                "fee_transaction" => 0,
                "status" => "PENDING",
                "updated_at" => $res["transaction_time"]
            ]);
            $responData = [
                "status_code" => $res["status_code"],
                "message" =>  $res["status_message"],
            ];
            return $responData;
        }
//--------------- CEK PAYMENT METHOD YANG DIPILIH MISAL MANDIRI
        else if ($bank == 'mandiri') {
            $data = [
                    "reference" => $ref,
                    "harga_event" => $data->event->price_event - $potongan,
                    "nama"  => $data->user->nama,
                    "email"  => $data->user->email,
                    "no_tlpn" => $data->user->no_whatsapp
            ];

            $result = new TransferBankService();
            $res = $result->mandiri($bank, $data);

            //CEK KODE RESPON
            if ($res["status_code"] != 201) {
                $responseError = [
                    'status_code' => $res["status_code"],
                    'message' => $res['status_message']
                ];
                return $responseError;
            }
            // SET UPDATE TABLE TRANSAKSI EVENT
            EventTransaction::where('ref_transaction_event', $res["order_id"])->update([
                "payment_method" => $bank,
                "total_payment" => $res["gross_amount"],
                "kode_bayar_1" => $res["bill_key"],
                "kode_bayar_2" => $res["biller_code"],
                "fee_transaction" => 0,
                "status" => "PENDING",
                "updated_at" => $res["transaction_time"]
            ]);
            $responData = [
                "status_code" => $res["status_code"],
                "message" =>  $res["status_message"],
            ];
            return $responData;
        }
//---------------------- PAYMENT ALFAMART-----------------
        else if ($bank == 'alfamart' )
        {
            $data = [
                    "reference" => $ref,
                    "harga_event" => $data->event->price_event - $potongan,
                    "nama"  => $data->user->nama,
                    "email"  => $data->user->email,
                    "no_tlpn" => $data->user->no_whatsapp,
                    "pesan" => "Pembayaran Webinar ".$data->event->title_event
                ];
                $result = new CstoreService();
                $res = $result->alfamart($bank, $data);
              // Konversi respons menjadi array

             //CEK KODE RESPON
            if ($res["status_code"] != 201 ) {
                $responseError = [
                    'status_code' => $res["status_code"],
                    'message' => $res['status_message']
                ];
                return $responseError;
            }
            // SET UPDATE TABLE TRANSAKSI EVENT
            EventTransaction::where('ref_transaction_event', $res["order_id"])->update([
                "payment_method" => $bank,
                "total_payment" => $res["gross_amount"],
                "kode_bayar_1" => $res["payment_code"],
                "fee_transaction" => 0,
                "status" => "PENDING",
                "updated_at" => $res["transaction_time"]
            ]);
            $responData = [
                "status_code" => $res["status_code"],
                "message" =>  $res["status_message"],
            ];
            return $responData;
        }
//-------------------------PAYMENT INDOMARET
        else if ($bank == 'indomaret')
            {
                $data = [
                        "reference" => $ref,
                        "harga_event" => $data->event->price_event - $potongan,
                        "nama"  => $data->user->nama,
                        "email"  => $data->user->email,
                        "no_tlpn" => $data->user->no_whatsapp,
                        "pesan" => "Pembayaran Webinar ".$data->event->title_event
                    ];
                    // dd($data);
                    $result = new CstoreService();
                    $res = $result-> indomaret($bank, $data);

                // Konversi respons menjadi array

                //CEK KODE RESPON
                if ($res["status_code"] != 201 ) {
                    $responseError = [
                    'status_code' => $res["status_code"],
                    'message' => $res['status_message']
                ];
                return $responseError;
                }
                // SET UPDATE TABLE TRANSAKSI EVENT
                EventTransaction::where('ref_transaction_event', $res["order_id"])->update([
                    "payment_method" => $bank,
                    "total_payment" => $res["gross_amount"],
                    "kode_bayar_1" => $res["payment_code"],
                    "kode_bayar_2" => $res["merchant_id"],
                    "fee_transaction" => 0,
                    "status" => "PENDING",
                    "updated_at" => $res["transaction_time"]
                ]);
                $responData = [
                    "status_code" => $res["status_code"],
                    "message" =>  $res["status_message"],
                ];
                return $responData;
            }
// --------------QRIS
        else if ($bank == 'qris') {
            $data = [
                    "reference" => $ref,
                    "harga_event" => $data->event->price_event - $potongan,
                    "nama"  => $data->user->nama,
                    "email"  => $data->user->email,
                    "no_tlpn" => $data->user->no_whatsapp
            ];

            $result = new EwalletService();
            $res = $result->qris($bank, $data);
            return response($res);

            //CEK KODE RESPON
            if ($res["status_code"] != 201) {
                $responseError = [
                    'status_code' => $res["status_code"],
                    'message' => $res['status_message']
                ];
                return $responseError;
            }
            // SET UPDATE TABLE TRANSAKSI EVENT
            EventTransaction::where('ref_transaction_event', $res["order_id"])->update([
                "payment_method" => $bank,
                "total_payment" => $res["gross_amount"],
                "kode_bayar_1" => $res["actions"][0]['url'],
                "fee_transaction" => 0,
                "status" => "PENDING",
                "updated_at" => $res["transaction_time"]
            ]);
            $responData = [
                "status_code" => $res["status_code"],
                "message" =>  $res["status_message"],
            ];
            return $responData;

        }

//------------------------------------- PAYMENT GOPAY
        else if ($bank == 'gopay') {
            $data = [
                    "reference" => $ref,
                    "harga_event" => $data->event->price_event - $potongan,
                    "nama"  => $data->user->nama,
                    "email"  => $data->user->email,
                    "no_tlpn" => $data->user->no_whatsapp
            ];

            $result = new EwalletService();
            $res = $result->gopay($data, $bank);

            // CEK KODE RESPON
            if ($res["status_code"] != 201) {
                $responseError = [
                    'status_code' => $res["status_code"],
                    'message' => $res['status_message']
                ];
                return $responseError;
            }
            // SET UPDATE TABLE TRANSAKSI EVENT
            EventTransaction::where('ref_transaction_event', $res["order_id"])->update([
                "payment_method" => $bank,
                "total_payment" => $res["gross_amount"],
                "kode_bayar_1" => $res["actions"][1]['url'],
                "kode_bayar_2" => $res["actions"][0]['url'],
                "fee_transaction" => 0,
                "status" => "PENDING",
                "updated_at" => $res["transaction_time"]
            ]);
            $responData = [
                "status_code" => $res["status_code"],
                "message" =>  $res["status_message"],
            ];
            return $responData;


        }

//---------------------- PAYMENT SHOPPEPAY
        else if ($bank == 'shopeepay') {
            $data = [
                "reference" => $ref,
                "harga_event" => $data->event->price_event - $potongan,
                "nama"  => $data->user->nama,
                "email"  => $data->user->email,
                "no_tlpn" => $data->user->no_whatsapp,
                "event_id"  => $data->event->id,
                "title_event" => $data->event->title_event
            ];

            $result = new EwalletService();
            $res = $result->shopeePay($data, $bank);
            //return response($res, 201);
            //CEK KODE RESPON
            if ($res["status_code"] != 201) {
                $responseError = [
                    'status_code' => $res["status_code"],
                    'message' => $res['status_message']
                ];
                return $responseError;
            }
            // SET UPDATE TABLE TRANSAKSI EVENT
            EventTransaction::where('ref_transaction_event', $res["order_id"])->update([
                "payment_method" => $bank,
                "total_payment" => $res["gross_amount"],
                "kode_bayar_1" => $res["actions"][0]['url'],
                "fee_transaction" => 0,
                "status" => "PENDING",
                "updated_at" => $res["transaction_time"]
            ]);
            $responData = [
                "status_code" => $res["status_code"],
                "message" =>  $res["status_message"],
            ];
            return $responData;
        }
    }
}
<?php

namespace App\Http\Controllers\Transaksi\Layanan;

use Carbon\Carbon;
use App\Models\bank;
use App\Models\User;
use App\Models\Voucher;
use Illuminate\Http\Request;
use App\Models\DetailPembayaran;
use App\Models\PembayaranLayanan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use App\Services\Midtrans\PembayaranEvent\CstoreService;
use App\Services\Midtrans\PembayaranEvent\EwalletService;
use App\Services\Midtrans\PembayaranEvent\TransferBankService;

class KonselingTransaksiController extends Controller
{
    // show form data diri professional konseling
    public function showFormDataDiri($ref_transaction_layanan)
    {
        $data = PembayaranLayanan::where('ref_transaction_layanan', $ref_transaction_layanan)->where('status', 'UNPAID')->firstOrFail();
        return view('pages.ProfessionalKonseling.data-diri', compact('data'));
    }

    // submit form data diri professional konseling
    public function submitDataDiri(Request $request, $ref_transaction_layanan)
    {
        $request->validate([
            'namaLengkap' => 'required',
            'jenisKelamin' => 'required',
            'email' => 'required',
            'no_whatsapp' => 'required',
            'umur' => 'required',
            'tgl_konsultasi' => 'required',
            'jam_konsultasi' => 'required',
            'detail_masalah' => 'required'
        ]);
        $id = PembayaranLayanan::where("ref_transaction_layanan", $ref_transaction_layanan)->first();
        date_default_timezone_set('Asia/Jakarta');
        $tglSekarang = date_create()->format("d");
        $blnSekarang = date_create()->format("m");
        $thnSekarang = date_create()->format("Y");
        $tglKonsultasi = date_create($request->tgl_konsultasi)->format("d");
        $blnKonsultasi = date_create($request->tgl_konsultasi)->format("m");
        $thnKonsultasi = date_create($request->tgl_konsultasi)->format("Y");
        if ($tglSekarang > $tglKonsultasi && $blnSekarang == $blnKonsultasi && ($thnSekarang == $thnKonsultasi || $thnSekarang > $thnKonsultasi)) {
            Alert::alert()->html('<h4 class="text-danger fw-bold">Error</h4>', '<p>Invalid data, Please Filled Correctly!</p>');
            return back();
        } elseif ($tglSekarang < $tglKonsultasi && $blnSekarang > $blnKonsultasi && ($thnSekarang == $thnKonsultasi || $thnSekarang > $thnKonsultasi)) {
            Alert::alert()->html('<h4 class="text-danger fw-bold">Error</h4>', '<p>Invalid data, Please Filled Correctly!</p>');
            return back();
        } elseif ($tglSekarang == $tglKonsultasi && $blnSekarang > $blnKonsultasi && ($thnSekarang == $thnKonsultasi || $thnSekarang > $thnKonsultasi)) {
            Alert::alert()->html('<h4 class="text-danger fw-bold">Error</h4>', '<p>Invalid data, Please Filled Correctly!</p>');
            return back();
        } elseif($request->jenisKelamin == 0){
            Alert::alert()->html('<h4 class="text-danger fw-bold">Error</h4>', '<p>Invalid data, Mohon isi Jenis Kelamin Anda!</p>');
            return back();
        }
        User::where('id', auth()->user()->id)->update([
            'umur' => $request->umur,
            'jenisKelamin' => $request->jenisKelamin,
            'no_whatsapp' => $request->no_whatsapp

        ]);
        DetailPembayaran::create([
            'pembayaran_layanan_id' => $id->id,
            'tgl_konsultasi' => $request->tgl_konsultasi,
            'jam_konsultasi' => $request->jam_konsultasi,
            'detail_masalah' => $request->detail_masalah,
        ]);
        return redirect('/slug-konseling-yg-dipilih/' . $ref_transaction_layanan . '/pembayaran');
    }


    // show halaman pembayaran professional konseling
    public function showPembayaran($ref_transaction_layanan)
    {
        $data = PembayaranLayanan::with('voucher', 'psikolog', 'detail_pembayarans', 'paket_profesional_conselings')
            ->where('ref_transaction_layanan', $ref_transaction_layanan)->firstOrFail();
        return view('pages.ProfessionalKonseling.pembayaran', compact('data'));
    }


    // checkout proses pembayaran professional konseling
    public function checkoutProfessionalKonseling(Request $request, $ref_transaction_layanan)
    {
        $id = PembayaranLayanan::where('ref_transaction_layanan', $ref_transaction_layanan)->pluck('id')->first();
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
            "ref" => 'required'
        ]);
        if ($validate->fails()) {
            return back()->with('message', 'Bank Harus Diisi');
        }
        $voucher_id = Voucher::where('kode', $request->input_code)->pluck('id')->first();
        $bank = bank::where('id', $request->bank)->pluck('bank')->first();
        // panggil fungsi klasifikasi payment method untuk cek klasifikasinya
        $response = $this->klasifikasiPaymentMethod($bank, $ref_transaction_layanan, $voucher_id);
        // 
        // response -------------------
        if ($response["status_code"] != 201) {
            Alert::alert()->html('<h4 class="fw-bold text-danger">FAILED PAYMENT METHOD</h4>', '<p>There was some error in the system, Please try again later or change the Payment Method.<br><br>Error: <span class="pt-2 fw-bold ">500 Server Error</span></p>');
            return back();
        }
        if ($request->input_code != null) {
            $stok = Voucher::where('kode', $request->input_code)->pluck('stok_voucher')->first();
            Voucher::where('id', $voucher_id)->update([
                'stok_voucher' => $stok - 1
            ]);
            PembayaranLayanan::where('id', $id)->update([
                'voucher_id' => $voucher_id
            ]);
        }
        $getData = DetailPembayaran::where('pembayaran_layanan_id', $id)->first();
        $getData2 = PembayaranLayanan::where('ref_transaction_layanan', $ref_transaction_layanan)->first();
        if ($bank == 'bni' || $bank == 'bri' || $bank == 'bca' || $bank == 'cimb' || $bank == 'permata') {
            $va = '<h6 style="text-transform:uppercase;">' . $bank . ' VA = ' . $getData->kode_bayar_1 . '</h6>';
            $pesan = "Silahkan Lengkapi Pembayaran Sebelum <br><strong>" . $getData2->updated_at->addDay(1)->format('l, d M Y') . "</strong> pukul </strong>" . $getData->updated_at->format('H:i') . "</strong>";
        } else if ($bank == 'mandiri') {
            $va =   '<h6 style="text-transform:uppercase;">' . $bank . ' Bill Key = ' . $getData->kode_bayar_1 . '</h6>
                    <h6 style="text-transform:uppercase;">' . $bank . ' Bill Code = ' . $getData->kode_bayar_2 . '</h6>';
            $pesan = "Silahkan Lengkapi Pembayaran Sebelum <br><strong>" . $getData2->updated_at->addDay(1)->format('l, d M Y') . "</strong> pukul </strong>" . $getData->updated_at->format('H:i') . "</strong>";
        } else if ($bank == 'indomaret') {
            $va =   '<h6 style="text-transform:uppercase;">' . $bank . ' Kode Pembayaran = ' . $getData->kode_bayar_1 . '</h6>
                    <h6 style="text-transform:uppercase;">Kode Merchant = ' . $getData->kode_bayar_2 . '</h6>
                    ';
            $pesan = "Silahkan Lengkapi Pembayaran Sebelum <br><strong>" . $getData2->updated_at->addDay(1)->format('l, d M Y') . "</strong> pukul </strong>" . $getData->updated_at->format('H:i') . "</strong>";
        } else if ($bank == 'alfamart') {
            $va =   '<h6 style="text-transform:uppercase;">' . $bank . ' Kode Pembayaran = ' . $getData->kode_bayar_1 . '</h6>';
            $pesan = "Silahkan Lengkapi Pembayaran Sebelum <br><strong>" . $getData2->updated_at->addDay(1)->format('l, d M Y') . "</strong> pukul </strong>" . $getData->updated_at->format('H:i') . "</strong>";
        } else if ($bank == 'shopeepay') {
            $va =   '<center><a style="text-transform:uppercase;" href="' . $getData->kode_bayar_1 . '" class="btn btn-primary">Bayar Sekarang</a></center>';
            $pesan = "Silahkan Lengkapi Pembayaran Sebelum <br><strong>" . $getData2->updated_at->format('l, d M Y') . "</strong> pukul </strong>" . $getData->updated_at->addMinutes(15)->format('H:i') . "</strong>";
        } else if ($bank == 'gopay') {
            $va =   '<center>
                        <a style="text-transform:uppercase;" href="' . $getData->kode_bayar_1 . '"  class="btn btn-primary">Bayar Sekarang</a>
                    </center>';
            $pesan = "Silahkan Lengkapi Pembayaran Sebelum <br><strong>" . $getData2->updated_at->format('l, d M Y') . "</strong> pukul </strong>" . $getData->updated_at->addMinutes(15)->format('H:i') . "</strong>";
        }
        session()->forget('apply');
        Session::flash('popupAfterProfKonseling', [
            'kode' => $va,
            'pesan' => $pesan
        ]);
        return Redirect::to('/' . $ref_transaction_layanan . '/notification-konseling/success');
    }


    // klasifikasi payment method
    public function klasifikasiPaymentMethod($bank, $ref, $voucher_id)
    {
        $tabelPembayaran = PembayaranLayanan::where('ref_transaction_layanan', $ref)->pluck('id')->first();
        $diskon = Voucher::where('id', $voucher_id)->first();
        $voucher_id == null ? $potongan = 0 : $potongan = $diskon->jumlah_diskon;
        $data = PembayaranLayanan::with('user', 'paket_profesional_conselings', 'psikolog', 'detail_pembayarans', 'voucher')->where('ref_transaction_layanan', $ref)->first();
        // -----------------BNI, BRI, BCA, CIMB----------------------- //
        if ($bank == 'bni' || $bank == 'bri' || $bank == 'bca' || $bank == 'cimb') {
            $data = [
                "reference" => $ref,
                "harga_event" => $data->paket_profesional_conselings->harga - $potongan,
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
            PembayaranLayanan::where('ref_transaction_layanan', $res["order_id"])->update([
                "payment_method" => $bank,
                "total_payment" => $res["gross_amount"],
                "fee_transaksi" => 4000,
                "status" => "PENDING",
                "updated_at" => $res["transaction_time"]
            ]);
            DetailPembayaran::where('pembayaran_layanan_id', $tabelPembayaran)->update([
                "kode_bayar_1" => $res["va_numbers"][0]["va_number"]
            ]);

            $responData = [
                "status_code" => $res["status_code"],
                "message" =>  $res["status_message"],
            ];
            return $responData;
        }
        // -----------------MANDIRI----------------------- //
        else if ($bank == "mandiri") {
            $data = [
                "reference" => $ref,
                "harga_event" => $data->paket_profesional_conselings->harga - $potongan,
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
            PembayaranLayanan::where('ref_transaction_layanan', $res["order_id"])->update([
                "payment_method" => $bank,
                "total_payment" => $res["gross_amount"],
                "fee_transaksi" => 4000,
                "status" => "PENDING",
                "updated_at" => $res["transaction_time"]
            ]);
            DetailPembayaran::where('pembayaran_layanan_id', $tabelPembayaran)->update([
                "kode_bayar_1" => $res["bill_key"],
                "kode_bayar_2" => $res["biller_code"]
            ]);
            $responData = [
                "status_code" => $res["status_code"],
                "message" =>  $res["status_message"],
            ];
            return $responData;
        }
        // -----------------PERMATA----------------------- //
        else if ($bank == "permata") {
            $data = [
                "reference" => $ref,
                "harga_event" => $data->paket_profesional_conselings->harga - $potongan,
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
            PembayaranLayanan::where('ref_transaction_layanan', $res["order_id"])->update([
                "payment_method" => $bank,
                "total_payment" => $res["gross_amount"],
                "fee_transaksi" => 4000,
                "status" => "PENDING",
                "updated_at" => $res["transaction_time"]
            ]);
            DetailPembayaran::where('pembayaran_layanan_id', $tabelPembayaran)->update([
                "kode_bayar_1" => $res["permata_va_number"],
            ]);
            $responData = [
                "status_code" => $res["status_code"],
                "message" =>  $res["status_message"],
            ];
            return $responData;
        }
        // -----------------INDOMARET----------------------- //
        else if ($bank == "indomaret") {
            $data = [
                "reference" => $ref,
                "harga_event" => $data->paket_profesional_conselings->harga - $potongan,
                "nama"  => $data->user->nama,
                "email"  => $data->user->email,
                "no_tlpn" => $data->user->no_whatsapp
            ];
            $result = new CstoreService();
            $res = $result->indomaret($bank, $data);
            //CEK KODE RESPON
            if ($res["status_code"] != 201) {
                $responseError = [
                    'status_code' => $res["status_code"],
                    'message' => $res['status_message']
                ];
                return $responseError;
            }
            // insert db
            PembayaranLayanan::where('ref_transaction_layanan', $res["order_id"])->update([
                "payment_method" => $bank,
                "total_payment" => $res["gross_amount"],
                "fee_transaksi" => 4000,
                "status" => "PENDING",
                "updated_at" => $res["transaction_time"]
            ]);
            DetailPembayaran::where('pembayaran_layanan_id', $tabelPembayaran)->update([
                "kode_bayar_1" => $res["payment_code"],
                "kode_bayar_2" => $res["merchant_id"],
            ]);
            $responData = [
                "status_code" => $res["status_code"],
                "message" =>  $res["status_message"],
            ];
            return $responData;
        }
        // -----------------ALFAMART----------------------- //
        else if ($bank == "alfamart") {
            $data = [
                "reference" => $ref,
                "harga_event" => $data->paket_profesional_conselings->harga,
                "nama"  => $data->user->nama,
                "email"  => $data->user->email,
                "no_tlpn" => $data->user->no_whatsapp,
                "pesan" => "Pembayaran Layanan Professional Konseling AFEKSI"
            ];
            $result = new CstoreService();
            $res = $result->alfamart($bank, $data);
            //CEK KODE RESPON
            if ($res["status_code"] != 201) {
                $responseError = [
                    'status_code' => $res["status_code"],
                    'message' => $res['status_message']
                ];
                return $responseError;
            }
            // insert db
            PembayaranLayanan::where('ref_transaction_layanan', $res["order_id"])->update([
                "payment_method" => $bank,
                "total_payment" => $res["gross_amount"],
                "fee_transaksi" => 4000,
                "status" => "PENDING",
                "updated_at" => $res["transaction_time"]
            ]);
            DetailPembayaran::where('pembayaran_layanan_id', $tabelPembayaran)->update([
                "kode_bayar_1" => $res["payment_code"],
            ]);
            $responData = [
                "status_code" => $res["status_code"],
                "message" =>  $res["status_message"],
            ];
            return $responData;
        }
        // --------------GOPAY------------------------------
        else if ($bank == "gopay") {
            $data = [
                "reference" => $ref,
                "harga_event" => $data->paket_profesional_conselings->harga,
                "nama"  => $data->user->nama,
                "email"  => $data->user->email,
                "no_tlpn" => $data->user->no_whatsapp
            ];
            $result = new EwalletService();
            $res = $result->gopay($bank, $data);
            //CEK KODE RESPON
            if ($res["status_code"] != 201) {
                $responseError = [
                    'status_code' => $res["status_code"],
                    'message' => $res['status_message']
                ];
                return $responseError;
            }
            // insert
            PembayaranLayanan::where('ref_transaction_layanan', $res["order_id"])->update([
                "payment_method" => $bank,
                "total_payment" => $res["gross_amount"],
                "fee_transaksi" => 4000,
                "status" => "PENDING",
                "updated_at" => $res["transaction_time"]
            ]);
            DetailPembayaran::where('pembayaran_layanan_id', $tabelPembayaran)->update([
                "kode_bayar_1" => $res["actions"][1]['url'],
                "kode_bayar_2" => $res["actions"][0]['url'],
            ]);
            $responData = [
                "status_code" => $res["status_code"],
                "message" =>  $res["status_message"],
            ];
            return $responData;
        }
        // ----------------------------SHOPPE-PAY---------------------
        else if ($bank == "shopeepay") {
            $data = [
                "reference" => $ref,
                "harga_event" => $data->paket_profesional_conselings->harga,
                "nama"  => $data->user->nama,
                "email"  => $data->user->email,
                "no_tlpn" => $data->user->no_whatsapp
            ];
            $result = new EwalletService();
            $res = $result->shopeePay($bank, $data);
            //CEK KODE RESPON
            if ($res["status_code"] != 201) {
                $responseError = [
                    'status_code' => $res["status_code"],
                    'message' => $res['status_message']
                ];
                return $responseError;
            }
            // insert db
            PembayaranLayanan::where('ref_transaction_layanan', $res["order_id"])->update([
                "payment_method" => $bank,
                "total_payment" => $res["gross_amount"],
                "fee_transaksi" => 4000,
                "status" => "PENDING",
                "updated_at" => $res["transaction_time"]
            ]);
            DetailPembayaran::where('pembayaran_layanan_id', $tabelPembayaran)->update([
                "kode_bayar_1" => $res["actions"][0]['url'],
            ]);
            $responData = [
                "status_code" => $res["status_code"],
                "message" =>  $res["status_message"],
            ];
            return $responData;
        }
    }
}

<?php

namespace App\Http\Controllers\Transaksi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PembayaranLayanan;
use RealRashid\SweetAlert\Facades\Alert;

class NotifikasiKonseling extends Controller
{
    public function index($ref_transaction_layanan)
    {
        if (session()->has('popupAfterProfKonseling')) {
            Alert::alert()->html(session('popupAfterProfKonseling')['kode'], session('popupAfterProfKonseling')['pesan'])->persistent(true, false);
            return view('pages.popup-informasi');
        } else {
            $cekSlug = PembayaranLayanan::where('ref_transaction_layanan', $ref_transaction_layanan)->where('status', 'PENDING')->first();
            if (!$cekSlug) {
                return redirect('/error');
            }
            return view('pages.popup-informasi');
        }

    }
}

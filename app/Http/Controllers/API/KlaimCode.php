<?php

namespace App\Http\Controllers\API;

use Carbon\Carbon;
use App\Models\Voucher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class KlaimCode extends Controller
{
    public function claim(Request $request) {
        $validator = Validator::make($request->all(),[
            'kode' => 'required'
        ]);

        if ($validator->fails()) {
            return response([
                'message' => $validator->messages()
            ], 404);
        }

        $now = Carbon::now();
        $kode = Voucher::where('kode', $request->kode)->where('expired_date', '>=', $now )->first();
        if (!$kode) {
            return response([
                'message' => 'Code is Invalid'
            ], 404);
        } 
        
        return response([
            'kode' => $kode->kode,
            'diskon' => $kode->jumlah_diskon,
            'pesan' => "Berhasil Menerapkan Voucher",
        ], 200);

    }
}

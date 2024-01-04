<?php

namespace App\Http\Controllers\Karir;

use App\Http\Controllers\Controller;
use App\Models\internshipPosition;
use Illuminate\Http\Request;

class karirController extends Controller
{
    public function index(Request $request)
    {
        // dd($request);
        $result = internshipPosition::all();
        if ($request->nama_posisi) {
            // return dd($request->nama_posisi);
            $result = internshipPosition::where('nama_posisi', 'LIKE', '%' . $request->nama_posisi . '%')->get();
        }
        if ($request->tempat) {
            // return dd($request->tempat);
            $result = internshipPosition::where('tempat', 'LIKE', '%' . $request->tempat . '%')->get();
        }
        if ($request->tipe_kerja) {
            // return dd($request->tipe_kerja);
            $result = internshipPosition::where('tipe_kerja', 'LIKE', '%' . $request->tipe_kerja . '%')->get();
        }
        if ($request->tempat && $request->tipe_kerja) {
            $result = internshipPosition::where('tipe_kerja', 'LIKE', '%' . $request->tipe_kerja . '%')
                ->Where('tempat', 'LIKE', '%' . $request->tempat . '%')
                ->get();
        }
        if ($request->nama_posisi && $request->tempat) {
            $result = internshipPosition::where('nama_posisi', 'LIKE', '%' . $request->nama_posisi . '%')
                ->Where('tempat', 'LIKE', '%' . $request->tempat . '%')
                ->get();
        }
        if ($request->nama_posisi && $request->tipe_kerja) {
            $result = internshipPosition::where('nama_posisi', 'LIKE', '%' . $request->nama_posisi . '%')
                ->Where('tipe_kerja', 'LIKE', '%' . $request->tipe_kerja . '%')
                ->get();
        }
        if ($request->nama_posisi && $request->tempat && $request->tipe_kerja) {
            $result = internshipPosition::where('nama_posisi', 'LIKE', '%' . $request->nama_posisi . '%')
                ->Where('tempat', 'LIKE', '%' . $request->tempat . '%')
                ->Where('tipe_kerja', 'LIKE', '%' . $request->tipe_kerja . '%')
                ->get();
        }
        return view('pages.Karir.karir', compact('result'));
    }
}

<?php

namespace App\Http\Controllers\Karir;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class BrandAmbasador extends Controller
{

    //  HALAMAN  DETAIL VOLUNTEER BRAND AMBASSADOR

    public function index() {
        return view('pages.Karir.detail-pendaftaran-brand-ambassador');
    }

    //  PENDAFTARAN VOLUNTEER BRAND AMBASSADOR

    public function store(Request $request) {

        // CHECK JENIS KELAMIN 
        if( $request->jenisKelamin == 0){
            Alert::alert()->html('<h4 class="text-danger fw-bold">Error</h4>', '<p>Invalid data, Mohon isi Jenis Kelamin Anda!</p>');
            return back();
        }
        
        //  VALIDASI DATA 
        $validation = $request->validate([
            'nohp' => 'required',
            'volunteer_category'=>'required',
            "pekerjaan"=>"required",
            "instansi"=>"required",
            "divisi"=>"required",
            "alasan"=>"required",
            'bukti_follow' => 'required|file|max:2048',
            'cv' => 'required|file|max:10240',
            'portofolio' => 'nullable|file|max:10240',
        ]);

        // MEMINDAH FILE BUKTIFOLLOW , CV , PORTOFOLIO KE PUBLIC
        $buktiFollowPath = $validation['bukti_follow']->store('Volunteer/BrandAmbasador/bukti_follow', 'public');
        $cvPath = $validation['cv']->store('Volunteer/BrandAmbasador/cv', 'public');
        $portofolioPath = null;

        // CHECK APAKAH ADA PORTOFOLIO
        if ($request->hasFile('portofolio')) {
            $portofolioPath = $validation['portofolio']->store('Volunteer/BrandAmbasador/portofolio', 'public');
        }

        // SET UPDATE TABLE USER 
        User::where('id', Auth::user()->id)->update([
            "no_whatsapp"=>Auth::user()->no_whatsapp ?: $request->nohp,
            "jenisKelamin"=>Auth::user()->jenisKelamin ?: $request->jenisKelamin,
        ]);

        //  INSERT DATA KE TABLE VOLUNTEER
        Volunteer::create([
            "user_id"=> Auth::user()->id,
            "volunteer_category"=>$request->volunteer_category,
            "pekerjaan"=>$request->pekerjaan,
            "instansi"=>$request->instansi,
            "divisi"=>$request->divisi,
            "alasan"=>$request->alasan,
            "bukti_follow"=>$buktiFollowPath,
            "cv"=>$cvPath,
            "portofolio"=>$portofolioPath,
        ]);

        Alert::alert()->html('<img src="/assets/img/image-notification.png" height="150px" />',"Terima Kasih <br> Formulir pendaftaran Anda berhasil dikirim")->persistent(true,false)->showConfirmButton('Kembali', '#3085d6');
        return redirect('/pendaftaran-brand-ambassador');

    }
}

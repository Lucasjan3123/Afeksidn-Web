<?php

namespace App\Http\Controllers\Karir;

use App\Models\User;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class RelationshipHeroes extends Controller
{
    public function index() {
        return view('pages.Karir.detail-pendaftaran-relationship-heroes');
    }

    public function store(Request $request) {
        if( $request->jenisKelamin == 0){
            Alert::alert()->html('<h4 class="text-danger fw-bold">Error</h4>', '<p>Invalid data, Mohon isi Jenis Kelamin Anda!</p>');
            return back();
        }
        $validatedData = $request->validate([
            'pekerjaan' => 'required',
            'nohp' => 'required',
            'instansi' => 'required',
            'divisi' => 'required',
            'alasan' => 'required',
            'bukti_follow' => 'required|file|max:2048',
            'cv' => 'required|file|max:10240',
            'portofolio' => 'nullable|file|max:10240',
        ]);

        $user = auth()->user();
        $nohp = $user->no_whatsapp ?: $request->input('nohp');
        $jenisKelamin = $user->jenisKelamin ?: $request->input('jenisKelamin');

        $buktiFollowPath = $validatedData['bukti_follow']->store('Volunteer/relationship-heroes/bukti_follow', 'public');
        $cvPath = $validatedData['cv']->store('Volunteer/relationship-heroes/cv', 'public');

        $portofolioPath = null;
        if ($request->hasFile('portofolio')) {
            $portofolioPath = $validatedData['portofolio']->store('Volunteer/relationship-heroes/portofolio', 'public');
        }

        $heroesData = [
            'user_id' => $user->id,
            'volunteer_category' => "relationship heroes",
            'pekerjaan' => $validatedData['pekerjaan'],
            'instansi' => $validatedData['instansi'],
            'divisi' => $validatedData['divisi'],
            'alasan' => $validatedData['alasan'],
            'bukti_follow' => $buktiFollowPath,
            'cv' => $cvPath,
            'portofolio' => $portofolioPath,
            
            'type' => 'peer', //Peer Konselor
        ];

        $user_update =[
            'no_whatsapp' => $nohp,
            'jenisKelamin' => $jenisKelamin,
        ];

        User::where('id', $user->id)->update($user_update);
        Volunteer::create($heroesData);

        Alert::alert()->html('<img src="/assets/img/image-notification.png" height="150px" />',"Terima Kasih <br> Formulir pendaftaran Anda berhasil dikirim")->persistent(true,false)->showConfirmButton('Kembali', '#3085d6');
        return redirect()->route('volunteer.relationship-heroes');
    }
}

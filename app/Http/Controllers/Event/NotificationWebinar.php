<?php

namespace App\Http\Controllers\Event;

use Illuminate\Http\Request;
use App\Models\EventTransaction;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class NotificationWebinar extends Controller
{
     public function index($ref_transaction_event) {
        
        if (session()->has('popupAfterMentoring')) {
            Alert::alert()->html(session('popupAfterMentoring')['kode'], session('popupAfterMentoring')['pesan'])->persistent(true,false);
            return view('pages.popup-informasi');
        } else  {
            $cekSlug = EventTransaction::where('ref_transaction_event', $ref_transaction_event)->where('status', 'PENDING')->firstOrFail();
            if (!$cekSlug) {
                return redirect('/error');
            }
            return view('pages.popup-informasi');
        }
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     */
    public function create(): View
    {
        return view('pages.auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
         $validate = Validator::make($request->all(), [
            'email' => 'required|email:dns'
        ]);

      
        $user = User::where('email', $request->email)->pluck('email')->first();
        
        if ($validate->fails()) {
            return back()->with('error', 'Error, Please email must be inputed correctly');
        } else if (!$user) {
            return back()->with('error', 'Error, Your email is Not Found')->with('email', $request->email);
        }

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status == Password::RESET_LINK_SENT
                    ? redirect()->route('password.request')->with('success', $request->email)
                    : back()->with('error', 'Error, Server cant send email now, try back later');
    }
}

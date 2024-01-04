<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{   
    // HALAMAN LOGIN LANGSUNG JIKA SUDAH DAFTAR DENGAN AKUN GOOLE
     public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // LOGIN DAN REGISTER GOOLE
    public function handleGoogleCallback()
    {
        try {

            // VALIDASI  LOGIN GOOGLE 

            $googleUser = Socialite::driver('google')->user();
            $validator = Validator::make([
                'nama' => $googleUser->name,
                'email' => $googleUser->email,
            ], 
            [
                'nama' => ['required', 'string'], 
                'email'=> ["required", "email", 'unique:'.User::class],
            ]);

            //  CHECK APAKAH ADA GOOGLE ID
            $user = User::where('google_id', $googleUser->id)->first();

            
            // LOGIN GOOLE

            if($user){
                Auth::login($user);
                return redirect()->intended(RouteServiceProvider::HOME);
            }else{

                //  VALIDASI JIKA GAGAL 
                if ($validator -> fails()){
                    return redirect()->route('register')-> withErrors($validator)->withInput();
                }
                
                 // REGISTER GOOGLE 
                
                $newUser= User::create([
                    'nama' => $googleUser->name,
                    'email' => $googleUser->email,
                    'password' => Hash::make('afeksiUserGoogle123'),
                    'google_id' => $googleUser->id,
                    // 'email_verified_at' => now()
                ]);

                }

             Auth::login($newUser, true);
             session()->regenerate();
             return redirect()->intended(RouteServiceProvider::HOME);

            
        }catch (\Exception $e) {
                return redirect()->route('login');
            }
    
        }    
}

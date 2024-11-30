<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPassController extends Controller
{
    public function resetPass(Request $request){
        $request->validate([
            'email' => 'required|email'
        ]);
        $reponse = Password::sendResetLink($request->only('email'));

        return $reponse == Password::RESET_LINK_SENT ? back()->with('success','Link reset kata sandi telah terkirim, periksa email anda !')
        : back()->with('loginError','Email tidak di temukan');
    }

    public function showformreset($token){
        return view('/components.frontend.reset-password',['token'=>$token]);
    }

    public function reset(Request $request){
        $request->validate([
            'token'=>'required',
            'email'=> 'required|email',
            'password' =>'required|confirmed'
        ]);

        $response = Password::reset(
            $request->only('email','password','password_confirmation','token'),
            function ($user, $password) {
            $user->forceFill(['password' => bcrypt($password)])->save();
            }
         );

         return $response == Password::PASSWORD_RESET ? redirect()->route('login')->with('success','Password berhasil di ubah')
         : back()->withErrors(['email'=> [trans($response)]]);
    }
}

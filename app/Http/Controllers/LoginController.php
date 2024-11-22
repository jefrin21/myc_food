<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        return view('components.frontend.mycindex');
    }


    public function authentication(Request $request){
      $credentials =  $request->validate([
            'email'=>'required|email:dns',
            'password'=>'required|max:255'
        ]);


        if(Auth::attempt($credentials)){

            $user = Auth::user();
            if($user->is_admin){

                 $request->session()->regenerate();

                 return redirect()->intended('/');
            }
            $request->session()->regenerate();

            return redirect()->intended('/home');
        }

        return back()->with('loginError','Email Atau Password salah. Login Gagal');

    }
    

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('home');
    }

}

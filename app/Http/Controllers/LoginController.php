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
            'email_customer'=>'required|email:dns',
            'password'=>'required|min:5|max:255'
        ]);

        if (Auth::guard('customer')->attempt(['email_customer' => $credentials['email_customer'], 'password' => $credentials['password']])) {
        $request->session()->regenerate();

        return redirect()->intended('/cart');
        } 

        else if (Auth::attempt(['email' => $credentials['email_customer'], 'password' => $credentials['password']])) {
        $request->session()->regenerate();

        return redirect()->intended('/home');
        
        }

        return back()->with('loginError','Email Atau Password salah. Login Gagal');

        // @dd('berhasil login');
    }
    // public function authentication(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'email_customer' => 'required|email:dns',
    //         'password' => 'required|min:5|max:255',
    //     ]);

    //     if (Auth::guard('customer')->attempt(['email_customer' => $credentials['email_customer'], 'password' => $credentials['password']])) {
    //         $request->session()->regenerate();

    //         return redirect()->intended('/cart');
    //     }

    //     return back()->with('loginError', 'Email atau Password salah. Login gagal.');
    // }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('home');
    }

}

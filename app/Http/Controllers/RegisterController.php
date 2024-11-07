<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
        public function index(){
        return view('components.frontend.mycindex');
    }

    public function store(Request $request){
       $validatedData = $request->validate([
            'nama_customer'=> 'required|max:255',
            'last_name_customer'=> 'required|max:255',
            'fakultas_customer'=> 'required',
            'email_customer'=>'required|email:dns',
            'no_hp_customer'=> 'required|numeric|digits_between:10,15',
            // 'status_customer'=> 'required',
            'lokasi_dorm_customer'=> 'required',
            'no_kamar'=> 'required',
            'password'=>'required|max:255'
        ]);

        @dd($validatedData);

        if($request->password !== $request->confirmpassword){
            return back()->withErrors(['confirmpassword'=>'konfirmasi password tidak sesuai'])->withInput();
        }
        
    //    $validatedData['password'] = bcrypt($validatedData['password']); 

        Customer::create($validatedData);
        
       session()->flash('success', 'registrasi berhasil.silahkan login!!');
        
        return redirect('/home');
    }
}

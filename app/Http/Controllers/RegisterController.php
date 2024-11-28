<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
        public function index(){
        return view('components.frontend.mycindex');
        
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'name'=> 'required|max:255',
            'last_name_customer'=> 'required|max:255',
            'fakultas_customer'=> 'required',
            'email'=>'required|email:dns',
            'no_hp_customer'=> 'required|numeric|digits_between:10,15',
            'lokasi_dorm_customer'=> 'required',
            'no_kamar'=> 'required',
            'password'=>'required|max:255',
            'confirmpassword'=> 'required|same:password'
        ]);

        // @dd($validatedData);
        
        if($request->password !== $request->confirmpassword){
            return back()->withErrors(['confirmpassword'=>'konfirmasi password tidak sesuai'])->withInput();
        }
        $validatedData['password'] = bcrypt($validatedData['password']); 
        unset($validatedData['confirmpassword']);


        User::create($validatedData);
        
       session()->flash('success', 'registrasi berhasil.silahkan login!!');
        
        return redirect('/account');
    }

    public function addAdmin(){
        return view ('components.backend.pages-register');
    }

    public function add(Request $request){
        $validateData= $request->validate([
            'name'=> 'required|max:255',
            'email'=>'required|email:dns|unique:Users',
            'password'=>'required|max:255',
        ]);

        $validateData['is_admin'] = true;
        User::create($validateData);
        session()->flash('success', 'Admin Berhasil Ditambahkan');
        
        return redirect('/tables-datatable-user');
    }
}

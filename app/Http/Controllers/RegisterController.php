<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
        public function index(){
        return view('components.frontend.mycaccount');
    }

    public function store(Request $request){
       $validatedData = $request->validate([
            'name'=> 'required|max:255',
            'email'=>'required|email:dns|unique:users',
            'password'=>'required|min:5|max:255'
        ]);

       $validatedData['password'] = bcrypt($validatedData['password']); 

        Customer::create($validatedData);
        
       session()->flash('success', 'registrasi berhasil.silahkan login!!');
        
        return redirect('/login');
    }
}

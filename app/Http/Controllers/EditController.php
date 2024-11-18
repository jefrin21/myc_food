<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class EditController extends Controller
{
        public function index(){
        $user = User::all(); 
        return view('frontend.mycaccount', compact('user'));
    }

    public function update(Request $request, $id)
    {

         $validatedData = $request->validate([
            'name'=> 'required|max:255',
            'last_name_customer'=> 'required|max:255',
            'fakultas_customer'=> 'required',
            'email'=>'required|email:dns',
            'no_hp_customer'=> 'required|numeric|digits_between:10,15',
            'lokasi_dorm_customer'=> 'required',
            'no_kamar'=> 'required',
            'password'=>'nullable|max:255',
            'confirmpassword'=> 'nullable|same:password'
        ]);

        $user = User::findOrFail($id);

        $user->update([
            'name' => $request->input('name'),
            'last_name_customer' => $request->input('last_name_customer'),
            'fakultas_customer' => $request->input('fakultas_customer'),
            'lokasi_dorm_customer' => $request->input('lokasi_dorm_customer'),
            'no_kamar' => $request->input('no_kamar'),
            'no_hp_customer' => $request->input('no_hp_customer'),
            'email' => $request->input('email'),
            'password' => $request->filled('password') ? bcrypt($request->input('password')) : $user->password,
        ]);
      session()->flash('success', 'Data berhasil di ubah');
        return redirect()->route('home');
    }
    

}

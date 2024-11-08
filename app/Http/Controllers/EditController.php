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

    public function update(Request $request, User $user)
    {
        $user -> update($request->all());
        return redirect()->route('frontend.mycaccount');
    }
    

}

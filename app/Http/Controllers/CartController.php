<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class CartController extends Controller
{
    public function addtocart(Request $request){
        
        if(!$request->filled('tanggalpemesanan')){
            return redirect()->back()->with(['tanggalpemesanan'=>'Tanggal Pemesanan Harus Dipilih']);
        }

      $cart=Session::get('cart',[]);
      $user = auth()->user();
      $harga = 25000;

      if($user && $user->lokasi_dorm_customer === 'MYC-Dorm'){
        $harga = 10000;
      }

        if($request->filled('jenispaket1')){
            $cart[]=[
            'id' =>uniqid(),
            'tanggal' =>$request->input('tanggalpemesanan'),
            'paket'=>'Lunch',
            'jenispaket' => $request->input('jenispaket1'),
            'harga'=>$harga
            ];
        }
        if($request->filled('jenispaket2')){
            $cart[]=[
            'id'=>uniqid(),
            'tanggal' =>$request->input('tanggalpemesanan'),
            'paket'=>'Dinner',
            'jenispaket' => $request->input('jenispaket2'),
            'harga' => $harga
            ];
        }

        Session::put('cart',$cart);
        return redirect('/cart');
    //  Session::flush();

    }

    public function showcart(){
        $cart = Session::get('cart',[]);
        return view ('components.frontend.myccart',['cart'=>$cart]);
    }

    public function hapuscart($id)
    {
    
   $cart = Session::get('cart', []);

    foreach ($cart as $key => $item) {
        if ($item['id'] == $id) {
            unset($cart[$key]); 
            break;
        }
    }

    Session::put('cart', array_values($cart)); 

    return redirect('/cart')->with('message', 'Item berhasil dihapus.');
    }

    public function pagecheckout(){

       if(auth()->user()) {

        $statusMahasiswa = auth()->user()->lokasi_dorm_customer;

        if ($statusMahasiswa === 'MYC-Dorm') {
            $harga = 10000;
        } else {
            $harga = 20000; // Misalnya harga normal 20.000
        }

        return view('components.frontend.myccheckout', compact('harga'));
    }

    // return redirect()->route('login');

        return view('components.frontend.myccheckout');
    }
}

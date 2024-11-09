<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class CartController extends Controller
{
    public function addtocart(Request $request){
        
      $cart=Session::get('cart',[]);

        if($request->filled('jenispaket1')){
            $cart[]=[
            'id' =>uniqid(),
            'tanggal' =>$request->input('tanggalpemesanan'),
            'paket'=>'Lunch',
            'jenispaket' => $request->input('jenispaket1')
            ];
        }
        if($request->filled('jenispaket2')){
            $cart[]=[
            'id'=>uniqid(),
            'tanggal' =>$request->input('tanggalpemesanan'),
            'paket'=>'Dinner',
            'jenispaket' => $request->input('jenispaket2')
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

    // Loop dan hapus item berdasarkan ID
    foreach ($cart as $key => $item) {
        if ($item['id'] == $id) {
            unset($cart[$key]); // Hapus item berdasarkan key
            break;
        }
    }

    // Menggunakan array_values untuk merapikan indeks array setelah item dihapus
    Session::put('cart', array_values($cart)); 

    return redirect('/cart')->with('message', 'Item berhasil dihapus.');
    }
}

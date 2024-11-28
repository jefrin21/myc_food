<?php

namespace App\Http\Controllers;

use App\Models\DetailOrder;
use App\Models\order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class CartController extends Controller
{
    public function addtocart(Request $request){
        
        $currentDay = date('w'); 

        if ($currentDay == 0 || $currentDay == 6) {
            return redirect()->back()->with(['error' => 'Tidak dapat memesan pada hari Sabtu dan Minggu!']);
        }

        if(!$request->filled('tanggalpemesanan')){
            return redirect()->back()->with(['tanggalpemesanan'=>'Tanggal Pengambilan Harus Dipilih']);
        }

      $cart=Session::get('cart',[]);
      $user = auth()->user();

      

    //   if($user && $user->lokasi_dorm_customer === 'MYC-Dorm'){
    //     $harga = 10000;
    //   }

        if ($user && in_array($user->lokasi_dorm_customer, ['Paddock-Dorm', 'G-Building-Dorm','GBFK','Grandstand'])) {
            $harga_silver = 10000;
            $harga_gold = 20000;
        } else {
            $harga_silver = 25000;
            $harga_gold = 35000;
        }


        if($request->filled('jenispaket1')){
            $jenispaket1 = $request->input('jenispaket1');
            $harga1 = $jenispaket1 === 'Silver' ? $harga_silver : $harga_gold;
            $cart[]=[
            'id' =>uniqid(),
            'tanggal' =>$request->input('tanggalpemesanan'),
            'paket'=>'Lunch',
            'jenispaket' => $request->input('jenispaket1'),
            'harga'=>$harga1
            ];
        }
        if($request->filled('jenispaket2')){
            $jenispaket2 = $request->input('jenispaket2');
            $harga2 = $jenispaket2 === 'Silver' ? $harga_silver : $harga_gold;
            $cart[]=[
            'id'=>uniqid(),
            'tanggal' =>$request->input('tanggalpemesanan'),
            'paket'=>'Dinner',
            'jenispaket' => $request->input('jenispaket2'),
            'harga' => $harga2
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

        $cart = Session::get('cart', []);

        if(Session::has('cart') && !empty(Session::get('cart'))){

        $harga = 0;

        foreach($cart as $item){
            $harga += $item['harga'];
        }


        return view('components.frontend.myccheckout',['harga'=>$harga,'cart'=>$cart]);

         } else{
            return redirect()->back()->with('kosong','Cart kosong silahkan pilih menu terlebih dahulu');
         }
    }

    public function confirm(Request $request){
        $request->validate([
            'imageUpload' =>'required|image|mimes:jpeg,png,jpg|max:5120'
        ]);

        if($request->hasFile('imageUpload')){
            $image = $request->file('imageUpload');
            $imagename = time(). '.'. $image->getClientOriginalExtension();
            $image->move(public_path('images'),$imagename);
        }

         $cart = Session::get('cart', []);
        
         $harga = 0;
         foreach($cart as $item){
            $harga += $item['harga'];
        }

        $user = auth()->user();

        $tanggalPemesanan = now()->format('d'); 
        $bulan = now()->format('m'); 
        $namaUser = $user->name; 
        $randomnum =rand(10, 9999);
        $kupon = $randomnum. '-'. $tanggalPemesanan . '-' . $bulan . '-' . $namaUser;

        $order = Order::create([
        'user_id' => $user->id, 
        'jumlah_pesanan' => count($cart),
        'kupon_pesanan' =>$kupon,
        'total_harga' => $harga, 
        'bukti_pembayaran' => $imagename, 
        'status_pesanan' => 'diproses', 
    ]);
     
        foreach($cart as $carts){
           $cek = DetailOrder::create([
                'order_id' =>$order->id,
                'jenis_paket_pesanan' =>$carts['paket'],
                'nama_paket_pesanan'=>$carts['jenispaket'],
                'harga_paket_pesanan'=>$carts['harga'],
                'tanggal_pengambilan_pesanan'=>$carts['tanggal']
            ]);
        }

        Session::forget('cart');
        return redirect('/cart')->with('success','Pesanan Berhasil, Terima Kasih');
      
    }
}

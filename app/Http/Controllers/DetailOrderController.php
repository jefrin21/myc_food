<?php

namespace App\Http\Controllers;

use App\Models\DetailOrder;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function detailOrder($id){
        $order = Order::with('details')->find($id);
        return view('components.backend.tables-detailorder-pesanan',['orders'=>$order]);
    }
    
    public function myOrder(){
        $user = auth()->user()->id;

        $data = DB::table('detail_orders as d')
        ->join('orders as o', 'd.order_id', '=', 'o.id')
        ->join('users as u', 'o.user_id', '=', 'u.id') 
        ->select(
        'd.tanggal_pengambilan_pesanan as tanggal','o.created_at as tanggal_beli','d.nama_paket_pesanan as nama_paket','d.harga_paket_pesanan as harga_paket',
                    'o.status_pesanan as status',
    )
    ->where('u.id', '=', $user)
    ->get();

        return view('components.frontend.mycorders',['data'=>$data]);
    }
}

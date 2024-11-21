<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Order;
use App\Models\DetailOrder;
use Illuminate\Support\Facades\DB;

class HistoryController extends Controller
{
    public function index()
{

    if(auth()->user()){
        $user = auth()->user()->id;
        // cek cek 
        $history = DB::table('users')
        ->join('orders', 'users.id', '=', 'orders.user_id')
        ->join('detail_orders', 'orders.id', '=', 'detail_orders.order_id')
        ->select('orders.created_at', 'detail_orders.jenis_paket_pesanan', 'detail_orders.nama_paket_pesanan', 'orders.total_harga')
        ->where('users.id', $user)
        ->orderBy('orders.created_at', 'desc')
        ->get();

        return view('components.frontend.mycaccount', ['historys' => $history]);
    }

    

    return view('components.frontend.mycaccount');
}

}


?>

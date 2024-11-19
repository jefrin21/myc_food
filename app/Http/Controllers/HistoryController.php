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
    $user = auth()->user();

    if (!$user) {
        return redirect()->route('login')->with('error', 'Please log in to access your account.');
    }

    $history = DB::table('users')
        ->join('orders', 'users.id', '=', 'orders.user_id')
        ->join('detail_orders', 'orders.id', '=', 'detail_orders.order_id')
        ->select('orders.created_at', 'detail_orders.jenis_paket_pesanan', 'detail_orders.nama_paket_pesanan', 'orders.total_harga')
        ->where('users.id', $user->id)
        ->orderBy('orders.created_at', 'desc')
        ->get();

    return view('components.frontend.mycaccount', ['historys' => $history]);
}

}


?>

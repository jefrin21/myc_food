<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Order;
use App\Models\DetailOrder;
use Illuminate\Support\Facades\DB;

class HistoryController extends Controller
{
    public function showhistory()
    {
        $user = auth()->user();

        $history = DB::table('users')->
        join('orders','user_id','=','orders.user_id')
        ->join('detail_orders','=','detail_orders.order_id')
        ->select('created_at','jenis_paket_pesanan','nama_paket_pesanan','total_harga')
        ->where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->get();

        // Kirim data orders ke view
        return view('components.frontend.mycaccount', ['history' => $history]);
    }
}


?>

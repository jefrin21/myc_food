<?php
namespace App\Http\Controllers;

use App\Models\Order;

class HistoryController extends Controller
{
    public function showhistory()
    {
        $user = auth()->user();

        $orders = Order::where('user_id', $user->id)
            ->with('detailOrders') // Pastikan relasi 'detailOrders' sudah diatur di model Order
            ->orderBy('created_at', 'desc')
            ->get();

        // Kirim data orders ke view
        return view('components.frontend.mycaccount', ['orders' => $orders]);
    }
}


?>

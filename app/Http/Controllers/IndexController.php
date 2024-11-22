<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    // Menghitung jumlah pesanan yang statusnya 'Dikirim'
    $jumlahPesanan = Order::where('status_pesanan', 'Dikirim')->count();
    
    // Menghitung jumlah total users
    $jumlahUsers = User::count();
    
    // Menghitung total harga semua order
    $totalHarga = Order::sum('total_harga');
    
    // Daftar lokasi yang ingin dihitung
    $locations = ['G-Building-Dorm', 'GBFK', 'Grandstand', 'Paddock-Dorm', 'MYC-Dorm'];

    // Mengambil jumlah users berdasarkan lokasi_dorm_customer yang sudah difilter
    $usersByLocation = User::select('lokasi_dorm_customer', DB::raw('COUNT(*) as jumlah_users'))
                           ->whereIn('lokasi_dorm_customer', $locations)
                           ->groupBy('lokasi_dorm_customer')
                           ->get();

    // Mengambil total pendapatan (sales) berdasarkan lokasi
    $salesByLocation = Order::select('lokasi_dorm_customer', DB::raw('SUM(total_harga) as total_pendapatan'))
                            ->join('users', 'users.id', '=', 'orders.user_id') // Pastikan ada relasi dengan users
                            ->whereIn('users.lokasi_dorm_customer', $locations)
                            ->groupBy('users.lokasi_dorm_customer')
                            ->get();

    // Menggabungkan data jumlah_users dan total_pendapatan
    foreach ($usersByLocation as $location) {
        $sales = $salesByLocation->firstWhere('lokasi_dorm_customer', $location->lokasi_dorm_customer);
        $location->total_pendapatan = $sales ? $sales->total_pendapatan : 0; // Menambahkan total pendapatan ke lokasi
    }


    // Mengirimkan data ke view
    return view('components.backend.index', ['jumlahPesanan' => $jumlahPesanan,'jumlahuser'=>$jumlahUsers, 'totalHarga'=>$totalHarga, 'locations'=>$locations, 'usersByLocation'=>$usersByLocation]);

}
    


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}

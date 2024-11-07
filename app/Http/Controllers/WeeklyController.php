<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WeeklyController extends Controller
{
    public function index()
    {
        // Dapatkan tanggal awal dan akhir minggu menggunakan PHP DateTime
        $today = new \DateTime(); // Tanggal sekarang
        
        // Mengatur waktu ke awal hari (00:00:00)
        $startOfWeek = (clone $today)->modify('monday this week')->setTime(0, 0, 0);

        // Mengatur waktu ke akhir hari (23:59:59)
        $endOfWeek = (clone $today)->modify('sunday this week')->setTime(23, 59, 59);

        // Ambil data pesanan dari tabel `detail_orders`
        $weeklys = DB::table('detail_orders')
            ->select(
                'detail_orders.tanggal_pengambilan_pesanan',
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Silver A' THEN 1 ELSE 0 END) AS silver_a"),
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Silver B' THEN 1 ELSE 0 END) AS silver_b"),
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Gold A' THEN 1 ELSE 0 END) AS gold_a"),
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Gold B' THEN 1 ELSE 0 END) AS gold_b")
            )
            ->whereBetween('detail_orders.tanggal_pengambilan_pesanan', [
                $startOfWeek->format('Y-m-d H:i:s'), // Formatkan menjadi string tanggal
                $endOfWeek->format('Y-m-d H:i:s')   // Formatkan menjadi string tanggal
            ])
            ->groupBy('detail_orders.tanggal_pengambilan_pesanan')
            ->orderBy('detail_orders.tanggal_pengambilan_pesanan', 'asc')
            ->get();

        return view('components.backend.tables-datatable-weekly', ['weeklys' => $weeklys]);
    }
}

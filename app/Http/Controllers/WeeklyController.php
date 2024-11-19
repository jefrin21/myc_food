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
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Silver A' AND detail_orders.nama_paket_pesanan LIKE '%Dinner%' AND users.lokasi_dorm_customer = 'gedung g' THEN 1 ELSE 0 END) AS silver_adg"),
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Silver A' AND detail_orders.nama_paket_pesanan LIKE '%Lunch%' AND users.lokasi_dorm_customer = 'gedung g' THEN 1 ELSE 0 END) AS silver_alg"),
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Silver A' AND detail_orders.nama_paket_pesanan LIKE '%Dinner%' AND users.lokasi_dorm_customer = 'gbfk' THEN 1 ELSE 0 END) AS silver_adfk"),
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Silver A' AND detail_orders.nama_paket_pesanan LIKE '%Lunch%' AND users.lokasi_dorm_customer = 'gbfk' THEN 1 ELSE 0 END) AS silver_alfk"),
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Silver A' AND detail_orders.nama_paket_pesanan LIKE '%Dinner%' AND users.lokasi_dorm_customer = 'grandstand' THEN 1 ELSE 0 END) AS silver_adgs"),
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Silver A' AND detail_orders.nama_paket_pesanan LIKE '%Lunch%' AND users.lokasi_dorm_customer = 'grandstand' THEN 1 ELSE 0 END) AS silver_algs"),
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Silver A' AND detail_orders.nama_paket_pesanan LIKE '%Dinner%' AND users.lokasi_dorm_customer = 'paddock' THEN 1 ELSE 0 END) AS silver_adpd"),
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Silver A' AND detail_orders.nama_paket_pesanan LIKE '%Lunch%' AND users.lokasi_dorm_customer = 'paddock' THEN 1 ELSE 0 END) AS silver_alpd"),
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Silver A' AND detail_orders.nama_paket_pesanan LIKE '%Dinner%' AND users.lokasi_dorm_customer = 'myc dorm' THEN 1 ELSE 0 END) AS silver_admyc"),
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Silver A' AND detail_orders.nama_paket_pesanan LIKE '%Lunch%' AND users.lokasi_dorm_customer = 'myc dorm' THEN 1 ELSE 0 END) AS silver_almyc"),

                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Silver B' AND detail_orders.nama_paket_pesanan LIKE '%Dinner%' AND users.lokasi_dorm_customer = 'gedung g' THEN 1 ELSE 0 END) AS silver_bdg"),
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Silver B' AND detail_orders.nama_paket_pesanan LIKE '%Lunch%' AND users.lokasi_dorm_customer = 'gedung g' THEN 1 ELSE 0 END) AS silver_blg"),
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Silver B' AND detail_orders.nama_paket_pesanan LIKE '%Dinner%' AND users.lokasi_dorm_customer = 'gbfk' THEN 1 ELSE 0 END) AS silver_bdfk"),
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Silver B' AND detail_orders.nama_paket_pesanan LIKE '%Lunch%' AND users.lokasi_dorm_customer = 'gbfk' THEN 1 ELSE 0 END) AS silver_blfk"),
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Silver B' AND detail_orders.nama_paket_pesanan LIKE '%Dinner%' AND users.lokasi_dorm_customer = 'grandstand' THEN 1 ELSE 0 END) AS silver_bdgs"),
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Silver B' AND detail_orders.nama_paket_pesanan LIKE '%Lunch%' AND users.lokasi_dorm_customer = 'grandstand' THEN 1 ELSE 0 END) AS silver_blgs"),
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Silver B' AND detail_orders.nama_paket_pesanan LIKE '%Dinner%' AND users.lokasi_dorm_customer = 'paddock' THEN 1 ELSE 0 END) AS silver_bdpd"),
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Silver B' AND detail_orders.nama_paket_pesanan LIKE '%Lunch%' AND users.lokasi_dorm_customer = 'paddock' THEN 1 ELSE 0 END) AS silver_blpd"),
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Silver B' AND detail_orders.nama_paket_pesanan LIKE '%Dinner%' AND users.lokasi_dorm_customer = 'myc dorm' THEN 1 ELSE 0 END) AS silver_bdmyc"),
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Silver B' AND detail_orders.nama_paket_pesanan LIKE '%Lunch%' AND users.lokasi_dorm_customer = 'myc dorm' THEN 1 ELSE 0 END) AS silver_blmyc"),

                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Gold A' AND detail_orders.nama_paket_pesanan LIKE '%Dinner%' AND users.lokasi_dorm_customer = 'gedung g' THEN 1 ELSE 0 END) AS gold_adg"),
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Gold A' AND detail_orders.nama_paket_pesanan LIKE '%Lunch%' AND users.lokasi_dorm_customer = 'gedung g' THEN 1 ELSE 0 END) AS gold_alg"),
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Gold A' AND detail_orders.nama_paket_pesanan LIKE '%Dinner%' AND users.lokasi_dorm_customer = 'gbfk' THEN 1 ELSE 0 END) AS gold_adfk"),
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Gold A' AND detail_orders.nama_paket_pesanan LIKE '%Lunch%' AND users.lokasi_dorm_customer = 'gbfk' THEN 1 ELSE 0 END) AS gold_alfk"),
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Gold A' AND detail_orders.nama_paket_pesanan LIKE '%Dinner%' AND users.lokasi_dorm_customer = 'grandstand' THEN 1 ELSE 0 END) AS gold_adgs"),
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Gold A' AND detail_orders.nama_paket_pesanan LIKE '%Lunch%' AND users.lokasi_dorm_customer = 'grandstand' THEN 1 ELSE 0 END) AS gold_algs"),
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Gold A' AND detail_orders.nama_paket_pesanan LIKE '%Dinner%' AND users.lokasi_dorm_customer = 'paddock' THEN 1 ELSE 0 END) AS gold_adpd"),
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Gold A' AND detail_orders.nama_paket_pesanan LIKE '%Lunch%' AND users.lokasi_dorm_customer = 'paddock' THEN 1 ELSE 0 END) AS gold_alpd"),
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Gold A' AND detail_orders.nama_paket_pesanan LIKE '%Dinner%' AND users.lokasi_dorm_customer = 'myc dorm' THEN 1 ELSE 0 END) AS gold_admyc"),
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Gold A' AND detail_orders.nama_paket_pesanan LIKE '%Lunch%' AND users.lokasi_dorm_customer = 'myc dorm' THEN 1 ELSE 0 END) AS gold_almyc"),

                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Gold B' AND detail_orders.nama_paket_pesanan LIKE '%Dinner%' AND users.lokasi_dorm_customer = 'gedung g' THEN 1 ELSE 0 END) AS gold_bdg"),
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Gold B' AND detail_orders.nama_paket_pesanan LIKE '%Lunch%' AND users.lokasi_dorm_customer = 'gedung g' THEN 1 ELSE 0 END) AS gold_blg"),
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Gold B' AND detail_orders.nama_paket_pesanan LIKE '%Dinner%' AND users.lokasi_dorm_customer = 'gbfk' THEN 1 ELSE 0 END) AS gold_bdfk"),
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Gold B' AND detail_orders.nama_paket_pesanan LIKE '%Lunch%' AND users.lokasi_dorm_customer = 'gbfk' THEN 1 ELSE 0 END) AS gold_blfk"),
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Gold B' AND detail_orders.nama_paket_pesanan LIKE '%Dinner%' AND users.lokasi_dorm_customer = 'grandstand' THEN 1 ELSE 0 END) AS gold_bdgs"),
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Gold B' AND detail_orders.nama_paket_pesanan LIKE '%Lunch%' AND users.lokasi_dorm_customer = 'grandstand' THEN 1 ELSE 0 END) AS gold_blgs"),
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Gold B' AND detail_orders.nama_paket_pesanan LIKE '%Dinner%' AND users.lokasi_dorm_customer = 'paddock' THEN 1 ELSE 0 END) AS gold_bdpd"),
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Gold B' AND detail_orders.nama_paket_pesanan LIKE '%Lunch%' AND users.lokasi_dorm_customer = 'paddock' THEN 1 ELSE 0 END) AS gold_blpd"),
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Gold B' AND detail_orders.nama_paket_pesanan LIKE '%Dinner%' AND users.lokasi_dorm_customer = 'myc dorm' THEN 1 ELSE 0 END) AS gold_bdmyc"),
                DB::raw("SUM(CASE WHEN detail_orders.jenis_paket_pesanan = 'Gold B' AND detail_orders.nama_paket_pesanan LIKE '%Lunch%' AND users.lokasi_dorm_customer = 'myc dorm' THEN 1 ELSE 0 END) AS gold_blmyc"),
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

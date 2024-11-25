<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WeeklyController extends Controller
{
    public function index()
    {

    $data = DB::table('detail_orders as d')
    ->join('orders as o', 'd.order_id', '=', 'o.id')
    ->join('users as u', 'o.user_id', '=', 'u.id')
    ->select(
        'd.tanggal_pengambilan_pesanan as tanggal',
        // silver 
       DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Lunch' AND u.lokasi_dorm_customer = 'G-Building-Dorm' AND d.nama_paket_pesanan = 'Silver' THEN 1 ELSE 0 END) as lunch_silver_gedung_g"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Dinner' AND u.lokasi_dorm_customer = 'G-Building-Dorm' AND d.nama_paket_pesanan = 'Silver' THEN 1 ELSE 0 END) as dinner_silver_gedung_g"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Lunch' AND u.lokasi_dorm_customer = 'GBFK' AND d.nama_paket_pesanan = 'Silver' THEN 1 ELSE 0 END) as lunch_silver_gbfk"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Dinner' AND u.lokasi_dorm_customer = 'GBFK' AND d.nama_paket_pesanan = 'Silver' THEN 1 ELSE 0 END) as dinner_silver_gbfk"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Lunch' AND u.lokasi_dorm_customer = 'Grandstand' AND d.nama_paket_pesanan = 'Silver' THEN 1 ELSE 0 END) as lunch_silver_grandstand"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Dinner' AND u.lokasi_dorm_customer = 'Grandstand' AND d.nama_paket_pesanan = 'Silver' THEN 1 ELSE 0 END) as dinner_silver_grandstand"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Lunch' AND u.lokasi_dorm_customer = 'Paddock-Dorm' AND d.nama_paket_pesanan = 'Silver' THEN 1 ELSE 0 END) as lunch_silver_paddcok"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Dinner' AND u.lokasi_dorm_customer = 'Paddock-Dorm' AND d.nama_paket_pesanan = 'Silver' THEN 1 ELSE 0 END) as dinner_silver_paddcok"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Lunch' AND u.lokasi_dorm_customer = 'MYC-Dorm' AND d.nama_paket_pesanan = 'Silver' THEN 1 ELSE 0 END) as lunch_silver_myc_dorm"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Dinner' AND u.lokasi_dorm_customer = 'MYC-Dorm' AND d.nama_paket_pesanan = 'Silver' THEN 1 ELSE 0 END) as dinner_silver_myc_dorm"),
        // // gold 
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Lunch' AND u.lokasi_dorm_customer = 'G-Building-Dorm' AND d.nama_paket_pesanan = 'Gold' THEN 1 ELSE 0 END) as lunch_gold_gedung_g"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Dinner' AND u.lokasi_dorm_customer = 'G-Building-Dorm' AND d.nama_paket_pesanan = 'Gold' THEN 1 ELSE 0 END) as dinner_gold_gedung_g"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Lunch' AND u.lokasi_dorm_customer = 'GBFK' AND d.nama_paket_pesanan = 'Gold' THEN 1 ELSE 0 END) as lunch_gold_gbfk"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Dinner' AND u.lokasi_dorm_customer = 'GBFK' AND d.nama_paket_pesanan = 'Gold' THEN 1 ELSE 0 END) as dinner_gold_gbfk"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Lunch' AND u.lokasi_dorm_customer = 'Grandstand' AND d.nama_paket_pesanan = 'Gold' THEN 1 ELSE 0 END) as lunch_gold_grandstand"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Dinner' AND u.lokasi_dorm_customer = 'Grandstand' AND d.nama_paket_pesanan = 'Gold' THEN 1 ELSE 0 END) as dinner_gold_grandstand"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Lunch' AND u.lokasi_dorm_customer = 'Paddock-Dorm' AND d.nama_paket_pesanan = 'Gold' THEN 1 ELSE 0 END) as lunch_gold_paddcok"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Dinner' AND u.lokasi_dorm_customer = 'Paddock-Dorm' AND d.nama_paket_pesanan = 'Gold' THEN 1 ELSE 0 END) as dinner_gold_paddcok"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Lunch' AND u.lokasi_dorm_customer = 'MYC-Dorm' AND d.nama_paket_pesanan = 'Gold' THEN 1 ELSE 0 END) as lunch_gold_myc_dorm"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Dinner' AND u.lokasi_dorm_customer = 'MYC-Dorm' AND d.nama_paket_pesanan = 'Gold' THEN 1 ELSE 0 END) as dinner_gold_myc_dorm"),
        
    )
    ->where('o.status_pesanan', '=', 'Dikirim')
    ->groupBy('d.tanggal_pengambilan_pesanan')
    ->orderBy('d.tanggal_pengambilan_pesanan', 'asc')
    ->get();

        return view('components.backend.tables-datatable-weekly',['data'=>$data]);
    }
}

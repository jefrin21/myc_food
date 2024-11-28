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
        // silver a
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Lunch' AND u.lokasi_dorm_customer = 'G-Building-Dorm' AND d.nama_paket_pesanan = 'Silver A' THEN 1 ELSE 0 END) as lunch_silver_a_gedung_g"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Dinner' AND u.lokasi_dorm_customer = 'G-Building-Dorm' AND d.nama_paket_pesanan = 'Silver A' THEN 1 ELSE 0 END) as dinner_silver_a_gedung_g"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Lunch' AND u.lokasi_dorm_customer = 'GBFK' AND d.nama_paket_pesanan = 'Silver A' THEN 1 ELSE 0 END) as lunch_silver_a_gbfk"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Dinner' AND u.lokasi_dorm_customer = 'GBFK' AND d.nama_paket_pesanan = 'Silver A' THEN 1 ELSE 0 END) as dinner_silver_a_gbfk"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Lunch' AND u.lokasi_dorm_customer = 'Grandstand' AND d.nama_paket_pesanan = 'Silver A' THEN 1 ELSE 0 END) as lunch_silver_a_grandstand"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Dinner' AND u.lokasi_dorm_customer = 'Grandstand' AND d.nama_paket_pesanan = 'Silver A' THEN 1 ELSE 0 END) as dinner_silver_a_grandstand"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Lunch' AND u.lokasi_dorm_customer = 'Paddock-Dorm' AND d.nama_paket_pesanan = 'Silver A' THEN 1 ELSE 0 END) as lunch_silver_a_paddcok"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Dinner' AND u.lokasi_dorm_customer = 'Paddock-Dorm' AND d.nama_paket_pesanan = 'Silver A' THEN 1 ELSE 0 END) as dinner_silver_a_paddcok"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Lunch' AND u.lokasi_dorm_customer = 'MYC-Dorm' AND d.nama_paket_pesanan = 'Silver A' THEN 1 ELSE 0 END) as lunch_silver_a_myc_dorm"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Dinner' AND u.lokasi_dorm_customer = 'MYC-Dorm' AND d.nama_paket_pesanan = 'Silver A' THEN 1 ELSE 0 END) as dinner_silver_a_myc_dorm"),
        // silver b
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Lunch' AND u.lokasi_dorm_customer = 'G-Building-Dorm' AND d.nama_paket_pesanan = 'Silver B' THEN 1 ELSE 0 END) as lunch_silver_b_gedung_g"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Dinner' AND u.lokasi_dorm_customer = 'G-Building-Dorm' AND d.nama_paket_pesanan = 'Silver B' THEN 1 ELSE 0 END) as dinner_silver_b_gedung_g"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Lunch' AND u.lokasi_dorm_customer = 'GBFK' AND d.nama_paket_pesanan = 'Silver B' THEN 1 ELSE 0 END) as lunch_silver_b_gbfk"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Dinner' AND u.lokasi_dorm_customer = 'GBFK' AND d.nama_paket_pesanan = 'Silver B' THEN 1 ELSE 0 END) as dinner_silver_b_gbfk"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Lunch' AND u.lokasi_dorm_customer = 'Grandstand' AND d.nama_paket_pesanan = 'Silver B' THEN 1 ELSE 0 END) as lunch_silver_b_grandstand"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Dinner' AND u.lokasi_dorm_customer = 'Grandstand' AND d.nama_paket_pesanan = 'Silver B' THEN 1 ELSE 0 END) as dinner_silver_b_grandstand"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Lunch' AND u.lokasi_dorm_customer = 'Paddock-Dorm' AND d.nama_paket_pesanan = 'Silver B' THEN 1 ELSE 0 END) as lunch_silver_b_paddcok"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Dinner' AND u.lokasi_dorm_customer = 'Paddock-Dorm' AND d.nama_paket_pesanan = 'Silver B' THEN 1 ELSE 0 END) as dinner_silver_b_paddcok"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Lunch' AND u.lokasi_dorm_customer = 'MYC-Dorm' AND d.nama_paket_pesanan = 'Silver B' THEN 1 ELSE 0 END) as lunch_silver_b_myc_dorm"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Dinner' AND u.lokasi_dorm_customer = 'MYC-Dorm' AND d.nama_paket_pesanan = 'Silver B' THEN 1 ELSE 0 END) as dinner_silver_b_myc_dorm"),
        // // gold a
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Lunch' AND u.lokasi_dorm_customer = 'G-Building-Dorm' AND d.nama_paket_pesanan = 'Gold A' THEN 1 ELSE 0 END) as lunch_gold_a_gedung_g"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Dinner' AND u.lokasi_dorm_customer = 'G-Building-Dorm' AND d.nama_paket_pesanan = 'Gold A' THEN 1 ELSE 0 END) as dinner_gold_a_gedung_g"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Lunch' AND u.lokasi_dorm_customer = 'GBFK' AND d.nama_paket_pesanan = 'Gold A' THEN 1 ELSE 0 END) as lunch_gold_a_gbfk"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Dinner' AND u.lokasi_dorm_customer = 'GBFK' AND d.nama_paket_pesanan = 'Gold A' THEN 1 ELSE 0 END) as dinner_gold_a_gbfk"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Lunch' AND u.lokasi_dorm_customer = 'Grandstand' AND d.nama_paket_pesanan = 'Gold A' THEN 1 ELSE 0 END) as lunch_gold_a_grandstand"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Dinner' AND u.lokasi_dorm_customer = 'Grandstand' AND d.nama_paket_pesanan = 'Gold A' THEN 1 ELSE 0 END) as dinner_gold_a_grandstand"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Lunch' AND u.lokasi_dorm_customer = 'Paddock-Dorm' AND d.nama_paket_pesanan = 'Gold A' THEN 1 ELSE 0 END) as lunch_gold_a_paddcok"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Dinner' AND u.lokasi_dorm_customer = 'Paddock-Dorm' AND d.nama_paket_pesanan = 'Gold A' THEN 1 ELSE 0 END) as dinner_gold_a_paddcok"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Lunch' AND u.lokasi_dorm_customer = 'MYC-Dorm' AND d.nama_paket_pesanan = 'Gold A' THEN 1 ELSE 0 END) as lunch_gold_a_myc_dorm"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Dinner' AND u.lokasi_dorm_customer = 'MYC-Dorm' AND d.nama_paket_pesanan = 'Gold A' THEN 1 ELSE 0 END) as dinner_gold_a_myc_dorm"),
        // // gold b
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Lunch' AND u.lokasi_dorm_customer = 'G-Building-Dorm' AND d.nama_paket_pesanan = 'Gold B' THEN 1 ELSE 0 END) as lunch_gold_b_gedung_g"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Dinner' AND u.lokasi_dorm_customer = 'G-Building-Dorm' AND d.nama_paket_pesanan = 'Gold B' THEN 1 ELSE 0 END) as dinner_gold_b_gedung_g"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Lunch' AND u.lokasi_dorm_customer = 'GBFK' AND d.nama_paket_pesanan = 'Gold B' THEN 1 ELSE 0 END) as lunch_gold_b_gbfk"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Dinner' AND u.lokasi_dorm_customer = 'GBFK' AND d.nama_paket_pesanan = 'Gold B' THEN 1 ELSE 0 END) as dinner_gold_b_gbfk"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Lunch' AND u.lokasi_dorm_customer = 'Grandstand' AND d.nama_paket_pesanan = 'Gold B' THEN 1 ELSE 0 END) as lunch_gold_b_grandstand"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Dinner' AND u.lokasi_dorm_customer = 'Grandstand' AND d.nama_paket_pesanan = 'Gold B' THEN 1 ELSE 0 END) as dinner_gold_b_grandstand"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Lunch' AND u.lokasi_dorm_customer = 'Paddock-Dorm' AND d.nama_paket_pesanan = 'Gold B' THEN 1 ELSE 0 END) as lunch_gold_b_paddcok"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Dinner' AND u.lokasi_dorm_customer = 'Paddock-Dorm' AND d.nama_paket_pesanan = 'Gold B' THEN 1 ELSE 0 END) as dinner_gold_b_paddcok"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Lunch' AND u.lokasi_dorm_customer = 'MYC-Dorm' AND d.nama_paket_pesanan = 'Gold B' THEN 1 ELSE 0 END) as lunch_gold_b_myc_dorm"),
        DB::raw("SUM(CASE WHEN d.jenis_paket_pesanan = 'Dinner' AND u.lokasi_dorm_customer = 'MYC-Dorm' AND d.nama_paket_pesanan = 'Gold B' THEN 1 ELSE 0 END) as dinner_gold_b_myc_dorm"),
        
    )
    ->where('o.status_pesanan', '=', 'Dikirim')
    ->groupBy('d.tanggal_pengambilan_pesanan')
    ->orderBy('d.tanggal_pengambilan_pesanan', 'asc')
    ->get();

        return view('components.backend.tables-datatable-weekly',['data'=>$data]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;


class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jumlahPesanan = Order::where('status_pesanan', 'Dikirim')->count();
        $jumlahUsers = User::count(); // Menghitung jumlah id di tabel users
        $totalHarga = Order::sum('total_harga'); // Menjumlahkan seluruh nilai

        return view('components.backend.index', ['jumlahPesanan' => $jumlahPesanan,'jumlahuser'=>$jumlahUsers, 'totalHarga'=>$totalHarga]);

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

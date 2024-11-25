<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\DetailOrder;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;



class KonfirmasiOrderController extends Controller
{
    public function konfirmasi(Request $request,$id){
        $customer = Order::with('customer')->findOrFail($id);
        $order = Order::with('details')->findOrFail($id);

        $data = [
            'customer_name' => $customer->customer->name,
            'total_price' => $order->total_harga,
            'kupon_pesanan'=>$order->kupon_pesanan,
            'harga_total'=>$order->total_harga,
            'tanggal_pembelian' =>$order->created_at,
           'pesanan' => $order->details->map(function ($detail) {
            $formattedDate = \Carbon\Carbon::parse($detail->tanggal_pengambilan_pesanan)->format('d F Y');
            // return  "[Tanggal Pengambilan] : {$formattedDate}  [nama pesanan] : {$detail->jenis_makanan}";
            return [
            'tanggal_pengambilan' => $formattedDate,
            'jenis_paket' => $detail->jenis_paket_pesanan,
            'kategori' => $detail->nama_paket_pesanan,
            'harga' => $detail->harga_paket_pesanan,
            ];
        })->toArray(),
        ];

        
        $pdf = Pdf::loadView('components.backend.invoice',$data);

        $pdfcontent =$pdf->output();

        Mail::raw('Berikut adalah invoic anda', function ($message) use ($customer,$pdfcontent){
            $message->to($customer->customer->email)
            ->subject('Invoice Pesanan')
            ->attachData($pdfcontent,"invoice_order.pdf",[
                'mime'=>'application/pdf',
            ]);
        });

        Order::where('id',$id)->update(['status_pesanan'=>'Dikirim']);


        return redirect()->route('tables-datatable-pesanan')
        ->with('succes', 'Invoice Berhasil Dikirimkan :)');


        // return $pdf->download("invoice_order_{$customer->customer->nama_customer}.pdf");

        // Mail::to($customer->customer->email_customer)->send(new InvoiceEmail($data));    
        // @dd($data);
    }

    public function printPdf($tanggal){

        $data = DB::table('detail_orders as d')
        ->join('orders as o', 'd.order_id', '=', 'o.id')
        ->join('users as u', 'o.user_id', '=', 'u.id') 
        ->select(
        'd.tanggal_pengambilan_pesanan as tanggal',
        
        //silver
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
       //gold
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
    ->whereDate('d.tanggal_pengambilan_pesanan','=',$tanggal)
    ->groupBy('d.tanggal_pengambilan_pesanan')
    ->orderBy('d.tanggal_pengambilan_pesanan', 'asc')
    ->get();

    $kupon = DB::table('detail_orders as d')
        ->join('orders as o', 'd.order_id', '=', 'o.id')
        ->join('users as u', 'o.user_id', '=', 'u.id') 
        ->select(
        'd.tanggal_pengambilan_pesanan as tanggal',
        'o.kupon_pesanan', 'd.nama_paket_pesanan','u.lokasi_dorm_customer','d.jenis_paket_pesanan'
    )
    ->where('o.status_pesanan', '=', 'Dikirim')
    ->whereDate('d.tanggal_pengambilan_pesanan','=',$tanggal)
    ->groupBy('d.tanggal_pengambilan_pesanan','o.kupon_pesanan', 'd.nama_paket_pesanan','u.lokasi_dorm_customer','d.jenis_paket_pesanan')
    ->orderBy('d.tanggal_pengambilan_pesanan', 'asc')
    ->get();

    $pdfOptions = new Options();
    $pdfOptions->set('defaultFont', 'Arial');
    $dompdf = new Dompdf($pdfOptions);

    $html = view('components.backend.pdf', ['data'=>$data,'kupon'=>$kupon])->render();

    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    $tanggalformat = Carbon::parse($tanggal);
    $formattanggal=$tanggalformat->format('d F Y');

    return $dompdf->stream('data-pesanan_' . $formattanggal . '.pdf');
    }
}

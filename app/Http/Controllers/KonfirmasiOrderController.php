<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf;


class KonfirmasiOrderController extends Controller
{
    public function konfirmasi(Request $request,$id){
        $customer = Order::with('customer')->findOrFail($id);
        $order = Order::with('details')->findOrFail($id);

        $data = [
            'customer_name' => $customer->customer->nama_customer,
            'total_price' => $order->total_harga,
            'kupon_pesanan'=>$order->kupon_pesanan,
            'harga_total'=>$order->total_harga,
            'tanggal_pembelian' =>$order->tanggal_order,
           'pesanan' => $order->details->map(function ($detail) {
            $formattedDate = \Carbon\Carbon::parse($detail->tanggal_pengambilan_pesanan)->format('d F Y');
            // return  "[Tanggal Pengambilan] : {$formattedDate}  [nama pesanan] : {$detail->jenis_makanan}";
            return [
            'tanggal_pengambilan' => $formattedDate,
            'nama_pesanan' => $detail->jenis_makanan,
            'jenis_paket' => $detail->jenis_paket_pesanan,
            'kategori' => $detail->nama_paket_pesanan,
            'harga' => $detail->harga_paket_pesanan,
            ];
        })->toArray(),
        ];

        
        $pdf = Pdf::loadView('components.backend.invoice',$data);

        $pdfcontent =$pdf->output();

        Mail::raw('Berikut adalah invoic anda', function ($message) use ($customer,$pdfcontent){
            $message->to($customer->customer->email_customer)
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
}

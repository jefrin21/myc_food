<!doctype html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1, h3, h6 {
            margin: 0;
        }

        .container {
            width: 100%;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th, .table td {
            border: 1px solid #000;
            padding: 10px;
            text-align: left;
        }

        .text-end {
            text-align: end;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <div class="row">
                    <div class="col">
                        <div class="single_blog">
                            <div class="blog_content">
                                <div class="row">
                                    <div class="col">
                                        <img src="assets_frontend/img/logo/logo.png" alt="">
                                    </div>
                                    <div class="col text-end">
                                        <div style="display: flex; justify-content: space-between; align-items: center;">
                                            <h1>INVOICE</h1>
                                            <h1>Kupon No. {{ $kupon_pesanan }}</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-6">
                                        <h3 class="mb-3">BILLED TO :</h3>
                                         <h6>{{ $customer_name }}
                                                <br> {{ \Carbon\Carbon::parse($tanggal_pembelian)->format('d F Y') }}
                                                <br> MYC Dorm, E307
                                            </h6>
                                    </div>
                                </div>

                                <div class="mt-5">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                               <th class="cart-product-name">Tanggal Pengambilan</th>
                                                <th class="cart-product-name">Jenis Paket</th>
                                                <th class="cart-product-name">Kategori</th>
                                                <th class="cart-product-total">harga</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @foreach ( $pesanan as $detail )
                                                            
                                                        <tr>
                                                            <td class="cart-product-name">{{ $detail['tanggal_pengambilan'] }}</td>
                                                            <td class="cart-product-name"> {{ $detail['jenis_paket'] }}</td>
                                                            <td class="cart-product-name">{{ $detail['kategori'] }} </td>
                                                            <td class="cart-product-total">Rp. {{ number_format($detail['harga'], 0, ',', '.') }}</td>
                                                        </tr>
                                                        
                                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                            
                                            <tr>
                                                <th>Order Total</th>
                                                <td colspan="2"></td>
                                                <td>Rp. {{ number_format($harga_total,0,',','.') }}</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="row mt-5">
                                        <div class="col">
                                            <h1>Thank You!</h1>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-6">
                                            <h3 class="mb-3">PAYMENT INFORMATION :</h3>
                                            <h6>TRANSFER BANK<br>Account Name: Catherine Lauren<br>Date: {{ \Carbon\Carbon::parse($tanggal_pembelian)->format('d F Y') }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

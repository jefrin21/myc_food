<!DOCTYPE html>
<html>
<head>
    <title>PDF Data</title>
    <style>
        body {
        font-family: Arial, sans-serif;
        margin: 10px; 
        font-size: 12px;
    }
    table {
        width: 80%; 
        border-collapse: collapse;
        margin: 0 auto; 
    }
    table, th, td {
        border: 1px solid black;
    }
    th, td {
        padding: 4px; 
        text-align: center; 
        font-size: 10px;
    }
     tr:last-child td {
        border-bottom: 1px solid black; 
    }
    th, td {
        padding: 4px;
        text-align: center;
        font-size: 10px;
        border-bottom: 1px solid black !important; 
    }
    </style>
</head>
<body>
    @foreach ( $data as $items )
        
    <h2>Data {{ \Carbon\Carbon::parse($items->tanggal)->format('d F Y') }}</h2>

    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead class="text-center">
                                                <tr>
                                                        <th rowspan="2"  style="text-align: center; vertical-align: middle;">Tanggal</th>
                                                        <th colspan="2">Silver</th>
                                                        <th colspan="2">Gold</th>
                                                    </tr>
                                                    <tr>
                                                        <th>L</th>
                                                        <th>D</th>
                                                        <th>L</th>
                                                        <th>D</th>
                                                    </tr>
                                                </thead>
                                                    <tr>
                                                        <td>{{ \Carbon\Carbon::parse($items->tanggal)->format('d F Y') }}</td>
                                                        <td>
                                                            <small>
                                                                Gedung G: {{ $items->lunch_silver_gedung_g}},<br>
                                                                GBFK: {{ $items->lunch_silver_gbfk }},<br>
                                                                Grandstand: {{ $items->lunch_silver_grandstand}},<br>
                                                                Paddock: {{ $items->lunch_silver_paddcok }},<br>
                                                                MYC-Dorm: {{ $items->lunch_silver_myc_dorm }}
                                                            </small>
                                                        </td>
                                                        <td>
                                                            <small>
                                                                Gedung G: {{ $items->dinner_silver_gedung_g}},<br>
                                                                GBFK: {{ $items->dinner_silver_gbfk }},<br>
                                                                Grandstand: {{ $items->dinner_silver_grandstand}},<br>
                                                                Paddock: {{ $items->dinner_silver_paddcok }},<br>
                                                                MYC-Dorm: {{ $items->dinner_silver_myc_dorm }}
                                                            </small>
                                                        </td>
                                                        <td>
                                                            <small>
                                                                Gedung G: {{ $items->lunch_gold_gedung_g}},<br>
                                                                GBFK: {{ $items->lunch_gold_gbfk }},<br>
                                                                Grandstand: {{ $items->lunch_gold_grandstand}},<br>
                                                                Paddock: {{ $items->lunch_gold_paddcok }},<br>
                                                                MYC-Dorm: {{ $items->lunch_gold_myc_dorm }}
                                                            </small>
                                                        </td>
                                                        <td>
                                                            <small>
                                                                Gedung G: {{ $items->dinner_gold_gedung_g}},<br>
                                                                GBFK: {{ $items->dinner_gold_gbfk }},<br>
                                                                Grandstand: {{ $items->dinner_gold_grandstand}},<br>
                                                                Paddock: {{ $items->dinner_gold_paddcok }},<br>
                                                                MYC-Dorm: {{ $items->dinner_gold_myc_dorm }}
                                                            </small>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            @endforeach
                                            <br>
                                            <br>
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap mt-4 " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead class="text-center">
                                                <tr>
                                                    <th>No Kupon</th>
                                                    <th>Nama Paket </th>
                                                    <th>Jenis Paket</th>
                                                    <th>Lokasi Dorm</th>
                                                </tr>
                                            </thead>
                                            @foreach ($kupon as $mykupon )
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        {{ $mykupon->kupon_pesanan }}
                                                    </td>
                                                    <td>
                                                        {{ $mykupon->nama_paket_pesanan }}
                                                    </td>
                                                    <td>
                                                        {{ $mykupon->jenis_paket_pesanan }}
                                                    </td>
                                                    <td>
                                                        {{ $mykupon->lokasi_dorm_customer }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
     </body>
</html>

<x-layout_backend>
    @section('head')
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Zoogler - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets_backend/images/favicon.ico">

        <!-- DataTables -->
        <link href="assets_backend/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets_backend/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="assets_backend/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <link href="assets_backend/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets_backend/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets_backend/css/style.css" rel="stylesheet" type="text/css">
    </head>
    @endsection


            @section('app-content')
            <!-- Start right Content here -->
            <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="btn-group float-right">
                                            <ol class="breadcrumb hide-phone p-0 m-0">
                                                <li class="breadcrumb-item"><a href="#">Pesanan Harian</a></li>
                                                <li class="breadcrumb-item active">Data Pesanan Harian</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Datatable</h4>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body" >
            
                                            <h4 class="mt-0 header-title">Weekly Order</h4>
                                           <div>
                                            <small>keterangan : 
                                                <br>L = Lunch 
                                                <br>D =  Dinner
                                            </small>
                                            </div> 
                                           <div class="table-responsive">
                                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead class="text-center">
                                                <tr>
                                                        <th rowspan="2"  style="text-align: center; vertical-align: middle;">Tanggal</th>
                                                        <th colspan="2">Silver</th>
                                                        <th colspan="2">Gold</th>
                                                        <th rowspan="2"  style="text-align: center; vertical-align: middle;">Print</th>
                                                    </tr>
                                                    <tr>
                                                        <th>L</th>
                                                        <th>D</th>
                                                        <th>L</th>
                                                        <th>D</th>
                                                    </tr>
                                                </thead>
                                                @foreach ( $data as $datas )
                                                    
                                                    <tr>
                                                        <td>{{ \Carbon\Carbon::parse($datas->tanggal)->format('d F Y') }}</td>
                                                        <td>
                                                            <small>
                                                                Gedung G: {{ $datas->lunch_silver_gedung_g}},<br>
                                                                GBFK: {{ $datas->lunch_silver_gbfk }},<br>
                                                                Grandstand: {{ $datas->lunch_silver_grandstand}},<br>
                                                                Paddock: {{ $datas->lunch_silver_paddcok }},<br>
                                                                MYC-Dorm: {{ $datas->lunch_silver_myc_dorm }}
                                                            </small>
                                                        </td>
                                                        <td>
                                                            <small>
                                                                Gedung G: {{ $datas->dinner_silver_gedung_g}},<br>
                                                                GBFK: {{ $datas->dinner_silver_gbfk }},<br>
                                                                Grandstand: {{ $datas->dinner_silver_grandstand}},<br>
                                                                Paddock: {{ $datas->dinner_silver_paddcok }},<br>
                                                                MYC-Dorm: {{ $datas->dinner_silver_myc_dorm }}
                                                            </small>
                                                        </td>
                                                        <td>
                                                            <small>
                                                                Gedung G: {{ $datas->lunch_gold_gedung_g}},<br>
                                                                GBFK: {{ $datas->lunch_gold_gbfk }},<br>
                                                                Grandstand: {{ $datas->lunch_gold_grandstand}},<br>
                                                                Paddock: {{ $datas->lunch_gold_paddcok }},<br>
                                                                MYC-Dorm: {{ $datas->lunch_gold_myc_dorm }}
                                                            </small>
                                                        </td>
                                                        <td>
                                                            <small>
                                                                Gedung G: {{ $datas->dinner_gold_gedung_g}},<br>
                                                                GBFK: {{ $datas->dinner_gold_gbfk }},<br>
                                                                Grandstand: {{ $datas->dinner_gold_grandstand}},<br>
                                                                Paddock: {{ $datas->dinner_gold_paddcok }},<br>
                                                                MYC-Dorm: {{ $datas->dinner_gold_myc_dorm }}
                                                            </small>
                                                        </td>
                                                        <td style="text-align: center; vertical-align: middle;">
                                                            <i class="dripicons-print" style="cursor: pointer; font-size: 20px; color: blue;" onclick="printRow('{{ $datas->tanggal }}')"></i>
                                                        </td>
                                                        
                                                    </tr>

                                                @endforeach
                                                <tbody>
                                          
                                                </tbody>
                                            </table>
                                            </div>  
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                           

                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->
            </div>
            <!-- End Right content here -->
            @endsection

        @section('js')

        <script>
            function printRow(tanggal) {
                window.open(`/print-pdf/${tanggal}`, '_blank');
            }
        </script>
        <!-- jQuery  -->
        <script src="assets_backend/js/jquery.min.js"></script>
        <script src="assets_backend/js/popper.min.js"></script>
        <script src="assets_backend/js/bootstrap.min.js"></script>
        <script src="assets_backend/js/modernizr.min.js"></script>
        <script src="assets_backend/js/detect.js"></script>
        <script src="assets_backend/js/fastclick.js"></script>
        <script src="assets_backend/js/jquery.slimscroll.js"></script>
        <script src="assets_backend/js/jquery.blockUI.js"></script>
        <script src="assets_backend/js/waves.js"></script>
        <script src="assets_backend/js/jquery.scrollTo.min.js"></script>

        <!-- Required datatable js -->
        <script src="assets_backend/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets_backend/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets_backend/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="assets_backend/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="assets_backend/plugins/datatables/jszip.min.js"></script>
        <script src="assets_backend/plugins/datatables/pdfmake.min.js"></script>
        <script src="assets_backend/plugins/datatables/vfs_fonts.js"></script>
        <script src="assets_backend/plugins/datatables/buttons.html5.min.js"></script>
        <script src="assets_backend/plugins/datatables/buttons.print.min.js"></script>
        <script src="assets_backend/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="assets_backend/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets_backend/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets_backend/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="assets_backend/js/app.js"></script>
        @endsection
  </x-layout_backend>
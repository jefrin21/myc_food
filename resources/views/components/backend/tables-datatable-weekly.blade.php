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
                                           <div class="table-responsive">
                                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead class="text-center">
                                                <tr>
                                                        <th rowspan="2"  style="text-align: center; vertical-align: middle;">Tanggal</th>
                                                        <th colspan="2">Silver A</th>
                                                        <th colspan="2">Silver B</th>
                                                        <th colspan="2">Gold A</th>
                                                        <th colspan="2">Gold B</th>
                                                    </tr>
                                                    <tr>
                                                        <th>L</th>
                                                        <th>D</th>
                                                        <th>L</th>
                                                        <th>D</th>
                                                        <th>L</th>
                                                        <th>D</th>
                                                        <th>L</th>
                                                        <th>D</th>
                                                    </tr>
                                                </thead>
                                                    {{-- @forelse ($weeklys as $order)
                                                        <tr>
                                                            <td>{{ $order->tanggal_pengambilan_pesanan }}</td>
                                                            <td>{{ $order->silver_a }}</td>
                                                            <td>{{ $order->silver_b }}</td>
                                                            <td>{{ $order->gold_a }}</td>
                                                            <td>{{ $order->gold_b }}</td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="5" class="text-center">Tidak ada data untuk ditampilkan</td>
                                                        </tr>
                                                    @endforelse --}}
                                                    @forelse ($weeklys as $order)
                                                    <tr>
                                                        <td>{{ $order->tanggal_pengambilan_pesanan }}</td>
                                                        <td><small>{{ $order->silver_alg }} ,<br>{{ $order->silver_alfk }} , <br>{{ $order->silver_algs }} , <br>{{ $order->silver_alpd }} , <br>{{ $order->silver_almyc }} </small></td>
                                                        <td><small>{{ $order->silver_adg }} ,<br>{{ $order->silver_adfk }} , <br>{{ $order->silver_adgs }} , <br>{{ $order->silver_adpd }} , <br>{{ $order->silver_admyc }} </small></td>
                                                        <td><small>{{ $order->silver_blg }} ,<br>{{ $order->silver_blfk }} , <br>{{ $order->silver_blgs }} , <br>{{ $order->silver_blpd }} , <br>{{ $order->silver_blmyc }} </small></td>
                                                        <td><small>{{ $order->silver_bdg }} ,<br>{{ $order->silver_bdfk }} , <br>{{ $order->silver_bdgs }} , <br>{{ $order->silver_bdpd }} , <br>{{ $order->silver_bdmyc }} </small></td>
                                                        <td><small>{{ $order->gold_alg }} ,<br>{{ $order->gold_alfk }} , <br>{{ $order->gold_algs }} , <br>{{ $order->gold_alpd }} , <br>{{ $order->gold_almyc }} </small></td>
                                                        <td><small>{{ $order->gold_adg }} ,<br>{{ $order->gold_adfk }} , <br>{{ $order->gold_adgs }} , <br>{{ $order->gold_adpd }} , <br>{{ $order->gold_admyc }} </small></td>
                                                        <td><small>{{ $order->gold_blg }} ,<br>{{ $order->gold_blfk }} , <br>{{ $order->gold_blgs }} , <br>{{ $order->gold_blpd }} , <br>{{ $order->gold_blmyc }} </small></td>
                                                        <td><small>{{ $order->gold_bdg }} ,<br>{{ $order->gold_bdfk }} , <br>{{ $order->gold_bdgs }} , <br>{{ $order->gold_bdpd }} , <br>{{ $order->gold_bdmyc }} </small></td>
                                                    </tr>
                                                    @endforelse
                                                <tbody>
                                          
                                                </tbody>
                                            </table>
                                            </div>  
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                            {{-- <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Weekly Order</h4>
                                            <p class="text-muted mb-4 font-13">Tabel "Detail Pesanan Makanan Weekly" mencatat pesanan mingguan, termasuk item menu, jumlah, harga, total, dan tanggal pengiriman untuk memantau penjualan secara rutin.
                                            </p>
            
                                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2" style="text-align: center; vertical-align: middle;">Tanggal</th>
                                                        <th colspan="2">Silver A</th>
                                                        <th colspan="2">Silver B</th>
                                                        <th colspan="2">Gold A</th>
                                                        <th colspan="2">Gold B</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Lunch</th>
                                                        <th>Dinner</th>
                                                        <th>Lunch</th>
                                                        <th>Dinner</th>
                                                        <th>Lunch</th>
                                                        <th>Dinner</th>
                                                        <th>Lunch</th>
                                                        <th>Dinner</th>
                                                    </tr>
                                                </thead>
            
            
                                                <tbody>
                                                    @forelse ($weeklys as $order)
                                                        <tr>
                                                            <td>{{ $order->tanggal_pengambilan_pesanan }}</td>
                                                            <td>{{ $order->silver_a }}</td>
                                                            <td>{{ $order->silver_b }}</td>
                                                            <td>{{ $order->gold_a }}</td>
                                                            <td>{{ $order->gold_b }}</td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="5" class="text-center">Tidak ada data untuk ditampilkan</td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                                
                                            </table>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row --> --}}

                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->
            </div>
            <!-- End Right content here -->
            @endsection

        @section('js')
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
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
        <base href="{{ url('/') }}">
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
                                                <li class="breadcrumb-item"><a href="#">Pesanan</a></li>
                                                <li class="breadcrumb-item active">Data Pesanan</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Data Pesanan</h4>
                                    </div>
                                     @if (session()->has('succes'))
                                            <div class="alert alert-success text-center" role="alert">
                                            {{ session('succes') }}
                                        </div> 
                                    @endif
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Pesanan</h4>
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Customer</th>
                                                    <th>Jumlah Pesanan</th>
                                                    <th>Total Harga</th>
                                                    <th>Tanggal Order</th>
                                                    <th>Bukti Pembayaran</th>
                                                    <th>Status Pesanan</th>
                                                    <th>Konfirmasi Pesanan</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ( $orders as $order )
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ Str::words($order->customer->name,2) }}</td>
                                                    <td>{{ $order->jumlah_pesanan }}</td>
                                                    <td>{{ $order->total_harga }}</td>
                                                    <td>{{ $order->created_at->format('d F Y') }}</td>
                                                    <td class="text-center">
                                                        <button type="button" class="btn btn-link-primary" data-bs-toggle="modal" data-bs-target="#buktipembayaran">
                                                            <i class="far fa-eye"></i> 
                                                        </button>
                                                    </td>
                                                    <td>{{ $order->status_pesanan }}</td>
                                                    <td class="text-center">
                                                      <a href="/detail-order/{{ $order->id }}">  <button type="button" class="btn-primary " >
                                                            Detail Pesanan
                                                        </button>
                                                    </a>
                                                    </td>
                                                </tr>
                                                 {{-- modal img pembayaran --}}
                                                <div class="modal fade" id="buktipembayaran" tabindex="-1" aria-labelledby="cekpembayaran" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="cekpembayaran">Konfirmasi Pembayaran</h5>
                                                                <button type="button" class="far fa-window-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <img src="{{ asset('images/' .$order->bukti_pembayaran) }}" alt="Bukti Pembayaran" class="img-fluid">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- modal img pembayaran  --}}  
                                                @endforeach
                                                </tbody>
                                            </table>
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
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        @endsection
  </x-layout_backend>
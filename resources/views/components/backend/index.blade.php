<x-layout_backend>
@section('head')
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui"
        />
        <title>MYC Food | Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon_io/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon_io/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon_io/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('favicon_io/site.webmanifest') }}">

        

        <link
            href="assets_backend/css/bootstrap.min.css"
            rel="stylesheet"
            type="text/css"
        />
        <link
            href="assets_backend/css/icons.css"
            rel="stylesheet"
            type="text/css"
        />
        <link
            href="assets_backend/css/style.css"
            rel="stylesheet"
            type="text/css"
        />
         

    </head>
@endsection


            <!-- Start right Content here -->
            @section('app-content')
                    <div class="page-content-wrapper">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="btn-group float-right">
                                            <ol
                                                class="breadcrumb hide-phone p-0 m-0"
                                            >
                                                <li class="breadcrumb-item">
                                                    <a href="#">Main</a>
                                                </li>
                                                <li
                                                    class="breadcrumb-item active"
                                                >
                                                    Dashboard
                                                </li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Dashboard</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="icon-contain">
                                                        <div class="row">
                                                            <div
                                                                class="col-2 align-self-center"
                                                            >
                                                                <i
                                                                    class="fas fa-tasks text-gradient-success"
                                                                ></i>
                                                            </div>
                                                            <div
                                                                class="col-10 text-right"
                                                            >
                                                            <h5 class="mt-0 mb-1">
                                                                {{ $jumlahPesanan }}
                                                            </h5>
                                                                <p
                                                                    class="mb-0 font-12 text-muted"
                                                                >
                                                                    Orders
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div
                                                    class="card-body justify-content-center"
                                                >
                                                    <div class="icon-contain">
                                                        <div class="row">
                                                            <div
                                                                class="col-2 align-self-center"
                                                            >
                                                                <i
                                                                    class="fas fa-users text-gradient-warning""
                                                                ></i>
                                                            </div>
                                                            <div
                                                                class="col-10 text-right"
                                                            >
                                                            <h5 class="mt-0 mb-1">
                                                                {{ $jumlahuser }}
                                                            </h5>
                                                            
                                                                <p
                                                                    class="mb-0 font-12 text-muted"
                                                                >
                                                                    Users
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="icon-contain">
                                                        <div class="row">
                                                            <div
                                                                class="col-2 align-self-center"
                                                            >
                                                                <i
                                                                    class="far fa-gem text-gradient-danger"
                                                                ></i>
                                                            </div>
                                                            <div
                                                                class="col-10 text-right"
                                                            >
                                                            <h5 class="mt-0 mb-1">
                                                                Rp {{ number_format($totalHarga, 2, ',', '.') }}
                                                            </h5>
                                                                <p
                                                                    class="mb-0 font-12 text-muted"
                                                                >
                                                                    Income
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="header-title pb-3 mt-0">
                                                Details
                                            </h5>
                                             <div class="table-responsive">
                                                <table
                                                    class="table table-hover mb-0"
                                                >
                                                    <thead>
                                                        <tr>
                                                            <th>Lokasi</th>
                                                            <th>Jumlah Users</th>
                                                            <th>Sales</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($usersByLocation as $location)
                                                            <tr>
                                                                <td>{{ $location->lokasi_dorm_customer }}</td>
                                                                <td>{{ $location->jumlah_users }}</td>
                                                                <td>{{ number_format($location->total_pendapatan, 0, ',', '.') }}</td> <!-- Format pendapatan -->
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end table-responsive-->
                                            <div
                                                class="pt-3 border-top text-right"
                                            >
                                                <a href="#" class="text-primary"
                                                    >View all
                                                    <i
                                                        class="mdi mdi-arrow-right"
                                                    ></i
                                                ></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- container -->
                    </div>
                    <!-- Page content Wrapper -->
                </div>
                <!-- content -->
            </div>
            @endsection
            <!-- End Right content here -->
     
        
        <!-- jQuery  -->
        @section('js')
        <script src="assets_backend/js/jquery.min.js"></script>
        <script src="assets_backend/js/popper.min.js"></script>
        <script src="assets_backend/js/bootstrap.min.js"></script>
        <script src="assets_backend/js/modernizr.min.js"></script>
        <script src="assets_backend/js/detect.js"></script>
        <script src="assets_backend/js/fastclick.js"></script>
        <script src="assets_backend/js/jquery.slimscroll.js"></script>
        <script src="assets_backend/js/jquery.blockUI.js"></script>
        <script src="assets_backend/js/waves.js"></script>
        <script src="assets_backend/js/jquery.nicescroll.js"></script>
        <script src="assets_backend/js/jquery.scrollTo.min.js"></script>

        <script src="assets_backend/plugins/chart.js/chart.min.js"></script>
        <script src="assets_backend/pages/dashboard.js"></script>

        <!-- App js -->
        <script src="assets_backend/js/app.js"></script>
        @endsection
</x-layout_backend>
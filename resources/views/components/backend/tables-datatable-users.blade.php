<x-layout_backend>
    @section('head')
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>MYC Food | Admin</title>
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
         <!-- Favicon -->
     <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon_io/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon_io/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon_io/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('favicon_io/site.webmanifest') }}">

    
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
                                                <li class="breadcrumb-item"><a href="#">Myc-Food</a></li>
                                                <li class="breadcrumb-item"><a href="#">Datatable</a></li>
                                                <li class="breadcrumb-item active">Users</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Users</h4>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end align-items-start">
                                <form action="/addUsers" method="GET">
                                        <button type="submit" class="btn btn-primary  " >
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                                                </svg>
                                        </button>
                                </form>
                            </div> 
                              @if (session()->has('success'))
                                    <div class="alert alert-success alert-dismissible fade show text-center " role="alert">
                                        <h6 class="text-success"> {{ session('success') }}</h6>
                                        <button type="button" class="far fa-window-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif
                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Datatable Users</h4>
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                               <tr>
                                                    <td>No.</td>
                                                    <td>Nama</td>
                                                    <td>Email</td>
                                               </tr>
                                              
                                                </thead>
                                                <tbody>
                                                    @foreach ( $user as $users)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $users->name }}</td>
                                                        <td>{{ $users->email }}</td>
                                                    </tr>
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
        @endsection
  </x-layout_backend>
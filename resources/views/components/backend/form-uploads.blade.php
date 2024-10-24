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

        <link href="assets_backend/plugins/dropify/css/dropify.min.css" rel="stylesheet">

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
                                                <li class="breadcrumb-item"><a href="#">Zoogler</a></li>
                                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                                <li class="breadcrumb-item active">File Uploads</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">File Uploads</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">File Upload 1</h4>
                                            <p class="text-muted mb-4 font-13">Your so fresh input file — Default version</p>
                                            <input type="file" id="input-file-now" class="dropify" />                                                   
                                        </div>
                                    </div>
                                </div><!--end col-->
    
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">File Upload 2</h4>
                                            <p class="text-muted mb-4 font-13">You can add a default value</p>
                                            <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="assets_backend/plugins/dropify/images/test-image-1.jpg" />
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
    
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">File Upload 3</h4>
                                            <p class="text-muted mb-4 font-13">You can set the height</p>
                                            <input type="file" id="input-file-now-custom-2" class="dropify" data-height="500" />
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">File Upload 4</h4>
                                            <p class="text-muted mb-4 font-13">You can combine options</p>
                                            <input type="file" id="input-file-now-custom-3" class="dropify" data-height="500" data-default-file="assets_backend/plugins/dropify/images/1.jpg" />
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->

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

        <script src="assets_backend/plugins/dropify/js/dropify.min.js"></script>
        <script src="assets_backend/pages/dropify.init.js"></script>

        <!-- App js -->
        <script src="assets_backend/js/app.js"></script>
        @endsection
</x-layout_backend>
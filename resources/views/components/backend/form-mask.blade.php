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
                                                <li class="breadcrumb-item active">Form Mask</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Form Mask</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Input Masks</h4>
                                            <p class="text-muted mb-4 font-13">Input masks can be used to force the
                                                user to enter data conform a specific format. Unlike validation, the
                                                user can't enter any other key than the ones specified by the mask.
                                            </p>
            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="p-20">
                                                        <form action="#">
                                                            <div class="form-group">
                                                                <label>ISBN 1</label>
                                                                <input type="text" placeholder="" data-mask="999-99-999-9999-9" class="form-control">
                                                                <span class="font-13 text-muted">e.g "999-99-999-9999-9"</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>ISBN 2</label>
                                                                <input type="text" placeholder="" data-mask="999 99 999 9999 9" class="form-control">
                                                                <span class="font-13 text-muted">999 99 999 9999 9</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>ISBN 3</label>
                                                                <input type="text" placeholder="" data-mask="999/99/999/9999/9" class="form-control">
                                                                <span class="font-13 text-muted">999/99/999/9999/9</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>IPV4</label>
                                                                <input type="text" placeholder="" data-mask="999.999.999.9999" class="form-control">
                                                                <span class="font-13 text-muted">192.168.110.310</span>
                                                            </div>
                                                            <div class="form-group mb-3 mb-lg-0">
                                                                <label>IPV6</label>
                                                                <input type="text" placeholder="" data-mask="9999:9999:9999:9:999:9999:9999:9999" class="form-control">
                                                                <span class="font-13 text-muted">4deg:1340:6547:2:540:h8je:ve73:98pd</span>
                                                            </div>
            
                                                        </form>
                                                    </div>
                                                </div>
            
                                                <div class="col-md-6">
                                                    <div class="p-20">
                                                        <form action="#">
            
                                                            <div class="form-group">
                                                                <label>Tax ID</label>
                                                                <input type="text" placeholder="" data-mask="99-9999999" class="form-control">
                                                                <span class="font-13 text-muted">99-9999999</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Phone</label>
                                                                <input type="text" placeholder="" data-mask="(999) 999-9999" class="form-control">
                                                                <span class="font-13 text-muted">(999) 999-9999</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Currency</label>
                                                                <input type="text" placeholder="" data-mask="$ 999,999,999.99" class="form-control">
                                                                <span class="font-13 text-muted">$ 999,999,999.99</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Date</label>
                                                                <input type="text" placeholder="" data-mask="99/99/9999" class="form-control">
                                                                <span class="font-13 text-muted">dd/mm/yyyy</span>
                                                            </div>
                                                            <div class="form-group mb-0">
                                                                <label>Date 2</label>
                                                                <input type="text" placeholder="" data-mask="99-99-9999" class="form-control">
                                                                <span class="font-13 text-muted">dd-mm-yyyy</span>
                                                            </div>
            
                                                        </form>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div> <!-- end row -->
            
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

        <!-- Bootstrap inputmask js -->
        <script src="assets_backend/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>

        <!-- App js -->
        <script src="assets_backend/js/app.js"></script>
      @endsection
 </x-layout_backend>
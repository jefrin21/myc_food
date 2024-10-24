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
                                                <li class="breadcrumb-item active">Validation</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Validation</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Validation type</h4>
                                            <p class="text-muted mb-4 font-13">Parsley is a javascript form validation
                                                library. It helps you provide your users with feedback on their form
                                                submission before sending it to your server.</p>
            
                                            <form class="" action="#">
                                                <div class="form-group">
                                                    <label>Required</label>
                                                    <input type="text" class="form-control" required placeholder="Type something"/>
                                                </div>
            
                                                <div class="form-group">
                                                    <label>Equal To</label>
                                                    <div>
                                                        <input type="password" id="pass2" class="form-control" required
                                                                placeholder="Password"/>
                                                    </div>
                                                    <div class="m-t-10">
                                                        <input type="password" class="form-control" required
                                                                data-parsley-equalto="#pass2"
                                                                placeholder="Re-Type Password"/>
                                                    </div>
                                                </div>
            
                                                <div class="form-group">
                                                    <label>E-Mail</label>
                                                    <div>
                                                        <input type="email" class="form-control" required
                                                                parsley-type="email" placeholder="Enter a valid e-mail"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>URL</label>
                                                    <div>
                                                        <input parsley-type="url" type="url" class="form-control"
                                                                required placeholder="URL"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Digits</label>
                                                    <div>
                                                        <input data-parsley-type="digits" type="text"
                                                                class="form-control" required
                                                                placeholder="Enter only digits"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Number</label>
                                                    <div>
                                                        <input data-parsley-type="number" type="text"
                                                                class="form-control" required
                                                                placeholder="Enter only numbers"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Alphanumeric</label>
                                                    <div>
                                                        <input data-parsley-type="alphanum" type="text"
                                                                class="form-control" required
                                                                placeholder="Enter alphanumeric value"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Textarea</label>
                                                    <div>
                                                        <textarea required class="form-control" rows="5"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0">
                                                    <div>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                            Submit
                                                        </button>
                                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                            Cancel
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Range validation</h4>
                                            <p class="text-muted mb-4 font-13">Parsley is a javascript form validation
                                                library. It helps you provide your users with feedback on their form
                                                submission before sending it to your server.</p>
            
                                            <form action="#">
            
                                                <div class="form-group">
                                                    <label>Min Length</label>
                                                    <div>
                                                        <input type="text" class="form-control" required
                                                                data-parsley-minlength="6" placeholder="Min 6 chars."/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Max Length</label>
                                                    <div>
                                                        <input type="text" class="form-control" required
                                                                data-parsley-maxlength="6" placeholder="Max 6 chars."/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Range Length</label>
                                                    <div>
                                                        <input type="text" class="form-control" required
                                                                data-parsley-length="[5,10]"
                                                                placeholder="Text between 5 - 10 chars length"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Min Value</label>
                                                    <div>
                                                        <input type="text" class="form-control" required
                                                                data-parsley-min="6" placeholder="Min value is 6"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Max Value</label>
                                                    <div>
                                                        <input type="text" class="form-control" required
                                                                data-parsley-max="6" placeholder="Max value is 6"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Range Value</label>
                                                    <div>
                                                        <input class="form-control" required type="text range" min="6"
                                                                max="100" placeholder="Number between 6 - 100"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Regular Exp</label>
                                                    <div>
                                                        <input type="text" class="form-control" required
                                                                data-parsley-pattern="#[A-Fa-f0-9]{6}"
                                                                placeholder="Hex. Color"/>
                                                    </div>
                                                </div>
            
                                                <div class="form-group">
                                                    <label>Min check</label>
                                                    <div>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck1" data-parsley-multiple="groups"
                                                                    data-parsley-mincheck="2">
                                                            <label class="custom-control-label" for="customCheck1">And this</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck2" data-parsley-multiple="groups"
                                                                    data-parsley-mincheck="2">
                                                            <label class="custom-control-label" for="customCheck2">Can't check this</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck3" data-parsley-multiple="groups"
                                                                    data-parsley-mincheck="2">
                                                            <label class="custom-control-label" for="customCheck3">This too</label>
                                                        </div>
            
                                                    </div>
                                                </div>
            
                                                <div class="form-group mb-0">
                                                    <div>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                            Submit
                                                        </button>
                                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                            Cancel
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
            
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

        <!-- Parsley js -->
        <script src="assets_backend/plugins/parsleyjs/parsley.min.js"></script>
        <script src="assets_backend/pages/validation.init.js"></script>

        <!-- App js -->
        <script src="assets_backend/js/app.js"></script>
        @endsection
</x-layout_backend>
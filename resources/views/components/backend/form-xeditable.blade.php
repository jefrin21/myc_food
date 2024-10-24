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

        <!-- X-editable css -->
        <link type="text/css" href="assets_backend/plugins/x-editable/css/bootstrap-editable.css" rel="stylesheet">

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
                                                <li class="breadcrumb-item active">Xeditable</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Xeditable</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Inline Example</h4>
                                            <p class="text-muted mb-4 font-13">This library allows you to create
                                                editable elements on your page. It can be used with any engine
                                                (bootstrap, jquery-ui, jquery only) and includes both popup and inline
                                                modes. Please try out demo to see how it works.</p>
            
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th style="width: 50%;">Inline</th>
                                                    <th>Examples</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Simple Text Field</td>
                                                    <td>
                                                        <a href="#" id="inline-username" data-type="text" data-pk="1" data-title="Enter username">superuser</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Empty text field, required</td>
                                                    <td>
                                                        <a href="#" id="inline-firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname"></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Select, local array, custom display</td>
                                                    <td>
                                                        <a href="#" id="inline-sex" data-type="select" data-pk="1" data-value="" data-title="Select sex"></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Select, error while loading</td>
                                                    <td>
                                                        <a href="#" id="inline-status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status">Active</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Combodate</td>
                                                    <td>
                                                        <a href="#" id="inline-dob" data-type="combodate" data-value="2015-09-24" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1"  data-title="Select Date of birth"></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Textarea, buttons below. Submit by ctrl+enter</td>
                                                    <td>
                                                        <a href="#" id="inline-comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a>
                                                    </td>
                                                </tr>
            
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

        <!-- XEditable Plugin -->
        <script src="assets_backend/plugins/moment/moment.js"></script>
        <script src="assets_backend/plugins/x-editable/js/bootstrap-editable.min.js"></script>
        <script src="assets_backend/pages/xeditable.js"></script>

        <!-- App js -->
        <script src="assets_backend/js/app.js"></script>
        @endsection
</x-layout_backend>
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
                                                <li class="breadcrumb-item"><a href="#">Zoogler</a></li>
                                                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                                <li class="breadcrumb-item active">Editable</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Editable</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Edit Table With Button</h4>
                                            <p class="text-muted mb-4 font-13">Add toolbar column with edit and delete buttons.</p>
            
                                            <table class="table mb-0" id="my-table">
                                                <thead>
                                                  <tr>
                                                    <th>No</th>
                                                    <th>Firstname</th>
                                                    <th>Lastname</th>
                                                    <th>Email</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                      <td>1</td>
                                                      <td>John</td>
                                                      <td>Doe</td>
                                                      <td>john@example.com</td>
                                                  </tr>
                                                  <tr>
                                                      <td>2</td>
                                                      <td>Mary</td>
                                                      <td>Moe</td>
                                                      <td>mary@example.com</td>
                                                  </tr>
                                                  <tr>
                                                      <td>3</td>
                                                      <td>July</td>
                                                      <td>Dooley</td>
                                                      <td>july@example.com</td>
                                                  </tr>
                                                </tbody>
                                            </table>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Examples</h4>
                                            <p class="text-muted mb-4 font-13">just start typing to edit, or move around with arrow keys or mouse clicks!</p>
            
                                            <table id="mainTable" class="table table-striped  mb-0">
                                                <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Cost</th>
                                                    <th>Profit</th>
                                                    <th>Fun</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Car</td>
                                                    <td>100</td>
                                                    <td>200</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>Bike</td>
                                                    <td>330</td>
                                                    <td>240</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>Plane</td>
                                                    <td>430</td>
                                                    <td>540</td>
                                                    <td>3</td>
                                                </tr>
                                                <tr>
                                                    <td>Yacht</td>
                                                    <td>100</td>
                                                    <td>200</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>Segway</td>
                                                    <td>330</td>
                                                    <td>240</td>
                                                    <td>1</td>
                                                </tr>
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th><strong>TOTAL</strong></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                                </tfoot>
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

        <script src="assets_backend/plugins/tiny-editable/mindmup-editabletable.js"></script>
        <script src="assets_backend/plugins/tiny-editable/numeric-input-example.js"></script>
        <script src="assets_backend/plugins/tabledit/jquery.tabledit.js"></script> 
        <script src="assets_backend/pages/table-edit.init.js"></script>       

        <!-- App js -->
        <script src="assets_backend/js/app.js"></script>
        @endsection
 </x-layout_backend>
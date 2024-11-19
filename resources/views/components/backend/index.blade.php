<x-layout_backend>
@section('head')
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui"
        />
        <title>MYC-Food | Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets_backend/images/favicon.ico" />

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
                                                    <a href="#">Zoogler</a>
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
                                        <div class="col-lg-3">
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
                                                                <h5
                                                                    class="mt-0 mb-1"
                                                                >
                                                                    190
                                                                </h5>
                                                                <p
                                                                    class="mb-0 font-12 text-muted"
                                                                >
                                                                    Active Tasks
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
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
                                                                    class="far fa-gem text-gradient-danger"
                                                                ></i>
                                                            </div>
                                                            <div
                                                                class="col-10 text-right"
                                                            >
                                                                <h5
                                                                    class="mt-0 mb-1"
                                                                >
                                                                    62
                                                                </h5>
                                                                <p
                                                                    class="mb-0 font-12 text-muted"
                                                                >
                                                                    Project
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="icon-contain">
                                                        <div class="row">
                                                            <div
                                                                class="col-2 align-self-center"
                                                            >
                                                                <i
                                                                    class="fas fa-users text-gradient-warning"
                                                                ></i>
                                                            </div>
                                                            <div
                                                                class="col-10 text-right"
                                                            >
                                                                <h5
                                                                    class="mt-0 mb-1"
                                                                >
                                                                    14
                                                                </h5>
                                                                <p
                                                                    class="mb-0 font-12 text-muted"
                                                                >
                                                                    Teams
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="icon-contain">
                                                        <div class="row">
                                                            <div
                                                                class="col-2 align-self-center"
                                                            >
                                                                <i
                                                                    class="fas fa-database text-gradient-primary"
                                                                ></i>
                                                            </div>
                                                            <div
                                                                class="col-10 text-right"
                                                            >
                                                                <h5
                                                                    class="mt-0 mb-1"
                                                                >
                                                                    $15562
                                                                </h5>
                                                                <p
                                                                    class="mb-0 font-12 text-muted"
                                                                >
                                                                    Budget
                                                                </p>
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
                                                Payments
                                            </h5>
                                            <div class="table-responsive">
                                                <table
                                                    class="table table-hover mb-0"
                                                >
                                                    <thead>
                                                        <tr
                                                            class="align-self-center"
                                                        >
                                                            <th>
                                                                Project Name
                                                            </th>
                                                            <th>Client Name</th>
                                                            <th>
                                                                Payment Type
                                                            </th>
                                                            <th>Paid Date</th>
                                                            <th>Amount</th>
                                                            <th>Transaction</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                Product
                                                                Devlopment
                                                            </td>
                                                            <td>
                                                                <img
                                                                    src="assets_backend/images/users/avatar-1.jpg"
                                                                    alt=""
                                                                    class="thumb-sm rounded-circle mr-2"
                                                                />
                                                                Kevin Heal
                                                            </td>
                                                            <td>Paypal</td>
                                                            <td>5/8/2018</td>
                                                            <td>$15,000</td>
                                                            <td>
                                                                <span
                                                                    class="badge badge-boxed badge-soft-warning"
                                                                    >panding</span
                                                                >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                New Office
                                                                Building
                                                            </td>
                                                            <td>
                                                                <img
                                                                    src="assets_backend/images/users/avatar-2.jpg"
                                                                    alt=""
                                                                    class="thumb-sm rounded-circle mr-2"
                                                                />
                                                                Frank M. Lyons
                                                            </td>
                                                            <td>Paypal</td>
                                                            <td>15/7/2018</td>
                                                            <td>$35,000</td>
                                                            <td>
                                                                <span
                                                                    class="badge badge-boxed badge-soft-primary"
                                                                    >Success</span
                                                                >
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                Market Research
                                                            </td>
                                                            <td>
                                                                <img
                                                                    src="assets_backend/images/users/avatar-3.jpg"
                                                                    alt=""
                                                                    class="thumb-sm rounded-circle mr-2"
                                                                />
                                                                Angelo Butler
                                                            </td>
                                                            <td>Pioneer</td>
                                                            <td>30/9/2018</td>
                                                            <td>$45,000</td>
                                                            <td>
                                                                <span
                                                                    class="badge badge-boxed badge-soft-warning"
                                                                    >Panding</span
                                                                >
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                Website &amp;
                                                                Blog
                                                            </td>
                                                            <td>
                                                                <img
                                                                    src="assets_backend/images/users/avatar-4.jpg"
                                                                    alt=""
                                                                    class="thumb-sm rounded-circle mr-2"
                                                                />
                                                                Phillip Morse
                                                            </td>
                                                            <td>Paypal</td>
                                                            <td>2/6/2018</td>
                                                            <td>$70,000</td>
                                                            <td>
                                                                <span
                                                                    class="badge badge-boxed badge-soft-warning"
                                                                    >Success</span
                                                                >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Product
                                                                Devlopment
                                                            </td>
                                                            <td>
                                                                <img
                                                                    src="assets_backend/images/users/avatar-5.jpg"
                                                                    alt=""
                                                                    class="thumb-sm rounded-circle mr-2"
                                                                />
                                                                Kevin Heal
                                                            </td>
                                                            <td>Paypal</td>
                                                            <td>5/8/2018</td>
                                                            <td>$15,000</td>
                                                            <td>
                                                                <span
                                                                    class="badge badge-boxed badge-soft-primary"
                                                                    >panding</span
                                                                >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                New Office
                                                                Building
                                                            </td>
                                                            <td>
                                                                <img
                                                                    src="assets_backend/images/users/avatar-6.jpg"
                                                                    alt=""
                                                                    class="thumb-sm rounded-circle mr-2"
                                                                />
                                                                Frank M. Lyons
                                                            </td>
                                                            <td>Paypal</td>
                                                            <td>15/7/2018</td>
                                                            <td>$35,000</td>
                                                            <td>
                                                                <span
                                                                    class="badge badge-boxed badge-soft-primary"
                                                                    >Success</span
                                                                >
                                                            </td>
                                                        </tr>
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
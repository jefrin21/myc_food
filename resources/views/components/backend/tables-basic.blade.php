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

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <div class="topbar">

                        <nav class="navbar-custom">

                            <ul class="list-inline float-right mb-0">
                                <!-- language-->
                                <li class="list-inline-item dropdown notification-list hide-phone">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect text-white" data-toggle="dropdown" href="#" role="button"
                                        aria-haspopup="false" aria-expanded="false">
                                        English <img src="assets_backend/images/flags/us_flag.jpg" class="ml-2" height="16" alt=""/>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right language-switch">
                                        <a class="dropdown-item" href="#"><img src="assets_backend/images/flags/italy_flag.jpg" alt="" height="16"/><span> Italian </span></a>
                                        <a class="dropdown-item" href="#"><img src="assets_backend/images/flags/french_flag.jpg" alt="" height="16"/><span> French </span></a>
                                        <a class="dropdown-item" href="#"><img src="assets_backend/images/flags/spain_flag.jpg" alt="" height="16"/><span> Spanish </span></a>
                                        <a class="dropdown-item" href="#"><img src="assets_backend/images/flags/russia_flag.jpg" alt="" height="16"/><span> Russian </span></a>
                                    </div>
                                </li>
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <i class="dripicons-mail noti-icon"></i>
                                        <span class="badge badge-danger noti-icon-badge">5</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5><span class="badge badge-danger float-right">745</span>Messages</h5>
                                        </div>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon"><img src="assets_backend/images/users/avatar-2.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                            <p class="notify-details"><b>Charles M. Jones</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon"><img src="assets_backend/images/users/avatar-3.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                            <p class="notify-details"><b>Thomas J. Mimms</b><small class="text-muted">You have 87 unread messages</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon"><img src="assets_backend/images/users/avatar-4.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                            <p class="notify-details"><b>Luis M. Konrad</b><small class="text-muted">It is a long established fact that a reader will</small></p>
                                        </a>

                                        <!-- All-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item border-top">
                                            View All
                                        </a>

                                    </div>
                                </li>

                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <i class="dripicons-bell noti-icon"></i>
                                        <span class="badge badge-success noti-icon-badge">2</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5><span class="badge badge-danger float-right">87</span>Notification</h5>
                                        </div>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                            <p class="notify-details"><b>Your order is placed</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-success"><i class="mdi mdi-message"></i></div>
                                            <p class="notify-details"><b>New Message received</b><small class="text-muted">You have 87 unread messages</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-warning"><i class="mdi mdi-glass-cocktail"></i></div>
                                            <p class="notify-details"><b>Your item is shipped</b><small class="text-muted">It is a long established fact that a reader will</small></p>
                                        </a>
                                        
                                        <!-- All-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item border-top">
                                            View All 
                                        </a>

                                    </div>
                                </li>

                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <img src="assets_backend/images/users/avatar-6.jpg" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5>Welcome</h5>
                                        </div>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-wallet m-r-5 text-muted"></i> My Wallet</a>
                                        <a class="dropdown-item" href="#"><span class="badge badge-success float-right">5</span><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Lock screen</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                    </div>
                                </li>
                            </ul>

                            <ul class="list-inline menu-left mb-0">
                                <li class="float-left">
                                    <button class="button-menu-mobile open-left waves-light waves-effect">
                                        <i class="mdi mdi-menu"></i>
                                    </button>
                                </li>
                                <li class="hide-phone app-search">
                                    <form role="search" class="">
                                        <input type="text" placeholder="Search..." class="form-control">
                                        <a href=""><i class="fa fa-search"></i></a>
                                    </form>
                                </li>
                            </ul>

                            <div class="clearfix"></div>
                        </nav>
                    </div>
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="btn-group float-right">
                                            <ol class="breadcrumb hide-phone p-0 m-0">
                                                <li class="breadcrumb-item"><a href="#">Zoogler</a></li>
                                                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                                <li class="breadcrumb-item active">Basic Tables</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Basic Tables</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Basic example</h4>
                                            <p class="text-muted mb-4 font-13">For basic styling—light padding and
                                                only horizontal dividers—add the base class <code>.table</code> to any
                                                <code>&lt;table&gt;</code>.
                                            </p>
            
                                            <div class="table-responsive">
                                                <table class="table mb-0 table-centered">
                                                    <thead>
                                                    <tr>
                                                        <th>Compny</th>
                                                        <th>Bill</th>
                                                        <th>Average Bill</th>
                                                        <th>Paid Bill</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td><img src="assets_backend/images/widgets/project1.jpg" alt="" class="rounded-circle thumb-sm mr-1">
                                                            Micromin
                                                        </td>
                                                        <td>4</td>
                                                        <td>$250</td>
                                                        <td>$800</td>
                                                        <td>
                                                            <div class="dropdown d-inline-block float-right">
                                                                <a class="nav-link dropdown-toggle arrow-none" id="dLabel4" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel4">
                                                                    <a class="dropdown-item" href="#">Creat Project</a>
                                                                    <a class="dropdown-item" href="#">Open Project</a>
                                                                    <a class="dropdown-item" href="#">Tasks Details</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets_backend/images/widgets/project2.jpg" alt="" class="rounded-circle thumb-sm mr-1">
                                                            ZZ Diamond
                                                        </td>
                                                        <td>2</td>
                                                        <td>$180</td>
                                                        <td>$400</td>
                                                        <td>
                                                            <div class="dropdown d-inline-block float-right">
                                                                <a class="nav-link dropdown-toggle arrow-none" id="dLabel5" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel5">
                                                                    <a class="dropdown-item" href="#">Creat Project</a>
                                                                    <a class="dropdown-item" href="#">Open Project</a>
                                                                    <a class="dropdown-item" href="#">Tasks Details</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets_backend/images/widgets/project3.jpg" alt="" class="rounded-circle thumb-sm mr-1">
                                                            Dairy Sweet
                                                        </td>
                                                        <td>6</td>
                                                        <td>$210</td>
                                                        <td>$500</td>
                                                        <td>
                                                            <div class="dropdown d-inline-block float-right">
                                                                <a class="nav-link dropdown-toggle arrow-none" id="dLabel6" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel6">
                                                                    <a class="dropdown-item" href="#">Creat Project</a>
                                                                    <a class="dropdown-item" href="#">Open Project</a>
                                                                    <a class="dropdown-item" href="#">Tasks Details</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets_backend/images/widgets/project4.jpg" alt="" class="rounded-circle thumb-sm mr-1">
                                                            Corner Tea
                                                        </td>
                                                        <td>3</td>
                                                        <td>$80</td>
                                                        <td>$350</td>
                                                        <td>
                                                            <div class="dropdown d-inline-block float-right">
                                                                <a class="nav-link dropdown-toggle arrow-none" id="dLabel7" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel7">
                                                                    <a class="dropdown-item" href="#">Creat Project</a>
                                                                    <a class="dropdown-item" href="#">Open Project</a>
                                                                    <a class="dropdown-item" href="#">Tasks Details</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Bordered table</h4>
                                            <p class="text-muted mb-4 font-13">Add <code>.table-bordered</code> for
                                                borders on all sides of the table and cells.
                                            </p>
            
                                            <div class="table-responsive">
                                                <table class="table table-bordered mb-0 table-centered">
                                                    <thead>
                                                    <tr>
                                                        <th>Transaction ID</th>
                                                        <th>Date</th>
                                                        <th>Price</th>
                                                        <th>Order Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>#124781</td>
                                                        <td>25/11/2018</td>
                                                        <td>$321</td>
                                                        <td><span class="badge badge-success">Approved</span></td>
                                                        <td>
                                                            <div class="dropdown d-inline-block float-right">
                                                                <a class="nav-link dropdown-toggle arrow-none" id="dLabel8" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel8">
                                                                    <a class="dropdown-item" href="#">Creat Project</a>
                                                                    <a class="dropdown-item" href="#">Open Project</a>
                                                                    <a class="dropdown-item" href="#">Tasks Details</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#542136</td>
                                                        <td>19/11/2018</td>
                                                        <td>$227</td>
                                                        <td><span class="badge badge-success">Approved</span></td>
                                                        <td>
                                                            <div class="dropdown d-inline-block float-right">
                                                                <a class="nav-link dropdown-toggle arrow-none" id="dLabel9" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel9">
                                                                    <a class="dropdown-item" href="#">Creat Project</a>
                                                                    <a class="dropdown-item" href="#">Open Project</a>
                                                                    <a class="dropdown-item" href="#">Tasks Details</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#234578</td>
                                                        <td>11/10/2018</td>
                                                        <td>$442</td>
                                                        <td><span class="badge badge-danger">Rejected</span></td>
                                                        <td>
                                                            <div class="dropdown d-inline-block float-right">
                                                                <a class="nav-link dropdown-toggle arrow-none" id="dLabel10" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel10">
                                                                    <a class="dropdown-item" href="#">Creat Project</a>
                                                                    <a class="dropdown-item" href="#">Open Project</a>
                                                                    <a class="dropdown-item" href="#">Tasks Details</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#951357</td>
                                                        <td>03/12/2018</td>
                                                        <td>$625</td>
                                                        <td><span class="badge badge-success">Approved</span></td>
                                                        <td>
                                                            <div class="dropdown d-inline-block float-right">
                                                                <a class="nav-link dropdown-toggle arrow-none" id="dLabel11" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                    <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel11">
                                                                    <a class="dropdown-item" href="#">Creat Project</a>
                                                                    <a class="dropdown-item" href="#">Open Project</a>
                                                                    <a class="dropdown-item" href="#">Tasks Details</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
            
            
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Striped rows</h4>
                                            <p class="text-muted mb-4 font-13">
                                                Use <code>.table-striped</code> to add zebra-striping to any table row
                                                within the <code>&lt;tbody&gt;</code>.
                                            </p>
            
                                            <div class="table-responsive">
                                                <table class="table table-striped mb-0">
                                                    <thead>
                                                    <tr>
                                                        <th>Customer</th>
                                                        <th>Email</th>
                                                        <th>Contact No</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td><img src="assets_backend/images/users/avatar-3.jpg" alt="" class="rounded-circle thumb-sm mr-1"> Aaron Poulin</td>
                                                        <td>AaronPoulin@example.com</td>
                                                        <td>+21 21547896</td>
                                                        <td>                                                       
                                                            <button type="button" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></button>
                                                            <button type="button" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets_backend/images/users/avatar-4.jpg" alt="" class="rounded-circle thumb-sm mr-1"> Richard Ali</td>
                                                        <td>RichardAli@example.com</td>
                                                        <td>+41 21547896</td>
                                                        <td>                                                       
                                                            <button type="button" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></button>
                                                            <button type="button" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets_backend/images/users/avatar-5.jpg" alt="" class="rounded-circle thumb-sm mr-1"> Juan Clark</td>
                                                        <td>JuanClark@example.com</td>
                                                        <td>+65 21547896</td>
                                                        <td>                                                       
                                                            <button type="button" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></button>
                                                            <button type="button" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets_backend/images/users/avatar-6.jpg" alt="" class="rounded-circle thumb-sm mr-1"> Albert Hull</td>
                                                        <td>AlbertHull@example.com</td>
                                                        <td>+88 21547896</td>
                                                        <td>                                                       
                                                            <button type="button" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></button>
                                                            <button type="button" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Table head options</h4>
                                            <p class="text-muted mb-4 font-13">Use one of two modifier classes to make
                                                <code>&lt;thead&gt;</code>s appear light or dark gray.
                                            </p>
            
                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0">
                                                    <thead class="thead-default">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Access</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Mark</td>
                                                        <td>XYZ@Example.com</td>
                                                        <td><span class="badge badge-boxed  badge-success">Business</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Jacob</td>
                                                        <td>XYZ@Example.com</td>
                                                        <td><span class="badge badge-boxed  badge-warning">Personal</span></td>                                                    
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Larry</td>
                                                        <td>XYZ@Example.com</td>
                                                        <td><span class="badge badge-boxed  badge-danger">Disabled</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>Mark</td>
                                                        <td>XYZ@Example.com</td>
                                                        <td><span class="badge badge-boxed  badge-success">Business</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">5</th>
                                                        <td>Jacob</td>
                                                        <td>XYZ@Example.com</td>
                                                        <td><span class="badge badge-boxed  badge-warning">Personal</span></td>                                                    
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
            
            
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Hoverable rows</h4>
                                            <p class="text-muted mb-4 font-13">
                                                Use <code>.table-striped</code> to add zebra-striping to any table row
                                                within the <code>&lt;tbody&gt;</code>.
                                            </p>
                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Username</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                        <td>@mdo</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>@fat</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td colspan="2">Larry the Bird</td>
                                                        <td>@twitter</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Dark table</h4>
                                            <p class="text-muted mb-4 font-13">Your awesome text goes here.</p>
            
                                            <div class="table-responsive">
                                                <table class="table table-dark mb-0">
                                                    <thead class="bg-dark">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Username</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                        <td>@mdo</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>@fat</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Larry</td>
                                                        <td>the Bird</td>
                                                        <td>@twitter</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                            
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="header-title">Contextual classes </h5>
                                            <p>Use contextual classes to color table rows or individual cells. </p>
                                            <div class="table-responsive-sm">
                                                <table class="table mb-0">
                                                    <thead>
                                                        <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">First Name</th>
                                                        <th scope="col">Last Name</th>
                                                        <th scope="col">Username</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="table-primary">
                                                            <th scope="row">1</th>
                                                            <td class="">Mark</td>
                                                            <td class="">Otto</td>
                                                            <td class="">@mdo</td>
                                                        </tr>
                                                        <tr class="">
                                                        <th scope="row">2</th>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                        </tr>
                                                        <tr class="table-secondary">
                                                            <th scope="row">3</th>
                                                            <td class="">Larry</td>
                                                            <td class="">the Bird</td>
                                                            <td class="">@twitter</td>
                                                        </tr>
                                                        <tr class="">
                                                            <th scope="row">4</th>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                        </tr>
                                                        <tr class="table-success">
                                                        <th scope="row">5</th>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                        </tr>
                                                        <tr class="">
                                                            <th scope="row">6</th>
                                                            <td>Larry</td>
                                                            <td>the Bird</td>
                                                            <td>@twitter</td>
                                                        </tr>
                                                        <tr class="table-info">
                                                        <th scope="row">7</th>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                        </tr>
                                                        <tr class="">
                                                            <th scope="row">8</th>
                                                            <td>Larry</td>
                                                            <td>the Bird</td>
                                                            <td>@twitter</td>
                                                        </tr>
                                                        <tr class="table-warning">
                                                        <th scope="row">9</th>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                        </tr>
                                                        <tr class="">
                                                            <th scope="row">10</th>
                                                            <td>Larry</td>
                                                            <td>the Bird</td>
                                                            <td>@twitter</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="header-title">Captions Table </h5>
                                            <p>A <code> &ltcaption&gt </code> functions like a heading for a table. It helps users with screen readers to find a table and understand what it’s about and decide if they want to read it. </p>
                                            <div class="table-responsive-sm">
                                                <table class="table mb-0">
                                                    <caption>List of users</caption>
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First Name</th>
                                                            <th scope="col">Last Name</th>
                                                            <th scope="col">Username</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>Larry</td>
                                                            <td>the Bird</td>
                                                            <td>@twitter</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="header-title">Small table</h5>
                                            <p>Add <code>.table-sm</code> to make tables more compact by cutting cell padding in half.</p>
                                            <div class="table-responsive-sm">
                                                <table class="table table-sm mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First Name</th>
                                                            <th scope="col">Last Name</th>
                                                            <th scope="col">Username</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td colspan="2">Larry the Bird</td>
                                                            <td>@twitter</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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

        <!-- App js -->
        <script src="assets_backend/js/app.js"></script>
        @endsection
</x-layout_backend>
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

        <!-- Table css -->
        <link href="assets_backend/plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css" rel="stylesheet" type="text/css" media="screen">

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
                                                <li class="breadcrumb-item active">Responsive</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Responsive Tables</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Example</h4>
                                            <p class="text-muted mb-4 font-13">This is an experimental awesome solution for responsive tables with complex data.</p>
            
                                            <div class="table-rep-plugin">
                                                <div class="table-responsive b-0" data-pattern="priority-columns">
                                                    <table id="tech-companies-1" class="table table-striped mb-0">
                                                        <thead>
                                                        <tr>
                                                            <th>Company</th>
                                                            <th data-priority="1">Last Trade</th>
                                                            <th data-priority="3">Trade Time</th>
                                                            <th data-priority="1">Change</th>
                                                            <th data-priority="3">Prev Close</th>
                                                            <th data-priority="3">Open</th>
                                                            <th data-priority="6">Bid</th>
                                                            <th data-priority="6">Ask</th>
                                                            <th data-priority="6">1y Target Est</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <th>GOOG <span class="co-name">Google Inc.</span></th>
                                                            <td>597.74</td>
                                                            <td>12:12PM</td>
                                                            <td>14.81 (2.54%)</td>
                                                            <td>582.93</td>
                                                            <td>597.95</td>
                                                            <td>597.73 x 100</td>
                                                            <td>597.91 x 300</td>
                                                            <td>731.10</td>
                                                        </tr>
                                                        <tr>
                                                            <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                                            <td>378.94</td>
                                                            <td>12:22PM</td>
                                                            <td>5.74 (1.54%)</td>
                                                            <td>373.20</td>
                                                            <td>381.02</td>
                                                            <td>378.92 x 300</td>
                                                            <td>378.99 x 100</td>
                                                            <td>505.94</td>
                                                        </tr>
                                                        <tr>
                                                            <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                                            <td>191.55</td>
                                                            <td>12:23PM</td>
                                                            <td>3.16 (1.68%)</td>
                                                            <td>188.39</td>
                                                            <td>194.99</td>
                                                            <td>191.52 x 300</td>
                                                            <td>191.58 x 100</td>
                                                            <td>240.32</td>
                                                        </tr>
                                                        <tr>
                                                            <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                                            <td>31.15</td>
                                                            <td>12:44PM</td>
                                                            <td>1.41 (4.72%)</td>
                                                            <td>29.74</td>
                                                            <td>30.67</td>
                                                            <td>31.14 x 6500</td>
                                                            <td>31.15 x 3200</td>
                                                            <td>36.11</td>
                                                        </tr>
                                                        <tr>
                                                            <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                                            <td>25.50</td>
                                                            <td>12:27PM</td>
                                                            <td>0.66 (2.67%)</td>
                                                            <td>24.84</td>
                                                            <td>25.37</td>
                                                            <td>25.50 x 71100</td>
                                                            <td>25.51 x 17800</td>
                                                            <td>31.50</td>
                                                        </tr>
                                                        <tr>
                                                            <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                                            <td>18.65</td>
                                                            <td>12:45PM</td>
                                                            <td>0.97 (5.49%)</td>
                                                            <td>17.68</td>
                                                            <td>18.23</td>
                                                            <td>18.65 x 10300</td>
                                                            <td>18.66 x 24000</td>
                                                            <td>21.12</td>
                                                        </tr>
                                                        <tr>
                                                            <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                                            <td>15.81</td>
                                                            <td>12:25PM</td>
                                                            <td>0.11 (0.67%)</td>
                                                            <td>15.70</td>
                                                            <td>15.94</td>
                                                            <td>15.79 x 6100</td>
                                                            <td>15.80 x 17000</td>
                                                            <td>18.16</td>
                                                        </tr>
                                                        <!-- Repeat -->
                                                        <tr>
                                                            <th>GOOG <span class="co-name">Google Inc.</span></th>
                                                            <td>597.74</td>
                                                            <td>12:12PM</td>
                                                            <td>14.81 (2.54%)</td>
                                                            <td>582.93</td>
                                                            <td>597.95</td>
                                                            <td>597.73 x 100</td>
                                                            <td>597.91 x 300</td>
                                                            <td>731.10</td>
                                                        </tr>
                                                        <tr>
                                                            <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                                            <td>378.94</td>
                                                            <td>12:22PM</td>
                                                            <td>5.74 (1.54%)</td>
                                                            <td>373.20</td>
                                                            <td>381.02</td>
                                                            <td>378.92 x 300</td>
                                                            <td>378.99 x 100</td>
                                                            <td>505.94</td>
                                                        </tr>
                                                        <tr>
                                                            <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                                            <td>191.55</td>
                                                            <td>12:23PM</td>
                                                            <td>3.16 (1.68%)</td>
                                                            <td>188.39</td>
                                                            <td>194.99</td>
                                                            <td>191.52 x 300</td>
                                                            <td>191.58 x 100</td>
                                                            <td>240.32</td>
                                                        </tr>
                                                        <tr>
                                                            <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                                            <td>31.15</td>
                                                            <td>12:44PM</td>
                                                            <td>1.41 (4.72%)</td>
                                                            <td>29.74</td>
                                                            <td>30.67</td>
                                                            <td>31.14 x 6500</td>
                                                            <td>31.15 x 3200</td>
                                                            <td>36.11</td>
                                                        </tr>
                                                        <tr>
                                                            <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                                            <td>25.50</td>
                                                            <td>12:27PM</td>
                                                            <td>0.66 (2.67%)</td>
                                                            <td>24.84</td>
                                                            <td>25.37</td>
                                                            <td>25.50 x 71100</td>
                                                            <td>25.51 x 17800</td>
                                                            <td>31.50</td>
                                                        </tr>
                                                        <tr>
                                                            <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                                            <td>18.65</td>
                                                            <td>12:45PM</td>
                                                            <td>0.97 (5.49%)</td>
                                                            <td>17.68</td>
                                                            <td>18.23</td>
                                                            <td>18.65 x 10300</td>
                                                            <td>18.66 x 24000</td>
                                                            <td>21.12</td>
                                                        </tr>
                                                        <tr>
                                                            <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                                            <td>15.81</td>
                                                            <td>12:25PM</td>
                                                            <td>0.11 (0.67%)</td>
                                                            <td>15.70</td>
                                                            <td>15.94</td>
                                                            <td>15.79 x 6100</td>
                                                            <td>15.80 x 17000</td>
                                                            <td>18.16</td>
                                                        </tr>
                                                        <!-- Repeat -->
                                                        <tr>
                                                            <th>GOOG <span class="co-name">Google Inc.</span></th>
                                                            <td>597.74</td>
                                                            <td>12:12PM</td>
                                                            <td>14.81 (2.54%)</td>
                                                            <td>582.93</td>
                                                            <td>597.95</td>
                                                            <td>597.73 x 100</td>
                                                            <td>597.91 x 300</td>
                                                            <td>731.10</td>
                                                        </tr>
                                                        <tr>
                                                            <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                                            <td>378.94</td>
                                                            <td>12:22PM</td>
                                                            <td>5.74 (1.54%)</td>
                                                            <td>373.20</td>
                                                            <td>381.02</td>
                                                            <td>378.92 x 300</td>
                                                            <td>378.99 x 100</td>
                                                            <td>505.94</td>
                                                        </tr>
                                                        <tr>
                                                            <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                                            <td>191.55</td>
                                                            <td>12:23PM</td>
                                                            <td>3.16 (1.68%)</td>
                                                            <td>188.39</td>
                                                            <td>194.99</td>
                                                            <td>191.52 x 300</td>
                                                            <td>191.58 x 100</td>
                                                            <td>240.32</td>
                                                        </tr>
                                                        <tr>
                                                            <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                                            <td>31.15</td>
                                                            <td>12:44PM</td>
                                                            <td>1.41 (4.72%)</td>
                                                            <td>29.74</td>
                                                            <td>30.67</td>
                                                            <td>31.14 x 6500</td>
                                                            <td>31.15 x 3200</td>
                                                            <td>36.11</td>
                                                        </tr>
                                                        <tr>
                                                            <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                                            <td>25.50</td>
                                                            <td>12:27PM</td>
                                                            <td>0.66 (2.67%)</td>
                                                            <td>24.84</td>
                                                            <td>25.37</td>
                                                            <td>25.50 x 71100</td>
                                                            <td>25.51 x 17800</td>
                                                            <td>31.50</td>
                                                        </tr>
                                                        <tr>
                                                            <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                                            <td>18.65</td>
                                                            <td>12:45PM</td>
                                                            <td>0.97 (5.49%)</td>
                                                            <td>17.68</td>
                                                            <td>18.23</td>
                                                            <td>18.65 x 10300</td>
                                                            <td>18.66 x 24000</td>
                                                            <td>21.12</td>
                                                        </tr>
                                                        <tr>
                                                            <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                                            <td>15.81</td>
                                                            <td>12:25PM</td>
                                                            <td>0.11 (0.67%)</td>
                                                            <td>15.70</td>
                                                            <td>15.94</td>
                                                            <td>15.79 x 6100</td>
                                                            <td>15.80 x 17000</td>
                                                            <td>18.16</td>
                                                        </tr>
                                                        <!-- Repeat -->
                                                        <tr>
                                                            <th>GOOG <span class="co-name">Google Inc.</span></th>
                                                            <td>597.74</td>
                                                            <td>12:12PM</td>
                                                            <td>14.81 (2.54%)</td>
                                                            <td>582.93</td>
                                                            <td>597.95</td>
                                                            <td>597.73 x 100</td>
                                                            <td>597.91 x 300</td>
                                                            <td>731.10</td>
                                                        </tr>
                                                        <tr>
                                                            <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                                            <td>378.94</td>
                                                            <td>12:22PM</td>
                                                            <td>5.74 (1.54%)</td>
                                                            <td>373.20</td>
                                                            <td>381.02</td>
                                                            <td>378.92 x 300</td>
                                                            <td>378.99 x 100</td>
                                                            <td>505.94</td>
                                                        </tr>
                                                        <tr>
                                                            <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                                            <td>191.55</td>
                                                            <td>12:23PM</td>
                                                            <td>3.16 (1.68%)</td>
                                                            <td>188.39</td>
                                                            <td>194.99</td>
                                                            <td>191.52 x 300</td>
                                                            <td>191.58 x 100</td>
                                                            <td>240.32</td>
                                                        </tr>
                                                        <tr>
                                                            <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                                            <td>31.15</td>
                                                            <td>12:44PM</td>
                                                            <td>1.41 (4.72%)</td>
                                                            <td>29.74</td>
                                                            <td>30.67</td>
                                                            <td>31.14 x 6500</td>
                                                            <td>31.15 x 3200</td>
                                                            <td>36.11</td>
                                                        </tr>
                                                        <tr>
                                                            <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                                            <td>25.50</td>
                                                            <td>12:27PM</td>
                                                            <td>0.66 (2.67%)</td>
                                                            <td>24.84</td>
                                                            <td>25.37</td>
                                                            <td>25.50 x 71100</td>
                                                            <td>25.51 x 17800</td>
                                                            <td>31.50</td>
                                                        </tr>
                                                        <tr>
                                                            <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                                            <td>18.65</td>
                                                            <td>12:45PM</td>
                                                            <td>0.97 (5.49%)</td>
                                                            <td>17.68</td>
                                                            <td>18.23</td>
                                                            <td>18.65 x 10300</td>
                                                            <td>18.66 x 24000</td>
                                                            <td>21.12</td>
                                                        </tr>
                                                        <tr>
                                                            <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                                            <td>15.81</td>
                                                            <td>12:25PM</td>
                                                            <td>0.11 (0.67%)</td>
                                                            <td>15.70</td>
                                                            <td>15.94</td>
                                                            <td>15.79 x 6100</td>
                                                            <td>15.80 x 17000</td>
                                                            <td>18.16</td>
                                                        </tr>
                                                        <!-- Repeat -->
                                                        <tr>
                                                            <th>GOOG <span class="co-name">Google Inc.</span></th>
                                                            <td>597.74</td>
                                                            <td>12:12PM</td>
                                                            <td>14.81 (2.54%)</td>
                                                            <td>582.93</td>
                                                            <td>597.95</td>
                                                            <td>597.73 x 100</td>
                                                            <td>597.91 x 300</td>
                                                            <td>731.10</td>
                                                        </tr>
                                                        <tr>
                                                            <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                                            <td>378.94</td>
                                                            <td>12:22PM</td>
                                                            <td>5.74 (1.54%)</td>
                                                            <td>373.20</td>
                                                            <td>381.02</td>
                                                            <td>378.92 x 300</td>
                                                            <td>378.99 x 100</td>
                                                            <td>505.94</td>
                                                        </tr>
                                                        <tr>
                                                            <th>AMZN <span class="co-name">Amazon.com Inc.</span></th>
                                                            <td>191.55</td>
                                                            <td>12:23PM</td>
                                                            <td>3.16 (1.68%)</td>
                                                            <td>188.39</td>
                                                            <td>194.99</td>
                                                            <td>191.52 x 300</td>
                                                            <td>191.58 x 100</td>
                                                            <td>240.32</td>
                                                        </tr>
                                                        <tr>
                                                            <th>ORCL <span class="co-name">Oracle Corporation</span></th>
                                                            <td>31.15</td>
                                                            <td>12:44PM</td>
                                                            <td>1.41 (4.72%)</td>
                                                            <td>29.74</td>
                                                            <td>30.67</td>
                                                            <td>31.14 x 6500</td>
                                                            <td>31.15 x 3200</td>
                                                            <td>36.11</td>
                                                        </tr>
                                                        <tr>
                                                            <th>MSFT <span class="co-name">Microsoft Corporation</span></th>
                                                            <td>25.50</td>
                                                            <td>12:27PM</td>
                                                            <td>0.66 (2.67%)</td>
                                                            <td>24.84</td>
                                                            <td>25.37</td>
                                                            <td>25.50 x 71100</td>
                                                            <td>25.51 x 17800</td>
                                                            <td>31.50</td>
                                                        </tr>
                                                        <tr>
                                                            <th>CSCO <span class="co-name">Cisco Systems, Inc.</span></th>
                                                            <td>18.65</td>
                                                            <td>12:45PM</td>
                                                            <td>0.97 (5.49%)</td>
                                                            <td>17.68</td>
                                                            <td>18.23</td>
                                                            <td>18.65 x 10300</td>
                                                            <td>18.66 x 24000</td>
                                                            <td>21.12</td>
                                                        </tr>
                                                        <tr>
                                                            <th>YHOO <span class="co-name">Yahoo! Inc.</span></th>
                                                            <td>15.81</td>
                                                            <td>12:25PM</td>
                                                            <td>0.11 (0.67%)</td>
                                                            <td>15.70</td>
                                                            <td>15.94</td>
                                                            <td>15.79 x 6100</td>
                                                            <td>15.80 x 17000</td>
                                                            <td>18.16</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
            
                                            </div>
            
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

        <!-- Responsive-table-->
        <script src="assets_backend/plugins/RWD-Table-Patterns/dist/js/rwd-table.min.js"></script>
        <script src="assets_backend/pages/table-responsive.init.js"></script>

        <!-- App js -->
        <script src="assets_backend/js/app.js"></script>
        @endsection
</x-layout_backend>
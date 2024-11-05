<x-layout_frontend>
@section('head')
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bucker – My Account</title>
    <meta name="description"
        content="240+ Best Bootstrap Templates are available on this website. Find your template for your project compatible with the most popular HTML library in the world." />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="canonical" href="Replace_with_your_PAGE_URL" />

    <!-- Open Graph (OG) meta tags are snippets of code that control how URLs are displayed when shared on social media  -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Bucker – About Us" />
    <meta property="og:url" content="PAGE_URL" />
    <meta property="og:site_name" content="Bucker – About Us" />
    <!-- For the og:image content, replace the # with a link of an image -->
    <meta property="og:image" content="#" />
    <meta property="og:description" content="Bucker – About Us" />

    <!-- Add site Favicon -->
    <link rel="icon" href="https://hasthemes.com/wp-content/uploads/2019/04/cropped-favicon-32x32.png" sizes="32x32" />
    <link rel="icon" href="https://hasthemes.com/wp-content/uploads/2019/04/cropped-favicon-192x192.png"
        sizes="192x192" />
    <link rel="apple-touch-icon" href="https://hasthemes.com/wp-content/uploads/2019/04/cropped-favicon-180x180.png" />
    <meta name="msapplication-TileImage"
        content="https://hasthemes.com/wp-content/uploads/2019/04/cropped-favicon-270x270.png" />

    <!-- CSS 
    ========================= -->
    <link rel="stylesheet" href="assets_frontend/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets_frontend/css/slick.css">
    <link rel="stylesheet" href="assets_frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets_frontend/css/ionicons.min.css">
    <link rel="stylesheet" href="assets_frontend/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="assets_frontend/css/animate.css">
    <link rel="stylesheet" href="assets_frontend/css/nice-select.css">
    <link rel="stylesheet" href="assets_frontend/css/magnific-popup.css">
    <link rel="stylesheet" href="assets_frontend/css/jquery-ui.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets_frontend/css/style.css">

    <!--modernizr min js here-->
    <script src="assets_frontend/js/vendor/modernizr-3.11.2.min.js"></script>


    <!-- Structured Data  -->
    <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "Replace_with_your_site_title",
        "url": "Replace_with_your_site_URL"
        }
    </script>
</head>

@endsection

@section('app-content')

    <!-- breadcrumbs area start -->
    <div class="breadcrumbs_aree breadcrumbs_bg mb-110" data-bgimg="assets_frontend/img/others/breadcrumbs-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text">
                        <h1>My Account</h1>
                        <ul>
                            <li><a href="mycindex.html">Home </a></li>
                            <li> // My Account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->
    <div class="account-page-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <ul class="nav myaccount-tab-trigger" id="account-page-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="account-dashboard-tab" data-bs-toggle="tab"
                                href="#account-dashboard" role="tab" aria-controls="account-dashboard"
                                aria-selected="true">Account Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="account-orders-tab" data-bs-toggle="tab" href="#account-orders"
                                role="tab" aria-controls="account-orders" aria-selected="false">History</a>
                        </li>
         
                        <li class="nav-item">
                            <i class="icofont-logout"></i>
                            <a class="nav-link" id="account-logout-tab" href="mycindex.html" role="tab"
                                aria-selected="false">Logout <i class="icofont-logout"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9">
                    <div class="tab-content myaccount-tab-content" id="account-page-tab-content">
                        <div class="tab-pane fade show active" id="account-dashboard" role="tabpanel"
                            aria-labelledby="account-dashboard-tab">
                            <div class="myaccount-details">
                                <form action="#" class="myaccount-form">
                                    <div class="myaccount-form-inner">
                                        <div class="single-input single-input-half">
                                            <label>First Name</label>
                                            <input type="text">
                                        </div>
                                        <div class="single-input single-input-half">
                                            <label>Last Name</label>
                                            <input type="text">
                                        </div>
                                        <div class="single-input">
                                            <label>Faculty</label>
                                            <input type="text">
                                        </div>
                                        <div class="single-input single-input-half">
                                            <label>Dorm Location</label>
                                            <input type="text">
                                        </div>
                                        <div class="single-input single-input-half">
                                            <label>Room Number</label>
                                            <input type="text">
                                        </div>
                                        <div class="single-input single-input-half">
                                            <label>Phone Number</label>
                                            <input type="text">
                                        </div>
                                        <div class="single-input single-input-half">
                                            <label>Email</label>
                                            <input type="text">
                                        </div>
                                        
                                        <div class="single-input single-input-half">
                                            <button class="btn custom-btn" type="submit">
                                                <span>EDIT INFORMATION</span>
                                            </button>
                                        </div>
                                        <div class="single-input single-input-half">
                                            <button class="btn custom-btn" type="submit">
                                                <span>SAVE CHANGES</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-orders" role="tabpanel"
                            aria-labelledby="account-orders-tab">
                            <div class="myaccount-orders">
                                <h4 class="small-title">MY ORDERS</h4>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <tbody>
                                            <tr>
                                                
                                                <th>ORDER DATE</th>
                                                <th>PACKAGE</th>
                                                <th>TOTAL</th>
                                                <th>INVOICE</th>
                                            </tr>
                                            <tr>
                                                <td>Mar 27, 2019</td>
                                                <td>LUNCH GOLD A
                                                    <BR> LUNCH GOLD B</BR>
                                                </td>
                                                <td>$162.00 </td>
                                                <td><a href="mycinvoice.html"
                                                        class="btn btn-secondary btn-primary-hover"><span>View</span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Mar 27, 2019</td>
                                                <td>LUNCH GOLD A
                                                    <BR> LUNCH GOLD B</BR>
                                                </td>
                                                <td>$162.00 </td>
                                                <td><a href="mycinvoice.html"
                                                        class="btn btn-secondary btn-primary-hover"><span>View</span></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection
    <!-- JS
============================================ -->
    @section('js')
    <script src="assets_frontend/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets_frontend/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="assets_frontend/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets_frontend/js/slick.min.js"></script>
    <script src="assets_frontend/js/owl.carousel.min.js"></script>
    <script src="assets_frontend/js/wow.min.js"></script>
    <script src="assets_frontend/js/jquery.scrollup.min.js"></script>
    <script src="assets_frontend/js/jquery.nice-select.js"></script>
    <script src="assets_frontend/js/jquery.magnific-popup.min.js"></script>
    <script src="assets_frontend/js/mailchimp-ajax.js"></script>
    <script src="assets_frontend/js/jquery-ui.min.js"></script>
    <script src="assets_frontend/js/jquery.zoom.min.js"></script>
    <!-- Main JS -->
    <script src="assets_frontend/js/main.js"></script>
    @endsection
    </x-layout_frontend>  
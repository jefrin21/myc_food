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
        <link rel="icon" href="https://hasthemes.com/wp-content/uploads/2019/04/cropped-favicon-32x32.png"
            sizes="32x32" />
        <link rel="icon" href="https://hasthemes.com/wp-content/uploads/2019/04/cropped-favicon-192x192.png"
            sizes="192x192" />
        <link rel="apple-touch-icon"
            href="https://hasthemes.com/wp-content/uploads/2019/04/cropped-favicon-180x180.png" />
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
    @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            <h5 class="text-danger"> {{ session('loginError') }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
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
                        @if (auth()->user())
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

                        @else
                                        <div class="tab-pane fade show active" id="account-dashboard" role="tabpanel"
                                            aria-labelledby="account-dashboard-tab">
                                            <div class="myaccount-details">
                                                {{-- <form action="#" class="myaccount-form"> --}}
                                                    <form action="/mylogin" method="POST" class="myaccount-form">
                                                        @csrf
                                                        <div class="myaccount-form-inner">
                                                            <div class="single-input ">
                                                                <h3>You Need to Log In to Get Your Account Information</h3>
                                                            </div>

                                                            <div class="single-input single-input-half">
                                                                <button class="btn custom-btn" type="submit" data-bs-toggle="modal"
                                                                    data-bs-target="#login">
                                                                    <span>LOGIN</span>
                                                                </button>
                                                                <!-- Modal Login -->
                                                                <div class="modal fade" id="login" data-bs-backdrop="static"
                                                                    data-bs-keyboard="false" tabindex="-1"
                                                                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="staticBackdropLabel"> Login
                                                                                </h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-lg-12">
                                                                                        <label>Email Address*</label>
                                                                                        <input
                                                                                            class="@error('email_customer') is-invalid @enderror"
                                                                                            type="email" placeholder="Email Address"
                                                                                            name="email_customer" id="email_customer"
                                                                                            value="{{ old('email_customer') }}"
                                                                                            required>
                                                                                        @error('email_customer')
                                                                                            <div class="invalid-feedback">
                                                                                                {{ $message }}
                                                                                            </div>
                                                                                        @enderror
                                                                                    </div>
                                                                                    <div class="col-lg-12">
                                                                                        <label>Password*</label>
                                                                                        <input
                                                                                            class="@error('password') is-invalid @enderror"
                                                                                            type="password" placeholder="Password"
                                                                                            name="password" id="password" required>
                                                                                        @error('password')
                                                                                            <div class="invalid-feedback">
                                                                                                {{ $message }}
                                                                                            </div>
                                                                                        @enderror
                                                                                    </div>


                                                                                    <div class="col-sm-4 pt-1 mt-md-0">
                                                                                        <div class="forgotton-password_info">
                                                                                            <a href="#"> Forgot pasword?</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-4 pt-1 mt-md-0">
                                                                                        <div class="forgotton-password_info">
                                                                                            <a data-bs-target="#register"
                                                                                                data-bs-toggle="modal"> Don't have
                                                                                                account?</a>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button class="btn custom-btn md-size"
                                                                                    type="submit">Login</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                    </form>

                                                    <!-- Modal Register -->

                                                    <form action="/myregister" method="POST">
                                                    @csrf
                                                        <div class="modal fade" id="register" data-bs-backdrop="static"
                                                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="staticBackdropLabel"> Register
                                                                        </h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="login-form">
                                                                            <div class="row">
                                                                                <div class="col-md-6 col-12">
                                                                                    <label>First Name</label>
                                                                                    <input
                                                                                        class="@error('nama_customer') is-invalid @enderror"
                                                                                        name="nama_customer" id="nama_customer"
                                                                                        type="text" placeholder="First Name" required>
                                                                                    @error('nama_customer')
                                                                                        <div class="invalid-feedback">
                                                                                            {{ $message }}
                                                                                        </div>
                                                                                    @enderror
                                                                                </div>
                                                                                <div class="col-md-6 col-12">
                                                                                    <label>Last Name</label>
                                                                                    <input type="text" placeholder="Last Name "
                                                                                        name="last_name_customer"
                                                                                        id="last_name_customer" required>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <label>Faculty</label>
                                                                                    <select name="fakultas_customer"
                                                                                        id="fakultas_customer">
                                                                                        <option disabled selected value="1">Select
                                                                                            Faculty</option>
                                                                                        <option
                                                                                            value="Faculty-of-Information-Technology">
                                                                                            Faculty of Information Technology</option>
                                                                                        <option value="Faculty-of-Business">Faculty of
                                                                                            Business</option>
                                                                                        <option
                                                                                            value="Faculty-of-Science-and-Technology">
                                                                                            Faculty of Science and Technology</option>
                                                                                        <option value="Faculty-of-Nursing"> Faculty of
                                                                                            Nursing</option>
                                                                                        <option value="Faculty-of-Medicine">Faculty of
                                                                                            Medicine</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <label>Dorm Location</label>
                                                                                    <select name="lokasi_dorm_customer"
                                                                                        id="lokasi_dorm_customer" required>
                                                                                        <option disabled selected value="1">Select Dorm
                                                                                            Location</option>
                                                                                        <option value="MYC-Dorm">MYC Dorm</option>
                                                                                        <option value="Paddock-Dorm">Paddock Dorm
                                                                                        </option>
                                                                                        <option value="G-Building-Dorm">G Building Dorm
                                                                                        </option>
                                                                                        <option value="Swimming-Pool-Dorm">Swimming Pool
                                                                                            Dorm</option>
                                                                                        <option value="Soccer-Field-Dorm">Soccer Field
                                                                                            Dorm</option>
                                                                                    </select>


                                                                                </div>

                                                                                <div class="col-md-6">
                                                                                    <label>Room Number</label>
                                                                                    <input type="text" placeholder="No Kamar"
                                                                                        name="no_kamar" id="no_kamar"
                                                                                        class="@error('no_kamar') is-invalid @enderror">
                                                                                    @error('no_kamar')
                                                                                        <div class="invalid-feedback">
                                                                                            {{ $message }}
                                                                                        </div>
                                                                                    @enderror
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <label>Phone Number</label>
                                                                                    <input type="text" placeholder="No HP"
                                                                                        name="no_hp_customer" id="no_hp_customer"
                                                                                        class="@error('no_hp_customer') is-invalid @enderror">
                                                                                    @error('no_hp_customer')
                                                                                        <div class="invalid-feedback">
                                                                                            {{ $message }}
                                                                                        </div>
                                                                                    @enderror
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <label>Email</label>
                                                                                    <input type="email" placeholder="Email"
                                                                                        name="email_customer" id="email_customer"
                                                                                        class="@error('email_customer') is-invalid @enderror"
                                                                                        required>
                                                                                    @error('email_customer')
                                                                                        <div class="invalid-feedback">
                                                                                            {{ $message }}
                                                                                        </div>
                                                                                    @enderror
                                                                                </div>
                                                                                <div class="col-lg-12">
                                                                                    <label>Password*</label>
                                                                                    <div class="newsletter_subscribe">
                                                                                        <form id="mc-form">
                                                                                            <input type="password"
                                                                                                placeholder="Password"
                                                                                                id="passwordInput">
                                                                                            <button type="button"
                                                                                                onclick="togglePasswordVisibility()"><i class="pe-7s-look"></i></button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-lg-12">
                                                                                    <label>Confirm Password*</label>
                                                                                    <div class="newsletter_subscribe">
                                                                                        <form id="mc-form">
                                                                                            <input type="confirmpassword"
                                                                                                placeholder="Confirm Password"
                                                                                                id="confirmpasswordInput">
                                                                                            <button type="button"
                                                                                                onclick="togglePasswordVisibility2()"><i
                                                                                                    class="pe-7s-look"></i></button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn custom-btn md-size"
                                                                            data-bs-dismiss="modal" data-bs-target="#login"
                                                                            data-bs-toggle="modal">Back to</button>
                                                                        <button type="submit"
                                                                            class="btn custom-btn md-size">Register</button>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif




        </div>
    </div>
    </div>
    </div>
    </div>


    @endsection
    <!-- JS
============================================ -->
    @section('js')
    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById("passwordInput");

            // Mengubah tipe input antara password dan text
            if (passwordInput.type === "password") {
                passwordInput.type = "text";

            } else {
                passwordInput.type = "password";

            }
        }
        function togglePasswordVisibility2() {
            const confirmpasswordInput = document.getElementById("confirmpasswordInput");

            // Mengubah tipe input antara password dan text
            if (confirmpasswordInput.type === "password") {
                confirmpasswordInput.type = "text";

            } else {
                confirmpasswordInput.type = "password";

            }
        }
    </script>
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
<x-layout_frontend>
    @section('head')

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>MYC Food</title>
        <meta name="description"
            content="240+ Best Bootstrap Templates are available on this website. Find your template for your project compatible with the most popular library in the world." />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <link rel="canonical" href="Replace_with_your_PAGE_URL" />

        <!-- Open Graph (OG) meta tags are snippets of code that control how URLs are displayed when shared on social media  -->
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Bucker –  Bakery Shop Bootstrap 5 Template" />
        <meta property="og:url" content="PAGE_URL" />
        <meta property="og:site_name" content="Bucker –  Bakery Shop Bootstrap 5 Template" />
        <!-- For the og:image content, replace the # with a link of an image -->
        <meta property="og:image" content="#" />
        <meta property="og:description" content="Bucker –  Bakery Shop Bootstrap 5 Template" />

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
         <!-- Favicon -->
         <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon_io/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon_io/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon_io/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('favicon_io/site.webmanifest') }}">



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

    <section id="home-banner">
        @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            <h5 class="text-danger"> {{ session('loginError') }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            <h5 class="text-success"> {{ session('success') }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
        <div class="hero_banner_section hero_banner2 d-flex align-items-center mb-60"
            data-bgimg="assets_frontend/img/bg/hero-bg2.png" style="margin-bottom: 0px;">
            <div class="container">
                <div class="hero_banner_inner">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="hero_content hero_content2">
                                <h3 class="wow fadeInUp text-white" data-wow-delay="0.1s" data-wow-duration="1.1s">
                                    Minimum Order <span> H-2</span> </h3>
                                <h1 class="wow fadeInUp text-white" data-wow-delay="0.2s" data-wow-duration="1.2s">MYC
                                    Food
                                    <br>Service
                                </h1>
                                <a class="btn btn-link wow fadeInUp " data-wow-delay="0.3s" data-wow-duration="1.3s"
                                    href="#sk">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <section id="sk">
        <footer class="footer_widgets">
            <div class="container">
                <div class="shipping_area ms-4 me-4">
                    <div class="row">
                        <div class="col ">
                            <div class="single_shipping d-flex align-items-center">
                                <div class="shipping_icon">
                                    <img src="assets_frontend/img/others/shipping1.png" alt="">
                                </div>
                                <div class="shipping_text">
                                    <h3>Transfer Evidence</h3>
                                    <p>Order dibuat ketika sudah <br>
                                        mengumpulkan bukti
                                        <br> pembayaran 1x24 jam
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single_shipping d-flex align-items-center">
                                <div class="shipping_icon">
                                    <img src="assets_frontend/img/others/shipping2.png" alt="">
                                </div>
                                <div class="shipping_text">
                                    <h3>Food Coupon</h3>
                                    <p>Mendapakan kupon
                                        <br> untuk mengambil makanan
                                        <br> dari staff vendor
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="single_shipping d-flex align-items-center">
                                <div class="shipping_icon">
                                    <img src="assets_frontend/img/others/shipping3.png" alt="">
                                </div>
                                <div class="shipping_text">
                                    <h3>Reminder</h3>
                                    <p>Makanan yang sudah dibayarkan
                                        <br>tidak dapat ditukar,
                                        <br>dikembalikan dan ganti tanggal
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </footer>
    </section>


    <!-- blog section start -->
    <section id="order-now">
        <div class="blog_section mb-90">
            <div class="container">

                <div class="row blog_inner slick__activation mt-4" data-slick='{
                    "slidesToShow": 3,
                    "slidesToScroll": 1,
                    "arrows": false,
                    "dots": false,
                    "autoplay": false,
                    "speed": 300,
                    "infinite": true ,  
                    "responsive":[  
                      {"breakpoint":992, "settings": { "slidesToShow": 2 } },  
                      {"breakpoint":576, "settings": { "slidesToShow": 2 } }  
                     ]                                                     
                }'>
                    <div class="col-lg-4 ">
                        <div class="single_blog wow fadeInUp" style="text-align: center;" data-wow-delay="0.1s"
                            data-wow-duration="1.1s">
                            <div class="blog_thumb">
                                <a href="blog-detail-left-sidebar"><img src="assets_frontend/img/blog/blog1.png"
                                        alt=""></a>
                            </div>
                            <div class="blog_content">
                                <div class="blog_arrow_btn">
                                    <a href="blog-detail-left-sidebar"><i class="ion-arrow-right-c"></i></a>
                                </div>

                                <h3><a href="blog-detail-left-sidebar">View Menu</a></h3>
                                <div class="blog__meta ">
                                    <div class="blog__meta__text">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4  ">
                        <div class="single_blog wow fadeInUp" style="text-align: center;" data-wow-delay="0.1s"
                            data-wow-duration="1.1s">
                            <div class="blog_thumb">
                                <a @if (auth()->user()) href="cart" @else data-bs-toggle="modal"
                                data-bs-target="#createCustomer" @endif><img
                                        src="assets_frontend/img/blog/blog1.png" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <div class="blog_arrow_btn">
                                    <a @if (auth()->user()) href="cart" @else data-bs-toggle="modal"
                                    data-bs-target="#createCustomer" @endif><i class="ion-arrow-right-c"></i></a>
                                </div>

                                <h3>
                                    <a @if (auth()->user()) href="cart" @else data-bs-toggle="modal"
                                    data-bs-target="#createCustomer" @endif>Order Now !</a>
                                </h3>
                                <div class="blog__meta ">

                                    <div class="blog__meta__text">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

    {{-- start modal login--}}

    <!-- Modal -->
    <div class="modal fade" id="createCustomer" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <form action="/mylogin" method="POST" class="myaccount-form">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel"> Login
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="login-form">
                            {{-- content login --}}

                            <div class="row d-flex justify-content-center">

                                <div class="col-lg-12">
                                    <label>Email Address*</label>
                                    <input class="@error('email') is-invalid @enderror" type="email"
                                        placeholder="Email Address" name="email" id="email" value="{{ old('email') }}"
                                        required>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="newsletter_subscribe mb-0">
                                    <form id="mc-form">

                                    </form>

                                    <div class="col-lg-12">
                                        <label>Password*</label>
                                        <div class="newsletter_subscribe">

                                            <div class="row">
                                                <div class="col-10">
                                                    <input class="mt-0 mb-0 @error('password') is-invalid @enderror"
                                                        type="password" placeholder="Password" name="password"
                                                        id="loginpasswordInput" required>
                                                    @error('password')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <div class="col-2">
                                                    <form id="mc-form">
                                                        <button type="button" onclick="togglePasswordVisibility3()"><i
                                                                class="pe-7s-look"></i></button>
                                                    </form>

                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col"></div>
                                        <div class="col-sm-4 d-flex align-items-center">
                                            <input type="checkbox" id="remember_me"
                                                style="transform: scale(0.8); width: 16px; height: 16px; margin-right: 5px;">
                                            <label for="remember_me" style="margin: 0;">Remember me</label>
                                        </div>
                                        <div class="col"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 pt-1 mt-md-0">
                                            <div class="forgotton-password_info">
                                                <a data-bs-target="#forgotpass" data-bs-toggle="modal"> Forgot pasword?</a>
                                            </div>
                                        </div>
                                        <div class="col"></div>

                                        <div class="col-sm-5 pt-1 mt-md-0">
                                            <div class="forgotton-password_info">
                                                <a data-bs-target="#register" data-bs-toggle="modal"> Don't have
                                                    account?</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn custom-btn md-size" type="submit">Login</button>
                        </div>
                    </div>
        </form>
    </div>

    {{-- end content --}}
    </div>
    </div>
    </div>
    </div>
     <!-- Modal forgot -->

                                                    <form action="/forgotPass" method="POST">
                                                        @csrf
                                                        <div class="modal fade" id="forgotpass" data-bs-backdrop="static"
                                                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="staticBackdropLabel"> Forget Password
                                                                                </h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="login-form">
                                                                                    <div class="row d-flex justify-content-center">
                                                                                        <div class="col-lg-12">
                                                                                            <label>Email Address*</label>
                                                                                            <input class="@error('email') is-invalid @enderror"
                                                                                                type="email" placeholder="Email Address"
                                                                                                name="email" id="email"
                                                                                                value="{{ old('email') }}" required>
                                                                                                    @error('email')
                                                                                                        <div class="invalid-feedback">
                                                                                                            {{ $message }}
                                                                                                        </div>
                                                                                                    @enderror
                                                                                        </div>

                                                                                        <div class="newsletter_subscribe mb-0">
                                                                                        </div>
                                                                                        <div class="row">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn custom-btn md-size"
                                                                                    data-bs-dismiss="modal" data-bs-target="#login"
                                                                                    data-bs-toggle="modal">Back to Login</button>
                                                                                <button class="btn custom-btn md-size"
                                                                                    type="submit">Send</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                    </form>
                                                    {{-- end modal forgot --}}
    {{-- end modal login --}}
    <form action="/myregister" method="POST">
        @csrf
        <div class="modal fade" id="register" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel"> Register
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="login-form">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <label>First Name</label>
                                    <input class="@error('name') is-invalid @enderror" name="name" id="name" type="text"
                                        placeholder="First Name" required>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-12">
                                    <label>Last Name</label>
                                    <input type="text" placeholder="Last Name " name="last_name_customer"
                                        id="last_name_customer" required>
                                </div>
                                <div class="col-12">
                                    <label>Major</label>
                                    <select name="fakultas_customer" id="fakultas_customer" required>
                                        <option selected value="1">
                                            Select Major
                                        </option>
                                        <option value="Management">
                                            Management
                                        </option>
                                        <option value="Accounting">
                                            Accounting
                                        </option>
                                        <option value="Music">
                                            Music
                                        </option>
                                        <option value="Technology-Laboratorium-Medic">
                                            Technology Laboratorium Medic
                                        </option>
                                        <option value="Applied-Mathematics">
                                            Applied Mathematics
                                        </option>
                                        <option value="Electrical-Engineering">
                                            Electrical Engineering
                                        </option>
                                        <option value="Industrial-Engineering">
                                            Industrial Engineering
                                        </option>
                                        <option value="Food-Technology">
                                            Food Technology
                                        </option>
                                        <option value="Civil-Engineering">
                                            Civil Engineering
                                        </option>
                                        <option value="Law">
                                            Law
                                        </option>
                                        <option value="Pharmacy">
                                            Pharmacy
                                        </option>
                                        <option value="Medical-Laboratory-Technology">
                                            Medical Laboratory Technology
                                        </option>
                                        <option value="International-Relations">
                                            International Relations
                                        </option>
                                        <option value="Biotechnology">
                                            Biotechnology
                                        </option>
                                        <option value="Applied-Communication-Sciences">
                                            Applied Communication Sciences
                                        </option>
                                        <option value="Medicine">
                                            Medicine
                                        </option>
                                        <option value="Nursing">
                                            Nursing
                                        </option>
                                        <option value="Psychology">
                                            Psychology
                                        </option>
                                        <option value="Information-System">
                                            Information System
                                        </option>
                                        <option value="Informatics">
                                            Informatics
                                        </option>
                                        <option value="Architecture">
                                            Architecture
                                        </option>
                                        <option value="Interior-Design">
                                            Interior Design
                                        </option>
                                        <option value="Visual-Communication-Design">
                                            Visual Communication Design
                                        </option>
                                        <option value="Product-Design">
                                            Product Design
                                        </option>
                                        <option value="Hospitality-Management">
                                            Hospitality Management
                                        </option>
                                        <option value="Tourism-Management">
                                            Tourism Management
                                        </option>
                                        <option value="Teachers-College">
                                            Teachers College
                                        </option>
                                    </select>
                                </div>
                                <div class="col-12 mt-4">
                                    <label>Dorm Location</label>
                                    <select name="lokasi_dorm_customer" id="lokasi_dorm_customer" required>
                                        <option selected value="1">Select Dorm
                                            Location</option>
                                        <option value="MYC-Dorm">MYC Dormitory</option>
                                        <option value="Paddock-Dorm">Paddock Dorm
                                        </option>
                                        <option value="G-Building-Dorm">G Building Dorm
                                        </option>
                                        <option value="GBFK">GBFK
                                            Dorm</option>
                                        <option value="Grandstand">
                                            Grandstand
                                            Dorm</option>
                                    </select>

                                </div>

                                <div class="col-md-6 mt-4">
                                    <label>Room Number</label>
                                    <input type="text" placeholder="Room Number" name="no_kamar" id="no_kamar"
                                        class="@error('no_kamar') is-invalid @enderror">
                                    @error('no_kamar')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mt-4">
                                    <label>Phone Number</label>
                                    <input type="text" placeholder="Phone Number" name="no_hp_customer"
                                        id="no_hp_customer" class="@error('no_hp_customer') is-invalid @enderror">
                                    @error('no_hp_customer')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label>Email</label>
                                    <input type="email" placeholder="Email" name="email" id="email"
                                        class="@error('email') is-invalid @enderror" required>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="newsletter_subscribe mb-0">
                                    <form id="mc-form">

                                    </form>

                                </div>

                                <div class="col-lg-12">
                                    <label>Password</label>
                                    <div class="newsletter_subscribe">
                                        <div class="row">
                                            <div class="col-10">
                                                <input class="mt-0 mb-0" type="password" placeholder="Password"
                                                    id="passwordInput" name="password">
                                            </div>
                                            <div class="col-2">
                                                <form id="mc-form">
                                                    <button type="button" onclick="togglePasswordVisibility()"><i
                                                            class="pe-7s-look"></i></button>
                                                </form>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label>Confirm Password</label>
                                    <div class="newsletter_subscribe">
                                        <div class="row">
                                            <div class="col-10">
                                                <input class="mt-0 mb-0" type="password" placeholder="Confirm Password"
                                                    id="confirmpasswordInput" name="confirmpassword">
                                            </div>
                                            <div class="col-2">
                                                <form id="mc-form">
                                                    <button type="button" onclick="togglePasswordVisibility2()"><i
                                                            class="pe-7s-look"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn custom-btn md-size" data-bs-dismiss="modal"
                            data-bs-target="#createCustomer" data-bs-toggle="modal">Back to Login</button>
                        <button type="submit" class="btn custom-btn md-size">Register</button>
                    </div>

                </div>
            </div>
        </div>
    </form>



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
        function togglePasswordVisibility3() {
            const loginpasswordInput = document.getElementById("loginpasswordInput");

            // Mengubah tipe input antara password dan text
            if (loginpasswordInput.type === "password") {
                loginpasswordInput.type = "text";

            } else {
                loginpasswordInput.type = "password";

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
    <script src="js/main.js"></script>
    @endsection
</x-layout_frontend>
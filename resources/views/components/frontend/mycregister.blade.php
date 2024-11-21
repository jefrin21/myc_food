<x-layout_frontend>
    @section('head')

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Bucker – Login | Register</title>
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

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Launch static backdrop modal
    </button>




    <!-- breadcrumbs area end -->
    <div class="login-register-area mt-5">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 pt-5 pt-lg-0">
                    <form action="#">
                        <div class="login-form">
                            <h4 class="login-title">Register</h4>
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <label>First Name</label>
                                    <input type="text" placeholder="First Name" required>
                                </div>
                                <div class="col-md-6 col-12">
                                    <label>Last Name</label>
                                    <input type="text" placeholder="Last Name">
                                </div>
                                <div class="col-md-6">
                                    <label>Major</label>
                                    <select name="fakultas_customer" id="fakultas_customer" required>
                                        <option disabled value="1">
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
                    </form>
                </div>


                <div class="col-md-6">
                    <label>Dorm Location</label>
                    <form class="select_option" action="#">
                        <select name="orderby" id="short">
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
                        </select>
                    </form>
                </div>
                <div class="col-md-6">
                    <label>Room Number</label>
                    <input type="nomorkamar" placeholder="No Kamar">
                </div>
                <div class="col-md-6">
                    <label>Phone Number</label>
                    <input type="nomorhp" placeholder="No HP">
                </div>
                <div class="col-md-12">
                    <label>Email</label>
                    <input type="email" placeholder="Email">
                </div>
                <div class="col-lg-12">
                    <label>Password*</label>
                    <div class="newsletter_subscribe">
                        <form id="mc-form">
                            <input type="password" placeholder="Password" id="passwordInput">
                            <button type="button" onclick="togglePasswordVisibility()"><i
                                    class="pe-7s-look"></i></button>
                        </form>
                    </div>


                </div>
                <div class="col-lg-12">
                    <label>Confirm Password*</label>
                    <div class="newsletter_subscribe">
                        <form id="mc-form">
                            <input type="password" placeholder="Password" id="confirmpasswordInput">
                            <button type="button" onclick="togglePasswordVisibility2()"><i
                                    class="pe-7s-look"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn custom-btn md-size">Register</button>
                </div>
            </div>
        </div>
        </form>

    </div>

    </div>
    </div>
    </div>

    <!--footer area end-->
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
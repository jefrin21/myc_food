<x-layout_frontend>
@section('head')
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bucker – Blog Left Sidebar</title>
    <meta name="description"
        content="240+ Best Bootstrap Templates are available on this website. Find your template for your project compatible with the most popular HTML library in the world." />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="canonical" href="Replace_with_your_PAGE_URL" />

    <!-- Open Graph (OG) meta tags are snippets of code that control how URLs are displayed when shared on social media  -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Bucker – Blog Left Sidebar" />
    <meta property="og:url" content="PAGE_URL" />
    <meta property="og:site_name" content="Bucker – Blog Left Sidebar" />
    <!-- For the og:image content, replace the # with a link of an image -->
    <meta property="og:image" content="#" />
    <meta property="og:description" content="Bucker – Blog Left Sidebar" />
    <base href="/">
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
    <div class="login-form">
        <form action="/updatePass" method="post">
            @csrf
                                                                                    <div class="row d-flex justify-content-center">
                                                                                        <div class="col-lg-12">
                                                                                            <input type="hidden" name="token" id="token" value="{{ $token }}">
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
                                                                                            <form id="mc-form">

                                                                                            </form>

                                                                                        </div>
                                                                                        <div class="col-lg-12">

                                                                                            <label>Password*</label>

                                                                                            <div class="newsletter_subscribe">

                                                                                                <div class="row">
                                                                                                    <div class="col-10">
                                                                                                        <input
                                                                                                            class="mt-0 mb-0 @error('password') is-invalid @enderror"
                                                                                                            type="password"
                                                                                                            placeholder="Password"
                                                                                                            name="password"
                                                                                                            id="loginpasswordInput" required>
                                                                                                        @error('password')
                                                                                                            <div class="invalid-feedback">
                                                                                                                {{ $message }}
                                                                                                            </div>
                                                                                                        @enderror
                                                                                                    </div>

                                                                                                    <div class="col-2">
                                                                                                        <form id="mc-form">
                                                                                                            <button type="button"
                                                                                                                onclick="togglePasswordVisibility3()"><i
                                                                                                                    class="pe-7s-look"></i></button>
                                                                                                        </form>

                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>

                                                                                             <label>Confirmasi Password*</label>

                                                                                            <div class="newsletter_subscribe">

                                                                                                <div class="row">
                                                                                                    <div class="col-10">
                                                                                                        <input
                                                                                                            class="mt-0 mb-0 @error('password') is-invalid @enderror"
                                                                                                            type="password"
                                                                                                            placeholder="Password"
                                                                                                            name="password_confirmation"
                                                                                                            id="loginconpasswordInput" required>
                                                                                                        @error('password')
                                                                                                            <div class="invalid-feedback">
                                                                                                                {{ $message }}
                                                                                                            </div>
                                                                                                        @enderror
                                                                                                    </div>

                                                                                                    <div class="col-2">
                                                                                                        <form id="mc-form">
                                                                                                            <button type="button"
                                                                                                                onclick="togglePasswordVisibility4()"><i
                                                                                                                    class="pe-7s-look"></i></button>
                                                                                                        </form>

                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="modal-footer">
                                                                                                <button class="btn custom-btn md-size"
                                                                                                    type="submit">Login</button>
                                                                                            </div>
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
         function togglePasswordVisibility3() {
            const loginpasswordInput = document.getElementById("loginpasswordInput");

            // Mengubah tipe input antara password dan text
            if (loginpasswordInput.type === "password") {
                loginpasswordInput.type = "text";

            } else {
                loginpasswordInput.type = "password";

            }
        }

        function togglePasswordVisibility4() {
            const loginpasswordInput = document.getElementById("loginconpasswordInput");

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
    @endsection
    </x-layout_frontend>  
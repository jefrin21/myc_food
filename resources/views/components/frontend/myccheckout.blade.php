<x-layout_frontend>
@section('head')
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bucker – Checkout</title>
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
                        <h1>Checkout</h1>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li> // Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->
    <div class="checkout-area">
        <div class="container">
            
            <div class="row">
                <!-- <div class="col-lg-6 col-12">
                    <form action="#">
                        <div class="checkbox-form">
                            <h3>Billing Details</h3>
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>First Name <span class="required">*</span></label>
                                        <input placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Last Name <span class="required">*</span></label>
                                        <input placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Faculty</label>
                                        <input placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Dorm Location <span class="required">*</span></label>
                                        <input placeholder="Street address" type="text">
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Room Number <span class="required">*</span></label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Phone Number <span class="required">*</span></label>
                                        <input placeholder="" type="text">
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Email Address <span class="required">*</span></label>
                                        <input placeholder="" type="email">
                                    </div>
                                </div>
                               
                               
                            </div>
                            
                        </div>
                    </form>
                </div>
            -->
                <div class="col">
                    <div class="your-order">
                        <h3>Your order</h3>
                        <div class="your-order-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="cart-product-name">Pick-Up Date</th>
                                        <th class="cart-product-name">Product</th>
                                        <th class="cart-product-total">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cart as $carts )
                                    <tr>
                                        <td class="cart-product-name">{{ \Carbon\Carbon::parse($carts['tanggal'])->format('d F Y') }}</td>
                                        <td class="cart-product-name">{{ $carts['jenispaket'] }}</td>
                                        <td class="cart-product-total">{{ $carts['harga']}}</td>
                                    </tr>
                                    @endforeach    
                                </tbody>
                                <tfoot>
                                    <tr class="order-total">
                                        <th>Order Total</th>
                                        <td></td>
                                        <td><strong><span class="amount">Rp.{{ number_format($harga, 0, ',', '.') }}</span></strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="payment-method">
                            <div class="payment-accordion">
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="#payment-1">
                                            <h5 class="panel-title">
                                                <a href="#" class="" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne" aria-expanded="true">
                                                    Upload Bukti Pembayaran<span class="required">*</span>
                                                </a>
                                            </h5>
                                            <div class="mb-3">   
                                                <form action="/confirmorder" method="POST" enctype="multipart/form-data">       
                                                @csrf     
                                                <input class="form-control @error('imageUpload') is-invalid @enderror" type="file" id="formFile" name="imageUpload" required>
                                                @error('imageUpload')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                              </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="row">
                                <div class="col">
                                    <a class="btn btn-link wow fadeInUp " data-wow-delay="0.3s" data-wow-duration="1.3s"
                                href="cart">Back</a>     
                                </div>
                                <div class="col d-flex justify-content-end">
                                    <a  data-wow-delay="0.3s" data-wow-duration="1.3s"
                                     ><button type="submit" class="btn btn-link wow fadeInUp ">Confirm Order</button> </a>   
                                </div>
                            </div>
                            </form>   
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

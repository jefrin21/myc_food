<x-layout_frontend>
@section('head')
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MYC Food | Invoice</title>
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

    <!-- blog page section start -->
    <div class="blog_page_section mb-110">
        <div class="container">
            
            <div class="row">

                <div class=" col blog_page_inner mt-5">
                    <div class="row">
                        <div class="col">
                            <div class="single_blog wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                                <div class="blog_content">
                                    <div class="row ms-5">
                                        <div class="col">
                                            <img src="assets_frontend/img/logo/logomyc.png" alt="" style="width:100px;">
                                        </div>
                                        <div class="col d-flex justify-content-end me-3">
                                            
                                            <h4>Kupon No. {{ $kupon_pesanan }}</h4>
                                        </div>
                                    </div>
                                    <div class="row mt-5 ms-5">
                                        <div class="col-6">
                                            <h3 class="mb-3">BILLED TO :</h3>
                                            
                                            <h6>{{ $customer_name }}
                                                <br> {{ \Carbon\Carbon::parse($tanggal_pembelian)->format('d F Y') }}
                                               
                                            </h6>
                                        </div>
                                    </div>
                                    
                                    <div class="col ms-5 me-5 mt-5">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="cart-product-name">Tanggal Pengambilan</th>
                                                            <th class="cart-product-name">Kategori</th>
                                                            <th class="cart-product-name">Jenis Paket</th>
                                                            <th class="cart-product-name">Harga</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach ( $pesanan as $detail )
                                                            
                                                            <tr>
                                                                <td class="cart-product-name">{{ $detail['tanggal_pengambilan'] }}</td>
                                                                <td class="cart-product-name"> {{ $detail['jenis_paket'] }}</td>
                                                                <td class="cart-product-name">{{ $detail['kategori'] }} </td>
                                                                <td class="cart-product-total">{{ 'Rp ' . number_format($detail['harga'], 0, ',', '.') }}</td>

                                                            </tr>
                                                            
                                                            @endforeach
                                                       
                                                        
                                                        
                                                    </tbody>
                                                    <tfoot>
                                                        
                                                        <tr class="order-total">
                                                            <th>Order Total</th>
                                                            <td></td>
                                                            <td></td>
                                                            
                                                            <td>{{ 'Rp ' . number_format($harga_total, 0, ',', '.') }}</td>

                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <div class="row mt-5">
                                                
                                                <div class="col-6">
                                                    <h5 class="mb-3 ms-5">Payment Status :</h5>
                    
                                                    <h6 class="ms-5 "> Paid
                                                    </h6>
                                                </div>
                                                <div class="col-6">
                                                    <h1 class="me-5 d-flex justify-content-end">Thank You!</h1>
                                                </div>
                                            </div>
                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>

            </div>
        </div>

    </div>
    </div>
    </div>
    <!--footer area end-->
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
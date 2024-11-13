<x-layout_frontend>
@section('head')
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bucker – Blog Contact Us </title>
    <meta name="description"
        content="240+ Best Bootstrap Templates are available on this website. Find your template for your project compatible with the most popular HTML library in the world." />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="canonical" href="Replace_with_your_PAGE_URL" />

    <!-- Open Graph (OG) meta tags are snippets of code that control how URLs are displayed when shared on social media  -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Bucker – Contact Us" />
    <meta property="og:url" content="PAGE_URL" />
    <meta property="og:site_name" content="Bucker – Contact Us" />
    <!-- For the og:image content, replace the # with a link of an image -->
    <meta property="og:image" content="#" />
    <meta property="og:description" content="Bucker – Contact Us" />

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</head>

@endsection

@section('app-content')

    <!-- breadcrumbs area start -->
    <div class="breadcrumbs_aree breadcrumbs_bg mb-5" data-bgimg="assets_frontend/img/others/breadcrumbs-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text">
                        <h1>Cart</h1>
                        <ul>
                            <li><a href="mycindex.html">Home </a></li>
                            <li> // Shopping Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->

    <!-- contact section start -->
    <div class="contact_page_section ">
        <div class="container">
            <form action="/addToCart" method="POST">
                        @csrf
                        @if (session()->has('tanggalpemesanan'))
                                        <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                                            <h6 class="text-danger"> {{ session('tanggalpemesanan') }}</h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endif
                        @if (session()->has('success'))
                                        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                                            <h6 class="text-success"> {{ session('success') }}</h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endif
                        @if (session()->has('gagal'))
                                        <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                                            <h6 class="text-warning"> {{ session('gagal') }}</h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endif
                        <div class="row">
                        <div class="contact_info_content d-flex justify-content-center" >
                            
                            <h2 class="pe-4">Pilih tanggal</h2>
                            {{-- <i class="bi bi-calendar-month fs-2" id="tanggalpemesanan" name="tanggalpemesanan"></i> --}}
                            <div class="contact_search" >
                                    <input id="tanggalpemesanan" name="tanggalpemesanan" type="date" required>
                                      
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-5 col-md-6 mb-4">
                            <div class="contact_form" data-bgimg="assets_frontend/img/others/contact-form-bg-shape.png">
                                <h2 >Lunch</h2>
                                <div class="country-select clearfix">
                                    <select class="myniceselect nice-select wide" name="jenispaket1" id="jenispaket1" >
                                        <option value="" disabled selected hidden>Pilih paket</option> <!-- Placeholder option -->
                                        <option value="paket A">Paket A</option>
                                        <option value="paket B">Paket B</option>
                                        <option value="paket C">Paket C</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="contact_form" data-bgimg="assets_frontend/img/others/contact-form-bg-shape.png">
                                <h2>Dinner</h2>
                                <div class="country-select clearfix">
                                    <select class="myniceselect nice-select wide" name="jenispaket2" id="jenispaket2" >
                                        <option value="" disabled selected hidden>Pilih paket</option> <!-- Placeholder option -->
                                        <option value="paket A">Paket A</option>
                                        <option value="paket B">Paket B</option>
                                        <option value="paket C">Paket C</option>
                                    </select>
                                </div>
                                
                            </div>
                        </div>
                        <div class="form_input_btn d-flex justify-content-center mt-3">
                            <button type="submit" class="btn btn-link">Add to cart</button>
                        </div>
                    </div>
                    </form>
                    <div class="row mt-5">
                        <div class="cart-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                            <div class="table-content">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="cart-product-name">Product</th>
                                                            <th class="product-price">Unit Price</th>
                                                            {{-- <th class="product-quantity">Quantity</th> --}}
                                                            <th class="product-quantity">package type</th>
                                                            <th class="product-subtotal">Total</th>
                                                            <th class="product-subtotal">Tanggal Pengambilan</th>
                                                            <th class="product_remove">remove</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($cart as $carts )
                                                        <tr>
                                                            <td class="product-name">{{ $carts['jenispaket'] }}
                                                            </td>
                                                            <td class="product-price"><span class="amount">Rp.{{ number_format($carts['harga'], 0, ',', '.') }}</span></td>
                                                            {{-- <td class="product_pro_button quantity">
                                                                <div class="pro-qty border">
                                                                    <input type="text" value="1">
                                                                </div>
                                                            </td> --}}
                                                            <td class="product-subtotal"><span class="amount">{{ $carts['paket'] }}</span></td>
                                                            <td class="product-subtotal"><span class="amount">{{ $carts['jenispaket'] }}</span></td>
                                                            <td class="product-subtotal"><span class="amount">{{ \Carbon\Carbon::parse($carts['tanggal'])->format('d F Y') }}</span></td>
                                                            <td class="product_remove">
                                                                <form action="/hapuscart/{{ $carts['id'] }}" method="POST" id="deletepesanan" >
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="button" title="Remove" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal">
                                                                        <i class="pe-7s-close"></i>
                                                                    </button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                    </div>
                                    {{-- modal delete  --}}
                                    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="confirmDeleteModalLabel">Konfirmasi Penghapusan</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah Anda yakin ingin menghapus pesanan ini?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-danger" form="deletepesanan">Hapus</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- modal delete  --}}
                                    {{-- modal konfirmasi cekout  --}}
                                    <div class="modal fade" id="confirmcheckout" tabindex="-1" aria-labelledby="confirmcheckoutpesanan" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="confirmcheckoutpesanan">Konfirmasi Pesanan</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah Anda yakin Pesanan Sudah Sesuai?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-success" form="checkoutform">Lanjut</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- modal konfirmasi cekout  --}}
                                    <div class="form_input_btn d-flex justify-content-end mt-3">
                                        <form action="/checkout" method="POST" id="checkoutform">
                                        @csrf
                                        <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#confirmcheckout">Checkout</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- contact section end -->


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
    <script src="assets_frontend/js/ajax-mail.js"></script>

    <!-- Main JS -->
    <script src="assets_frontend/js/main.js"></script>
    <script>
        flatpickr("#tanggalpemesanan", {
        dateFormat: "Y-m-d",
        minDate: new Date().fp_incr(3), 
        disable: [
            function(date) {
                return (date.getDay() === 0 || date.getDay() === 6);
            }
        ],
        locale: {
            firstDayOfWeek: 1 
        }
    }); 
    </script>
    @endsection
    </x-layout_frontend>  
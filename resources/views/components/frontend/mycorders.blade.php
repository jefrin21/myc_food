<x-layout_frontend>
@section('head')
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bucker – Wishlist</title>
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
     <!-- Favicon -->
     <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon_io/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon_io/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon_io/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon_io/site.webmanifest') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">


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
                        <h1>Orders</h1>
                        <ul>
                            <li><a href="mycindex.html">Home</a></li>
                            <li> // My Orders</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->
    <div class="wishlist-area">
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <h3>Keep Track Your Orders!</h3>
                </div>
            </div>
           <div class="row">
                <div class="col-12">
                    <div class="form-group col-3 mx-auto mb-3">
                        <label for="pick_up_date ">Purchase Date</label>
                        <input type="text" id="pick_up_date" class="datepicker form-control" placeholder="Select a date">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form action="#" method="GET">
                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="product_remove">Purchase Date</th>
                                        <th class="product-price">Pick Up Date</th>
                                        <th class="cart-product-name">Food Package</th>
                                        <th class="product-price">Total Price</th>
                                        <th class="product-stock-status">Status</th>
                                    </tr>
                                </thead>
                                <tbody id="orderTable">
                                    @foreach($data as $items)
                                    <tr data-tanggal="{{ \Carbon\Carbon::parse($items->tanggal_beli)->format('Y-m-d') }}">
                                        <td>{{ \Carbon\Carbon::parse($items->tanggal_beli)->format('d F Y') }}</td>
                                        <td>{{ \Carbon\Carbon::parse($items->tanggal)->format('d F Y') }}</td>
                                        <td>{{ $items->nama_paket }}</td>
                                        <td>Rp. {{ number_format($items->harga_paket, 0, ',', '.') }}</td>
                                        <td class="{{ $items->status === 'Dikirim' ? 'text-bg-success' : ($items->status === 'diproses' ? 'text-bg-warning' : 'text-bg-success') }}">{{ $items->status }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
        document.addEventListener('DOMContentLoaded', function () {
            flatpickr('#pick_up_date', {
                dateFormat: 'Y-m-d',
                defaultDate: 'today', 
                onChange: function (selectedDates) {
                    let selectedDate = selectedDates[0] ? selectedDates[0].toISOString().split('T')[0] : '';
                    filterOrdersByDate(selectedDate);
                }
            });

            function filterOrdersByDate(selectedDate) {
                let rows = document.querySelectorAll('#orderTable tr');

                rows.forEach(row => {
                    let orderDate = row.getAttribute('data-tanggal');
                    if (selectedDate === '' || selectedDate === orderDate) {
                        row.style.display = '';  
                    } else {
                        row.style.display = 'none'; 
                    }
                });
            }

            filterOrdersByDate(new Date().toISOString().split('T')[0]);
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
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
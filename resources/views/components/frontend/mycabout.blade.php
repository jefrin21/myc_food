<x-layout_frontend>
@section('head')
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>MYC Food - About</title>
        <meta name="description" 
            content="Informasi mengenai layanan dan ketentuan pemesanan MYC." />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <link rel="canonical" href="Replace_with_your_PAGE_URL" />

        <!-- OG meta tags -->
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Bucker – About Us" />
        <meta property="og:url" content="PAGE_URL" />
        <meta property="og:site_name" content="Bucker – About Us" />
        <meta property="og:image" content="#" />
        <meta property="og:description" content="Ketahui lebih lanjut tentang MYC." />

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
    <!-- Breadcrumb Area -->
    <div class="breadcrumbs_aree breadcrumbs_bg mb-5" data-bgimg="assets_frontend/img/others/breadcrumbs-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text">
                        <h1>About Us</h1>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li> // About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <div class="about_us_section pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 d-flex align-items-start">
                
                <!-- Konten Kiri: Gambar -->
                <div class="col-lg-4 text-start">
                    <img src="assets_frontend/img/icon/logo1.png" alt="Logo" class="img-fluid" width="1000">
                </div>
                
                <!-- Konten Kanan: Judul dan Informasi Ketentuan Pemesanan -->
                <div class="col-lg-7">
                    <h2 class="text-left mb-5">Ketentuan Pemesanan</h2>
                    <div class="about_info_content">
                        <ul class="list-unstyled">
                            <li>1. Pemesanan dapat dilakukan untuk harian, mingguan, 2 mingguan atau bulanan. Pemesanan maksimal H-2 di hari & jam kerja (Senin-Jumat jam 07.00-16.00).</li>
                            <li>2. Pembayaran tagihan secara transfer ke rekening yang tertera di email tagihan.</li>
                            <li>3. Pembayaran dan info bukti transfer ke email tagihan wajib dilakukan 1x24 jam setelah email tagihan diterima.</li>
                            <li>4. MYC memberikan kupon makan yang dapat ditukarkan ke staff vendor.</li>
                            <li>5. Menu yang sudah dipilih dan uang yang sudah dibayarkan tidak dapat ditukar, dikembalikan, atau diganti tanggal.</li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>



<div class="row d-flex justify-content-center mt-5">
    <div class="col-12 text-center mb-4">
        <h2 class="d-flex align-items-center justify-content-center">
            <img src="assets_frontend/img/logo/waktu.png" alt="Jam Pengambilan Makanan Icon" width="200" class="me-3"> 
            Jam Pengambilan Makanan
        </h2>
    </div>

        <!-- Jam Pemesanan Sections -->
        <div class="row d-flex justify-content-center">
            <!-- Breakfast Section -->
            <div class="col-lg-3 col-md-4 mb-4">
                    <div class="contact_form time-section text-center p-4" onclick="toggleInfo('breakfast-info')">
                        <div class="icon-wrapper">
                            <img src="assets_frontend/img/logo/breakfast.png" alt="Breakfast Icon" width="100" class="mb-2">
                        </div>
                        <h2 class="section-title"></h2>
                        <div id="breakfast-info" class="time-info mt-3" style="display: none;">
                            <p><strong>06.00 - 06.30</strong></p>
                            <p>Jangan lewatkan sarapan pagi! Ambil makanan sehat Anda antara pukul 06.00 hingga 06.30 untuk memulai hari dengan energi yang cukup.</p>
                        </div>
                    </div>
                </div>

                <!-- Lunch Section -->
                <div class="col-lg-3 col-md-4 mb-4">
                    <div class="contact_form time-section text-center p-4" onclick="toggleInfo('lunch-info')">
                        <div class="icon-wrapper">
                            <img src="assets_frontend/img/logo/lunch.png" alt="Lunch Icon" width="100" class="mb-2">
                        </div>
                        <h2 class="section-title"></h2>
                        <div id="lunch-info" class="time-info mt-3" style="display: none;">
                            <p><strong>11.30 - 12.00</strong></p>
                            <p>Waktunya makan siang! Pastikan untuk mengambil hidangan Anda dari pukul 11.30 hingga 12.00 agar tetap bertenaga di siang hari.</p>
                        </div>
                    </div>
                </div>

                <!-- Dinner Section -->
                <div class="col-lg-3 col-md-4 mb-4">
                    <div class="contact_form time-section text-center p-4" onclick="toggleInfo('dinner-info')">
                        <div class="icon-wrapper">
                            <img src="assets_frontend/img/logo/dinner.png" alt="Dinner Icon" width="100" class="mb-2">
                        </div>
                        <h2 class="section-title"></h2>
                        <div id="dinner-info" class="time-info mt-3" style="display: none;">
                            <p><strong>18.00 - 18.30</strong></p>
                            <p>Saatnya makan malam! Ambil hidangan Anda antara pukul 18.00 hingga 18.30 untuk menutup hari dengan makanan bergizi.</p>
                        </div>
                    </div>
                </div>
            </div>

<style>
    /* Set the background color to blue */
    .time-section {
        background-color: #d9d9d9; /* Blue background */
        color:#000000; /* White text for contrast */
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.3s ease;
        background-image: url('assets_frontend/img/others/contact-form-bg-shape.png');
        background-blend-mode: overlay;
    }

    /* Title styling */
    .section-title {
        margin: 0;
        font-size: 1.5rem;
    }

    /* Time info styling */
    .time-info {
        display: none;
    }

    /* Show time-info on click */
    .time-section.active .time-info {
        display: block;
    }

    /* Hide title on click */
    .time-section.active .section-title {
        display: none;
    }
</style>

<script>
    function toggleInfo(infoId) {
        // Reset all sections
        document.querySelectorAll('.time-section').forEach(section => {
            section.classList.remove('active');
            section.querySelector('.time-info').style.display = 'none';
            section.querySelector('.section-title').style.display = 'block';
        });

        // Activate the clicked section
        const selectedSection = document.getElementById(infoId).closest('.time-section');
        selectedSection.classList.add('active');
        selectedSection.querySelector('.time-info').style.display = 'block';
        selectedSection.querySelector('.section-title').style.display = 'none';
    }
</script>

            <div class="row mt-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h3 class="text-center mb-4">Contact Person</h3>
                    <p>Hubungi kami melalui WhatsApp di nomor berikut:
                    <a href="https://wa.me/6281223366741" class="btn-whatsapp" target="_blank">
                        <img src="assets_frontend/img/logo/wa-logo.png" alt="WhatsApp Logo" width="35" class="me-2">
                         +62 812-2336-6741</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    @endsection

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
    @endsection
</x-layout_frontend>

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
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            <h5 class="text-success"> {{ session('success') }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <!-- breadcrumbs area end -->
    <div class="account-page-area m-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <ul class="nav myaccount-tab-trigger" id="account-page-tab" role="tablist">
                        @if (auth()->user())
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
                                <form action="/logout" method="POST">
                                    @csrf
                                    <div class="form_input_btn mb-3 ">
                                        <button type="submit" class="btn btn-link">Logout
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-box-arrow-right ms-2" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z" />
                                                <path fill-rule="evenodd"
                                                    d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                                            </svg>
                                        </button>


                                    </div>
                                </form>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link active" id="account-dashboard-tab" data-bs-toggle="tab"
                                    href="#account-dashboard" role="tab" aria-controls="account-dashboard"
                                    aria-selected="true">Account Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="account-orders-tab" data-bs-toggle="tab" href="#account-orders"
                                    role="tab" aria-controls="account-orders" aria-selected="false">History</a>
                            </li>
                        @endif
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
                                                        <input type="text" value="{{ auth()->user()->name }}">
                                                    </div>
                                                    <div class="single-input single-input-half">
                                                        <label>Last Name</label>
                                                        <input type="text" value="{{ auth()->user()->last_name_customer }}">
                                                    </div>
                                                    <div class="single-input">
                                                        <label>Major</label>
                                                        <input type="text" value="{{ auth()->user()->fakultas_customer }}">
                                                    </div>
                                                    <div class="single-input single-input-half">
                                                        <label>Dorm Location</label>
                                                        <input type="text" value="{{ auth()->user()->lokasi_dorm_customer }}">
                                                    </div>
                                                    <div class="single-input single-input-half">
                                                        <label>Room Number</label>
                                                        <input type="text" value="{{ auth()->user()->no_kamar }}">
                                                    </div>
                                                    <div class="single-input single-input-half">
                                                        <label>Phone Number</label>
                                                        <input type="text" value="{{ auth()->user()->no_hp_customer }}">
                                                    </div>
                                                    <div class="single-input single-input-half">
                                                        <label>Email</label>
                                                        <input type="text" value="{{ auth()->user()->email }}">
                                                    </div>

                                                    <div class="single-input single-input-half">
                                                        <button class="btn custom-btn" data-bs-toggle="modal"
                                                            data-bs-target="#edit">
                                                            <span>EDIT INFORMATION</span>
                                                        </button>
                                            </form>

                                            <!-- Modal Edit -->
                                            <form action="/editprofile/{{ auth()->user()->id }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal fade" id="edit" data-bs-backdrop="static" data-bs-keyboard="false"
                                                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="staticBackdropLabel"> Edit Information
                                                                </h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="login-form">
                                                                    <div class="row">
                                                                        <div class="col-md-6 col-12">
                                                                            <label>First Name</label>
                                                                            <input class="@error('name') is-invalid @enderror"
                                                                                name="name" id="name" type="text"
                                                                                value="{{ auth()->user()->name }}" required>
                                                                            @error('name')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}
                                                                                </div>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="col-md-6 col-12">
                                                                            <label>Last Name</label>
                                                                            <input type="text" placeholder="Last Name "
                                                                                name="last_name_customer" id="last_name_customer"
                                                                                value="{{ auth()->user()->last_name_customer }}"
                                                                                required>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <label>Major</label>
                                                                            <select name="fakultas_customer" id="fakultas_customer"
                                                                                required>
                                                                                <option disabled value="1" {{ auth()->user()->fakultas_customer == null ? 'selected' : '' }}>
                                                                                    Select Major
                                                                                </option>
                                                                                <option value="Management" {{ auth()->user()->fakultas_customer == 'Management' ? 'selected' : '' }}>
                                                                                    Management
                                                                                </option>
                                                                                <option value="Accounting" {{ auth()->user()->fakultas_customer == 'Accounting' ? 'selected' : '' }}>
                                                                                    Accounting
                                                                                </option>
                                                                                <option value="Music" {{ auth()->user()->fakultas_customer == 'Music' ? 'selected' : '' }}>
                                                                                    Music
                                                                                </option>
                                                                                <option value="Technology-Laboratorium-Medic" {{ auth()->user()->fakultas_customer == 'Technology-Laboratorium-Medic' ? 'selected' : '' }}>
                                                                                    Technology Laboratorium Medic
                                                                                </option>
                                                                                <option value="Applied-Mathematics" {{ auth()->user()->fakultas_customer == 'Applied-Mathematics' ? 'selected' : '' }}>
                                                                                    Applied Mathematics
                                                                                </option>
                                                                                <option value="Electrical-Engineering" {{ auth()->user()->fakultas_customer == 'Electrical-Engineering' ? 'selected' : '' }}>
                                                                                    Electrical Engineering
                                                                                </option>
                                                                                <option value="Industrial-Engineering" {{ auth()->user()->fakultas_customer == 'Industrial-Engineering' ? 'selected' : '' }}>
                                                                                    Industrial Engineering
                                                                                </option>
                                                                                <option value="Food-Technology" {{ auth()->user()->fakultas_customer == 'Food-Technology' ? 'selected' : '' }}>
                                                                                    Food Technology
                                                                                </option>
                                                                                <option value="Civil-Engineering" {{ auth()->user()->fakultas_customer == 'Civil-Engineering' ? 'selected' : '' }}>
                                                                                    Civil Engineering
                                                                                </option>
                                                                                <option value="Law" {{ auth()->user()->fakultas_customer == 'Law' ? 'selected' : '' }}>
                                                                                    Law
                                                                                </option>
                                                                                <option value="Pharmacy" {{ auth()->user()->fakultas_customer == 'Pharmacy' ? 'selected' : '' }}>
                                                                                    Pharmacy
                                                                                </option>
                                                                                <option value="Medical-Laboratory-Technology" {{ auth()->user()->fakultas_customer == 'Medical-Laboratory-Technology' ? 'selected' : '' }}>
                                                                                    Medical Laboratory Technology
                                                                                </option>
                                                                                <option value="International-Relations" {{ auth()->user()->fakultas_customer == 'International-Relations' ? 'selected' : '' }}>
                                                                                    International Relations
                                                                                </option>
                                                                                <option value="Biotechnology" {{ auth()->user()->fakultas_customer == 'Biotechnology' ? 'selected' : '' }}>
                                                                                    Biotechnology
                                                                                </option>
                                                                                <option value="Applied-Communication-Sciences" {{ auth()->user()->fakultas_customer == 'Applied-Communication-Sciences' ? 'selected' : '' }}>
                                                                                    Applied Communication Sciences
                                                                                </option>
                                                                                <option value="Medicine" {{ auth()->user()->fakultas_customer == 'Medicine' ? 'selected' : '' }}>
                                                                                    Medicine
                                                                                </option>
                                                                                <option value="Nursing" {{ auth()->user()->fakultas_customer == 'Nursing' ? 'selected' : '' }}>
                                                                                    Nursing
                                                                                </option>
                                                                                <option value="Psychology" {{ auth()->user()->fakultas_customer == 'Psychology' ? 'selected' : '' }}>
                                                                                    Psychology
                                                                                </option>
                                                                                <option value="Information-System" {{ auth()->user()->fakultas_customer == 'Information-System' ? 'selected' : '' }}>
                                                                                    Information System
                                                                                </option>
                                                                                <option value="Informatics" {{ auth()->user()->fakultas_customer == 'Informatics' ? 'selected' : '' }}>
                                                                                    Informatics
                                                                                </option>
                                                                                <option value="Architecture" {{ auth()->user()->fakultas_customer == 'Architecture' ? 'selected' : '' }}>
                                                                                    Architecture
                                                                                </option>
                                                                                <option value="Interior-Design" {{ auth()->user()->fakultas_customer == 'Interior-Design' ? 'selected' : '' }}>
                                                                                    Interior Design
                                                                                </option>
                                                                                <option value="Visual-Communication-Design" {{ auth()->user()->fakultas_customer == 'Visual-Communication-Design' ? 'selected' : '' }}>
                                                                                    Visual Communication Design
                                                                                </option>
                                                                                <option value="Product-Design" {{ auth()->user()->fakultas_customer == 'Product-Design' ? 'selected' : '' }}>
                                                                                    Product Design
                                                                                </option>
                                                                                <option value="Hospitality-Management" {{ auth()->user()->fakultas_customer == 'Hospitality-Management' ? 'selected' : '' }}>
                                                                                    Hospitality Management
                                                                                </option>
                                                                                <option value="Tourism-Management" {{ auth()->user()->fakultas_customer == 'Tourism-Management' ? 'selected' : '' }}>
                                                                                    Tourism Management
                                                                                </option>
                                                                                <option value="Teachers-College" {{ auth()->user()->fakultas_customer == 'Teachers-College' ? 'selected' : '' }}>
                                                                                    Teachers College
                                                                                </option>
                                                                            </select>
                                                                        </div>

                                                                        <div class="col-12">
                                                                            <label>Dorm Location</label>
                                                                            <select name="lokasi_dorm_customer"
                                                                                id="lokasi_dorm_customer" required>
                                                                                <option disabled selected value="1" {{ auth()->user()->lokasi_dorm_customer == null ? 'selected' : '' }}>Select Dorm
                                                                                    Location</option>
                                                                                <option value="MYC-Dorm" {{ auth()->user()->lokasi_dorm_customer == 'MYC-Dorm' ? 'selected' : '' }}>MYC Dormitory</option>
                                                                                <option value="Paddock-Dorm" {{ auth()->user()->lokasi_dorm_customer == 'Paddock-Dorm' ? 'selected' : '' }}>Paddock Dorm
                                                                                </option>
                                                                                <option value="G-Building-Dorm" {{ auth()->user()->lokasi_dorm_customer == 'G-Building-Dorm' ? 'selected' : '' }}>G Building Dorm
                                                                                </option>
                                                                                <option value="GBFK" {{ auth()->user()->lokasi_dorm_customer == 'GBFK' ? 'selected' : '' }}>GBFK
                                                                                    Dorm</option>
                                                                                <option value="Grandstand" {{ auth()->user()->lokasi_dorm_customer == 'Grandstand' ? 'selected' : '' }}>Grandstand
                                                                                    Dorm</option>
                                                                            </select>


                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <label>Room Number</label>
                                                                            <input type="text" placeholder="No Kamar"
                                                                                name="no_kamar" id="no_kamar"
                                                                                value="{{ auth()->user()->no_kamar }}"
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
                                                                                value="{{ auth()->user()->no_hp_customer }}"
                                                                                class="@error('no_hp_customer') is-invalid @enderror">
                                                                            @error('no_hp_customer')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}
                                                                                </div>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <label>Email</label>
                                                                            <input type="email" placeholder="Email" name="email"
                                                                                id="email" value="{{ auth()->user()->email }}"
                                                                                class="@error('email') is-invalid @enderror"
                                                                                required>
                                                                            @error('email')
                                                                                <div class="invalid-feedback">
                                                                                    {{ $message }}
                                                                                </div>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="col-lg-12">
                                                                            <label>Password*</label>
                                                                            <div class="newsletter_subscribe">
                                                                                <input type="password" placeholder="Password"
                                                                                    id="passwordInput" name="password">
                                                                                {{-- <form id="mc-form">
                                                                                    <button type="button"
                                                                                        onclick="togglePasswordVisibility()"><i
                                                                                            class="pe-7s-look"></i></button>
                                                                                </form> --}}
                                                                            </div>
                                                                        </div>


                                                                        <div class="col-lg-12">
                                                                            <label>Confirm Password*</label>
                                                                            <div class="newsletter_subscribe">
                                                                                <input type="confirmpassword"
                                                                                    placeholder="Confirm Password"
                                                                                    id="confirmpasswordInput"
                                                                                    name="confirmpassword">
                                                                                {{-- <form id="mc-form">
                                                                                    <button type="button"
                                                                                        onclick="togglePasswordVisibility2()"><i
                                                                                            class="pe-7s-look"></i></button>
                                                                                </form> --}}
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn custom-btn md-size">Update
                                                                    Information</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="account-orders" role="tabpanel" aria-labelledby="account-orders-tab">
                                <div class="myaccount-orders">
                                    <h4 class="small-title">MY ORDERS</h4>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>

                                                    <th>Tanggal Order</th>
                                                    <th>Nama Pesanan</th>
                                                    <th>Total Harga</th>
                                                    <th>INVOICE</th>
                                                </tr>

                                            </thead>

                                            <tbody>
                                                @foreach ($historys as $date => $orders)
                                                    <tr>
                                                        <td>{{ \Carbon\Carbon::parse($date)->format('d F Y H:i:s') }}</td>
                                                        <td>
                                                            @foreach ($orders as $order)
                                                                {{ $order->jenis_paket_pesanan }} - {{ $order->nama_paket_pesanan }}<br>
                                                            @endforeach
                                                        </td>
                                                        <td>
                                                            {{ number_format($orders->first()->total_harga, 0, ',', '.') }}
                                                        </td>
                                                        <td>
                                                            <a href="/invoice/{{ $orders->first()->order_id }}"
                                                                class="btn btn-secondary btn-primary-hover">
                                                                <span>View</span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach



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
                                                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="staticBackdropLabel"> Login
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
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col"></div>
                                                                                            <div class="col-sm-4 d-flex align-items-center">
                                                                                                <input type="checkbox" id="remember_me"
                                                                                                    style="transform: scale(0.8); width: 16px; height: 16px; margin-right: 5px;">
                                                                                                <label for="remember_me"
                                                                                                    style="margin: 0;">Remember me</label>
                                                                                            </div>
                                                                                            <div class="col"></div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-sm-4 pt-1 mt-md-0">
                                                                                                <div class="forgotton-password_info">
                                                                                                    <a href="#"> Forgot pasword?</a>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col"></div>
                                                                                            <div class="col-sm-4 pt-1 mt-md-0">
                                                                                                <div class="forgotton-password_info">
                                                                                                    <a data-bs-target="#register"
                                                                                                        data-bs-toggle="modal"> Don't have
                                                                                                        account?</a>
                                                                                                </div>
                                                                                            </div>

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
                                                        <div class="modal fade" id="register" data-bs-backdrop="static" data-bs-keyboard="false"
                                                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                                                                    <input class="@error('name') is-invalid @enderror"
                                                                                        name="name" id="name" type="text"
                                                                                        placeholder="First Name" required>
                                                                                    @error('name')
                                                                                        <div class="invalid-feedback">
                                                                                            {{ $message }}
                                                                                        </div>
                                                                                    @enderror
                                                                                </div>
                                                                                <div class="col-md-6 col-12">
                                                                                    <label>Last Name</label>
                                                                                    <input type="text" placeholder="Last Name "
                                                                                        name="last_name_customer" id="last_name_customer"
                                                                                        required>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <label>Major</label>
                                                                                    <select name="fakultas_customer" id="fakultas_customer"
                                                                                        required>
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
                                                                                    <select name="lokasi_dorm_customer"
                                                                                        id="lokasi_dorm_customer" required>
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
                                                                                    <input type="text" placeholder="Room Number" name="no_kamar"
                                                                                        id="no_kamar"
                                                                                        class="@error('no_kamar') is-invalid @enderror">
                                                                                    @error('no_kamar')
                                                                                        <div class="invalid-feedback">
                                                                                            {{ $message }}
                                                                                        </div>
                                                                                    @enderror
                                                                                </div>
                                                                                <div class="col-md-6 mt-4">
                                                                                    <label>Phone Number</label>
                                                                                    <input type="text" placeholder="Phone Number"
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
                                                                                    <input type="email" placeholder="Email" name="email"
                                                                                        id="email" class="@error('email') is-invalid @enderror"
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

                                                                                </div>

                                                                                <div class="col-lg-12">
                                                                                    <label>Password</label>
                                                                                    <div class="newsletter_subscribe">
                                                                                        <div class="row">
                                                                                            <div class="col-10">
                                                                                                <input class="mt-0 mb-0" type="password"
                                                                                                    placeholder="Password" id="passwordInput"
                                                                                                    name="setpassword">
                                                                                            </div>
                                                                                            <div class="col-2">
                                                                                                <form id="mc-form">
                                                                                                    <button type="button"
                                                                                                        onclick="togglePasswordVisibility()"><i
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
                                                                                                <input class="mt-0 mb-0" type="password"
                                                                                                    placeholder="Confirm Password"
                                                                                                    id="confirmpasswordInput"
                                                                                                    name="confirmpassword">
                                                                                            </div>
                                                                                            <div class="col-2">
                                                                                                <form id="mc-form">
                                                                                                    <button type="button"
                                                                                                        onclick="togglePasswordVisibility2()"><i
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
                                                                        <button type="button" class="btn custom-btn md-size"
                                                                            data-bs-dismiss="modal" data-bs-target="#login"
                                                                            data-bs-toggle="modal">Back to Login</button>
                                                                        <button type="submit" class="btn custom-btn md-size">Register</button>
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
    @endsection
</x-layout_frontend>
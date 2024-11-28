<x-layout_backend>
    @section('head')
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Zoogler - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets_backend/images/favicon.ico">

        <link href="assets_backend/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets_backend/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets_backend/css/style.css" rel="stylesheet" type="text/css">

    </head>
    @endsection

        @section('app-content')
        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <div class="text-center m-b-15">
                        <a href="index.html" class="logo logo-admin"><img src="assets_backend/images/logo.png" height="24" alt="logo"></a>
                    </div>

                    <div class="p-3">
                        <form class="form-horizontal" action="/addAdmin" method="POST">
                            @csrf
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" required name="name" id="name" placeholder="Username" value="{{ old('name') }}">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control @error('email') is-invalid @enderror" type="email" required name="email" id="email" placeholder="Email" value="{{ old('email') }}">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="password" required name="password" id="password" placeholder="Password">
                                </div>
                            </div>

                            <div class="form-group text-center row m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-danger btn-block waves-effect waves-light" type="submit">Register</button>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
        @endsection


        @section('js')
        <!-- jQuery  -->
        <script src="assets_backend/js/jquery.min.js"></script>
        <script src="assets_backend/js/popper.min.js"></script>
        <script src="assets_backend/js/bootstrap.min.js"></script>
        <script src="assets_backend/js/modernizr.min.js"></script>
        <script src="assets_backend/js/detect.js"></script>
        <script src="assets_backend/js/fastclick.js"></script>
        <script src="assets_backend/js/jquery.slimscroll.js"></script>
        <script src="assets_backend/js/jquery.blockUI.js"></script>
        <script src="assets_backend/js/waves.js"></script>
        <script src="assets_backend/js/jquery.nicescroll.js"></script>
        <script src="assets_backend/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="assets_backend/js/app.js"></script>
        @endsection
</x-layout_backend>
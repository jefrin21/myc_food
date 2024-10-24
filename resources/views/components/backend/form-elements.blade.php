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
            <!-- Start right Content here -->
                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="btn-group float-right">
                                            <ol class="breadcrumb hide-phone p-0 m-0">
                                                <li class="breadcrumb-item"><a href="#">Zoogler</a></li>
                                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                                <li class="breadcrumb-item active">Form Elements</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Form Elements</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">            
                                            <h4 class="mt-0 header-title">Textual inputs</h4>
                                            <p class="text-muted mb-4 font-13">Here are examples of <code
                                                    class="highlighter-rouge">.form-control</code> applied to each
                                                textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code
                                                        class="highlighter-rouge">type</code>.
                                            </p>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="form-group row">
                                                        <label for="example-text-input" class="col-sm-2 col-form-label">Text</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-search-input" class="col-sm-2 col-form-label">Search</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-email-input" class="col-sm-2 col-form-label">Email</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-url-input" class="col-sm-2 col-form-label">URL</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-tel-input" class="col-sm-2 col-form-label">Telephone</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-password-input" class="col-sm-2 col-form-label">Password</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="password" value="hunter2" id="example-password-input">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-number-input" class="col-sm-2 col-form-label">Number</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="number" value="42" id="example-number-input">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-datetime-local-input" class="col-sm-2 col-form-label">Date and time</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-date-input" class="col-sm-2 col-form-label">Date</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-month-input" class="col-sm-2 col-form-label">Month</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="month" value="2011-08" id="example-month-input">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-week-input" class="col-sm-2 col-form-label">Week</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="week" value="2011-W33" id="example-week-input">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-time-input" class="col-sm-2 col-form-label">Time</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group row">
                                                        <label for="example-color-input" class="col-sm-2 col-form-label">Color</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="color" value="#605daf" id="example-color-input">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Select</label>
                                                        <div class="col-sm-10">
                                                            <select class="form-control">
                                                                <option>Select</option>
                                                                <option>Large select</option>
                                                                <option>Small select</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Custom Select</label>
                                                        <div class="col-sm-10">
                                                            <select class="custom-select">
                                                                <option selected>Open this select menu</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-text-input-lg" class="col-sm-2 col-form-label">Large</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" id="example-text-input-lg">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-text-input-sm" class="col-sm-2 col-form-label">Small</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" id="example-text-input-sm">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row has-success">
                                                        <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Email</label>
                                                        <div class="col-sm-10">
                                                            <input type="email" class="form-control form-control-success" id="inputHorizontalSuccess" placeholder="name@example.com">
                                                            <div class="form-control-feedback">Success! You've done it.</div>
                                                            <small class="form-text text-muted">Example help text that remains unchanged.</small>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row has-warning">
                                                        <label for="inputHorizontalWarning" class="col-sm-2 col-form-label">Email</label>
                                                        <div class="col-sm-10">
                                                            <input type="email" class="form-control form-control-warning" id="inputHorizontalWarning" placeholder="name@example.com">
                                                            <div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
                                                            <small class="form-text text-muted">Example help text that remains unchanged.</small>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row has-danger">
                                                        <label for="inputHorizontalDnger" class="col-sm-2 col-form-label">Email</label>
                                                        <div class="col-sm-10">
                                                            <input type="email" class="form-control form-control-danger" id="inputHorizontalDnger" placeholder="name@example.com">
                                                            <div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
                                                            <small class="form-text text-muted">Example help text that remains unchanged.</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                            
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Inline Form</h4>
                                            <p class="text-muted mb-4 font-13">Use the <code>.form-inline </code>class to display a series of labels, form controls, and buttons on a single horizontal row. 
                                                Form controls within inline forms vary slightly from their default states..</p>
                                            <div class="general-label">
                                                <form class="form-inline">
                                                    <div class="form-group">
                                                        <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                        <input type="email" class="form-control " id="exampleInputEmail2" placeholder="Enter email">
                                                    </div>
                                                        
                                                    <div class="form-group m-l-10">
                                                        <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                        <input type="password" class="form-control ml-2" id="exampleInputPassword2" placeholder="Password">
                                                    </div>
                                                    <div class="form-group ml-2">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck1" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                            <label class="custom-control-label" for="customCheck1">Remember me</label>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-success ml-2">Sign in</button>
                                                </form>           
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Input Sizes</h4>
                                            <p class="text-muted mb-4 font-13">Set heights using classes like 
                                                <code class="highlighter-rouge">id="example-input-large"</code> and 
                                                <code class="highlighter-rouge">id="example-input-sm"</code>.
                                            </p>
                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <div class="general-label">
                                                        <form class="form-horizontal">
                                                            <label class="col-sm-2 control-label p-0" for="example-input-small">Small</label>
                                                            <div class="form-group row">                                                                
                                                                <div class="col-sm-12">
                                                                    <input type="text" id="example-input-small" name="example-input-small" class="form-control form-control-sm" placeholder=".input-sm">
                                                                </div>
                                                                <div class="col-sm-12 ml-auto input-group input-group-sm mt-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                                                                    </div>
                                                                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="general-label">
                                                        <form class="form-horizontal">   
                                                            <label class="col-sm-2 control-label p-0" for="example-input-normal">Normal</label>
                                                            <div class="form-group row">                                                               
                                                                <div class="col-sm-12">
                                                                    <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="Normal">
                                                                </div>
                                                                <div class="col-sm-12 ml-auto input-group mt-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="inputGroup-sizing-normal">Normal</span>
                                                                    </div>
                                                                    <input type="text" class="form-control" aria-label="Normal" aria-describedby="inputGroup-sizing-sm">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="general-label">
                                                        <form class="form-horizontal">                
                                                            <label class="col-sm-2 control-label p-0" for="example-input-large">Large</label>
                                                            <div class="form-group row">
                                                                
                                                                <div class="col-sm-12">
                                                                    <input type="text" id="example-input-large" name="example-input-large" class="form-control form-control-lg" placeholder=".input-lg">
                                                                </div>
                                                                <div class="col-sm-12 ml-auto input-group input-group-lg mt-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                                                                    </div>
                                                                    <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Checkboxs</h4>
                                            <p class="text-muted mb-4 font-13">For even more customization and cross browser consistency, use our completely custom form elements to replace the browser defaults.
                                                    They’re built on top of semantic and accessible markup, so they’re solid replacements for any default form control.</p>
                                            <div class="general-label">
                                                <form class="form">
        
                                                    <div class="form-group row">
                                                        <label class="col-md-3 my-2 control-label">Checkboxes</label>
                                                        <div class="col-md-9">
                                                            <div class="checkbox my-2">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck2" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                                    <label class="custom-control-label" for="customCheck2">Unchecked</label>
                                                                </div>
                                                            </div>
                                                            <div class="checkbox my-2">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" checked="" id="customCheck3" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                                    <label class="custom-control-label" for="customCheck3">Checked</label>
                                                                </div>
                                                            </div>
                                                            <div class="checkbox my-2">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheckDisabled" disabled>
                                                                    <label class="custom-control-label" for="customCheckDisabled"> Disabled Unchecked </label>
                                                                </div>
                                                            </div>
                                                            <div class="checkbox my-2">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" checked="" id="customCheck5" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                                    <label class="custom-control-label" for="customCheck5"> Disabled Checked </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> <!--end row-->
                                                    
                                                    <div class="form-group row">
                                                        <label class="col-md-3 my-2 control-label">Inline Checkboxes</label>
                                                        <div class="col-md-9">
        
                                                            <div class="form-check-inline my-2">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck6" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                                    <label class="custom-control-label" for="customCheck6">HTML</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-check-inline my-2">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck7" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                                    <label class="custom-control-label" for="customCheck7">CSS</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-check-inline my-2">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck8" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                                    <label class="custom-control-label" for="customCheck8">Javascript</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!--end row-->                                          
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->

                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Radios</h4>
                                            <p class="text-muted mb-4 font-13">For even more customization and cross browser consistency, use our completely custom form elements to replace the browser defaults. 
                                                They’re built on top of semantic and accessible markup, so they’re solid replacements for any default form control.</p>
                                            <div class="general-label">
                                                <form class="form">
                                                    <div class="form-group row">
                                                        <label class="col-md-3 my-2 control-label">Radios</label>
                                                        <div class="col-md-9">
                                                            <div class="radio my-2">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" id="customRadio1" checked="" name="customRadio" class="custom-control-input">
                                                                    <label class="custom-control-label" for="customRadio1">checked</label>
                                                                </div>
                                                            </div>
                                                            <div class="radio my-2">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" name="radioDisabled" id="customRadioDisabled" class="custom-control-input" disabled>
                                                                    <label class="custom-control-label" for="customRadioDisabled"> Disabled radio</label>
                                                                </div>
                                                            </div>
                                                            <div class="radio my-2">
                                                                <div class="custom-control custom-radio">
                                                                        <input type="radio" name="radioDisabled" checked="" id="customRadioDisabled2" class="custom-control-input" disabled>
                                                                    <label class="custom-control-label" for="customRadioDisabled2"> Disabled selected</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> <!-- form-group -->
        
                                                    <div class="form-group row">
                                                        <label class="col-md-3 my-1 control-label">Inline Radios</label>
                                                        <div class="col-md-9">
                                                            <div class="form-check-inline my-1">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                                                                    <label class="custom-control-label" for="customRadio4">HTML</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-check-inline my-1">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                                                                    <label class="custom-control-label" for="customRadio5">css</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-check-inline my-1">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" id="customRadio6" name="customRadio" class="custom-control-input">
                                                                    <label class="custom-control-label" for="customRadio6">Javascript</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> <!--end row-->                                   
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Input groups Static</h4>
                                            <p class="text-muted mb-4 font-13">Easily extend form controls by adding text, buttons, 
                                                or button groups on either side of textual inputs, custom selects, and custom file inputs.
                                            </p>

                                            <div class="general-label">
                                                <form class="form-horizontal">
                                                    <div class="form-group row">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="far fa-user"></i></span>
                                                                </div>
                                                                <input type="text" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Username">
                                                            </div>
                                                        </div>
        
                                                        <div class="col-md-12">
                                                            <div class="input-group mt-2">
                                                                <input type="email" id="example-input2-group1" name="example-input2-group1" class="form-control" placeholder="Email">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text"><i class="far fa-envelope"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="input-group mt-2">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                                                                </div>
                                                                <input type="text" id="example-input3-group1" name="example-input3-group1" class="form-control" placeholder="..">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">.00</span>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="input-group mt-2">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                                                                    <span class="input-group-text">0.00</span>
                                                                </div>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="input-group mt-2">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">With textarea</span>
                                                                </div>
                                                                <textarea class="form-control" aria-label="With textarea"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="input-group mt-2">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">First and last name</span>
                                                                </div>
                                                                <input type="text" class="form-control">
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div> <!--end row-->
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Input groups Buttons</h4>
                                            <p class="text-muted mb-4 font-13">Easily extend form controls by adding text, buttons, 
                                                or button groups on either side of textual inputs, custom selects, and custom file inputs.
                                            </p>
                                            <div class="general-label">
                                                <form class="form-horizontal"> 
                                                    <div class="form-group row">                                                        
                                                        <div class="col-md-6">
                                                            <div class="input-group mo-mb-2">
                                                                <div class="input-group-prepend">                                                            
                                                                    <span class="input-group-text">
                                                                        <input type="checkbox">
                                                                    </span>                                                           
                                                                </div>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">
                                                                        <input type="radio">
                                                                    </div>
                                                                </div>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="input-group mt-2">
                                                                <span class="input-group-prepend">
                                                                    <button type="button" class="btn btn-primary"><i class="fas fa-search"></i></button>
                                                                </span>
                                                                <input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Search">
                                                            </div>
                                                        </div>
        
                                                        <div class="col-md-12">
                                                            <div class="input-group mt-2">
                                                                <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
                                                                <span class="input-group-append">
                                                                    <button class="btn btn-primary" type="button">Go!</button>
                                                                </span>
                                                            </div>
                                                        </div>
        
                                                        <div class="col-md-12">
                                                            <div class="input-group mt-2">
                                                                <input type="email" id="example-input2-group2" name="example-input2-group2" class="form-control" placeholder="Email">
                                                                <span class="input-group-append">
                                                                <button type="button" class="btn  btn-primary">Submit</button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="input-group mt-2">
                                                                <span class="input-group-prepend">
                                                                <button type="button" class="btn btn-primary"><i class="fab fa-facebook-f"></i></button>
                                                                </span>
                                                                <input type="text" id="example-input3-group2" name="example-input3-group2" class="form-control" placeholder="Search">
                                                                <span class="input-group-append">
                                                                <button type="button" class="btn btn-primary"><i class="fab fa-twitter"></i></button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="input-group mt-2">
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" id="inputGroupFile04">
                                                                    <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                                                </div>
                                                                <div class="input-group-append">
                                                                    <button class="btn btn-outline-primary" type="button">Button</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="input-group mt-2">
                                                                <select class="custom-select" id="inputGroupSelect04">
                                                                    <option selected>Choose...</option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                                <div class="input-group-append">
                                                                    <button class="btn btn-outline-primary" type="button">Button</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> <!--end row-->
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title">Input groups Dropdowns</h4>
                                            <p class="text-muted mb-4 font-13">Easily extend form controls by adding text, buttons, 
                                                or button groups on either side of textual inputs, custom selects, and custom file inputs.
                                            </p>                                            
                                                
                                            <div class="general-label">
                                                <form class="form-horizontal">                                   
                                                    <div class="form-group row">                                                       
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action
                                                                    </button>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                        <a class="dropdown-item" href="#">Another action</a>
                                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                                        <div role="separator" class="dropdown-divider"></div>
                                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                                    </div>
                                                                </div>
                                                                <input type="text" id="example-input1-group3" name="example-input1-group3" class="form-control" placeholder="Username">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="input-group mt-2">
                                                                <input type="email" id="example-input2-group3" name="example-input2-group3" class="form-control" placeholder="Email">
                                                                <div class="input-group-append">
                                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action
                                                                    </button>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                        <a class="dropdown-item" href="#">Another action</a>
                                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                                        <div role="separator" class="dropdown-divider"></div>
                                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="input-group mt-2">
                                                                <div class="input-group-prepend">                                                        
                                                                    <button type="button" class="btn btn-primary">Action</button>
                                                                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <span class="sr-only">Toggle Dropdown</span>
                                                                    </button>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                        <a class="dropdown-item" href="#">Another action</a>
                                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                                        <div role="separator" class="dropdown-divider"></div>
                                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                                    </div>
                                                                </div>
                                                                <input type="text" id="example-input3-group3" name="example-input3-group3" class="form-control" placeholder="..">
                                                                <div class="input-group-append">
                                                                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">Toggle Dropdown</span>
                                                                    </button>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                        <a class="dropdown-item" href="#">Another action</a>
                                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                                        <div role="separator" class="dropdown-divider"></div>
                                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>                                     
                                                </form>                                    
                                            </div>                                      
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->    

                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->
            </div>
            <!-- End Right content here -->
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
        <script src="assets_backend/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="assets_backend/js/app.js"></script>
        @endsection
 </x-layout_backend>
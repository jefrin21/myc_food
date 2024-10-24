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

        <!-- Plugins css -->
        <link href="assets_backend/plugins/timepicker/tempusdominus-bootstrap-4.css" rel="stylesheet" />
        <link href="assets_backend/plugins/timepicker/bootstrap-material-datetimepicker.css" rel="stylesheet">
        <link href="assets_backend/plugins/clockpicker/jquery-clockpicker.min.css" rel="stylesheet" />
        <link href="assets_backend/plugins/colorpicker/asColorPicker.min.css" rel="stylesheet" type="text/css" />
        <link href="assets_backend/plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />

        <link href="assets_backend/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="assets_backend/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="assets_backend/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" /> 

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
                                                <li class="breadcrumb-item active">Form Advanced</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Form Advanced</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body bootstrap-select-1">
                                            <h4 class="mt-0 header-title">Colorpicker</h4>
                                            <p class="text-muted mb-4 font-13">Simple jQuery Based Color and Gradient Picker - asColorPicker. </p>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h6 class=" input-title mb-2 mt-0">Simple mode</h6>                                            
                                                    <input type="text" class="colorpicker form-control" value="#079c9e" /> 
                                                </div>                                    
                                                <div class="col-md-4">
                                                    <h6 class=" input-title mb-2 mt-2 mt-lg-0">Gradiant mode</h6>                                            
                                                    <input type="text" class="gradient-colorpicker form-control" value="#ffa784" />
                                                </div>
                                                <div class="col-md-4">
                                                    <h6 class=" input-title mb-2 mt-2 mt-lg-0">Complex mode</h6>                                           
                                                    <input type="text" class="complex-colorpicker form-control" value="#a0a9b3" /> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                
                                </div> <!-- end col -->
                            </div> <!-- end row --> 

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body bootstrap-select-1">
                                            <h4 class="header-title mt-0">Select2 Components</h4>
                                            <p class="text-muted mb-4 font-13">Select2 is a jQuery based replacement for select boxes. 
                                                It supports searching, remote data sets, and infinite scrolling of results. 
                                            </p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h6 class="input-title mt-0">Single select</h6>
                                                    <select class="select2 form-control mb-3 custom-select" style="width: 100%; height:36px;">
                                                        <option>Select</option>
                                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                                            <option value="AK">Alaska</option>
                                                            <option value="HI">Hawaii</option>
                                                        </optgroup>
                                                        <optgroup label="Pacific Time Zone">
                                                            <option value="CA">California</option>
                                                            <option value="NV">Nevada</option>
                                                            <option value="OR">Oregon</option>
                                                            <option value="WA">Washington</option>
                                                        </optgroup>
                                                        <optgroup label="Mountain Time Zone">
                                                            <option value="AZ">Arizona</option>
                                                            <option value="CO">Colorado</option>
                                                            <option value="ID">Idaho</option>
                                                            <option value="MT">Montana</option>
                                                            <option value="NE">Nebraska</option>
                                                            <option value="NM">New Mexico</option>
                                                            <option value="ND">North Dakota</option>
                                                            <option value="UT">Utah</option>
                                                            <option value="WY">Wyoming</option>
                                                        </optgroup>
                                                        <optgroup label="Central Time Zone">
                                                            <option value="AL">Alabama</option>
                                                            <option value="AR">Arkansas</option>
                                                            <option value="IL">Illinois</option>
                                                            <option value="IA">Iowa</option>
                                                            <option value="KS">Kansas</option>
                                                            <option value="KY">Kentucky</option>
                                                            <option value="LA">Louisiana</option>
                                                            <option value="MN">Minnesota</option>
                                                            <option value="MS">Mississippi</option>
                                                            <option value="MO">Missouri</option>
                                                            <option value="OK">Oklahoma</option>
                                                            <option value="SD">South Dakota</option>
                                                            <option value="TX">Texas</option>
                                                            <option value="TN">Tennessee</option>
                                                            <option value="WI">Wisconsin</option>
                                                        </optgroup>
                                                        <optgroup label="Eastern Time Zone">
                                                            <option value="CT">Connecticut</option>
                                                            <option value="DE">Delaware</option>
                                                            <option value="FL">Florida</option>
                                                            <option value="GA">Georgia</option>
                                                            <option value="IN">Indiana</option>
                                                            <option value="ME">Maine</option>
                                                            <option value="MD">Maryland</option>
                                                            <option value="MA">Massachusetts</option>
                                                            <option value="MI">Michigan</option>
                                                            <option value="NH">New Hampshire</option>
                                                            <option value="NJ">New Jersey</option>
                                                            <option value="NY">New York</option>
                                                            <option value="NC">North Carolina</option>
                                                            <option value="OH">Ohio</option>
                                                            <option value="PA">Pennsylvania</option>
                                                            <option value="RI">Rhode Island</option>
                                                            <option value="SC">South Carolina</option>
                                                            <option value="VT">Vermont</option>
                                                            <option value="VA">Virginia</option>
                                                            <option value="WV">West Virginia</option>
                                                        </optgroup>
                                                    </select>
                                                </div>                                    
                                                <div class="col-md-6">
                                                    <h6 class="mt-lg-0 input-title">Multiple Select</h6>
    
                                                    <select class="select2 mb-3 select2-multiple" style="width: 100%" multiple="multiple" data-placeholder="Choose">
                                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                                            <option value="AK">Alaska</option>
                                                            <option value="HI">Hawaii</option>
                                                        </optgroup>
                                                        <optgroup label="Pacific Time Zone">
                                                            <option value="CA">California</option>
                                                            <option value="NV">Nevada</option>
                                                            <option value="OR">Oregon</option>
                                                            <option value="WA">Washington</option>
                                                        </optgroup>
                                                        <optgroup label="Mountain Time Zone">
                                                            <option value="AZ">Arizona</option>
                                                            <option value="CO">Colorado</option>
                                                            <option value="ID">Idaho</option>
                                                            <option value="MT">Montana</option>
                                                            <option value="NE">Nebraska</option>
                                                            <option value="NM">New Mexico</option>
                                                            <option value="ND">North Dakota</option>
                                                            <option value="UT">Utah</option>
                                                            <option value="WY">Wyoming</option>
                                                        </optgroup>
                                                        <optgroup label="Central Time Zone">
                                                            <option value="AL">Alabama</option>
                                                            <option value="AR">Arkansas</option>
                                                            <option value="IL">Illinois</option>
                                                            <option value="IA">Iowa</option>
                                                            <option value="KS">Kansas</option>
                                                            <option value="KY">Kentucky</option>
                                                            <option value="LA">Louisiana</option>
                                                            <option value="MN">Minnesota</option>
                                                            <option value="MS">Mississippi</option>
                                                            <option value="MO">Missouri</option>
                                                            <option value="OK">Oklahoma</option>
                                                            <option value="SD">South Dakota</option>
                                                            <option value="TX">Texas</option>
                                                            <option value="TN">Tennessee</option>
                                                            <option value="WI">Wisconsin</option>
                                                        </optgroup>
                                                        <optgroup label="Eastern Time Zone">
                                                            <option value="CT">Connecticut</option>
                                                            <option value="DE">Delaware</option>
                                                            <option value="FL">Florida</option>
                                                            <option value="GA">Georgia</option>
                                                            <option value="IN">Indiana</option>
                                                            <option value="ME">Maine</option>
                                                            <option value="MD">Maryland</option>
                                                            <option value="MA">Massachusetts</option>
                                                            <option value="MI">Michigan</option>
                                                            <option value="NH">New Hampshire</option>
                                                            <option value="NJ">New Jersey</option>
                                                            <option value="NY">New York</option>
                                                            <option value="NC">North Carolina</option>
                                                            <option value="OH">Ohio</option>
                                                            <option value="PA">Pennsylvania</option>
                                                            <option value="RI">Rhode Island</option>
                                                            <option value="SC">South Carolina</option>
                                                            <option value="VT">Vermont</option>
                                                            <option value="VA">Virginia</option>
                                                            <option value="WV">West Virginia</option>
                                                        </optgroup>
                                                    </select> 
                                                </div>                                                
                                            </div>
                                        </div>
                                    </div>                                
                                </div> <!-- end col -->
                            </div> <!-- end row --> 

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title mt-0">Bootstrap Material Datetimepicker</h4>
                                            <p class="text-muted mb-4 font-13">An example of Bootstrap Material DatePicker.</p> 
                                            <div class="row form-material">
                                                <div class="col-md-6">
                                                    <h6 class=" input-title mt-0">Default Material Date Picker</h6>
                                                    <input type="text" class="form-control" placeholder="2017-06-04" id="mdate">
                                                    
                                                    <h6 class=" input-title">Default Material Date Timepicker</h6>
                                                    <input type="text" id="date-format" class="form-control" placeholder="Saturday 24 June 2017 - 21:44">
                                                    
                                                </div>
                                                <div class="col-md-6">
                                                    <h6 class=" input-title mt-lg-0">Time Picker</h6>
                                                    <input class="form-control" id="timepicker" placeholder="Check time">
                                                    
                                                    <h6 class=" input-title">Min Date set</h6>
                                                    <input type="text" class="form-control" placeholder="set min date" id="min-date"> 
                                                </div>
                                            </div>       
                                        </div>
                                    </div>                                
                                </div> <!-- end col -->
                            </div> <!-- end row --> 


                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title mt-0">Clock Picker</h4>
                                            <p class="text-muted mb-4 font-13">Simple jQuery Based Color and Gradient Picker - asColorPicker. </p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h6 class=" input-title mt-0">Default Clock Picker</h6>
                                                    <div class="input-group clockpicker">
                                                        <input type="text" class="form-control" value="10:10">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="far fa-clock"></i></span>
                                                        </div>
                                                    </div>
                                                    <h6 class=" input-title mt-lg-3">Auto close Clock Picker</h6>
                                                    <div class="input-group clockpicker " data-placement="bottom" data-align="top" data-autoclose="true">
                                                        <input type="text" class="form-control" value="01:35"> 
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="far fa-clock"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h6 class=" input-title  mt-lg-0">Left Placement</h6>
                                                    <div class="input-group clockpicker " data-placement="left" data-align="top" data-autoclose="true">
                                                        <input type="text" class="form-control" value="01:57">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="far fa-clock"></i></span>
                                                        </div>
                                                    </div>
                                                    <h6 class=" input-title mt-lg-3">Now time</h6>
                                                    <div class="input-group">
                                                        <input class="form-control" id="single-input" value="" placeholder="Now"> 
                                                        <span class="input-group-append">
                                                            <button type="button" id="check-minutes" class="btn btn-primary">Check the minutes</button>
                                                        </span> 
                                                    </div>                                            
                                                </div>
                                            </div> 
                                        </div>
                                    </div>                                
                                </div> <!-- end col -->
                            </div> <!-- end row --> 

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">                                            
                                            <h4 class="mt-0 header-title">Datepicker</h4>
                                            <p class="text-muted mb-4 font-13">Examples of twitter bootstrap datepicker.</p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <form action="#">
                                                        <div class="form-group mb-0 mb-lg-2">
                                                            <h6 class=" input-title mt-0">Default Functionality</h6>
                                                            <div>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                                                    <div class="input-group-append bg-custom b-0"><span class="input-group-text"><i class="mdi mdi-calendar"></i></span></div>
                                                                </div><!-- input-group -->
                                                            </div>
                                                        </div>
                    
                                                        <div class="form-group mb-0">
                                                            <h6 class=" input-title mt-lg-3">Auto Close</h6>
                                                            <div>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                                                                    <div class="input-group-append bg-custom b-0"><span class="input-group-text"><i class="mdi mdi-calendar"></i></span></div>
                                                                </div><!-- input-group -->
                                                            </div>
                                                        </div>
                                                    </form>                                                    
                                                </div>
                                                <div class="col-md-6">
                                                    <form action="#">                    
                                                        <div class="form-group mb-0 mb-lg-2">
                                                            <h6 class=" input-title mt-lg-0">Multiple Date</h6>
                                                            <div>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-multiple-date">
                                                                    <div class="input-group-append bg-custom b-0"><span class="input-group-text"><i class="mdi mdi-calendar"></i></span></div>
                                                                </div><!-- input-group -->
                                                            </div>
                                                        </div>
                    
                                                        <div class="form-group mb-0">
                                                            <h6 class=" input-title mt-lg-3">Date Range</h6>
                                                            <div>
                                                                <div class="input-daterange input-group" id="date-range">
                                                                    <input type="text" class="form-control" name="start" placeholder="Start Date" />
                                                                    <input type="text" class="form-control" name="end" placeholder="End Date" />
                                                                </div>
                                                            </div>
                                                        </div>
                    
                                                    </form>
                                                </div>
                                            </div>       
                                        </div>
                                    </div>                                
                                </div> <!-- end col -->
                            </div> <!-- end row --> 
                            
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body"> 
                                            <h4 class="mt-0 header-title">Bootstrap MaxLength</h4>
                                            <p class="text-muted mb-4 font-13">This plugin integrates by default with
                                                Twitter bootstrap using badges to display the maximum lenght of the
                                                field where the user is inserting text. </p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h6 class=" input-title mt-0">Default usage</h6>
                                                    <p class="text-muted mb-3 font-13">
                                                        The badge will show up by default when the remaining chars are 10 or less:
                                                    </p>
                                                    <input type="text" class="form-control" maxlength="25" name="defaultconfig" id="defaultconfig" />
                    
                                                    <div class="mt-3">
                                                        <h6 class=" input-title mt-lg-3">Threshold value</h6>
                                                        <p class="text-muted mb-3 font-13">
                                                            Do you want the badge to show up when there are 20 chars or less? Use the <code>threshold</code> option:
                                                        </p>
                                                        <input type="text" maxlength="25" name="thresholdconfig" class="form-control" id="thresholdconfig" />
                                                    </div>
                    
                                                    <div class="mt-3">
                                                        <h6 class=" input-title">All the options</h6>
                                                        <p class="text-muted  mb-3 font-13">
                                                            Please note: if the <code>alwaysShow</code> option is enabled, the <code>threshold</code> option is ignored.
                                                        </p>
                                                        <input type="text" class="form-control" maxlength="25" name="alloptions" id="alloptions" />
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mt-3">
                                                        <h6 class=" input-title">Position</h6>
                                                        <p class="text-muted  mb-3 font-13">
                                                            All you need to do is specify the <code>placement</code> option, with one of those strings. If none
                                                            is specified, the positioning will be defauted to 'bottom'.
                                                        </p>
                                                        <input type="text" class="form-control" maxlength="25" name="placement" id="placement" />
                                                    </div>
                    
                                                    <div class="mt-3">
                                                        <h6 class=" input-title">textareas</h6>
                                                        <p class="text-muted  mb-3 font-13">
                                                            Bootstrap maxlength supports textarea as well as inputs. Even on old IE.
                                                        </p>
                                                        <textarea id="textarea" class="form-control" maxlength="225" rows="3" placeholder="This textarea has a limit of 225 chars."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                        
                                </div> <!-- end col -->
                            </div> <!-- end row --> 
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">            
                                            <h4 class="mt-0 header-title">Bootstrap TouchSpin</h4>
                                            <p class="text-muted  mb-4 font-13">A mobile and touch friendly input spinner component for Bootstrap</p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <form>
                                                        <div class="form-group">
                                                            <h6 class="control-label  input-title mt-0">Using data attributes</h6>
                                                            <input id="demo0" type="text" value="55" name="demo0" data-bts-min="0" data-bts-max="100" data-bts-init-val="" data-bts-step="1" data-bts-decimal="0" data-bts-step-interval="100" data-bts-force-step-divisibility="round" data-bts-step-interval-delay="500" data-bts-prefix="" data-bts-postfix="" data-bts-prefix-extra-class="" data-bts-postfix-extra-class="" data-bts-booster="true" data-bts-boostat="10" data-bts-max-boosted-step="false" data-bts-mousewheel="true" data-bts-button-down-class="btn btn-default" data-bts-button-up-class="btn btn-default"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <h6 class="control-label  input-title">Example with postfix (large)</h6>
                                                            <input id="demo1" type="text" value="55" name="demo1">
                                                        </div>
                                                        <div class="form-group mb-2 mb-lg-0">
                                                            <h6 class="control-label  input-title">With prefix </h6>
                                                            <input id="demo2" type="text" value="0" name="demo2" class=" form-control">
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-md-6">
                                                    <form>
                                                        <div class="form-group">
                                                            <h6 class="control-label  input-title  mt-2 mt-lg-0">Init with empty value:</h6>
                                                            <input id="demo3" type="text" value="" name="demo3">
                                                        </div>
                                                        <div class="form-group">
                                                            <h6 class="control-label  input-title">Value attribute is not set (applying settings.initval)</h6>
                                                            <input id="demo3_21" type="text" value="" name="demo3_21">
                                                        </div>
                                                        <div class="form-group mb-0">
                                                            <h6 class="control-label  input-title">Value is set explicitly to 33 (skipping settings.initval) </h6>
                                                            <input id="demo3_22" type="text" value="33" name="demo3_22">
                                                        </div>                    
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  

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

        <!-- Plugins js -->
        <script src="assets_backend/plugins/timepicker/moment.js"></script>
        <script src="assets_backend/plugins/timepicker/tempusdominus-bootstrap-4.js"></script>
        <script src="assets_backend/plugins/timepicker/bootstrap-material-datetimepicker.js"></script>
        <script src="assets_backend/plugins/clockpicker/jquery-clockpicker.min.js"></script>
        <script src="assets_backend/plugins/colorpicker/jquery-asColor.js"></script>
        <script src="assets_backend/plugins/colorpicker/jquery-asGradient.js"></script>
        <script src="assets_backend/plugins/colorpicker/jquery-asColorPicker.min.js"></script>
        <script src="assets_backend/plugins/select2/select2.min.js"></script>

        <script src="assets_backend/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="assets_backend/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="assets_backend/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="assets_backend/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>

        <!-- Plugins Init js -->
        <script src="assets_backend/pages/form-advanced.js"></script> 

        <!-- App js -->
        <script src="assets_backend/js/app.js"></script>
        @endsection
</x-layout_backend>
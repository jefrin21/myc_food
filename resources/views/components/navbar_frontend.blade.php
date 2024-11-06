<section id="navbar">
        <header class="header_section">
        
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 sticky-header sticky pt-0">
                        <div class="main_header d-flex justify-content-between align-items-center ">
                            <div class="header_logo">
                                <a class="sticky_none" href="index.html"><img width="115" src="assets_frontend/img/logo/logomyc.png" alt="" ></a>
                            </div>
                            <!--main menu start-->
                            <div class="main_menu d-none d-lg-block">
                                <nav>
                                    <ul class="d-flex">
                                        <li><a class="active" href="mycindex.html">Home</a>
                                           
                                        </li>
                                        <li><a href="cart">Order</a></li>
                                        <li><a href="mycfaq.html">FAQ</a>  
                                        </li>
                                
                                        <li><a href="contact.html">My Order</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!--main menu end-->
                            <div>
                                <div class="header_content d-flex justify-content-between align-items-center">
                                    
                                    <div class="header_account">
                                        <ul class="d-flex">
                                            <li class="header_wishlist" data-bs-toggle="modal" data-bs-target="#createCustomer">
                                                <a href="#"><i class="pe-7s-user"></i></a>
                                            </li>
                                            <li class="shopping_cart">
                                                <a href="javascript:void(0)"><i class="pe-7s-shopbag"></i></a>
                                                <span class="item_count">2</span>
                                            </li>
                                            <li>
                                                <div class="canvas_open">
                                                    <a href="javascript:void(0)">
                                                        <i class="ion-navicon" style="font-size: 23px;"></i>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </header>
    </section>

    <section id="quick-cart">
        <div class="mini_cart">
            <div class="cart_gallery">
                <div class="cart_close">
                    <div class="cart_text">
                        <h3>cart</h3>
                    </div>
                    <div class="mini_cart_close">
                        <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                    </div>
                </div>
                <div class="cart_item">
                    <div class="cart_img">
                        <a href="single-product.html"><img src="assets_frontend/img/product/product1.png" alt=""></a>
                    </div>
                    <div class="cart_info">
                        <a href="single-product.html">Primis In Faucibus</a>
                        <p>1 x <span> $65.00 </span></p>
                    </div>
                    <div class="cart_remove">
                        <a href="#"><i class="ion-android-close"></i></a>
                    </div>
                </div>
                <div class="cart_item">
                    <div class="cart_img">
                        <a href="single-product.html"><img src="assets_frontend/img/product/product2.png" alt=""></a>
                    </div>
                    <div class="cart_info">
                        <a href="single-product.html">Letraset Sheets</a>
                        <p>1 x <span> $60.00 </span></p>
                    </div>
                    <div class="cart_remove">
                        <a href="#"><i class="ion-android-close"></i></a>
                    </div>
                </div>
            </div>
            <div class="mini_cart_table">
                <div class="cart_table_border">
                    <div class="cart_total">
                        <span>Sub total:</span>
                        <span class="price">$125.00</span>
                    </div>
                    <div class="cart_total mt-10">
                        <span>total:</span>
                        <span class="price">$125.00</span>
                    </div>
                </div>
            </div>
            <div class="mini_cart_footer">
                <div class="cart_button">
                    <a href="cart.html">View cart</a>
                </div>
                <div class="cart_button">
                    <a href="checkout.html"><i class="fa fa-sign-in"></i> Checkout</a>
                </div>
            </div>
        </div>

    </section>

    {{-- start modal  create customer--}}
                                   
                                    <!-- Modal -->
                                    <div class="modal fade" id="createCustomer" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Login</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{-- content create --}}
                                            <form action="/customer-create/create" method="POST">
                                                    @csrf
                                                    <div class="row d-flex justify-content-center">
                                                        <div class="">
                                                            <form action="#">
                                                                <div class="login-form">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <label>Email Address*</label>
                                                                            <input type="email" placeholder="Email Address">
                                                                        </div>
                                                                        <div class="col-lg-12">
                                                                            <label>Password*</label>
                                                                            <input type="password" placeholder="Password">
                                                                        </div>
                                                                        
                                                                        <div class="col-sm-4 align-self-center">
                                                                            <div class="check-box">
                                                                                <input type="checkbox" id="remember_me">
                                                                                <label for="remember_me">Remember me</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-4 pt-1 mt-md-0">
                                                                            <div class="forgotton-password_info">
                                                                                <a href="#"> Forgot pasword?</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-4 pt-1 mt-md-0">
                                                                            <div class="forgotton-password_info">
                                                                                <a href="mycregister.html"> Don't have account?</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-12 pt-5 d-flex justify-content-end">
                                                                            <button class="btn custom-btn md-size">Login</button>
                                                                        </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                            {{-- end content --}}
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                {{-- end modal create customer  --}}
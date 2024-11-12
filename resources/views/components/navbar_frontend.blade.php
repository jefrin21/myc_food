<section id="navbar">
        <header class="header_section">
        
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 sticky-header sticky pt-0">
                        <div class="main_header d-flex justify-content-between align-items-center ">
                            <div class="header_logo">
                                <a class="sticky_none" href="home"><img width="115" src="assets_frontend/img/logo/logomyc.png" alt="" ></a>
                            </div>
                            <!--main menu start-->
                            <div class="main_menu d-none d-lg-block">
                                    <nav>
                                        <ul class="d-flex">
                                            <li>
                                                <a class="{{ Request::is('home') ? 'active' : '' }}" href="home">Home</a>
                                            </li>
                                            <li>
                                                <a class="{{ Request::is('cart') ? 'active' : '' }}" href="cart">Order</a>
                                            </li>
                                            <li>
                                                <a class="{{ Request::is('about') ? 'active' : '' }}" href="about">FAQ</a>
                                            </li>
                                            <li>
                                                <a class="{{ Request::is('orders') ? 'active' : '' }}" href="orders">My Order</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>

                            <!--main menu end-->
                            <div>
                                <div class="header_content d-flex justify-content-between align-items-center">
                                    
                                    <div class="header_account">
                                        <ul class="d-flex">
                                            <li class="header_wishlist" >
                                                <a href="account"><i class="pe-7s-user"></i></a>
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
                        <a href="single-product"><img src="assets_frontend/img/product/product1.png" alt=""></a>
                    </div>
                    <div class="cart_info">
                        <a href="single-product">Primis In Faucibus</a>
                        <p>1 x <span> $65.00 </span></p>
                    </div>
                    <div class="cart_remove">
                        <a href="#"><i class="ion-android-close"></i></a>
                    </div>
                </div>
                <div class="cart_item">
                    <div class="cart_img">
                        <a href="single-product"><img src="assets_frontend/img/product/product2.png" alt=""></a>
                    </div>
                    <div class="cart_info">
                        <a href="single-product">Letraset Sheets</a>
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
                    <a href="cart">View cart</a>
                </div>
                <div class="cart_button">
                    <a href="checkout"><i class="fa fa-sign-in"></i> Checkout</a>
                </div>
            </div>
        </div>

    </section>

  
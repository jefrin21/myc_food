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
                                                <a class="{{ Request::is('about') ? 'active' : '' }}" href="about">About</a>
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
                                                <a href="cart"><i class="pe-7s-shopbag"></i></a>
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


  
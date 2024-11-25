 <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <!-- Top Bar Start -->
                    <div class="topbar">
                        <nav class="navbar-custom">
                            <ul class="list-inline float-right mb-0">
                                <!-- language-->
                                
                                <i class="bi bi-box-arrow-right"></i>
                              

                                <li
                                    class="list-inline-item dropdown notification-list"
                                >
                                    <a
                                        class="nav-link dropdown-toggle arrow-none waves-effect nav-user"
                                        data-toggle="dropdown"
                                        href="#"
                                        role="button"
                                        aria-haspopup="false"
                                        aria-expanded="false"
                                    >
                                        <form action="/logout" method="POST" id="logoutconfirm">
                                            @csrf
                                            <button style="border: none; background:none" type="submit" onclick="alert('Anda yakin ingin keluar??')" class="fas fa-sign-out-alt  text-dark">Log Out</button>
                                        </form>

                                    </a>
                                    
                                </li>
                            </ul>
                            <ul class="list-inline menu-left mb-0">
                                <li class="float-left">
                                    <button
                                        class="button-menu-mobile open-left waves-light waves-effect"
                                    >
                                        <i class="mdi mdi-menu"></i>
                                    </button>
                                </li>
                                <li class="hide-phone app-search">
                                    <form role="search" class="">
                                        <input
                                            type="text"
                                            placeholder="Search..."
                                            class="form-control"
                                        />
                                        <a href=""
                                            ><i class="fas fa-search"></i
                                        ></a>
                                    </form>
                                </li>
                            </ul>

                            <div class="clearfix"></div>
                        </nav>
                    </div>
                    
                    <!-- Top Bar End -->
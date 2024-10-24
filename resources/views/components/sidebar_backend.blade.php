 <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <button
                    type="button"
                    class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect"
                >
                    <i class="ion-close"></i>
                </button>

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center bg-logo">
                        <a href="index" class="logo"
                            ><i class="mdi mdi-bowling text-success"></i>
                            MYC-Food</a
                        >
                        <!-- <a href="index" class="logo"><img src="assets_backend/images/logo.png" height="24" alt="logo"></a> -->
                    </div>
                </div>
                <div class="sidebar-user">
                    <img
                        src="assets_backend/images/users/avatar-6.jpg"
                        alt="user"
                        class="rounded-circle img-thumbnail mb-1"
                    />
                    <h6 class="">Mr. Michael Hill</h6>
                    <p class="online-icon text-dark">
                        <i class="mdi mdi-record text-success"></i>online
                    </p>
                    <ul class="list-unstyled list-inline mb-0 mt-2">
                        <li class="list-inline-item">
                            <a
                                href="#"
                                class=""
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Profile"
                                ><i class="dripicons-user text-purple"></i
                            ></a>
                        </li>
                        <li class="list-inline-item">
                            <a
                                href="#"
                                class=""
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Settings"
                                ><i class="dripicons-gear text-dark"></i
                            ></a>
                        </li>
                        <li class="list-inline-item">
                            <a
                                href="#"
                                class=""
                                data-toggle="tooltip"
                                data-placement="top"
                                title="Log out"
                                ><i class="dripicons-power text-danger"></i
                            ></a>
                        </li>
                    </ul>
                </div>

                <div class="sidebar-inner slimscrollleft">
                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">Main</li>

                            <li>
                                <a href="/" class="waves-effect">
                                    <i class="dripicons-device-desktop"></i>
                                    <span>
                                        Dashboard
                                        <span
                                            class="badge badge-pill badge-primary float-right"
                                            >7</span
                                        ></span
                                    >
                                </a>
                            </li>
                            {{-- <li>
                                <a href="calendar" class="waves-effect"
                                    ><i class="dripicons-to-do"></i
                                    ><span> Calendar </span></a
                                >
                            </li> --}}
                            <li class="menu-title">Orders</li>
                            <li>
                                <a href="tables-datatable-pesanan" class="waves-effect"
                                    ><i class="dripicons-to-do"></i
                                    ><span> Pesanan </span></a
                                >
                            </li>
                            {{-- <li>
                                <a href="calendar" class="waves-effect"
                                    ><i class="dripicons-to-do"></i
                                    ><span> Detail Pemesanan </span></a
                                >
                            </li> --}}
                            <li>
                                <a href="calendar" class="waves-effect"
                                    ><i class="dripicons-to-do"></i
                                    ><span> History Pemesanan </span></a
                                >
                            </li>

                            <li class="menu-title">Weekly Orders</li>

                            <li>
                                <a href="tables-datatable-weekly" class="waves-effect"
                                    ><i class="dripicons-to-do"></i
                                    ><span>Pesanan Harian </span></a
                                >
                            </li>

                            <li class="menu-title">Components</li>

                            <li class="has_sub">
                                <a
                                    href="javascript:void(0);"
                                    class="waves-effect"
                                    ><i class="dripicons-blog"></i
                                    ><span> Forms </span>
                                    <span
                                        class="badge badge-pill badge-info float-right"
                                        >8</span
                                    ></a
                                >
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="form-advanced"
                                            >Form Advanced</a
                                        >
                                    </li>
                                    <li>
                                        <a href="form-elements"
                                            >Form Elements</a
                                        >
                                    </li>
                                    <li>
                                        <a href="form-editors"
                                            >Form Editors</a
                                        >
                                    </li>
                                    <li>
                                        <a href="form-uploads"
                                            >Form File Upload</a
                                        >
                                    </li>
                                    <li>
                                        <a href="form-mask">Form Mask</a>
                                    </li>
                                    <li>
                                        <a href="form-summernote"
                                            >Summernote</a
                                        >
                                    </li>
                                    <li>
                                        <a href="form-validation"
                                            >Form Validation</a
                                        >
                                    </li>
                                    <li>
                                        <a href="form-xeditable"
                                            >Form Xeditable</a
                                        >
                                    </li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a
                                    href="javascript:void(0);"
                                    class="waves-effect"
                                    ><i class="dripicons-card"></i
                                    ><span> Tables </span>
                                    <span class="float-right"
                                        ><i
                                            class="mdi mdi-chevron-right"
                                        ></i></span
                                ></a>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="tables-basic"
                                            >Basic Tables</a
                                        >
                                    </li>
                                    <li>
                                        <a href="tables-datatable"
                                            >Data Table</a
                                        >
                                    </li>
                                    <li>
                                        <a href="tables-editable"
                                            >Editable Table</a
                                        >
                                    </li>
                                    <li>
                                        <a href="tables-responsive"
                                            >Responsive Table</a
                                        >
                                    </li>
                                </ul>
                            </li>

                            <li class="menu-title">Extra</li>

                            <li class="has_sub">
                                <a
                                    href="javascript:void(0);"
                                    class="waves-effect"
                                    ><i class="dripicons-copy"></i
                                    ><span> Pages </span>
                                    <span class="float-right"
                                        ><i
                                            class="mdi mdi-chevron-right"
                                        ></i></span
                                ></a>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="pages-login">Login</a>
                                    </li>
                                    <li>
                                        <a href="pages-register"
                                            >Register</a
                                        >
                                    </li>
                                    <li>
                                        <a href="pages-recoverpw"
                                            >Recover Password</a
                                        >
                                    </li>
                                    <li>
                                        <a href="pages-lock-screen"
                                            >Lock Screen</a
                                        >
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->
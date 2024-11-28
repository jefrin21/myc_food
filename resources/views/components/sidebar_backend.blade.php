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
                            >
                            MYC-Food
                            <i class="mdi mdi-food text-white"></i></a
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
                                <a href="tables-story-pesanan" class="waves-effect"
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

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->
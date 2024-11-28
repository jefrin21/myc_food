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
                                            <button style="border: none; background:none" type="submit" onclick="alert('Anda yakin ingin keluar??')" class="btn text-white"><i class="fas fa-sign-out-alt"></i>Log Out</button>
                                        </form>

                                    </a>
                                    
                                </li>
                            </ul>
                            

                            <div class="clearfix"></div>
                        </nav>
                    </div>
                    
                    <!-- Top Bar End -->
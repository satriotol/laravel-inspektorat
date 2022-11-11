<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="{{ route('dashboard') }}">
                <img src="{{ asset('backend_assets/images/brand/logo.png') }}" class="header-brand-img desktop-logo"
                    alt="logo">
                <img src="{{ asset('backend_assets/images/brand/logo-1.png') }}" class="header-brand-img toggle-logo"
                    alt="logo">
                <img src="{{ asset('backend_assets/images/brand/logo-2.png') }}" class="header-brand-img light-logo"
                    alt="logo">
                <img src="{{ asset('backend_assets/images/brand/logo-3.png') }}" class="header-brand-img light-logo1"
                    alt="logo">
            </a>
            <!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg></div>
            <ul class="side-menu">
                <li class="sub-category">
                    <h3>Main</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('dashboard') }}"><i
                            class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
                </li>
                <li class="sub-category">
                    <h3>Kebijakan</h3>
                </li>
                <li>
                    <a class="side-menu__item" href="widgets.html"><i class="side-menu__icon fe fe-grid"></i><span
                            class="side-menu__label">Kebijakan</span></a>
                </li>
                <li>
                    <a class="side-menu__item" href="widgets.html"><i class="side-menu__icon fe fe-grid"></i><span
                            class="side-menu__label">Kategori</span></a>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                            class="side-menu__icon fe fe-slack"></i><span class="side-menu__label">Kebijakan</span><i
                            class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Kebijakan</a></li>
                        <li><a href="cards.html" class="slide-item"> Cards design</a></li>
                        <li><a href="calendar.html" class="slide-item"> Default calendar</a></li>
                        <li><a href="calendar2.html" class="slide-item"> Full calendar</a></li>
                        <li><a href="chat.html" class="slide-item"> Chat</a></li>
                        <li><a href="notify.html" class="slide-item"> Notifications</a></li>
                        <li><a href="sweetalert.html" class="slide-item"> Sweet alerts</a></li>
                        <li><a href="rangeslider.html" class="slide-item"> Range slider</a></li>
                        <li><a href="scroll.html" class="slide-item"> Content Scroll bar</a></li>
                        <li><a href="loaders.html" class="slide-item"> Loaders</a></li>
                        <li><a href="counters.html" class="slide-item"> Counters</a></li>
                        <li><a href="rating.html" class="slide-item"> Rating</a></li>
                        <li><a href="timeline.html" class="slide-item"> Timeline</a></li>
                        <li><a href="treeview.html" class="slide-item"> Treeview</a></li>
                        <li><a href="chart.html" class="slide-item"> Charts</a></li>
                        <li><a href="footers.html" class="slide-item"> Footers</a></li>
                        <li><a href="users-list.html" class="slide-item"> User List</a></li>
                        <li><a href="search.html" class="slide-item">Search</a></li>
                        <li><a href="crypto-currencies.html" class="slide-item"> Crypto-currencies</a>
                        </li>

                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                            class="side-menu__icon fe fe-folder"></i><span class="side-menu__label">File
                            Manager</span><span class="badge bg-pink side-badge">4</span><i
                            class="angle fe fe-chevron-right hor-angle"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">File Manager</a></li>
                        <li><a href="file-manager.html" class="slide-item"> File Manager</a></li>
                        <li><a href="filemanager-list.html" class="slide-item"> File Manager List</a></li>
                        <li><a href="filemanager-details.html" class="slide-item"> File Details</a></li>
                        <li><a href="file-attachments.html" class="slide-item"> File Attachments</a></li>
                    </ul>
                </li>
                <li class="sub-category">
                    <h3>Misc Pages</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                            class="side-menu__icon fe fe-users"></i><span
                            class="side-menu__label">Authentication</span><i
                            class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Authentication</a></li>
                        <li><a href="login.html" class="slide-item"> Login</a></li>
                        <li><a href="register.html" class="slide-item"> Register</a></li>
                        <li><a href="forgot-password.html" class="slide-item"> Forgot Password</a></li>
                        <li><a href="lockscreen.html" class="slide-item"> Lock screen</a></li>
                        <li class="sub-slide">
                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span
                                    class="sub-side-menu__label">Error
                                    Pages</span><i class="sub-angle fe fe-chevron-right"></i></a>
                            <ul class="sub-slide-menu">
                                <li><a href="400.html" class="sub-slide-item"> 400</a></li>
                                <li><a href="401.html" class="sub-slide-item"> 401</a></li>
                                <li><a href="403.html" class="sub-slide-item"> 403</a></li>
                                <li><a href="404.html" class="sub-slide-item"> 404</a></li>
                                <li><a href="500.html" class="sub-slide-item"> 500</a></li>
                                <li><a href="503.html" class="sub-slide-item"> 503</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                        <i class="side-menu__icon fe fe-cpu"></i>
                        <span class="side-menu__label">Submenu items</span><i
                            class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Submenu items</a></li>
                        <li><a href="javascript:void(0)" class="slide-item">Submenu-1</a></li>
                        <li class="sub-slide">
                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span
                                    class="sub-side-menu__label">Submenu-2</span><i
                                    class="sub-angle fe fe-chevron-right"></i></a>
                            <ul class="sub-slide-menu">
                                <li><a class="sub-slide-item" href="javascript:void(0)">Submenu-2.1</a>
                                </li>
                                <li><a class="sub-slide-item" href="javascript:void(0)">Submenu-2.2</a>
                                </li>
                                <li class="sub-slide2">
                                    <a class="sub-side-menu__item2" href="javascript:void(0)"
                                        data-bs-toggle="sub-slide2"><span
                                            class="sub-side-menu__label2">Submenu-2.3</span><i
                                            class="sub-angle2 fe fe-chevron-right"></i></a>
                                    <ul class="sub-slide-menu2">
                                        <li><a href="javascript:void(0)" class="sub-slide-item2">Submenu-2.3.1</a>
                                        </li>
                                        <li><a href="javascript:void(0)" class="sub-slide-item2">Submenu-2.3.2</a>
                                        </li>
                                        <li><a href="javascript:void(0)" class="sub-slide-item2">Submenu-2.3.3</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="sub-slide-item" href="javascript:void(0)">Submenu-2.4</a>
                                </li>
                                <li><a class="sub-slide-item" href="javascript:void(0)">Submenu-2.5</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sub-category">
                    <h3>General</h3>
                </li>

                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                            class="side-menu__icon fe fe-map-pin"></i><span class="side-menu__label">Maps</span><i
                            class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Maps</a></li>
                        <li><a href="maps1.html" class="slide-item">Leaflet Maps</a></li>
                        <li><a href="maps2.html" class="slide-item">Mapel Maps</a></li>
                        <li><a href="maps.html" class="slide-item">Vector Maps</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                            class="side-menu__icon fe fe-bar-chart-2"></i><span
                            class="side-menu__label">Charts</span><span
                            class="badge bg-secondary side-badge">6</span><i
                            class="angle fe fe-chevron-right hor-angle"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Charts</a></li>
                        <li><a href="chart-chartist.html" class="slide-item">Chart Js</a></li>
                        <li><a href="chart-flot.html" class="slide-item"> Flot Charts</a></li>
                        <li><a href="chart-echart.html" class="slide-item"> ECharts</a></li>
                        <li><a href="chart-morris.html" class="slide-item"> Morris Charts</a></li>
                        <li><a href="chart-nvd3.html" class="slide-item"> Nvd3 Charts</a></li>
                        <li><a href="charts.html" class="slide-item"> C3 Bar Charts</a></li>
                        <li><a href="chart-line.html" class="slide-item"> C3 Line Charts</a></li>
                        <li><a href="chart-donut.html" class="slide-item"> C3 Donut Charts</a></li>
                        <li><a href="chart-pie.html" class="slide-item"> C3 Pie charts</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                            class="side-menu__icon fe fe-wind"></i><span class="side-menu__label">Icons</span><i
                            class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Icons</a></li>
                        <li><a href="icons.html" class="slide-item"> Font Awesome</a></li>
                        <li><a href="icons2.html" class="slide-item"> Material Design Icons</a></li>
                        <li><a href="icons3.html" class="slide-item"> Simple Line Icons</a></li>
                        <li><a href="icons4.html" class="slide-item"> Feather Icons</a></li>
                        <li><a href="icons5.html" class="slide-item"> Ionic Icons</a></li>
                        <li><a href="icons6.html" class="slide-item"> Flag Icons</a></li>
                        <li><a href="icons7.html" class="slide-item"> pe7 Icons</a></li>
                        <li><a href="icons8.html" class="slide-item"> Themify Icons</a></li>
                        <li><a href="icons9.html" class="slide-item">Typicons Icons</a></li>
                        <li><a href="icons10.html" class="slide-item">Weather Icons</a></li>
                        <li><a href="icons11.html" class="slide-item">Bootstrap Icons</a></li>
                    </ul>
                </li>
            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg></div>
        </div>
    </div>
</div>

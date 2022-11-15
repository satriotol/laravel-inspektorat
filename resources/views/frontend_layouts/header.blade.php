<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-4 col-sm-12 col-xs-12">
                <div class="logo">
                    <a href="{{ route('beranda') }}">
                        <img src="{{ asset('frontend_assets/images/resources/logo.png') }}" alt="Awesome Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                <div class="header-contact-info">
                    <ul>
                        <li>
                            <div class="iocn-holder">
                                <span class="icon-technology"></span>
                            </div>
                            <div class="text-holder">
                                <h6>Call Us On</h6>
                                <p>1-8000-978-6543</p>
                            </div>
                        </li>
                        <li>
                            <div class="iocn-holder">
                                <span class="icon-letter top-envelop"></span>
                            </div>
                            <div class="text-holder">
                                <h6>Mail Us @</h6>
                                <p>Supportuss@gmail.com</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</header>

<section class="mainmenu-area stricky">
    <div class="container">
        <div class="mainmenu-bg">
            <div class="row">
                <div class="col-md-10 col-sm-12 col-xs-12">
                    <!--Start mainmenu-->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="home current"><a href="{{ route('beranda') }}"><span
                                            class="fa fa-home"></span></a></li>
                                <li class="dropdown"><a href="about.html">Kegiatan</a>
                                    <ul>
                                        @foreach ($kegiatans as $kegiatan)
                                            <li><a href="#">{{ $kegiatan->name }}</a></li>
                                        @endforeach

                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Kebijakan</a>
                                    <ul>
                                        @foreach ($kebijakanCategories as $kebijakanCategory)
                                            <li><a href="#">{{ $kebijakanCategory->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="blog.html">Latest News</a>
                                    <ul>
                                        <li><a href="blog.html">Blog Default</a></li>
                                        <li><a href="blog-grid.html">Blog Grid View</a></li>
                                        <li><a href="blog-list.html">Blog List View</a></li>
                                        <li><a href="blog-single.html">Blog Single Post</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="project.html">Projects</a>
                                    <ul>
                                        <li><a href="project-grid.html">Grid View</a></li>
                                        <li><a href="project-grid-with-text.html">Grid With Text</a></li>
                                        <li><a href="project.html">Projects Gallery Style</a></li>
                                        <li><a href="project-single.html">Projects Single Post</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="shop.html">Shop</a>
                                    <ul>
                                        <li><a href="shop.html">Shop Products</a></li>
                                        <li><a href="shop-single.html">Single Product</a></li>
                                        <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="account.html">My Account</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!--End mainmenu-->
                </div>
            </div>
        </div>
    </div>
</section>

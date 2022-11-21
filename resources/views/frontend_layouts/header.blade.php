<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-4 col-sm-12 col-xs-12">
                <div class="logo">
                    <a href="{{ route('beranda') }}">
                        <img src="{{ asset('uploads/' . $master->logo) }}" alt="Awesome Logo">
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
                                <h6>Telepon</h6>
                                <p>{{ $master->phone }}</p>
                            </div>
                        </li>
                        <li>
                            <div class="iocn-holder">
                                <span class="icon-letter top-envelop"></span>
                            </div>
                            <div class="text-holder">
                                <h6>Email</h6>
                                <p>{{ $master->email }}</p>
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
                                <li class="home {{ current_class(['beranda']) }}"><a href="{{ route('beranda') }}"><span
                                            class="fa fa-home"></span></a></li>
                                <li class="dropdown {{ current_class(['berita', 'beritaCategory', 'detailBerita']) }}">
                                    <a href="{{ route('berita') }}">Berita</a>
                                    <ul>
                                        @foreach ($masterBeritaCategories as $masterBeritaCategory)
                                            <li><a
                                                    href="{{ route('beritaCategory', $masterBeritaCategory->id) }}">{{ $masterBeritaCategory->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li
                                    class="dropdown {{ current_class(['kegiatan', 'kegiatanCategory', 'detailKegiatan']) }}">
                                    <a href="{{ route('kegiatan') }}">Kegiatan</a>
                                    <ul>
                                        @foreach ($kegiatans as $kegiatan)
                                            <li><a
                                                    href="{{ route('kegiatanCategory', $kegiatan->id) }}">{{ $kegiatan->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="dropdown {{ current_class(['kebijakan']) }}"><a href="#">Kebijakan</a>
                                    <ul>
                                        @foreach ($kebijakanCategories as $kebijakanCategory)
                                            <li><a
                                                    href="{{ route('kebijakan', $kebijakanCategory->id) }}">{{ $kebijakanCategory->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!--End mainmenu-->
                </div>
            </div>
        </div>
    </div>
</section>

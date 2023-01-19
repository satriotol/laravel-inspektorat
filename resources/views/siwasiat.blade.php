<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <!-- title -->
    <title>Si Wasiat</title>
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('siwasiat_assets/css/bootstrap.min.css') }}" />
    <!-- fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('siwasiat_assets/css/fontawesome.min.css') }}" />
    <!-- envy icon CSS -->
    <link rel="stylesheet" href="{{ asset('siwasiat_assets/css/envyicon.min.css') }}" />
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('siwasiat_assets/css/animate.min.css') }}" />
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="{{ asset('siwasiat_assets/css/magnific-popup.min') }}.css" />
    <!-- owl-carousel CSS -->
    <link rel="stylesheet" href="{{ asset('siwasiat_assets/css/owl.carousel.min') }}.css" />
    <!-- meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('siwasiat_assets/css/meanmenu.min.css') }}" />
    <!-- main style CSS -->
    <link rel="stylesheet" href="{{ asset('siwasiat_assets/css/style.css') }}" />
    <!-- responsive CSS -->
    <link rel="stylesheet" href="{{ asset('siwasiat_assets/css/responsive.css') }}" />
    <!-- favicon -->
    <link rel="icon" href="{{ asset('siwasiat_assets/Asset 2.png') }}" type="image/png" sizes="16x16" />
</head>

<body>
    <!-- start preloader area-->
    <div class="preloader-main">
        <div class="loader">
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
        </div>
    </div>
    <!--end preloader area -->

    <!-- start header area -->
    <header class="navbar-area">
        <div class="top-nav" style="background-color:#dc3545;">
            <!-- header top -->
            <div class="container d-flex justify-content-between">
                <!-- top left -->
                <div class="top-left">
                    <ul class="info-list">
                        <li>
                            <i class="envy envy-email"></i>
                            <a href="mailTo:siwasiat@semarangkota.go.id"
                                style="color:white;">siwasiat@semarangkota.go.id</a>
                        </li>
                        <li style="color:white;"><i class="envy envy-wall-clock"></i>Senin - Kamis: 08.00 - 16.00, Jumat
                            : 07.30 - 14.00</li>
                    </ul>
                </div>
                <!-- top right -->
                <div class="top-right">
                    <div class="social-link">
                        <a href="#" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="fab fa-tumblr"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
                <!-- top right -->

            </div>
        </div>
        <!-- menu for mobile device -->
        <div class="mobile-nav">
            <a href="index.html" class="logo">
                <img src="{{ asset('siwasiat_assets/Asset 2.png') }}" alt="logo_light" />
                <img src="{{ asset('siwasiat_assets/Asset 2.png') }}" alt="logo-dark" />
            </a>
        </div>
        <!-- menu for desktop device-->
        <div class="main-nav">
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('siwasiat_assets/Asset 2.png') }}" width="200px" alt="logo_light" />
                        <img src="{{ asset('siwasiat_assets/Asset 2.png') }}" width="200px" alt="logo-dark" />
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">

                            <li class="nav-item">
                                <a href="/" class="nav-link"> Beranda </a>
                            </li>
                            <li class="nav-item">
                                <a href="#aplikasi" class="nav-link"> Aplikasi </a>
                            </li>

                        </ul>



                    </div>
                </div>
            </nav>
        </div>
    </header>


    <div id="home" class="home-banner-area banner-type-one"
        style="background: url({{ asset('siwasiat_assets/img/banner/banner_1.png') }}) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
        <div class="home-slider owl-carousel">
            <div class="item">
                <div class="container">
                    <div class="banner-content">
                        <h1>Selamat Datang di Website</h1>
                        <p>
                            SIWASIAT (Sistem Informasi Pengawasan Inspektorat)
                        </p>

                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="banner-content">
                        <h1>Selamat Datang di Website</h1>
                        <p>
                            SIWASIAT (Sistem Informasi Pengawasan Inspektorat)
                        </p>

                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="banner-content">
                        <h1>Selamat Datang di Website</h1>
                        <p>
                            SIWASIAT (Sistem Informasi Pengawasan Inspektorat)
                        </p>

                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="banner-content">
                        <h1>Selamat Datang di Website</h1>
                        <p>
                            SIWASIAT (Sistem Informasi Pengawasan Inspektorat)
                        </p>

                    </div>
                </div>
            </div>


        </div>
    </div>

    <!--start about section-->
    <section id="aplikasi" class="about-section ptb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-sm-12 pb-30">
                    <div class="section-title">
                        <span class="subtitle">Daftar</span>
                        <h2>APLIKASI PENGAWASAN INSPEKTORAT</h2>
                    </div>
                    <div class="about-text-blc">
                        <p></p>
                    </div>
                    <div class="row">

                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <a href="https://saberpungli.inspektorat.semarangkota.go.id/" target="_blank">
                                        <div class="single-feature">
                                            <div class="single-feature-content">
                                                <i class="envy envy-cloud-computing1"></i>
                                                <h3 class="mt-3">Saber Pungli</h3>
                                            </div>
                                            <div class="hover-overlay"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <a href="https://gratifikasi.inspektorat.semarangkota.go.id/" target="_blank">
                                        <div class="single-feature">
                                            <div class="single-feature-content">
                                                <i class="envy envy-code2"></i>
                                                <h3 class="mt-3">SIM Gratifikasi</h3>
                                            </div>
                                            <div class="hover-overlay"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <a href="https://inspektorat.semarangkota.go.id/simwas" target="_blank">
                                        <div class="single-feature">
                                            <div class="single-feature-content">
                                                <i class="envy envy-binoculars"></i>
                                                <h3 class="mt-3">Simwas</h3>
                                            </div>
                                            <div class="hover-overlay"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <a href="https://korsupgah.inspektorat.semarangkota.go.id/" target="_blank">
                                        <div class="single-feature">
                                            <div class="single-feature-content">
                                                <i class="envy envy-print"></i>
                                                <h3 class="mt-3">Korsupgah</h3>
                                            </div>
                                            <div class="hover-overlay"></div>
                                        </div>
                                    </a>
                                </div>
                                <!--<div class="col-lg-4 col-md-6 col-sm-6">-->
                                <!--    <a href="https://inspektorat.semarangkota.go.id/sp" target="_blank">-->
                                <!--    <div class="single-feature">-->
                                <!--        <div class="single-feature-content">-->
                                <!--            <i class="envy envy-file-1"></i>-->
                                <!--            <h3 class="mt-3">SPT Reguler</h3>-->
                                <!--        </div>-->
                                <!--        <div class="hover-overlay"></div>-->
                                <!--    </div>-->
                                <!--    </a>-->
                                <!--</div>-->
                                <!--<div class="col-lg-4 col-md-6 col-sm-6">-->
                                <!--    <a href="https://inspektorat.semarangkota.go.id/sp" target="_blank">-->
                                <!--    <div class="single-feature">-->
                                <!--        <div class="single-feature-content">-->
                                <!--            <i class="envy envy-server"></i>-->
                                <!--            <h3 class="mt-3">SP BLUD</h3>-->
                                <!--        </div>-->
                                <!--        <div class="hover-overlay"></div>-->
                                <!--    </div>-->
                                <!--    </a>-->
                                <!--</div>-->

                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <a href="https://lugasinspektorat.semarangkota.go.id/index.php#" target="_blank">
                                        <div class="single-feature">
                                            <div class="single-feature-content">
                                                <i class="envy envy-paper-plane"></i>
                                                <h3 class="mt-3">SPPD</h3>
                                            </div>
                                            <div class="hover-overlay"></div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <a href="https://ppupd.inspektorat.semarangkota.go.id/" target="_blank">
                                        <div class="single-feature">
                                            <div class="single-feature-content">
                                                <i class="envy envy-cloud-computing-2"></i>
                                                <h3 class="mt-3">PPUPD</h3>
                                            </div>
                                            <div class="hover-overlay"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>

    <footer class="footer-area pt-100 pb-70"
        style=" background: url(https://www.kibrispdr.org/data/background-flat-design-hd-3.png) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="footer-widget">
                        <div class="navbar-brand">
                            <a href="/">
                                <img src="{{ asset('siwasiat_assets/Asset 2.png') }}" alt="image" />
                            </a>
                        </div>
                        <p></p>
                        <div class="social-link">
                            <a href="#" class="bg-tertiary" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="bg-success" target="_blank">
                                <i class="fab fa-tumblr"></i>
                            </a>
                            <a href="#" class="bg-danger" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a href="#" class="bg-info" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="bg-pink" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="footer-widget">
                        <h5>Link Terkait</h5>
                        <ul class="footer-quick-links">
                            <li>
                                <a target="_blank" href="https://www.kpk.go.id/">KPK</a>
                            </li>
                            <li>
                                <a target="_blank" href="https://inspektorat.jatengprov.go.id/">Inspektorat Jateng</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://inspektorat.semarangkota.go.id/">Inspektorat Kota
                                    Semarang</a>
                            </li>
                            <li>
                                <a target="_blank" href="http://semarangkota.go.id/">Semarangkota.go.id</a>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="footer-widget">
                        <h5>Maps</h5>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.228734016536!2d110.41063631400331!3d-6.982312570313518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4eefbc58d1%3A0x75b749227ffa9965!2sInspektorat%20Daerah%20Kota%20Semarang!5e0!3m2!1sid!2sid!4v1643254052213!5m2!1sid!2sid"
                            width="100%" height="300" style="border:0;" allowfullscreen=""
                            loading="lazy"></iframe>



                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer area -->

    <!-- start copy right area -->
    <div class="copy-right-area">
        <div class="container">
            <div class="copy-right-content">
                <p>
                    Copyright @2022 SI WASIAT

                </p>
            </div>
        </div>
    </div>
    <!-- end copy right area-->

    <!-- jequery JS -->
    <script src="{{ asset('siwasiat_assets/js/jquery.min.js') }}"></script>
    <!-- bootstrap JS -->
    <script src="{{ asset('siwasiat_assets/js/bootstrap.min.js') }}"></script>
    <!-- popper JS -->
    <script src="{{ asset('siwasiat_assets/js/popper.min.js') }}"></script>
    <!-- magnific popup JS -->
    <script src="{{ asset('siwasiat_assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- owl carousel JS -->
    <script src="{{ asset('siwasiat_assets/js/owl.carousel.min.js') }}"></script>
    <!-- meanmenu JS -->
    <script src="{{ asset('siwasiat_assets/js/meanmenu.min.js') }}"></script>
    <!-- form validator -->
    <script src="{{ asset('siwasiat_assets/js/form-validator.min.js') }}"></script>
    <!-- contact form JS -->
    <script src="{{ asset('siwasiat_assets/js/contact-form-script.js') }}"></script>
    <!-- ajaxchimp JS -->
    <script src="{{ asset('siwasiat_assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <!-- main JS -->
    <script src="{{ asset('siwasiat_assets/js/main.js') }}"></script>
</body>

</html>

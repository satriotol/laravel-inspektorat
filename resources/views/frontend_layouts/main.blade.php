<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>INSPEKTORAT - KOTA SEMARANG</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- master stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/style.css') }}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/responsive.css') }}">
    <!-- Accordeon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('uploads/' . $master->logo) }}">
    <link rel="icon" type="image/png" href="{{ asset('uploads/' . $master->logo) }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('uploads/' . $master->logo) }}" sizes="16x16">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @stack('head')
    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->
    @stack('css')
    <style>
        .breadcrumb-area {
            background: linear-gradient(0deg, rgba(185, 185, 185, 0.3), rgba(255, 255, 255, 0.3)), url('{{ asset('uploads/' . $master->banner) }}');
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }

        .row-flex {
            display: flex;
            flex-wrap: wrap;
        }

        .text-red {
            color: #f60035;
            font-weight: bold;
        }

        .w-100 {
            width: 100%;
        }

        .h-100 {
            height: 100%;
        }

        .ct-socials {
            position: fixed;
            top: 25%;
            right: 0;
            list-style: none;
            padding-left: 0;
            z-index: 1000;
            margin: 0;
            -webkit-transition: right 0.25s ease-in-out;
            transition: right 0.25s ease-in-out;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .ct-socials li {
            padding: 0px 0;
        }

        .ct-socials li a {
            background: #3f4653;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            color: #fff;
            width: 100px;
            height: 54px;
            -webkit-transition: all 0.15s ease-in-out;
            transition: all 0.15s ease-in-out;
            float: right;
            padding-left: 5px;
        }

        .ct-socials li a:hover {
            width: 150px;
            padding-left: 0;
            text-decoration: none;
            background: #f60035;
        }
    </style>

</head>

<body>
    <div class="boxed_wrapper">
        <!--Start Preloader -->
        {{-- <div class="preloader"></div> --}}
        <!--End Preloader -->
        @include('frontend_layouts.header')
        <ul class="ct-socials">
            @foreach ($layananLinks as $layananLink)
                <li>
                    <a href="{{ $layananLink->whatsapp_url }}" target="_blank"> <img
                            style="height: 100%; object-fit: contain;"
                            src="{{ asset('uploads/' . $layananLink->image) }}"></a>
                </li>
            @endforeach
        </ul>
        @yield('content')

        <!--Start footer area-->
        <footer class="footer-area" style="background-image:url({{ asset('uploads/' . $master->background) }});">
            <div class="footer-top-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="footer-top-content">
                                <div class="title pull-left">
                                    {{-- <h3>Over 20 years of experience we will ensure you always get the best.</h3> --}}
                                </div>
                                <div class="button pull-right">
                                    {{-- <a class="thm-btn bg-clr1" href="#">Book Consultation</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-footer-widget pd-bottom">
                            <div class="footer-logo">
                                <a href="{{ route('beranda') }}">
                                    <img src="{{ asset('uploads/' . $master->logo) }}" alt="Awesome Footer Logo">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-footer-widget wedo pd-left pd-bottom">
                            <div class="title">
                                <h3>Link Terkait</h3>
                            </div>
                            <ul class="we-do-list">
                                @foreach ($terkaitLinks as $terkaitLink)
                                    <li><a href="{{ $terkaitLink->url }}" target="_blank">{{ $terkaitLink->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-footer-widget">
                            <div class="title">
                                <h3>Berita Terakhir</h3>
                            </div>
                            <ul class="latest-news-items">
                                @foreach ($latestBeritas as $latestBerita)
                                    <li>
                                        <a href="{{ route('detailBerita', $latestBerita->id) }}">
                                            {{ $latestBerita->title }}
                                        </a>
                                        <p>{{ $latestBerita->created_at }}</p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-footer-widget pd-top pd-left">
                            <div class="title">
                                <h3>Kontak Kami</h3>
                            </div>
                            <ul class="footer-contact-info">
                                <li>
                                    <div class="icon-holder">
                                        <span class="icon-technology-1"></span>
                                    </div>
                                    <div class="text-holder">
                                        <p>Telepon: {{ $master->phone }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-holder">
                                        <span class="icon-letter-1 bottom-envelop"></span>
                                    </div>
                                    <div class="text-holder">
                                        <p>{{ $master->email }}</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <section class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-bottom">
                            <div class="copyright-text pull-left">
                                <p>Copyrights © 2022 All Rights Reserved, Powered by <a
                                        href="https://semarangkota.go.id/" target="_blank">Semarang Kota</a>
                                </p>
                            </div>
                            <div class="footer-menu pull-right">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End footer bottom area-->

        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

        <!-- main jQuery -->
        <script src="{{ asset('frontend_assets/js/jquery-1.11.1.min.js') }}"></script>
        <!-- bootstrap -->
        <script src="{{ asset('frontend_assets/js/bootstrap.min.js') }}"></script>
        <!-- bx slider -->
        <script src="{{ asset('frontend_assets/js/jquery.bxslider.min.js') }}"></script>
        <!-- count to -->
        <script src="{{ asset('frontend_assets/js/jquery.countTo.js') }}"></script>
        <!-- owl carousel -->
        <script src="{{ asset('frontend_assets/js/owl.carousel.min.js') }}"></script>
        <!-- validate -->
        <script src="{{ asset('frontend_assets/js/validation.js') }}"></script>
        <!-- mixit up -->
        <script src="{{ asset('frontend_assets/js/jquery.mixitup.min.js') }}"></script>
        <!-- easing -->
        <script src="{{ asset('frontend_assets/js/jquery.easing.min.js') }}"></script>
        <!-- gmap helper -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
        <!--gmap script-->
        <script src="{{ asset('frontend_assets/js/gmaps.js') }}"></script>
        <script src="{{ asset('frontend_assets/js/map-helper.js') }}"></script>
        <!-- fancy box -->
        <script src="{{ asset('frontend_assets/js/jquery.fancybox.pack.js') }}"></script>
        <script src="{{ asset('frontend_assets/js/jquery.appear.js') }}"></script>
        <!-- isotope script-->
        <script src="{{ asset('frontend_assets/js/isotope.js') }}"></script>
        <script src="{{ asset('frontend_assets/js/jquery.prettyPhoto.js') }}"></script>
        <script src="{{ asset('frontend_assets/js/jquery.bootstrap-touchspin.js') }}"></script>
        <!-- jQuery timepicker js -->
        <script src="{{ asset('frontend_assets/assets/timepicker/timePicker.js') }}"></script>
        <!-- Bootstrap select picker js -->
        <script src="{{ asset('frontend_assets/assets/bootstrap-sl-1.12.1/bootstrap-select.js') }}"></script>
        <!-- Bootstrap bootstrap touchspin js -->
        <!-- jQuery ui js -->
        <script src="{{ asset('frontend_assets/assets/jquery-ui-1.11.4/jquery-ui.js') }}"></script>
        <!-- Language Switche  -->
        <script src="{{ asset('frontend_assets/assets/language-switcher/jquery.polyglot.language.switcher.js') }}"></script>
        <!-- Html 5 light box script-->
        <script src="{{ asset('frontend_assets/assets/html5lightbox/html5lightbox.js') }}"></script>

        <!-- revolution slider js -->
        <script src="{{ asset('frontend_assets/assets/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('frontend_assets/assets/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
        <script src="{{ asset('frontend_assets/assets/revolution/js/extensions/revolution.extension.actions.min.js') }}">
        </script>
        <script src="{{ asset('frontend_assets/assets/revolution/js/extensions/revolution.extension.carousel.min.js') }}">
        </script>
        <script src="{{ asset('frontend_assets/assets/revolution/js/extensions/revolution.extension.kenburn.min.js') }}">
        </script>
        <script
            src="{{ asset('frontend_assets/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}">
        </script>
        <script src="{{ asset('frontend_assets/assets/revolution/js/extensions/revolution.extension.migration.min.js') }}">
        </script>
        <script src="{{ asset('frontend_assets/assets/revolution/js/extensions/revolution.extension.navigation.min.js') }}">
        </script>
        <script src="{{ asset('frontend_assets/assets/revolution/js/extensions/revolution.extension.parallax.min.js') }}">
        </script>
        <script src="{{ asset('frontend_assets/assets/revolution/js/extensions/revolution.extension.slideanims.min.js') }}">
        </script>
        <script src="{{ asset('frontend_assets/assets/revolution/js/extensions/revolution.extension.video.min.js') }}">
        </script>

        <!-- accordeon js -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


        <!-- thm custom script -->
        <script src="{{ asset('frontend_assets/js/custom.js') }}"></script>
        @stack('custom-scripts')




    </div>
</body>

</html>

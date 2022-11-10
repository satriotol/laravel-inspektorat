<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="INSPEKTORAT SEMARANG">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend_assets/images/brand/favicon.ico') }}" />

    <!-- TITLE -->
    <title>INSPEKTORAT SEMARANG</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('backend_assets/plugins/bootstrap/css/bootstrap.min.css') }}"
        rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{ asset('backend_assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend_assets/css/dark-style.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend_assets/css/transparent-style.css') }}" rel="stylesheet">
    <link href="{{ asset('backend_assets/css/skin-modes.css') }}" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('backend_assets/css/icons.css') }}" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all"
        href="{{ asset('backend_assets/colors/color1.css') }}" />
    @stack('style')

</head>

<body class="app sidebar-mini ltr">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{ asset('backend_assets/images/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">
            @include('backend_layouts.header')
            @include('backend_layouts.sidebar')
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Empty</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Empty</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 OPEN -->
                        <!-- Row -->
                        <div class="row ">
                            <div class="col-md-12">
                            </div>
                        </div>
                        <!-- /Row -->
                    </div>
                    <!-- CONTAINER CLOSED -->
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        @include('backend_layouts.footer')
        <!-- FOOTER CLOSED -->
    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="{{ asset('backend_assets/js/jquery.min.js') }}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('backend_assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('backend_assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- SPARKLINE JS-->
    <script src="{{ asset('backend_assets/js/jquery.sparkline.min.js') }}"></script>

    <!-- SIDE-MENU JS -->
    <script src="{{ asset('backend_assets/plugins/sidemenu/sidemenu.js') }}"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{ asset('backend_assets/plugins/p-scroll/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('backend_assets/plugins/p-scroll/pscroll.js') }}"></script>
    {{-- <script src="{{ asset('backend_assets/plugins/p-scroll/pscroll-1.js') }}"></script> --}}

    <!-- SIDEBAR JS -->
    <script src="{{ asset('backend_assets/plugins/sidebar/sidebar.js') }}"></script>

    <!-- Color Theme js -->
    <script src="{{ asset('backend_assets/js/themeColors.js') }}"></script>

    <!-- Sticky js -->
    <script src="{{ asset('backend_assets/js/sticky.js') }}"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('backend_assets/js/custom.js') }}"></script>

</body>

</html>

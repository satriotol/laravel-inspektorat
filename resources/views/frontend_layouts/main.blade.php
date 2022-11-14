<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home || Assurance || Responsive HTML 5 Template</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- master stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/style.css') }}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/responsive.css') }}">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="images/favicon/favicon-16x16.png" sizes="16x16">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->

</head>

<body>
    <div class="boxed_wrapper">
        <!--Start Preloader -->
        {{-- <div class="preloader"></div> --}}
        <!--End Preloader -->
        @include('frontend_layouts.header')
        <!--Start rev slider wrapper-->
        <section class="rev_slider_wrapper">
            <div id="slider1" class="rev_slider" data-version="5.0">
                <ul>

                    <li data-transition="slidingoverlayleft">
                        <img src="{{ asset('frontend_assets/images/slides/1.jpg') }}" alt="" width="1920"
                            height="550" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            data-bgparallax="1">

                        <div class="tp-caption  tp-resizeme" data-x="left" data-hoffset="0" data-y="top"
                            data-voffset="130" data-transform_idle="o:1;"
                            data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                            data-responsive_offset="on" data-start="700">
                            <div class="slide-content-box">
                                <h1>Right place to <br>begin your business </h1>
                                <p>With over 10 years of experience helping businesses to find<br>comprehensive
                                    solutions.</p>
                            </div>
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="0" data-y="top"
                            data-voffset="358" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2300">
                            <div class="slide-content-box">
                                <div class="button">
                                    <a class="thm-btn bg-clr1" href="#">Meet Experts</a>
                                </div>
                            </div>
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="182" data-y="top"
                            data-voffset="358" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2600">
                            <div class="slide-content-box">
                                <div class="button">
                                    <a class="thm-btn bg-clr2" href="#">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-transition="fade">
                        <img src="{{ asset('frontend_assets/images/slides/2.jpg') }}" alt="" width="1920"
                            height="550" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            data-bgparallax="1">

                        <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="0" data-y="center"
                            data-voffset="-47" data-transform_idle="o:1;"
                            data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                            data-start="500">
                            <div class="slide-content-box middle-slide">
                                <h1>Growth doesn’t<br>come without hard work</h1>
                            </div>
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="0" data-y="center"
                            data-voffset="75" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2300">
                            <div class="slide-content-box middle-slide">
                                <div class="button">
                                    <a href="#">Work With us today</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-transition="slidingoverlayright">
                        <img src="{{ asset('frontend_assets/images/slides/3.jpg') }}" alt="" width="1920"
                            height="550" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            data-bgparallax="1">

                        <div class="tp-caption  tp-resizeme" data-x="left" data-hoffset="0" data-y="top"
                            data-voffset="130" data-transform_idle="o:1;"
                            data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                            data-responsive_offset="on" data-start="700">
                            <div class="slide-content-box">
                                <h1>We help businesses<br>innovate and grow.</h1>
                                <p>With over 10 years of experience helping businesses to find <br>comprehensive
                                    solutions.</p>
                            </div>
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="0" data-y="top"
                            data-voffset="358" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2300">
                            <div class="slide-content-box">
                                <div class="button">
                                    <a class="thm-btn bg-clr1" href="#">Our Company</a>
                                </div>
                            </div>
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="left" data-hoffset="182" data-y="top"
                            data-voffset="358" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on" data-start="2600">
                            <div class="slide-content-box">
                                <div class="button">
                                    <a class="thm-btn bg-clr2" href="#">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </section>
        <!--End rev slider wrapper-->

        <!--Start call to action area-->
        <section class="call-to-action-area">
            <div class="container">
                <div class="title text-center">
                    <h3>We are the leading provider of client solutions with over 10 years of experience helping
                        businesses to find comprehensive solutions and high growth.</h3>
                    <p>Assurance is right choice for all type of business, See our services</p>
                </div>
                <div class="row">
                    <!--Start single item-->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-item hvr-shadow text-center">
                            <div class="img-holder">
                                <img src="images/callto-action/1.jpg" alt="Awesome Image">
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <a href="business-planning.html"><i class="fa fa-link"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <h3>Business Planning</h3>
                                <p>The process of improving measure of an enterpprise's success. Business growth can be
                                    a achieved.</p>
                            </div>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-item hvr-shadow text-center">
                            <div class="img-holder">
                                <img src="images/callto-action/2.jpg" alt="Awesome Image">
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <a href="audit-assurance.html"><i class="fa fa-link"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <h3>Audit & Assurance</h3>
                                <p>Sustainability is a priority interest for many of organizations, when it comes to
                                    sustainability & corporate.</p>
                            </div>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-item hvr-shadow text-center">
                            <div class="img-holder">
                                <img src="images/callto-action/3.jpg" alt="Awesome Image">
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <a href="trades-stocks.html"><i class="fa fa-link"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <h3>Trades & Stocks</h3>
                                <p>The process of improving measure of an enterpprise's success. Business growth can be
                                    a achieved.</p>
                            </div>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-item hvr-shadow text-center">
                            <div class="img-holder">
                                <img src="images/callto-action/4.jpg" alt="Awesome Image">
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <a href="investment-plan.html"><i class="fa fa-link"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <h3>Investment Plan</h3>
                                <p>The process of improving measure of an enterpprise's success. Business growth can be
                                    a achieved.</p>
                            </div>
                        </div>
                    </div>
                    <!--End single item-->
                </div>
            </div>
        </section>
        <!--End call to action area-->

        <!--Start smart approach area-->
        <section class="smart-approach-area">
            <div class="container">
                <div class="sec-title text-center">
                    <h1>Our Smart Approach</h1>
                    <span class="border"></span>
                </div>
                <div class="row">
                    <!--Start single item-->
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="single-item text-center">
                            <div class="icon-box">
                                <span class="icon-mathematics"></span>
                            </div>
                            <div class="text-box">
                                <h3>Financial Service</h3>
                                <p>Our financial experts help analyze financial data, to create steady financial
                                    foundation.</p>
                            </div>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="single-item text-center">
                            <div class="icon-box">
                                <span class="icon-science"></span>
                            </div>
                            <div class="text-box">
                                <h3>Manufacturing</h3>
                                <p>Electronic Materials has servd the semicondctor industry as a leading-edge materials.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="single-item text-center">
                            <div class="icon-box">
                                <span class="icon-science-1"></span>
                            </div>
                            <div class="text-box">
                                <h3>Medical & Health Care</h3>
                                <p>Electronic Materials has served semiconductor a leading-edge materials.</p>
                            </div>
                        </div>
                    </div>
                    <!--End single item-->
                </div>
            </div>
        </section>
        <!--End smart approach area-->

        <!--Start fact counter area-->
        <section class="fact-counter-area" style="background-image:url(images/resources/fact-counter-bg.jpg);">
            <div class="container">
                <div class="row">
                    <!--Start single item-->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-item text-center">
                            <h1><span class="timer" data-from="1" data-to="2456" data-speed="5000"
                                    data-refresh-interval="50">2456</span></h1>
                            <span class="border"></span>
                            <h3>Projects Completed</h3>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-item text-center">
                            <h1><span class="timer" data-from="1" data-to="146" data-speed="5000"
                                    data-refresh-interval="50">146</span><i class="fa fa-plus"
                                    aria-hidden="true"></i></h1>
                            <span class="border"></span>
                            <h3>Expert Technicians</h3>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-item text-center">
                            <h1><span class="timer" data-from="1" data-to="853" data-speed="5000"
                                    data-refresh-interval="50">853</span><i class="fa fa-plus"
                                    aria-hidden="true"></i></h1>
                            <span class="border"></span>
                            <h3>Happy Customers</h3>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-item text-center">
                            <h1><span class="timer" data-from="1" data-to="2381" data-speed="5000"
                                    data-refresh-interval="50">2381</span></h1>
                            <span class="border"></span>
                            <h3>Cups of Coffee</h3>
                        </div>
                    </div>
                    <!--End single item-->

                </div>
            </div>
        </section>
        <!--End fact counter area-->

        <!--Start latest project area-->
        <section class="latest-project-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="project-filter post-filter pull-left">
                            <li class="active" data-filter=".filter-item"><span>View All</span></li>
                            <li data-filter=".consulting"><span>Consulting</span></li>
                            <li data-filter=".finance"><span>Finance</span></li>
                            <li data-filter=".marketing"><span>Marketing</span></li>
                            <li data-filter=".growth"><span>Growth</span></li>
                        </ul>
                        <div class="more-project pull-right">
                            <a href="project.html">More Projects<i class="fa fa-chevron-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row project-content masonary-layout filter-layout">
                    <!--Start single project-->
                    <div class="col-md-4 col-sm-4 col-xs-12 filter-item consulting growth">
                        <div class="single-project text-center">
                            <div class="outer-img-box">
                                <div class="img-holder">
                                    <img src="images/project/lat-pro-1.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <div class="icon-holder">
                                                    <a href="images/project/lat-pro-1.jpg" data-rel="prettyPhoto"
                                                        title="Assurance Project"><i class="fa fa-camera"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="title-holder">
                                <a href="project-single.html">
                                    <h5>Consumer Products</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--End single project-->
                    <!--Start single project-->
                    <div class="col-md-4 col-sm-4 col-xs-12 filter-item growth marketing">
                        <div class="single-project text-center">
                            <div class="outer-img-box">
                                <div class="img-holder">
                                    <img src="images/project/lat-pro-2.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <div class="icon-holder">
                                                    <a href="images/project/lat-pro-2.jpg" data-rel="prettyPhoto"
                                                        title="Assurance Project"><i class="fa fa-camera"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="title-holder">
                                <a href="project-single.html">
                                    <h5>Financial Income</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--End single project-->
                    <!--Start single project-->
                    <div class="col-md-4 col-sm-4 col-xs-12 filter-item consulting finance marketing">
                        <div class="single-project text-center">
                            <div class="outer-img-box">
                                <div class="img-holder">
                                    <img src="images/project/lat-pro-3.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <div class="icon-holder">
                                                    <a href="images/project/lat-pro-3.jpg" data-rel="prettyPhoto"
                                                        title="Assurance Project"><i class="fa fa-camera"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="title-holder">
                                <a href="project-single.html">
                                    <h5>Business Growth</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--End single project-->
                    <!--Start single project-->
                    <div class="col-md-4 col-sm-4 col-xs-12 filter-item consulting marketing finance">
                        <div class="single-project text-center">
                            <div class="outer-img-box">
                                <div class="img-holder">
                                    <img src="images/project/lat-pro-4.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <div class="icon-holder">
                                                    <a href="images/project/lat-pro-4.jpg" data-rel="prettyPhoto"
                                                        title="Assurance Project"><i class="fa fa-camera"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="title-holder">
                                <a href="project-single.html">
                                    <h5>Strategy & Development</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--End single project-->
                    <!--Start single project-->
                    <div class="col-md-4 col-sm-4 col-xs-12 filter-item consulting growth marketing">
                        <div class="single-project text-center">
                            <div class="outer-img-box">
                                <div class="img-holder">
                                    <img src="images/project/lat-pro-5.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <div class="icon-holder">
                                                    <a href="images/project/lat-pro-5.jpg" data-rel="prettyPhoto"
                                                        title="Assurance Project"><i class="fa fa-camera"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="title-holder">
                                <a href="project-single.html">
                                    <h5>International Meet</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--End single project-->
                    <!--Start single project-->
                    <div class="col-md-4 col-sm-4 col-xs-12 filter-item consulting finance">
                        <div class="single-project text-center">
                            <div class="outer-img-box">
                                <div class="img-holder">
                                    <img src="images/project/lat-pro-6.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <div class="icon-holder">
                                                    <a href="images/project/lat-pro-6.jpg" data-rel="prettyPhoto"
                                                        title="Assurance Project"><i class="fa fa-camera"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="title-holder">
                                <a href="project-single.html">
                                    <h5>Employees Skills</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--End single project-->
                </div>
            </div>
        </section>
        <!--End latest project area-->

        <!--Start team area-->
        <section class="team-area">
            <div class="container">
                <div class="sec-title text-center">
                    <h1>Meet Our Team</h1>
                    <span class="border"></span>
                </div>
                <div class="row">
                    <!--star single tema-->
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="single-team hvr-float-shadow text-center">
                            <div class="img-holder">
                                <img src="images/team/1.jpg" alt="Awesome Image">
                            </div>
                            <div class="title-holder">
                                <h3>Brown Angelino</h3>
                                <p>President</p>
                            </div>
                        </div>
                    </div>
                    <!--End single tema-->
                    <!--star single tema-->
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="single-team hvr-float-shadow text-center">
                            <div class="img-holder">
                                <img src="images/team/2.jpg" alt="Awesome Image">
                            </div>
                            <div class="title-holder">
                                <h3>Astley Fletcher</h3>
                                <p>Founder</p>
                            </div>
                        </div>
                    </div>
                    <!--End single tema-->
                    <!--star single tema-->
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="single-team hvr-float-shadow text-center">
                            <div class="img-holder">
                                <img src="images/team/3.jpg" alt="Awesome Image">
                            </div>
                            <div class="title-holder">
                                <h3>Jones Antony</h3>
                                <p>Manager</p>
                            </div>
                        </div>
                    </div>
                    <!--End single tema-->
                    <!--star single tema-->
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="single-team hvr-float-shadow text-center">
                            <div class="img-holder">
                                <img src="images/team/4.jpg" alt="Awesome Image">
                            </div>
                            <div class="title-holder">
                                <h3>Venanda Bond</h3>
                                <p>Designer</p>
                            </div>
                        </div>
                    </div>
                    <!--End single tema-->
                    <!--star single tema-->
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="single-team hvr-float-shadow text-center">
                            <div class="img-holder">
                                <img src="images/team/5.jpg" alt="Awesome Image">
                            </div>
                            <div class="title-holder">
                                <h3>Toom Russel</h3>
                                <p>Accountant</p>
                            </div>
                        </div>
                    </div>
                    <!--End single tema-->
                    <!--star single tema-->
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="single-team hvr-float-shadow text-center">
                            <div class="img-holder">
                                <img src="images/team/6.jpg" alt="Awesome Image">
                            </div>
                            <div class="title-holder">
                                <h3>Bernett Rotty</h3>
                                <p>Chairman</p>
                            </div>
                        </div>
                    </div>
                    <!--End single tema-->
                </div>
            </div>
        </section>
        <!--End team area-->

        <!--Start video gallery area-->
        <section class="video-gallery-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="text-holder">
                            <h3>Everyboy has something important to say! assurance also.</h3>
                            <div class="text">
                                <p>We have built an enviable reputation in the consumer goods, heavy industry,
                                    high-tech, manufacturing, medical, recreational vehicle, and transportation sectors.
                                    multidisciplinary team of engineering experts.</p>
                                <p>Who loves or pursues or desires to obtain pain of itself, because it is pain, but
                                    because occasionally circumstances occur in which toil and pain.</p>
                                <a class="thm-btn bg-clr1" href="#">Know More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="video-holder">
                            <img src="images/resources/video-gallery.jpg" alt="Awesome Video Gallery">
                            <div class="overlay-gallery">
                                <div class="icon-holder">
                                    <div class="icon">
                                        <a class="html5lightbox" title="Assurance Video Gallery"
                                            href="https://www.youtube.com/watch?v=XOv7RmXi7VE"><img
                                                src="images/icon/play-btn.png" alt="Play Button"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--End video gallery area-->

        <!--Start latest blog area-->
        <section class="latest-blog-area">
            <div class="container">
                <div class="sec-title text-center">
                    <h1>Latest News</h1>
                    <span class="border"></span>
                </div>
                <div class="row">
                    <!--Start single latest blog-->
                    <div class="col-md-4">
                        <div class="single-blog-post">
                            <div class="img-holder">
                                <img src="images/blog/lat-blog-1.jpg" alt="Awesome Image">
                                <div class="published-date">
                                    <h3>21 Aug</h3>
                                </div>
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <a href="blog-single.html"><i class="fa fa-link"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <a href="blog-single.html">
                                    <h3 class="blog-title">The best service ever get</h3>
                                </a>
                                <div class="text">
                                    <p>These men promptly escaped from maximum security stockade to the underground. The
                                        Brady Bunch the Brady Bunch.</p>
                                </div>
                                <div class="meta-info clearfix">
                                    <div class="left pull-left">
                                        <ul class="post-info">
                                            <li>By <a href="#">Fletcher</a></li>
                                            <li><a href="#">Finance, Service</a></li>
                                        </ul>
                                    </div>
                                    <div class="right pull-right">
                                        <a class="post-share" href="#"><i class="fa fa-share-alt"
                                                aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single latest blog-->
                    <!--Start single latest blog-->
                    <div class="col-md-4">
                        <div class="single-blog-post">
                            <div class="img-holder">
                                <img src="images/blog/lat-blog-2.jpg" alt="Awesome Image">
                                <div class="published-date">
                                    <h3>17 May</h3>
                                </div>
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <a href="blog-single.html"><i class="fa fa-link"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <a href="blog-single.html">
                                    <h3 class="blog-title">We never said impossible</h3>
                                </a>
                                <div class="text">
                                    <p>The ship set ground on the shore uncharted desert isle all with Gilligan seds
                                        that Skipper millionaire and wife. </p>
                                </div>
                                <div class="meta-info clearfix">
                                    <div class="left pull-left">
                                        <ul class="post-info">
                                            <li>By <a href="#">Robertson</a></li>
                                            <li><a href="#">Consulting, Idea</a></li>
                                        </ul>
                                    </div>
                                    <div class="right pull-right">
                                        <a class="post-share" href="#"><i class="fa fa-share-alt"
                                                aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single latest blog-->
                    <!--Start single latest blog-->
                    <div class="col-md-4">
                        <div class="single-blog-post">
                            <div class="img-holder">
                                <img src="images/blog/lat-blog-3.jpg" alt="Awesome Image">
                                <div class="published-date">
                                    <h3>24 Apr</h3>
                                </div>
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <a href="blog-single.html"><i class="fa fa-link"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <a href="blog-single.html">
                                    <h3 class="blog-title">Latest consulting seminar</h3>
                                </a>
                                <div class="text">
                                    <p>Team like us we had it made. Those were the days. Now were up in the big leagues
                                        getting our turn at bat skipper team.</p>
                                </div>
                                <div class="meta-info clearfix">
                                    <div class="left pull-left">
                                        <ul class="post-info">
                                            <li>By <a href="#">Peterson</a></li>
                                            <li><a href="#">Services, Corporate</a></li>
                                        </ul>
                                    </div>
                                    <div class="right pull-right">
                                        <a class="post-share" href="#"><i class="fa fa-share-alt"
                                                aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single latest blog-->
                </div>
            </div>
        </section>
        <!--End latest blog area-->

        <!--Start testimonial area-->
        <section class="testimonial-area" style="background-image:url(images/testimonial/testimonial-bg.jpg);">
            <div class="container">
                <div class="sec-title text-center">
                    <h1>What Our Customers say</h1>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="testimonial-carousel">
                            <!--Start single item-->
                            <div class="single-item text-center">
                                <div class="text-holder">
                                    <p>We help clients find ways to turn everyday information into actionable insights
                                        by embedding analytics across their organization’s strategy, operations, and all
                                        working systems.</p>
                                </div>
                                <div class="client-info">
                                    <div class="img-holder">
                                        <img src="images/testimonial/1.png" alt="Client Photo">
                                    </div>
                                    <div class="name">
                                        <h3>Robert Williamson</h3>
                                        <p>Newyork</p>
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="single-item text-center">
                                <div class="text-holder">
                                    <p>We help clients find ways to turn everyday information into actionable insights
                                        by embedding analytics across their organization’s strategy, operations, and all
                                        working systems.</p>
                                </div>
                                <div class="client-info">
                                    <div class="img-holder">
                                        <img src="images/testimonial/1.png" alt="Client Photo">
                                    </div>
                                    <div class="name">
                                        <h3>Robert Williamson</h3>
                                        <p>Newyork</p>
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="single-item text-center">
                                <div class="text-holder">
                                    <p>We help clients find ways to turn everyday information into actionable insights
                                        by embedding analytics across their organization’s strategy, operations, and all
                                        working systems.</p>
                                </div>
                                <div class="client-info">
                                    <div class="img-holder">
                                        <img src="images/testimonial/1.png" alt="Client Photo">
                                    </div>
                                    <div class="name">
                                        <h3>Robert Williamson</h3>
                                        <p>Newyork</p>
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End testimonial area-->

        <!--Start Brand area-->
        <section class="brand-area">
            <div class="container">
                <div class="sec-title">
                    <h1>Our Partners</h1>
                    <span class="border"></span>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="brand">
                            <!--Start single item-->
                            <a class="tool_tip" title="Media Partner" href="#">
                                <div class="single-item">
                                    <img src="images/brand/1.jpg" alt="Awesome Brand Image">
                                </div>
                            </a>
                            <!--End single item-->
                            <!--Start single item-->
                            <a class="tool_tip" title="Media Partner" href="#">
                                <div class="single-item">
                                    <img src="images/brand/2.jpg" alt="Awesome Brand Image">
                                </div>
                            </a>
                            <!--End single item-->
                            <!--Start single item-->
                            <a class="tool_tip" title="Media Partner" href="#">
                                <div class="single-item">
                                    <img src="images/brand/3.jpg" alt="Awesome Brand Image">
                                </div>
                            </a>
                            <!--End single item-->
                            <!--Start single item-->
                            <a class="tool_tip" title="Media Partner" href="#">
                                <div class="single-item" title="Media Partner">
                                    <img src="images/brand/4.jpg" alt="Awesome Brand Image">
                                </div>
                            </a>
                            <!--End single item-->
                            <!--Start single item-->
                            <a class="tool_tip" title="Media Partner" href="#">
                                <div class="single-item">
                                    <img src="images/brand/5.jpg" alt="Awesome Brand Image">
                                </div>
                            </a>
                            <!--End single item-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Brand area-->

        <!--Start footer area-->
        <footer class="footer-area" style="background-image:url(images/footer/footer-bg.jpg);">
            <div class="footer-top-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="footer-top-content">
                                <div class="title pull-left">
                                    <h3>Over 20 years of experience we will ensure you always get the best.</h3>
                                </div>
                                <div class="button pull-right">
                                    <a class="thm-btn bg-clr1" href="#">Book Consultation</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <!--Start single footer widget-->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-footer-widget pd-bottom">
                            <div class="footer-logo">
                                <a href="index.html">
                                    <img src="images/footer/footer-logo.png" alt="Awesome Footer Logo">
                                </a>
                            </div>
                            <div class="our-info">
                                <p>Our team offers the most up-to-date, sustainable manufacturing solutions. teachings
                                    of the great explorer of the truth We only source materials from tried and trusted
                                    suppliers.</p>
                            </div>
                        </div>
                    </div>
                    <!--End single footer widget-->
                    <!--Start single footer widget-->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-footer-widget wedo pd-left pd-bottom">
                            <div class="title">
                                <h3>What We Do</h3>
                            </div>
                            <ul class="we-do-list">
                                <li><a href="#">Business Growth</a></li>
                                <li><a href="#">Sustainability</a></li>
                                <li><a href="#">Performance</a></li>
                                <li><a href="#">Customer Insights</a></li>
                                <li><a href="#">Organization</a></li>
                                <li><a href="#">Advanced Analytics</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Start single footer widget-->
                    <!--Start single footer widget-->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-footer-widget">
                            <div class="title">
                                <h3>Latest News</h3>
                            </div>
                            <ul class="latest-news-items">
                                <li>
                                    <a href="#">
                                        Seminar for improve your business<br> profit & loss
                                    </a>
                                    <p>August 21, 2016</p>
                                </li>
                                <li>
                                    <a href="#">
                                        Experts Openion for save money<br> for your future.
                                    </a>
                                    <p>March 14, 2016</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--End single footer widget-->
                    <!--Start single footer widget-->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-footer-widget pd-top pd-left">
                            <div class="title">
                                <h3>Contact Us</h3>
                            </div>
                            <ul class="footer-contact-info">
                                <li>
                                    <div class="icon-holder">
                                        <span class="icon-world"></span>
                                    </div>
                                    <div class="text-holder">
                                        <p>22/121 Apple Street, New York,<br> NY 10012, USA</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-holder">
                                        <span class="icon-technology-1"></span>
                                    </div>
                                    <div class="text-holder">
                                        <p>Phone: +123-456-7890</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-holder">
                                        <span class="icon-letter-1 bottom-envelop"></span>
                                    </div>
                                    <div class="text-holder">
                                        <p>Mail@Assuranceteam.com</p>
                                    </div>
                                </li>
                            </ul>
                            <ul class="footer-social-links">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--End single footer widget-->
                </div>
            </div>
        </footer>
        <!--End footer area-->

        <!--Start footer bottom area-->
        <section class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-bottom">
                            <div class="copyright-text pull-left">
                                <p>Copyrights © 2017 All Rights Reserved, Powered by <a href="#">Assurance.</a>
                                </p>
                            </div>
                            <div class="footer-menu pull-right">
                                <ul>
                                    <li><a href="#">Legal</a></li>
                                    <li><a href="#">Sitemap</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms & Condition</a></li>
                                </ul>
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



        <!-- thm custom script -->
        <script src="{{ asset('frontend_assets/js/custom.js') }}"></script>





    </div>
</body>

</html>

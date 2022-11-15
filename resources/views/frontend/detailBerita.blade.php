@extends('frontend_layouts.main')
@section('content')
    <!--Start blog area-->
    <section id="blog-area" class="blog-single-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <div class="blog-post">
                        <div class="single-blog-post">
                            <div class="img-holder">
                                <img src="{{ asset('uploads/' . $berita->image) }}" alt="Awesome Image">
                            </div>
                            <div class="text-holder">
                                <h3 class="blog-title">{{ $berita->title }}</h3>
                                <div class="text">
                                    {!! $berita->description !!}
                                </div>
                                <div class="meta-info clearfix">
                                    <div class="left pull-left">
                                        <ul class="post-info">
                                            <li>By <a href="#">{{ $berita->user->name }}</a></li>
                                            <li><a href="#">{{ $berita->berita_category->name }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Start sidebar Wrapper-->
                <div class="col-lg-3 col-md-4 col-sm-7 col-xs-12">
                    <div class="sidebar-wrapper">
                        <!--Start single sidebar-->
                        <div class="single-sidebar">
                            <form class="search-form" action="#">
                                <input placeholder="Search..." type="text">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                        <!--End single sidebar-->
                        <!--Start single sidebar-->
                        <div class="single-sidebar">
                            <div class="sec-title">
                                <h3>Categories</h3>
                                <span class="border"></span>
                            </div>
                            <ul class="categories clearfix">
                                <li>
                                    <a href="#">
                                        Financial Services
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Consumer Products
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Healthcare Companies
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Industrial Goods & Services
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Telecommunications
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Social & Public Sector
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!--End single sidebar-->
                        <!--Start single sidebar-->
                        <div class="single-sidebar">
                            <div class="sec-title">
                                <h3>Recent News</h3>
                                <span class="border"></span>
                            </div>
                            <ul class="recent-post">
                                <li>
                                    <div class="img-holder">
                                        <img src="images/sidebar/recent-news-1.jpg" alt="Awesome Image">
                                        <div class="overlay-style-two">
                                            <div class="box">
                                                <div class="content">
                                                    <a href="#">
                                                        <i class="fa fa-link" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title-holder">
                                        <a href="#">
                                            <h5 class="post-title">
                                                Finance & legal<br> throughout project.
                                            </h5>
                                        </a>
                                        <h6 class="post-date">
                                            <i class="icon-calendar-with-spring-binder-and-date-blocks"></i>
                                            Jan 08, 2017
                                        </h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="img-holder">
                                        <img src="images/sidebar/recent-news-2.jpg" alt="Awesome Image">
                                        <div class="overlay-style-two">
                                            <div class="box">
                                                <div class="content">
                                                    <a href="#">
                                                        <i class="fa fa-link" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title-holder">
                                        <a href="#">
                                            <h5 class="post-title">
                                                What makes us best<br> in the world?
                                            </h5>
                                        </a>
                                        <h6 class="post-date">
                                            <i class="icon-calendar-with-spring-binder-and-date-blocks"></i>
                                            Dec 18, 2016
                                        </h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="img-holder">
                                        <img src="images/sidebar/recent-news-3.jpg" alt="Awesome Image">
                                        <div class="overlay-style-two">
                                            <div class="box">
                                                <div class="content">
                                                    <a href="#">
                                                        <i class="fa fa-link" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title-holder">
                                        <a href="#">
                                            <h5 class="post-title">
                                                Why experts go with<br> Assurance.
                                            </h5>
                                        </a>
                                        <h6 class="post-date">
                                            <i class="icon-calendar-with-spring-binder-and-date-blocks"></i>
                                            Nov 21, 2016
                                        </h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--End single sidebar-->
                    </div>
                </div>
                <!--End Sidebar Wrapper-->
            </div>
        </div>
    </section>
    <!--End blog area-->
@endsection

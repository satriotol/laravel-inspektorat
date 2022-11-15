@extends('frontend_layouts.main')
@section('content')
    <!--Start rev slider wrapper-->
    <section class="rev_slider_wrapper">
        <div id="slider1" class="rev_slider" data-version="5.0">
            <ul>
                @foreach ($sliders as $slider)
                    <li data-transition="slidingoverlayleft">
                        <img src="{{ asset('uploads/' . $slider->image) }}" alt="" width="1920" height="550"
                            data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">

                        <div class="tp-caption  tp-resizeme" data-x="left" data-hoffset="0" data-y="top"
                            data-voffset="130" data-transform_idle="o:1;"
                            data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                            data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-splitin="none" data-splitout="none"
                            data-responsive_offset="on" data-start="700">
                            <div class="slide-content-box">
                                <h1>{{ $slider->title }}</h1>
                                <p>{{ $slider->subtitle }}</p>
                            </div>
                        </div>
                    </li>
                @endforeach

            </ul>
        </div>
    </section>
    <!--End rev slider wrapper-->

    <!--Start call to action area-->
    <section class="call-to-action-area">
        <div class="container">
            <div class="title text-center">
                <h3>Layanan Inspektorat Kota Semarang</h3>
                <p>Detail Layanan</p>
            </div>
            <div class="row">
                @foreach ($layananLinks as $layananLink)
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-item hvr-shadow text-center">
                            <div class="img-holder">
                                <img src="{{ asset('uploads/' . $layananLink->image) }}" style="background-color: black"
                                    alt="Awesome Image">
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <a href="{{ $layananLink->url }}" target="_blank"><i class="fa fa-link"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <h3>{{ $layananLink->name }}</h3>
                                <p>{{ $layananLink->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="video-gallery-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-holder">
                        <h3>Sambutan Inspektorat</h3>
                        <div class="text">
                            <p>{{ $beranda->sambutan }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="video-holder">
                        <img src="{{ asset('public/' . $beranda->thumbnail_video) }}" alt="Awesome Video Gallery">
                        <div class="overlay-gallery">
                            <div class="icon-holder">
                                <div class="icon">
                                    <a class="html5lightbox" href="{{ $beranda->video_url }}"><img
                                            src="{{ asset('frontend_assets/images/icon/play-btn.png') }}"
                                            alt="Play Button"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="latest-blog-area">
        <div class="container">
            <div class="sec-title text-center">
                <h1>Berita & Kegiatan Terkini</h1>
                <span class="border"></span>
            </div>
            <div class="row">
                @foreach ($beritas as $berita)
                    <div class="col-md-4">
                        <div class="single-blog-post">
                            <div class="img-holder">
                                <img src="{{ asset('uploads/' . $berita->image) }}"
                                    style="width:370px;height:220px; object-fit:cover" alt="Awesome Image">
                                <div class="published-date">
                                    <h3>{{ date('d/m/Y', strtotime($berita->created_at)) }}</h3>
                                </div>
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <a href="{{ route('detailBerita', $berita->id) }}"><i class="fa fa-link"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <a href="{{ route('detailBerita', $berita->id) }}">
                                    <h3 class="blog-title">{{ $berita->title }}</h3>
                                </a>
                                <div class="meta-info clearfix">
                                    <div class="left pull-left">
                                        <ul class="post-info">
                                            <li>{{ $berita->user->name }}</li>
                                            <li><a href="#">{{ $berita->berita_category->name }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

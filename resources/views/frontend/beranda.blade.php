@extends('frontend_layouts.main')
@section('content')
    <section class="rev_slider_wrapper">
        <div id="slider1" class="rev_slider" data-version="5.0">
            <ul>
                @foreach ($sliders as $slider)
                    <li data-transition="slidingoverlayleft">
                        <img src="{{ asset('uploads/' . $slider->image) }}" alt="" width="1920" height="550"
                            data-bgposition="top center" data-bgfit="100% 100%" data-bgrepeat="no-repeat"
                            data-bgparallax="1">

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
                                <img src="{{ asset('uploads/' . $layananLink->image) }}"
                                    style="height:100px;object-fit:contain" alt="Awesome Image">
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
                                <p>{!! $layananLink->short_description !!}</p>
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
                <div class="col-md-12">
                    <div class="text-holder">
                        <h3>Sambutan Inspektorat</h3>
                        <div class="text">
                            <p>{!! $beranda->sambutan !!}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="smart-approach-area">
        <div class="container">
            <div class="sec-title text-center">
                <h1>Berita & Kegiatan <span class="text-red">Terkini</span></h1>
                <span class="border"></span>
            </div>

            <div class="row row-flex">
                @foreach ($beritas as $berita)
                    <div class="col-md-4">
                        <div class="single-blog-post">
                            <a href="{{ route('detailBerita', $berita->id) }}">
                                <div class="img-holder">
                                    <img src="{{ asset('uploads/' . $berita->image) }}"
                                        style="width:370px;height:220px; object-fit:cover" alt="Awesome Image">
                                </div>
                            </a>
                            <div class="text-holder">
                                <a href="{{ route('detailBerita', $berita->id) }}">
                                    <h3 class="blog-title">{{ Str::limit($berita->title, 100, '...') }}</h3>
                                </a>
                                <small class="text-red-thin">{{ $berita->berita_category->name }} | <i
                                        class="fa fa-calendar mr-5 text-theme-colored"></i>
                                    {{ date('d/m/Y', strtotime($berita->created_at)) }}
                                </small>
                                @isset($berita->short_description)
                                    <div class="text">
                                        {{ $berita->short_description }} ...
                                    </div>
                                @endisset
                                <div class="meta-info clearfix" style="margin-top: 2rem">
                                    <a href="{{ route('detailBerita', $berita->id) }}" class="btn btn-danger w-100">Baca
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

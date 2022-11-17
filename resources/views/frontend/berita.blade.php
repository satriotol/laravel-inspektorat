@extends('frontend_layouts.main')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url({{ asset('uploads/' . $master->banner) }});">
        <div class="container text-center">
            <h1>Berita @isset($beritaCategory)
                    / {{ $beritaCategory->name }}
                @endisset
            </h1>
        </div>
    </section>
    <!--End breadcrumb area-->
    <!--Start blog area-->
    <section id="blog-area" class="blog-with-sidebar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <div class="blog-post">
                        @foreach ($beritas as $berita)
                            <div class="single-blog-post">
                                <div class="img-holder">
                                    <img src="{{ asset('uploads/' . $berita->image) }}" alt="Awesome Image">
                                    <div class="published-date" style="width: 170px;">
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
                                    <div class="text">
                                        <p>
                                            {!! Str::limit($berita->description, 100) !!}
                                        </p>
                                    </div>
                                    <div class="meta-info clearfix">
                                        <div class="left pull-left">
                                            <ul class="post-info">
                                                <li>Di Upload <a href="#">{{ $berita->user?->name }}</a></li>
                                                <li><a
                                                        href="{{ route('beritaCategory', $berita->berita_category_id) }}">{{ $berita->berita_category->name }}</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="right pull-right">
                                            <a class="post-share" href="#"><i class="fa fa-share-alt"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!--Start post pagination-->
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="post-pagination text-center">
                                    {{ $beritas->links() }}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-7 col-xs-12">
                    <div class="sidebar-wrapper">
                        <div class="single-sidebar">
                            <div class="sec-title">
                                <h3>Kategori</h3>
                                <span class="border"></span>
                            </div>
                            <ul class="categories clearfix">
                                @foreach ($beritaCategories as $beritaCategory)
                                    <li>
                                        <a href="{{ route('beritaCategory', $beritaCategory->id) }}">
                                            {{ $beritaCategory->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="single-sidebar">
                            <div class="sec-title">
                                <h3>Berita Terbaru</h3>
                                <span class="border"></span>
                            </div>
                            <ul class="recent-post">
                                @foreach ($recentBeritas as $recentBerita)
                                    <li>
                                        <div style="height: 100%;" class="img-holder">
                                            <img src="{{ asset('uploads/' . $recentBerita->image) }}"
                                                style="height: 100%;object-fit: cover;" alt="{{ $recentBerita->title }}">
                                            <div class="overlay-style-two">
                                                <div class="box">
                                                    <div class="content">
                                                        <a href="{{ route('detailBerita', $recentBerita->id) }}">
                                                            <i class="fa fa-link" aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title-holder">
                                            <a href="{{ route('detailBerita', $recentBerita->id) }}">
                                                <h5 class="post-title">
                                                    {{ Str::limit($recentBerita->title, 30, '...') }}
                                                </h5>
                                            </a>
                                            <h6 class="post-date">
                                                <i class="icon-calendar-with-spring-binder-and-date-blocks"></i>
                                                {{ date($recentBerita->created_at) }}
                                            </h6>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

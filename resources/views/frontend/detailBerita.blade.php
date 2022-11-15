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
                            <div class="sec-title">
                                <h3>Kategori</h3>
                                <span class="border"></span>
                            </div>
                            <ul class="categories clearfix">
                                @foreach ($beritaCategories as $beritaCategory)
                                    <li>
                                        <a href="#">
                                            {{ $beritaCategory->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!--End single sidebar-->
                        <!--Start single sidebar-->
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
                        <!--End single sidebar-->
                    </div>
                </div>
                <!--End Sidebar Wrapper-->
            </div>
        </div>
    </section>
    <!--End blog area-->
@endsection

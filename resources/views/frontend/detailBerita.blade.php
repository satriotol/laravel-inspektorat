@extends('frontend_layouts.main')
@push('head')
    <meta name="keywords" content="{{ $berita->title }}">
    <meta name="description" content="{{ $berita->description }}">
    <meta property="og:title" content="{{ $berita->title }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ route('detailBerita', $berita->id) }}">
    <meta property="og:description" content="{{ $berita->description }}">
    <meta property="og:image" content="{{ asset('uploads/' . $berita->image) }}">
    <meta name="author" content="INSPEKTORAT KOTA SEMRANG">
@endpush
@section('content')
    <!--Start blog area-->
    <section id="blog-area" class="blog-single-area" style="padding-bottom: 0">
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
                                            <li>Di Upload <a href="#">{{ $berita->user?->name }}</a></li>
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
                        <div class="single-sidebar">
                            <div class="sec-title">
                                <h3>Kategori</h3>
                                <span class="border"></span>
                            </div>
                            <ul class="categories clearfix">
                                @foreach ($beritaCategories as $beritaCategory)
                                    <li>
                                        @if (Route::is('berita', 'beritaCategory', 'detailBerita', 'detailBerita'))
                                            <a href="{{ route('beritaCategory', $beritaCategory->id) }}">
                                                {{ $beritaCategory->name }}
                                            </a>
                                        @else
                                            <a href="{{ route('kegiatanCategory', $beritaCategory->id) }}">
                                                {{ $beritaCategory->name }}
                                            </a>
                                        @endif

                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        @if ($berita->berita_files->count() > 0)
                            <div class="single-sidebar">
                                <div class="sec-title">
                                    <h3>Materi</h3>
                                    <span class="border"></span>
                                </div>
                                <ul class="categories clearfix">
                                    @foreach ($berita->berita_files as $berita_file)
                                        <li>
                                            <a href="{{ asset('uploads/' . $berita_file->file) }}"
                                                target="_blank">{{ $berita_file->name ?? 'Buka Link' }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
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
                                                        @if (Route::is('berita', 'beritaCategory', 'detailBerita'))
                                                            <a href="{{ route('detailBerita', $recentBerita->id) }}">
                                                                <i class="fa fa-link" aria-hidden="true"></i>
                                                            </a>
                                                        @else
                                                            <a href="{{ route('detailKegiatan', $recentBerita->id) }}">
                                                                <i class="fa fa-link" aria-hidden="true"></i>
                                                            </a>
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title-holder">
                                            @if (Route::is('berita', 'beritaCategory', 'detailBerita'))
                                                <a href="{{ route('detailBerita', $recentBerita->id) }}">
                                                    <h5 class="post-title">
                                                        {{ Str::limit($recentBerita->title, 30, '...') }}
                                                    </h5>
                                                </a>
                                            @else
                                                <a href="{{ route('detailKegiatan', $recentBerita->id) }}">
                                                    <h5 class="post-title">
                                                        {{ Str::limit($recentBerita->title, 30, '...') }}
                                                    </h5>
                                                </a>
                                            @endif

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
    @isset($berita)
        @if ($berita->berita_galleries->count() > 0)
            <section id="project-area" class="project-grid-area" style="padding-top: 0">
                <div class="container">
                    <div class="sec-title">
                        <h3>Galeri</h3>
                        <span class="border"></span>
                    </div>
                    <div class="row project-content">
                        <div class="row">
                            @foreach ($berita->berita_galleries as $berita_gallery)
                                <div class="col-md-4 single-project-item filter-item {{ $berita_gallery->id }}">
                                    <div class="img-holder">
                                        <img src="{{ asset('uploads/' . $berita_gallery->image) }}" alt="Awesome Image">
                                        <div class="overlay">
                                            <div class="box">
                                                <div class="content">
                                                    <ul>
                                                        <li>
                                                            <a href="{{ asset('uploads/' . $berita_gallery->image) }}"
                                                                data-rel="prettyPhoto"><i class="fa fa-search-plus"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @endisset
    <!--End blog area-->
@endsection

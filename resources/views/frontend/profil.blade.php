@extends('frontend_layouts.main')
@push('head')
    <!-- Accordeon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
@endpush

@push('css')
    <style>
        .brand-area .brand .single-item {
            border: 0 !important;

        }
    </style>
@endpush
@section('content')
    <section class="breadcrumb-area" style="">
        <div class="container text-center">
            <h1>
                Profil
            </h1>
        </div>
    </section>
    <!--Start company overview area-->
    <section class="company-overview-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 pull-right">
                    <div class="content-box">
                        <div class="accordion-box">
                            @foreach ($Profile as $Profil)
                                @if ($Profil->type == 'Halaman')
                                    <!--Start single accordion box-->
                                    <div class="accordion accordion-block">
                                        <div class="accord-btn">
                                            <h4>{{ $Profil->name }}</h4>
                                        </div>
                                        <div class="accord-content">
                                            {!! $Profil->description !!} </div>
                                    </div>
                                    <!--End single accordion box-->
                                @else
                                    <div class="col-md-12">
                                        <a class="thm-btn bg-clr1" href="{{ $Profil->link }}" target="_blank"><h4>{{ $Profil->name }}</h4></a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    {{-- <div class="row overview-content-pdbottom">
                        @foreach ($Profile as $Profil)
                            <div class="col-md-10"> --}}
                                {{-- <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading{{ $Profil->id }}">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse{{ $Profil->id }}" aria-expanded="true"
                                                aria-controls="collapse{{ $Profil->id }}">
                                                {{ $Profil->name }}
                                            </button>
                                        </h2>
                                        <div id="collapse{{ $Profil->id }}" class="accordion-collapse collapse show"
                                            aria-labelledby="heading{{ $Profil->id }}" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we use
                                                to style each element. These classes control the overall appearance, as well
                                                as the showing and hiding via CSS transitions. You can modify any of this
                                                with custom CSS or overriding our default variables. It's also worth noting
                                                that just about any HTML can go within the <code>.accordion-body</code>,
                                                though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

                                {{-- <div class="overview-content">
                                    <div class="sec-title">
                                        <h1>{{ $Profil->name }}</h1>
                                        <span class="border"></span>
                                    </div>
                                    @if ($Profil->type == 'Halaman')
                                        <div class="text">
                                            {!! $Profil->description !!}
                                        </div>
                                    @else
                                        <div class="text">
                                            {{ $Profil->link }}
                                        </div>
                                    @endif
                                </div> --}}
                            {{-- </div>
                        @endforeach
                    </div> --}}
                </div>
                {{-- <div class="col-lg-3 col-md-4 col-sm-7 col-xs-12 pull-left">
                    <div class="left-sidebar">
                        <!--Start single sidebar-->
                        <div class="single-sidebar">
                            <ul class="page-link">
                                @foreach ($Profile as $Profil)
                                    <li>
                                        <a href="#">
                                            {{ $Profil->name }}
                                            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!--End single sidebar-->
                    </div>
                </div> --}}

            </div>
        </div>
    </section>
    <!--End company overview area-->
    {{-- <section class="blog-grid-area">
        <div class="container">
            @isset($beritaCategory)
                <div class="col-md-8">
                    <div class="sec-title" style="padding-bottom: 0">
                        <h1>{{ $beritaCategory->name }}</h1>
                        <span class="border"></span>
                        <div>
                            {!! $beritaCategory->description !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('uploads/' . $beritaCategory->image) }}" class="img-thumbnail" alt="">
                </div>
            @endisset
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    @isset($beritaCategory)
                        <section class="brand-area">
                            <div class="brand">
                                @foreach ($beritaCategory->berita_category_galleries as $berita_category_gallery)
                                    <div class="single-item">
                                        <a href="{{ asset('uploads/' . $berita_category_gallery->image) }}"
                                            data-rel="prettyPhoto{{ $berita_category_gallery->id }}">
                                            <img src="{{ asset('uploads/' . $berita_category_gallery->image) }}"
                                                style="height:100%!important; object-fit:contain" class="img-thumbnail">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </section>
                    @endisset
                    <div class="row row-flex">
                        @foreach ($beritas as $berita)
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="single-blog-post">
                                    <a href="{{ route('detailBerita', $berita->id) }}">
                                        <div class="img-holder">
                                            <img src="{{ asset('uploads/' . $berita->image) }}"
                                                style="width:370px;height:220px; object-fit:cover" alt="Awesome Image">
                                            <div class="published-date">
                                                <h3>{{ date('d/m/Y', strtotime($berita->created_at)) }}</h3>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="text-holder">
                                        @if (Route::is('berita', 'beritaCategory'))
                                            <a href="{{ route('detailBerita', $berita->id) }}">
                                                <h3 class="blog-title">{{ $berita->title }}</h3>
                                            </a>
                                        @else
                                            <a href="{{ route('detailKegiatan', $berita->id) }}">
                                                <h3 class="blog-title">{{ $berita->title }}</h3>
                                            </a>
                                        @endif
                                        <div class="text">
                                            <small>{{ date('d/m/Y', strtotime($berita->created_at)) }}</small>
                                        </div>
                                        <div class="meta-info clearfix">
                                            <div class="left pull-left">
                                                <ul class="post-info">
                                                    <li><a href="#">{{ $berita->user?->name }}</a></li>
                                                    <li>
                                                        @if (Route::is('berita', 'beritaCategory'))
                                                            <a
                                                                href="{{ route('beritaCategory', $berita->berita_category_id) }}">{{ $berita->berita_category->name }}</a>
                                                        @else
                                                            <a
                                                                href="{{ route('kegiatanCategory', $berita->berita_category_id) }}">{{ $berita->berita_category->name }}</a>
                                                        @endif


                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="right pull-right">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
                            <form class="search-form" action="">
                                <input placeholder="Cari..." type="text" name="title" value="{{ @old('title') }}">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                        @isset($beritaCategory->logo)
                            <div class="single-sidebar">
                                <div class="sec-title">
                                    <h3>Logo</h3>
                                    <span class="border"></span>
                                </div>
                                <img src="{{ asset('uploads/' . $beritaCategory->logo) }}" style="width: 100%" alt="">
                            </div>
                        @endisset
                        <div class="single-sidebar">
                            <div class="sec-title">
                                <h3>Kategori</h3>
                                <span class="border"></span>
                            </div>
                            <ul class="categories clearfix">
                                @foreach ($beritaCategories as $beritaCategory)
                                    <li>
                                        @if (Route::is('berita', 'beritaCategory'))
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
                                                        @if (Route::is('berita', 'beritaCategory'))
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
                                            @if (Route::is('berita', 'beritaCategory'))
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
    </section> --}}
@endsection
@push('custom-scripts')
        <!-- accordeon js -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

@endpush

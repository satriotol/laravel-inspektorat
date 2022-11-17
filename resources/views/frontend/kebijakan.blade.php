@extends('frontend_layouts.main')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area">
        <div class="container text-center">
            <h1>
                @if (Route::is('kebijakan', 'kebijakanCategory'))
                    Kebijakan
                @else
                    Kegiatan
                @endif
                @isset($kebijakancategories)
                    / {{ $kebijakancategories->name }}
                @endisset
            </h1>
        </div>
    </section>
    <!--End breadcrumb area-->
    <!--Start blog area-->
    <section id="project-area" class="latest-project-area grid-with-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <h3 class="page-title">{{ $kebijakancategories->name }}</h3>
                    <div class="table-responsive">
                        <table id="example2" class="table text-nowrap border-bottom">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>File</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kebijakans as $kebijakan)
                                    <tr>
                                        <td>{{ $kebijakan->name }}</td>
                                        <td>
                                            <a href="#"
                                                onclick="window.open('{{ asset('uploads/' . $kebijakan->file) }}','_blank')"
                                                class="btn btn-sm btn-info">View</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-7 col-xs-12">
                    <div class="sidebar-wrapper">
                        <!--Start single sidebar-->
                        <div class="single-sidebar">
                            <form class="search-form" action="">
                                <input placeholder="Search..." type="text" name="search">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>


            </div>

            <div class="row">
                <div class="col-md-12">
                    <ul class="post-pagination text-center">
                        {{ $kebijakans->links() }}
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <!--End blog area-->
@endsection

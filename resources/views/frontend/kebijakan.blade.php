@extends('frontend_layouts.main')
@section('content')
    <!--Start blog area-->
    <section id="project-area" class="latest-project-area grid-with-text">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h3 class="page-title">{{$kebijakancategories->name}}</h3>
                        <div class="single-sidebar right">
                            <form class="search-form" action="#">
                                <input placeholder="Search..." type="text">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>


                    <div class="card">

                        <div class="card-body">
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
                    </div>
                </div>
            </div>

            {{-- <div class="row project-content masonary-layout filter-layout">

                @foreach ($kebijakans as $kebijakan)
                    <!--Start single project-->
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="single-project text-center">
                            <div class="title-holder">
                                <a href="#"
                                    onclick="window.open('{{ asset('uploads/' . $kebijakan->file) }}','_blank')">
                                    <h5>{{ $kebijakan->name }}</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--End single project-->
                @endforeach

            </div> --}}
            <div class="row">
                <div class="col-md-12">
                    <ul class="post-pagination text-center">
                        <li><a href="#"><i class="fa fa-caret-left" aria-hidden="true"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End blog area-->
@endsection

@extends('frontend_layouts.main')
@push('css')
    <style>
     ul li.listing {
  padding: 2px !important;
  margin-left: 35px !important;
}

    .textcolor{
        color: black !important;;
    }
    .listicon{
        list-style-type: circle
    }

    </style>
@endpush
@section('content')

    <!--Start breadcrumb area-->
    <section class="breadcrumb-area">
        <div class="container text-center">
            <h1>
                PPID
                / Layanan Informasi
            </h1>
        </div>
    </section>
    <!--End breadcrumb area-->
    <section class="checkout-area" style="padding-top: 0">
        <div class="container">
            <div class="row bottom">
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <div class="table">
                        <div class="sec-title">
                            <h2>Layanan Informasi PPID</h2>
                            <span class="border"></span>
                        </div>

                        <ul class="listing">

                            @foreach ($ppidLayananInformasis as $ppidLayananInformasi)
                                @if ($ppidLayananInformasi->type == 'Link')
                                    <li class="listing"><h3>
                                         <a class="textcolor" href="{{ $ppidLayananInformasi->link }}" target="_blank">
                                        {{ $ppidLayananInformasi->name }}
                                    </a>
                                </h3></li>
                                @elseif ($ppidLayananInformasi->type == 'Gambar')
                                    <li class="listing"><img src="{{ asset('uploads/' . $ppidLayananInformasi->image) }}"
                                            style="height: 100px" class="img-thumbnail" alt=""></li>
                                @else
                                    <li class="listing textcolor"><H3>{{ $ppidLayananInformasi->name }}</h3>

                                            @foreach ($ppidLayananInformasi->ppid_layanan_informasi_details as $ppid_layanan_informasi_detail)
                                            <ul>
                                                 <li class="listing listicon">
                                                    <a class="textcolor" href="{{ asset('uploads/' . $ppid_layanan_informasi_detail->file) }}"
                                                    target="_blank">
                                                    {{ $ppid_layanan_informasi_detail->name }}
                                                </a>
                                            </li>
                                        </ul>
                                            @endforeach
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>



                <div class="col-lg-3 col-md-4 col-sm-7 col-xs-12">
                    <div class="sidebar-wrapper">
                        <!--Start single sidebar-->
                        <div class="single-sidebar">
                            <form class="search-form" action="">
                                <input placeholder="Cari..." value="{{ @old('search') }}" type="text" name="search">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

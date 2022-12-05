@extends('frontend_layouts.main')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area">
        <div class="container text-center">
            <h1>
                {{ $documentCategory->name }}
            </h1>
        </div>
    </section>
    <!--End breadcrumb area-->
    <section class="checkout-area" style="padding-top: 0">
        <div class="container">
            <div class="row bottom">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="table">
                        <div class="sec-title">
                            <h2>{{ $documentCategory->name }}</h2>
                            <span class="border"></span>
                        </div>
                        <table class="cart-table">
                            <thead class="cart-header">
                                <tr>
                                    <th>Nama Dokumen</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($documentCategory->documents as $document)
                                    <tr>
                                        <td>{{ $document->name }}</td>
                                        <td>
                                            <a href="{{ asset('uploads/' . $document->file) }}" target="_blank"
                                                class="btn btn-info">Buka
                                                File</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('backend_layouts.main')
@section('content')
    <div class="page-header">
        <h1 class="page-title">Laporan WBS</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('wbsReport.index') }}">Laporan WBS</a></li>
                <li class="breadcrumb-item active" aria-current="page">Laporan WBS Form</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Laporan WBS</h3>
                </div>
                <div class="card-body">
                    @include('partials.errors')
                    <form
                        action="@isset($wbsReport) {{ route('wbsReport.update', $wbsReport->id) }} @endisset @empty($wbsReport) {{ route('wbsReport.store') }} @endempty"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($wbsReport)
                            @method('PUT')
                        @endisset
                        <table class="table">
                            <tr>
                                <th colspan="2" class="text-center">Detail Pelapor</th>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td>{{ $wbsReport->user->name }}</td>
                            </tr>
                            <tr>
                                <th>Nomor HP</th>
                                <td>{{ $wbsReport->user->user_detail->phone ?? '-' }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $wbsReport->user->email ?? '-' }}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>{{ $wbsReport->user->user_detail->address ?? '-' }}</td>
                            </tr>
                            <tr>
                                <th colspan="2" class="text-center">Detail Laporan</th>
                            </tr>
                            <tr>
                                <th>Jenis Pelanggaran</th>
                                <td>{{ $wbsReport->wbs_category->name }}</td>
                            </tr>
                            <tr>
                                <th>Lokasi</th>
                                <td>{{ $wbsReport->location }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Kejadian</th>
                                <td>{{ $wbsReport->datetime }}</td>
                            </tr>
                            <tr>
                                <th>Uraian Kejadian</th>
                                <td>{{ $wbsReport->description }}</td>
                            </tr>
                            <tr>
                                <th>File</th>
                                <td><a href="{{ asset('uploads/' . $wbsReport->file) }}" target="_blank"
                                        class="btn btn-primary">Buka Lampiran</a></td>
                            </tr>
                        </table>
                        <div class="text-end">
                            <a class="btn btn-warning" href="{{ route('wbsReport.index') }}">Kembali</a>
                            {{-- <button class="btn btn-primary" type="submit">Submit</button> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

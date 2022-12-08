@extends('backend_layouts.main')
@section('content')
    <div class="page-header">
        <h1 class="page-title">Laporan WBS</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('wbsReport.index') }}">WBS</a></li>
                <li class="breadcrumb-item active" aria-current="page">Laporan WBS</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Laporan WBS</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-bordered text-nowrap border-bottom">
                            <thead>
                                <tr>
                                    <th>Laporan Masuk</th>
                                    <th>Nama</th>
                                    <th>Kategori</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($wbsReports as $wbsReport)
                                    <tr>
                                        <td>{{ $wbsReport->created_at }}</td>
                                        <td>{{ $wbsReport->name }}</td>
                                        <td><a href="{{ route('wbsCategory.index') }}"
                                                target="_blank">{{ $wbsReport->wbs_category->name }}</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('wbsReport.destroy', $wbsReport->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <a href="{{ route('wbsReport.edit', $wbsReport->id) }}"
                                                    class="btn btn-sm btn-primary">Detail</a>
                                                <input type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Are you sure?')" value="Delete" id="">
                                            </form>
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
@endsection

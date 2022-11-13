@extends('backend_layouts.main')
@section('content')
    <div class="page-header">
        <h1 class="page-title">Kebijakan</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('kebijakan.index') }}">Kebijakan</a></li>
                <li class="breadcrumb-item active" aria-current="page">Kebijakan Tabel</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Kebijakan</h3>
                </div>
                <div class="card-body">
                    <div class="text-end mb-2">
                        <a href="{{ route('kebijakan.create') }}" class="btn btn-sm btn-primary">Tambah</a>
                    </div>
                    <div class="table-responsive">
                        <table id="example2" class="table table-bordered text-nowrap border-bottom">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Kategori Kebijakan</th>
                                    <th>File</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kebijakans as $kebijakan)
                                    <tr>
                                        <td>{{ $kebijakan->name }}</td>
                                        <td>{{ $kebijakan->kebijakan_category->name }}</td>
                                        <td>
                                            <form action="{{ route('kebijakan.destroy', $kebijakan->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <a href="{{ route('kebijakan.edit', $kebijakan->id) }}"
                                                    class="btn btn-sm btn-info">View</a>
                                                <input type="submit" class="btn btn-sm btn-success" value="Download"
                                                    id="">
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{ route('kebijakan.destroy', $kebijakan->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <a href="{{ route('kebijakan.edit', $kebijakan->id) }}"
                                                    class="btn btn-sm btn-warning">Edit</a>
                                                <input type="submit" class="btn btn-sm btn-danger" value="Delete"
                                                    id="">
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

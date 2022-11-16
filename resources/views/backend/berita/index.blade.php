@extends('backend_layouts.main')
@section('content')
    <div class="page-header">
        <h1 class="page-title">Berita</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('berita.index') }}">Berita</a></li>
                <li class="breadcrumb-item active" aria-current="page">Berita Tabel</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Berita</h3>
                </div>
                <div class="card-body">
                    <div class="text-end mb-2">
                        <a href="{{ route('berita.create') }}" class="btn btn-sm btn-primary">Tambah</a>
                    </div>
                    <div class="table-responsive">
                        <table id="example2" class="table table-bordered text-nowrap border-bottom">
                            <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                    <th>Gambar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($beritas as $berita)
                                    <tr>
                                        <td>
                                            {{ $berita->title }} <br>
                                            <div class="badge bg-primary">{{ $berita->user->name }}</div> | <div
                                                class="badge bg-info">{{ $berita->getVerificationStatus() }}</div>
                                        </td>
                                        <td>
                                            <a href="{{ route('beritaCategory.edit', $berita->berita_category_id) }}">
                                                {{ $berita->berita_category->name }}
                                            </a>
                                        </td>
                                        <td><img src="{{ asset('uploads/' . $berita->image) }}" class="img-thumbnail"
                                                style="height: 100px" alt=""></td>
                                        <td>
                                            <form action="{{ route('berita.destroy', $berita->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                @if (!$berita->is_verified)
                                                    @can('berita-verification')
                                                        <a href="{{ route('berita.verification', $berita->id) }}"
                                                            onclick="return confirm('Are you sure?')"
                                                            class="btn btn-sm btn-success">Verifikasi</a>
                                                    @endcan
                                                @endif
                                                <a href="{{ route('berita.edit', $berita->id) }}"
                                                    class="btn btn-sm btn-warning">Edit</a>
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

@extends('backend_layouts.main')
@section('content')
    <div class="page-header">
        <h1 class="page-title">Sub Kategori Berita</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('beritaSubcategory.index') }}">Sub Kategori BeritaBerita</a></li>
                <li class="breadcrumb-item active" aria-current="page"Sub Kategori Berita>Berita Tabel</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Berita</h3>
                </div>
                <div class="card-body">
                    @include('partials.errors')
                    <form
                        action="@isset($beritaSubcategory) {{ route('beritaSubcategory.update', $beritaSubcategory->id) }} @endisset @empty($beritaSubcategory) {{ route('beritaSubcategory.store') }} @endempty"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($beritaSubcategory)
                            @method('PUT')
                        @endisset
                        <div class="form-group">
                            <label>Kategori Berita</label>
                            <input type="text" class="form-control"
                                value="{{ isset($beritaSubcategory) ? $beritaSubcategory->berita_category_id : @old('berita_category_id') }}" name="berita_category_id ">
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control"
                                value="{{ isset($beritaSubcategory) ? $beritaSubcategory->name : @old('name') }}" name="name">
                        </div>
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" accept="image/*" class="form-control"
                                {{-- @empty($beritaSubcategory)
                            required
                            @endempty --}}
                                name="image">
                        </div>
                        @isset($beritaSubcategory)
                            <img src="{{ asset('uploads/' . $beritaSubcategory->image) }}" class="img-thumbnail" alt="">
                        @endisset

                        <div class="text-end">
                            <a class="btn btn-warning" href="{{ url()->previous() }}">Kembali</a>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

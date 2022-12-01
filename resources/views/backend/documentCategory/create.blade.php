@extends('backend_layouts.main')
@section('content')
    <div class="page-header">
        <h1 class="page-title">Kategori Dokumen</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('documentCategory.index') }}">Kategori Dokumen</a></li>
                <li class="breadcrumb-item active" aria-current="page">Kategori Dokumen Tabel</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Kategori Dokumen</h3>
                </div>
                <div class="card-body">
                    @include('partials.errors')
                    <form
                        action="@isset($documentCategory) {{ route('documentCategory.update', $documentCategory->id) }} @endisset @empty($documentCategory) {{ route('documentCategory.store') }} @endempty"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($documentCategory)
                            @method('PUT')
                        @endisset
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" required
                                value="{{ isset($documentCategory) ? $documentCategory->name : @old('name') }}"
                                name="name">
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi</label>
                            <textarea name="description" id="" class="form-control summernote" cols="30" rows="10">{{ isset($documentCategory) ? $documentCategory->description : @old('description') }}</textarea>
                        </div>
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

@extends('backend_layouts.main')
@section('content')
    <div class="page-header">
        <h1 class="page-title">Link</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('link.index') }}">Link</a></li>
                <li class="breadcrumb-item active" aria-current="page">Link Tabel</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Link</h3>
                </div>
                <div class="card-body">
                    @include('partials.errors')
                    <form
                        action="@isset($link) {{ route('link.update', $link->id) }} @endisset @empty($link) {{ route('link.store') }} @endempty"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($link)
                            @method('PUT')
                        @endisset
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" required
                                value="{{ isset($link) ? $link->name : @old('name') }}" name="name">
                        </div>
                        <div class="form-group">
                            <label>Url</label>
                            <input type="text" class="form-control" required
                                value="{{ isset($link) ? $link->url : @old('url') }}" name="url">
                        </div>
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" accept="image/*" class="form-control" name="image">
                        </div>
                        @isset($link)
                            <img src="{{ asset('uploads/' . $link->image) }}" class="img-thumbnail" alt="">
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

@push('custom-scripts')
@endpush
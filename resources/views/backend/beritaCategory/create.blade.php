@extends('backend_layouts.main')
@section('content')
    <div class="page-header">
        <h1 class="page-title">Kategori Berita</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('beritaCategory.index') }}">Kategori Berita</a></li>
                <li class="breadcrumb-item active" aria-current="page">Kategori Berita Tabel</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Kategori Berita</h3>
                </div>
                <div class="card-body">
                    @include('partials.errors')
                    <form
                        action="@isset($beritaCategory) {{ route('beritaCategory.update', $beritaCategory->id) }} @endisset @empty($beritaCategory) {{ route('beritaCategory.store') }} @endempty"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($beritaCategory)
                            @method('PUT')
                        @endisset
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" required
                                value="{{ isset($beritaCategory) ? $beritaCategory->name : @old('name') }}" name="name">
                        </div>
                        <div class="form-group">
                            <li class="list-group-item">
                                Kegiatan
                                <div class="material-switch pull-right">
                                    <input id="someSwitchOptionPrimary" name="is_kegiatan" value="1"
                                        @isset($beritaCategory) {{ $beritaCategory->is_kegiatan == 1 ? ' checked' : '' }} @endisset
                                        type="checkbox" />
                                    <label for="someSwitchOptionPrimary" class="label-primary"></label>
                                </div>
                            </li>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea class="content" name="description">{{ isset($beritaCategory) ? $beritaCategory->description : @old('description') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Logo</label>
                            <input type="file" accept="image/*" class="form-control upload-logo" name="logo">
                        </div>
                        @isset($beritaCategory)
                            <img src="{{ asset('uploads/' . $beritaCategory->logo) }}" style="height: 100px"
                                class="img-thumbnail" alt="">
                        @endisset
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" accept="image/*" class="form-control" name="image">
                        </div>
                        @isset($beritaCategory)
                            <img src="{{ asset('uploads/' . $beritaCategory->image) }}" style="height: 100px"
                                class="img-thumbnail" alt="">
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
    <script src="{{ asset('backend_assets/plugins/wysiwyag/jquery.richtext.js') }}"></script>
    <script src="{{ asset('backend_assets/plugins/wysiwyag/wysiwyag.js') }}"></script>
@endpush

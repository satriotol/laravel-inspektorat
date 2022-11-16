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
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Kebijakan</h3>
                </div>
                <div class="card-body">
                    @include('partials.errors')
                    <form
                        action="@isset($kebijakan) {{ route('kebijakan.update', $kebijakan->id) }} @endisset @empty($kebijakan) {{ route('kebijakan.store') }} @endempty"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($kebijakan)
                            @method('PUT')
                        @endisset
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" required
                                value="{{ isset($kebijakan) ? $kebijakan->name : @old('name') }}" name="name">
                        </div>
                        <div class="form-group">
                            <label>Kategori</label>
                            <select name="kebijakan_category_id" required class="form-control">
                                <option value="">Pilih Kategori</option>
                                @foreach ($kebijakan_categories as $kebijakan_category)
                                    <option @if(isset($kebijakan)) @selected($kebijakan_category->id == $kebijakan->kebijakan_category_id) @endif value="{{ $kebijakan_category->id }}">
                                        {{ $kebijakan_category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>File</label>
                            <input type="file" accept="application/pdf" class="form-control"
                                @empty($kebijakan)
                            required
                            @endempty
                                value="{{ isset($kebijakan) ? $kebijakan->file : @old('file') }}" name="file">
                        </div>
                        @isset($kebijakan)
                            <iframe src="{{ asset('uploads/' . $kebijakan->file) }}" frameborder="0"></iframe>
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

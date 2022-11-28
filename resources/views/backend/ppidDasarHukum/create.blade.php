@extends('backend_layouts.main')
@section('content')
    <div class="page-header">
        <h1 class="page-title">Dasar Hukum PPID</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('ppidDasarHukum.index') }}">Dasar Hukum PPID</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tabel Dasar Hukum PPID</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Dasar Hukum PPID</h3>
                </div>
                <div class="card-body">
                    @include('partials.errors')
                    <form
                        action="@isset($ppidDasarHukum) {{ route('ppidDasarHukum.update', $ppidDasarHukum->id) }} @endisset @empty($ppidDasarHukum) {{ route('ppidDasarHukum.store') }} @endempty"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($ppidDasarHukum)
                            @method('PUT')
                        @endisset
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" accept="image/*" class="form-control" name="image">
                            {{-- <small class="text-red">Ukuran Rekomendasi 270x170</small> --}}
                        </div>
                        @isset($ppidDasarHukum)
                            <img src="{{ asset('uploads/' . $ppidDasarHukum->image) }}" class="img-thumbnail" alt="">
                        @endisset

                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="description" class="form-control" id="" cols="30" rows="10">{{ isset($ppidDasarHukum) ? $ppidDasarHukum->description : @old('description') }}</textarea>
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

@push('custom-scripts')
@endpush

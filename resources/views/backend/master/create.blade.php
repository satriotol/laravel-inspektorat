@extends('backend_layouts.main')
@section('content')
    <div class="page-header">
        <h1 class="page-title">Master</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('master.index') }}">Master</a></li>
                <li class="breadcrumb-item active" aria-current="page">Master Tabel</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Master</h3>
                </div>
                <div class="card-body">
                    @include('partials.errors')
                    <form
                        action="@isset($master) {{ route('master.update', $master->id) }} @endisset @empty($master) {{ route('master.store') }} @endempty"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($master)
                            @method('PUT')
                        @endisset

                        <div class="form-group">
                            <label>Banner</label>
                            <input type="file" @empty($master) required @endempty accept="image/*" class="form-control" name="banner">
                        </div>
                        @isset($master)
                            <img src="{{ asset('uploads/' .  $master->banner) }}" class="img-thumbnail" alt="">
                        @endisset

                        <div class="form-group">
                            <label>Background</label>
                            <input type="file" @empty($master) required @endempty accept="image/*" class="form-control" name="background">
                        </div>
                        @isset($master)
                            <img src="{{ asset('uploads/' .  $master->background) }}" class="img-thumbnail" alt="">
                        @endisset

                        <div class="form-group">
                            <label>Logo</label>
                            <input type="file" @empty($master) required @endempty accept="image/*" class="form-control" name="logo">
                        </div>
                        @isset($master)
                            <img src="{{ asset('uploads/' .  $master->logo) }}" class="img-thumbnail" alt="">
                        @endisset

                       <div class="form-group">
                            <label>Nomor Telepon</label>
                            <input type="text" class="form-control" required
                                value="{{ isset($master) ? $master->phone : @old('phone') }}" name="phone">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" required
                                value="{{ isset($master) ? $master->email : @old('email') }}" name="email">
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
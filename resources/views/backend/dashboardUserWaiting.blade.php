<div class="page-header">
    <h1 class="page-title">Data Diri</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('wbsCategory.index') }}">Data Diri</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Diri Tabel</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Form Data Diri</h3>
            </div>
            <div class="card-body">
                @include('partials.errors')
                <form action="{{ route('storeUserDetail') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nomor HP</label>
                        {!! Form::number('phone', isset(Auth::user()->user_detail) ? Auth::user()->user_detail->phone : @old('phone'), [
                            'required',
                            'class' => 'form-control',
                            'placeholder' => 'Masukkan Nomor HP',
                        ]) !!}
                        <small class="text-danger">Pastikan Nomor Whatsapp</small>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        {!! Form::textarea(
                            'address',
                            isset(Auth::user()->user_detail) ? Auth::user()->user_detail->address : @old('address'),
                            ['required', 'class' => 'form-control', 'placeholder' => 'Masukkan Alamat'],
                        ) !!}
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        {{ Auth::user()->user_detail->gender }}
                        {!! Form::select(
                            'gender',
                            $genders,
                            isset(Auth::user()->user_detail) ? Auth::user()->user_detail->gender : @old('gender'),
                            ['required', 'class' => 'form-control', 'placeholder' => 'Pilih Jenis Kelamin'],
                        ) !!}
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        {!! Form::text(
                            'jabatan',
                            isset(Auth::user()->user_detail) ? Auth::user()->user_detail->jabatan : @old('jabatan'),
                            ['required', 'class' => 'form-control', 'placeholder' => 'Masukkan Jabatan'],
                        ) !!}
                    </div>
                    <div class="form-group">
                        <label>Instansi</label>
                        {!! Form::text(
                            'instansi',
                            isset(Auth::user()->user_detail) ? Auth::user()->user_detail->instansi : @old('instansi'),
                            ['required', 'class' => 'form-control', 'placeholder' => 'Masukkan Instansi Anda'],
                        ) !!}
                    </div>
                    <div class="text-end">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

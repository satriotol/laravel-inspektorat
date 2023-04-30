@extends('backend_layouts.main')
@section('content')
    @hasrole('USER-CONFIRMATION')
        @include('backend.dashboardUserWaiting')
    @endhasrole
    @hasrole('USER-OTP')
        <div class="page-header">
            <h1 class="page-title">User</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('user.index') }}">User</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User Tabel</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Form User</h3>
                    </div>
                    <div class="card-body">
                        @include('partials.errors')
                        <form action="{{ route('verification.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label>Masukan KODE OTP Anda</label>
                                {!! Form::number('otp_code', '', [
                                    'class' => 'form-control',
                                    'required',
                                    'placeholder' => 'Masukkan Kode OTP dari WA',
                                ]) !!}
                            </div>
                            <a href="#updateDataDiri">Update Data Diri</a> |
                            <a href="{{ route('verification.updateOtp') }}">Kirim Ulang OTP</a>
                            <div class="text-end">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="updateDataDiri">
            @include('backend.dashboardUserWaiting')
        </div>
    @endhasrole
    @unlessrole(['USER-CONFIRMATION', 'USER-OTP'])
        <div class="page-header">
            <h1 class="page-title">Selamat Datang Di Dashboard Pelayanan Dan Pelaporan Inspektorat</h1>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mt-2">
                                <h6 class="">Permohonan Informasi</h6>
                                <h2 class="mb-0 number-font">{{ $totalPermohonanInformasi }}</h2>
                            </div>
                            <div class="ms-auto">
                                <div class="chart-wrapper mt-1">
                                    <i class="side-menu__icon fe fe-info"
                                        style="font-size: 4rem; color:var(--primary-bg-color)"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mt-2">
                                <h6 class="">Konsultasi & Asistensi</h6>
                                <h2 class="mb-0 number-font">{{ $totalAsistensi + $totalKonsultasi }}</h2>
                            </div>
                            <div class="ms-auto">
                                <div class="chart-wrapper mt-1">
                                    <i class="side-menu__icon fe fe-users"
                                        style="font-size: 4rem; color:var(--primary-bg-color)"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mt-2">
                                <h6 class="">WBS</h6>
                                <h2 class="mb-0 number-font">{{ $totalWbsReport }}</h2>
                            </div>
                            <div class="ms-auto">
                                <div class="chart-wrapper mt-1">
                                    <i class="side-menu__icon fe fe-flag"
                                        style="font-size: 4rem; color:var(--primary-bg-color)"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mt-2">
                                <h6 class="">UPG</h6>
                                <h2 class="mb-0 number-font">{{ $totalUpgReport }}</h2>
                            </div>
                            <div class="ms-auto">
                                <div class="chart-wrapper mt-1">
                                    <i class="side-menu__icon fe fe-dollar-sign"
                                        style="font-size: 4rem; color:var(--primary-bg-color)"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endunlessrole
@endsection
@push('custom-scripts')
@endpush

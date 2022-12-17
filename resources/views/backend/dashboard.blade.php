@extends('backend_layouts.main')
@section('content')
    @hasrole('USER-CONFIRMATION')
        @include('backend.dashboardUserWaiting')
    @endhasrole
    @hasrole('USER')
        <div class="page-header">
            <h1 class="page-title">Selamat Datang Di Dashboard Pelayanan Dan Pelaporan Inspektorat</h1>
        </div>
        <div class="row">
        </div>
    @endhasrole
@endsection

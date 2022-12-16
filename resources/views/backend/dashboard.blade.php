@extends('backend_layouts.main')
@section('content')
    @hasrole('USER-CONFIRMATION')
        @include('backend.dashboardUserWaiting')
    @endhasrole
@endsection

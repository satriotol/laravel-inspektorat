@extends('backend_layouts.main')
@section('content')
    @hasrole('USER-CONFIRMATION')
        @include('backend.dashboardUserWaiting')
    @endhasrole
    @unlessrole('USER-CONFIRMATION')
        <div class="page-header">
            <h1 class="page-title">Selamat Datang Di Dashboard Pelayanan Dan Pelaporan Inspektorat</h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Permintaan Permohonan Informasi</h3>
                    </div>
                    <div class="card-body">
                        <div id="container"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Asistensi</h3>
                    </div>
                    <div class="card-body">
                        <div id="container2"></div>
                    </div>
                </div>
            </div>
        </div>
    @endunlessrole
@endsection
@push('custom-scripts')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        Highcharts.chart('container', {
            chart: {
                type: 'pie'
            },
            title: {
                text: ''
            },
            tooltip: {
                pointFormat: 'Jumlah: <b>{point.y}</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.y}'
                    }
                }
            },
            series: [{
                name: 'Brands',
                colorByPoint: true,
                data: [
                    @foreach ($totalPermohonanInformasi as $key => $total)
                        {
                            name: '{{ $key }}',
                            y: {{ $total }}
                        },
                    @endforeach
                ]
            }]
        });
        Highcharts.chart('container2', {
            chart: {
                type: 'pie'
            },
            title: {
                text: ''
            },
            tooltip: {
                pointFormat: 'Jumlah: <b>{point.y}</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.y}'
                    }
                }
            },
            series: [{
                name: 'Brands',
                colorByPoint: true,
                data: [
                    @foreach ($totalAsistensi as $key => $total)
                        {
                            name: '{{ $key }}',
                            y: {{ $total }}
                        },
                    @endforeach
                ]
            }]
        });
    </script>
@endpush

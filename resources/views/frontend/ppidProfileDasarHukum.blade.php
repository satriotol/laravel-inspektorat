@extends('frontend_layouts.main')
@section('content')
<section class="breadcrumb-area" style="">
    <div class="container text-center">
        <h1>
            Dasar Hukum PPID
        </h1>
    </div>
</section>
<!--Start Project grid with text area-->
<section id="project-area" class="project-single-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="single-project-img-box">
                    <img src="{{ asset('uploads/' . $ppidProfileDasarHukum->image) }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card-header">
                    <h3 class="card-title">File</h3>
                </div>
                {{-- <div class="project-info">
                    <ul>
                        <li><b>Customer</b>:<span>John Doe</span></li>
                        <li><b>Live demo</b>:<span>www.livedemo.com</span></li>
                        <li><b>Category</b>:<span>Finance & Legal</span></li>
                        <li><b>Date</b>:<span>21 August, 2016</span></li>
                        <li><b>Tags</b>:<span>Financial Services</span></li>
                    </ul>
                </div> --}}
                @isset($ppidDasarHukums)
                <table id="example2" class="table table-bordered text-nowrap border-bottom">
                    <thead>
                        <th>Nama</th>
                        <th>File</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        @foreach ($ppidDasarHukums->PPIDDasarHukumFile as $ppidDasarHukum)
                            <tr>
                                <td>{{ $ppidDasarHukum->name }}</td>
                                <td> <a href="#"
                                    onclick="window.open('{{ asset('uploads/' . $ppidDasarHukum->file) }}','_blank')"
                                    class="btn btn-sm btn-info">view</a></td>
                                <td>
                                    <a href="{{ route('ppidDasarHukumFile.destroy', $ppidDasarHukum->id) }}"
                                        class="btn btn-sm btn-danger"
                                        onclick="return confirm('Are you sure?')">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endisset
            </div>
            <div class="col-md-8">
                <div class="legal-work-content">
                    <p>{!! $ppidProfileDasarHukum->description !!}</p>
                </div>
            </div>
        </div>
<br>
<br>
<br>

    </div>
</section>
<!--End Project grid with text area-->
@endsection

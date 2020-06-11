@extends('layout.admin.app')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pendaftar Komunitas</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Pendaftar Pariwisata</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                </h3>

                <div class="card-tools">

                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th>
                            Nama Anggota
                        </th>
                        <th>
                            Nomor Whatsapp
                        </th>
                        <th>
                            Layanan Wisata
                        </th>
                        <th>
                            Nama Komunitas
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data_pendaftar as $daftar)
                        <tr>

                            <td>{{$daftar->nama}}</td>
                            <td>{{$daftar->no_wa}}</td>
                            <td>{{$daftar->layanan}}</td>
                            <td>{{$daftar->getKomunitas->nama_komunitas}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </section>
@endsection

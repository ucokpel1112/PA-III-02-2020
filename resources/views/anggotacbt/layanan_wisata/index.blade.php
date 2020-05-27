@extends('layout.anggotacbt.app')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Layanan Wisata</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Layanan Wisata</a></li>
                        <li class="breadcrumb-item active">Anggota CBT</li>
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
                    <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal"
                            data-target="#exampleModal">
                        Tambah Data Layanan Wisata
                    </button>
                </h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fas fa-minus"></i></button>

                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="width: 20%">
                            Nama Layanan
                        </th>
                        <th>
                            Jenis Layanan
                        </th>
                        <th style="width: 20%">
                            Nama Paket Wisata
                        </th>
                        <th class="text-center" style="width: 20%">
                            Harga Paket
                        </th>
                        <th class="text-center" style="width:20%">
                            Aksi
                        </th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data_layanan_wisata as $layanan_wisata)
                        <tr>
                            <td>{{$layanan_wisata->nama_layanan}}</td>
                            <td>{{$layanan_wisata->getJenisLayanan->nama_jenis_layanan}}</td>
                            <td>{{$layanan_wisata->getKabupaten->nama_kabupaten}}</td>
                            <td>{{$layanan_wisata->deskripsi_layanan}}</td>
                            <td>
                                <a href="{{route('anggotacbt.layanan.edit',$layanan_wisata->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                <a href="{{route('anggotacbt.layanan.delete',$layanan_wisata->id)}}" class="btn btn-danger btn-sm"
                                   onclick="return confirm('Apakah data ini ingin dihapus?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Layanan Wisata</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{route('anggotacbt.layanan.tambah')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Layanan</label>
                                    <input name="nama_layanan" type="text" class="form-control" id="exampleInputEmail1"
                                           aria-describedby="emailHelp" placeholder="Nama Layanan">
                                </div>


                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Pilih Jenis Layanan</label>
                                    <select name="jenisLayanan_id" class="form-control" id="exampleFormControlSelect1" required>
                                        <option selected="" disabled="">Pilih Jenis Layanan</option>
                                        @foreach($jenis as $row)
                                            <option value="{{$row->id}}">{{$row->nama_jenis_layanan}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Pilih Kabupaten</label>
                                    <select name="kabupaten_id" class="form-control" id="exampleFormControlSelect1">
                                        <option selected="" disabled="">Pilih Kabupaten</option>
                                        @foreach($kabupaten as $row)
                                            <option value="{{$row->id_kabupaten}}">{{$row->nama_kabupaten}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Deskripsi Layanan</label>
                                    <textarea name="deskripsi_layanan" class="form-control" id="exampleFormControlTextarea1"
                                              rows="3"></textarea>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.card-body -->

        <
        <!-- /.card -->

    </section>
@endsection

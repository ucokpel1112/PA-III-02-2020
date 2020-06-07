@extends('layout.admin.app')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Komunitas Pariwisata</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Komunitas Pariwisata</li>
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
                        Tambah data komunitas
                    </button>



                </h3>

                <div class="card-tools">

                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="width: 20%">
                            Nama Komunitas
                        </th>
                        <th>
                            Deskripsi
                        </th>
                        <th>
                            Link Gabung Group Komunitas
                        </th>
                        <th class="text-center" style="width: 20%">
                            Kabupaten
                        </th>
                        <th class="text-center" style="width:20%">
                            Aksi
                        </th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data_komunitas as $komunitas)
                        <tr>
                            <td>{{$komunitas->nama_komunitas}}</td>
                            <td> <?php echo $komunitas->deskripsi ?></td>
                            <td><a href="{{$komunitas->link}}">{{$komunitas->link}}</a></td>
                            <td>{{$komunitas->getKabupaten->nama_kabupaten}}</td>
                            <td>
                                <a href="{{ route('edit_komunitas',$komunitas->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                <a href="{{ route('hapus_komunitas',$komunitas->id)}}" class="btn btn-danger btn-sm"
                                   onclick="return confirm('Apakah data ini ingin dihapus?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>

            <!-- Modal -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Komunitas</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{route('tambah_komunitas')}}" method="POST">
                            {{csrf_field()}}
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Nama Komunitas</label>
                                    <input name="nama_komunitas" class="form-control" type="text"
                                           placeholder="Nama Komunitas">
                                </div>
                                <div class="form-group">
                                    <label for="Deskripsi">Deskripsi</label>
                                    <textarea name="deskripsi" class="textarea" placeholder="Deskripsi"
                                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Link WhatsApp Group Komunitas</label>
                                    <textarea name="link" class="form-control" id="exampleFormControlTextarea1"
                                              rows="3"></textarea>
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

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
        <!-- /.card-body -->


        <!-- /.card -->

    </section>
@endsection

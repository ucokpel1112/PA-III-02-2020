@extends('layout.admin.app')

@section('content')
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Adminstrator</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Kalender Event</a></li>
                <li class="breadcrumb-item active">Tambah Kalender</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>

    <!-- Main content -->
        <section class="content">
        <div class="container-fluid">
            <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Tambah Kalender Event</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ route('admin.kalender.updatekalender',$kalenders->$id_kalenderevent) }}"  method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                        <div class="card-body">
                        <div class="form-group">
                            <label for="Nama Event">Nama Event</label>
                            <input type="text" class="form-control" id="Nama Event" value="{{$kalenders->nama_event}}">
                        </div>
                        <div class="form-group" >
                            <label for="exampleInputPasNama Tempatsword1">Nama Tempat</label>
                            <input type="text" class="form-control" id="Nama Tempat" value="{{$kalenders->nama_tempat}}">
                        </div>
                        <div class="form-group">
                            <label for="Tanggal">Tanggal</label>
                            <input type="date" class="form-control" id="Tanggal" value="{{$kalenders->tanggal_event}}">
                        </div>
                        <div class="form-group">
                            <label for="Jam">Jam</label>
                            <input type="time" class="form-control" id="Jam" value="{{$kalenders->jam_event}}">
                        </div>
                        <div class="form-group">
                            <label for="Alamat">Alamat</label>
                            <input type="text" class="form-control" id="Alamat" value="{{$kalenders->alamat_event}}">
                        </div>
                        <div class="form-group">
                            <label for="Deskripsi">Deskripsi</label>
                            <div class="mb-3">
                                <textarea class="textarea" placeholder="Deskripsi"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$kalenders->deskripsi_event}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Gambar/Poster</label>
                            <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="row">
                                <div class="col-sm-10">
                                    <img class="img-fluid" src="{{asset('storage/Image/kalender'.$kalenders->gambar_event)}}" alt="Photo">
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
             </div>
        </div>
        </div>


        </section>
@endsection
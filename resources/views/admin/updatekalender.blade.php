{{--<<<<<<< HEAD--}}
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
                <form role="form">
                        <div class="card-body">
                        <div class="form-group">
                            <label for="Nama Event">Nama Event</label>
                            <input type="text" class="form-control" id="Nama Event" placeholder="Nama Event">
                        </div>
                        <div class="form-group">
                            <label for="Tanggal">Tanggal</label>
                            <input type="date" class="form-control" id="Tanggal" placeholder="Tanggal">
                        </div>
                        <div class="form-group">
                            <label for="Alamat">Alamat</label>
                            <input type="text" class="form-control" id="Alamat" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPasNama Tempatsword1">Nama Tempat</label>
                            <input type="text" class="form-control" id="Nama Tempat" placeholder="Nama Tempat">
                        </div>
                        <div class="form-group">
                            <label for="Jam">Jam</label>
                            <input type="time" class="form-control" id="Jam" placeholder="Jam">
                        </div>
                        <div class="form-group">
                            <label for="Deskripsi">Deskripsi</label>
                            <div class="mb-3">
                                <textarea class="textarea" placeholder="Deskripsi"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Gambar/Poster</label>
                            <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
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

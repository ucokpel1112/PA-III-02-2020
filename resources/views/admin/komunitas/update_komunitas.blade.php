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
                        <li class="breadcrumb-item"><a href="{{route('home.admin')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('data_komunitas.admin')}}">Kalender Event</a></li>
                        <li class="breadcrumb-item active">Edit Kalender</li>
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
                            <h3 class="card-title">Edit Komunitas Pariwisata</h3>
                        </div>
                        <form  action="{{route('update_komunitas',$komunitas->id)}}"  method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="hidden" value="{{$komunitas->id}}" name="id">
                                </div>
                                <div class="form-group">
                                    <label>Nama Komunitas</label>
                                    <input name="nama_komunitas" class="form-control" type="text" placeholder="Nama Komunitas" value="{{$komunitas->nama_komunitas}}">
                                </div>
                                <div class="form-group" >
                                    <label for="Deskripsi">Deskripsi</label>
                                    <textarea name="deskripsi" class="textarea" placeholder="Deskripsi"
                                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$komunitas->deskripsi}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Link WhatsApp Group Komunitas</label>
                                    <textarea name="link" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$komunitas->link}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Pilih Kabupaten</label>
                                    <select name="kabupaten_id" class="form-control" id="exampleFormControlSelect1">
                                        <option selected="" disabled="">Pilih Kabupaten</option>
                                        @foreach($kabupaten as $row)
                                            <option value="{{$row->id_kabupaten}}" @if($row->id_kabupaten) selected @endif>{{$row->nama_kabupaten}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Edit</button>

                                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #FF0000;"><a href="/adm/komunitas" style="color: #ffffff">Close</a></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection


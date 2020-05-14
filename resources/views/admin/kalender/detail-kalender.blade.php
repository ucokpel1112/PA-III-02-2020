@extends('layout.admin.app')

@section('content')
<br>
    <section class="content">
        <!-- Default box -->
        <div class="card card-solid">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="col-12">
                            <img src="{{asset('storage/img/kalender/'.$kalenders->gambar_event)}}" class="product-image" alt="Event Image">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <h3 class="my-3">{{$kalenders->nama_event}}</h3>
                        <hr>
                        <p><?php echo $kalenders->deskripsi_event;?></p>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>

@endsection

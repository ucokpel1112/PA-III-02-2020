@extends('layout.admin.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kalender Event</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Kalender Event</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="card card-solid">
            <div class="card-body pb-0">
                <div class="row d-flex align-items-stretch">
                    @foreach($kalenders as $kalenders)
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                            <div class="card bg-light">
                                <div class="card-header text-muted border-bottom-0">
                                    {{ $kalenders->nama_event}}
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b>Lokasi</b></h2>
                                            <p class="text-muted text-sm"><b> Deskripsi</b>
                                                <?php echo substr(strip_tags(str_replace(PHP_EOL, '<br>', $kalenders->deskripsi_event), '<br>'), 0, 300);?>
                                                <a href="{{ route('detail-admin',$kalenders->id_kalenderevent) }}"> baca
                                                    selengkapnya...</a>
                                            </p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fa fa-map-marker "></i></span> {{$kalenders->nama_tempat}}
                                                </li>
                                                <li class="small"><span class="fa-li"><i
                                                            class="fa fa-calendar"></i></span> {{$kalenders->tanggal_event}}
                                                </li>
                                                <li class="small"><span class="fa-li"><i
                                                            class="fa fa-clock"></i></span> {{$kalenders->jam_event}}
                                                </li>
                                                <li class="small"><span class="fa-li"><i
                                                            class="fa fa-location-arrow"></i></span> {{$kalenders->alamat_event}}
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img src="{{asset('storage/img/kalender/'.$kalenders->gambar_event)}}"
                                                 alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <form action="{{route('delete-eventkalender',$kalenders->id_kalenderevent)}}"
                                      method="post">
                                    <div class="card-footer">
                                        <div class="text-right">
                                            <a href="{{ url('/adm/updatekalender',$kalenders->id_kalenderevent) }}"
                                               class="btn btn-sm bg-warning">
                                                <i class="fas fa-edit"></i> Update
                                            </a>
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash"></i> Hapus
                                            </button>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>



                    @endforeach

                </div>
            </div>

            <!-- /.card-body -->
            <div class="card-footer">
                <nav aria-label="Contacts Page Navigation">
                    <ul class="pagination justify-content-center m-0">
                        {{--                        {!! $kalenders->links() !!}--}}
                    </ul>
                </nav>
            </div>
            <!-- /.card-footer -->
        </div>
        <!-- /.card -->

    </section>

@endsection

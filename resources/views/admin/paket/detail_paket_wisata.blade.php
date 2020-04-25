@extends('layout.admin.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detail Paket</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Paket</a></li>
                        <li class="breadcrumb-item active">Detail</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#detail"
                                                        data-toggle="tab">Detail</a></li>
                                <li class="nav-item"><a class="nav-link" href="#layanan-wisata" data-toggle="tab">Layanan
                                        Wisata</a></li>
                                <li class="nav-item"><a class="nav-link" href="#included-not-included"
                                                        data-toggle="tab">Included & Not Included</a></li>
                            </ul>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="detail">
                                    <strong>{{$paket->nama_paket}}</strong>

                                    <p class="text-muted">
                                        Paket Kabupaten {{$paket->getKabupaten->nama_kabupaten}}
                                    </p>

                                    <hr>
                                    <strong>Harga Paket Wisata</strong>

                                    <p class="text-muted">
                                        {{number_format($paket->harga_paket)}}
                                    </p>

                                    <hr>
                                    <strong>Avalability</strong>

                                    <p class="text-muted">
                                        {{$paket->availability}}
                                    </p>

                                    <hr>
                                    <strong>Durasi</strong>

                                    <p class="text-muted">
                                        {{$paket->durasi}}
                                    </p>

                                    <hr>
                                    <strong>Deskripsi Paket</strong>

                                    <p class="text-muted">
                                        <?php echo $paket->deskripsi_paket; ?>
                                        <br>
                                    </p>

                                    <hr>
                                    <strong>Rencana Perjalanan</strong>

                                    <p class="text-muted">
                                        <?php echo $paket->rencana_perjalanan; ?>
                                        <br>
                                    </p>

                                    <hr>
                                    <strong>Tambahan</strong>

                                    <p class="text-muted">
                                        <?php echo $paket->tambahan; ?>
                                        <br>
                                    </p>

                                    <hr>
                                    <strong>Daerah</strong>

                                    <p class="text-muted">
                                        Kabupaten {{$paket->getKabupaten->nama_kabupaten}}
                                        <br>
                                    </p>

                                    <hr>
                                    <strong>Gambar</strong>
                                    <p></p>
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <img class="img-fluid" src="{{asset('img/banner/'.$paket->gambar)}}"
                                                 alt="Photo">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="layanan-wisata">
                                    @foreach($paket->getPaketLayanan as $layanan)
                                        <hr>
                                        <strong>{{$layanan->nama_layanan}}</strong>

                                        <p class="text-muted">
                                            {{$layanan->deskripsi_layanan}}
                                        </p>
                                    @endforeach
                                </div>
                                <div class="tab-pane" id="included-not-included">
                                    <strong>Included</strong>
                                    <ul>
                                        @foreach($paket->getIncludedNotIncluded as $ini)
                                            @if($ini->jenis=='included')
                                                <li>
                                                    {{$ini->keterangan}}
                                                </li>
                                            @endif

                                        @endforeach
                                    </ul>
                                    <hr>
                                    <strong>Not Included</strong>

                                    <ul>
                                        @foreach($paket->getIncludedNotIncluded as $ini)
                                            @if($ini->jenis=='not included')
                                                <li>
                                                    {{$ini->keterangan}}
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>

                                    <hr>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </section>
@endsection

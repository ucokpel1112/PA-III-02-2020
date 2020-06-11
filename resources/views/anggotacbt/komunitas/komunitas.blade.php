@extends('layout.anggotacbt.app')
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
                    <a href="{{url('anggotacbt/komunitas/pendaftar')}}" class="btn btn-primary btn-sm"> Daftar Anggota Komunitas</a>
                </h3>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="width: 5%;">
                            No
                        </th>
                        <th style="width: 20%">
                            Nama Komunitas
                        </th>
                            <th style="width: 30%">
                                Deskripsi
                            </th>
                        <th style="width: 20%">
                            Link Gabung Group Komunitas
                        </th>
                        <th class="text-center" style="width: 25%">
                            Kabupaten
                        </th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data_komunitas as $komunitas)
                    <?php $a=1; ?>
                        <tr>
                            <td><?php echo $a++ ;?></td>
                            <td>{{$komunitas->nama_komunitas}}</td>
                            <td> <?php echo $komunitas->deskripsi ?></td>
                            <td> <a href="{{$komunitas->link}}">{{$komunitas->link}}</a></td>
                            <td>{{$komunitas->getKabupaten->nama_kabupaten}}</td>

                        </tr>
                    @endforeach
                </table>
            </div>

            <!-- Modal -->

            <!-- Modal -->



        </div>
        <!-- /.card-body -->


        <!-- /.card -->

    </section>
@endsection

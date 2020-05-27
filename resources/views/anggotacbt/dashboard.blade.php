@extends('layout.anggotacbt.app')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard</h1>
                </div>
                {{--                <div class="col-sm-6">--}}
                {{--                    <ol class="breadcrumb float-sm-right">--}}
                {{--                        <li class="breadcrumb-item"><a href="#">Kalender Event</a></li>--}}
                {{--                    </ol>--}}
                {{--                </div>--}}
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{$count}}</h3>

                            <p>Layanan Wisata</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-cube"></i>
                        </div>
                        <a href="{{ url('/adm/paket') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{$count}}</h3>

                            <p>Kalender Wisata</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pricetag"></i>

                        </div>
                        <a href="{{ url('/adm/listkalender') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>44</h3>

                            <p>Member CBT</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{$count_k}}</h3>

                            <p>Komunitas Pariwisata</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
        </div>
    </section>

@endsection





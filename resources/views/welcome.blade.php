@extends('layout.front.main')

@section('content')
    @include('layout.front.includes.slider')


    <!-- Komunitas Per-Kabupaten  -->
    <div class="popular_places_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <a href="{{asset('/komunitas')}}"><h3>Komunitas</h3></a>
                        <p>Terdapat komunitas - komunitas di 7 kabupaten di sekitaran Danau Toba</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($kabupaten as $row)
                    @if($row->nama_kabupaten=='Toba')
                        <div class="col-lg-4 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                    <a href="{{route('komunitas.show',$row->id_kabupaten)}}">
                                        <img src="img/filter-paket/toba.png">
                                    </a>
                                </div>
                                <div class="place_info">
                                    {{--                                    <a href="{{route('paket.filter.kabupaten',$row->id_kabupaten)}}"><h3>Toba</h3></a>--}}
                                    <a href="{{route('komunitas.show',$row->id_kabupaten)}}"><h3>Toba</h3></a>
                                    <div class="rating_days d-flex justify-content-between">
                                        <div class="days">
                                            <i class="fa fa-users"></i>
                                            <a href="{{route('komunitas.show',$row->id_kabupaten)}}">{{$row->getKomunitas->count()}}
                                                Komunitas</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($row->nama_kabupaten == 'Samosir')
                        <div class="col-lg-4 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                    <a href="{{route('komunitas.show',$row->id_kabupaten)}}">
                                        <img src="img/filter-paket/samosir.png" alt="">
                                    </a>
                                </div>
                                <div class="place_info">
                                    <a href="{{route('komunitas.show',$row->id_kabupaten)}}"><h3>Samosir</h3>
                                    </a>
                                    <div class="rating_days d-flex justify-content-between">
                                        <div class="days">
                                            <i class="fa fa-users"></i>
                                            <a href="{{route('komunitas.show',$row->id_kabupaten)}}">{{$row->getKomunitas->count()}}
                                                Komunitas</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($row->nama_kabupaten == 'Tapanuli Utara')
                        <div class="col-lg-4 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                    <a href="{{route('komunitas.show',$row->id_kabupaten)}}">
                                        <img src="img/filter-paket/taput.png" alt="">
                                    </a>
                                </div>
                                <div class="place_info">
                                    <a href="{{route('komunitas.show',$row->id_kabupaten)}}"><h3>Tapanuli Utara</h3></a>
                                    <div class="rating_days d-flex justify-content-between">
                                        <div class="days">
                                            <i class="fa fa-users"></i>
                                            <a href="{{route('komunitas.show',$row->id_kabupaten)}}">{{$row->getKomunitas->count()}}
                                                Komunitas</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($row->nama_kabupaten == 'Karo')
                        <div class="col-lg-4 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                    <a href="{{route('komunitas.show',$row->id_kabupaten)}}">
                                        <img src="img/filter-paket/karo.png" alt="">
                                    </a>
                                </div>
                                <div class="place_info">
                                    <a href="{{route('komunitas.show',$row->id_kabupaten)}}"><h3>Karo</h3></a>
                                    <div class="rating_days d-flex justify-content-between">
                                        <div class="days">
                                            <i class="fa fa-users"></i>
                                            <a href="{{route('komunitas.show',$row->id_kabupaten)}}">{{$row->getKomunitas->count()}}
                                                Komunitas</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($row->nama_kabupaten == 'Simalungun')
                        <div class="col-lg-4 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                    <a href="{{route('komunitas.show',$row->id_kabupaten)}}">
                                        <img src="img/filter-paket/simalungun.png" alt="">
                                    </a>
                                </div>
                                <div class="place_info">
                                    <a href="{{route('komunitas.show',$row->id_kabupaten)}}"><h3>Simalungun</h3>
                                    </a>
                                    <div class="rating_days d-flex justify-content-between">
                                        <div class="days">
                                            <i class="fa fa-users"></i>
                                            <a href="{{route('komunitas.show',$row->id_kabupaten)}}">{{$row->getKomunitas->count()}}
                                                Komunitas</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($row->nama_kabupaten == 'Humbang Hasundutan')
                        <div class="col-lg-4 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                    <a href="{{route('komunitas.show',$row->id_kabupaten)}}">
                                        <img src="img/filter-paket/humbahas.png" alt="">
                                    </a>
                                </div>
                                <div class="place_info">
                                    <a href="{{route('komunitas.show',$row->id_kabupaten)}}"><h3>Humbang Hasundutan</h3>
                                    </a>
                                    <div class="rating_days d-flex justify-content-between">
                                        <div class="days">
                                            <i class="fa fa-users"></i>
                                            <a href="{{route('komunitas.show',$row->id_kabupaten)}}">{{$row->getKomunitas->count()}}
                                                Komunitas</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($row->nama_kabupaten == 'Dairi')
                        <div class="col-lg-4 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                    <a href="{{route('komunitas.show',$row->id_kabupaten)}}">
                                        <img src="img/filter-paket/dairi.png" alt="">
                                    </a>
                                </div>
                                <div class="place_info">
                                    <a href="{{route('komunitas.show',$row->id_kabupaten)}}"><h3>Dairi</h3></a>
                                    <div class="rating_days d-flex justify-content-between">
                                        <div class="days">
                                            <i class="fa fa-users"></i>
                                            <a href="{{route('komunitas.show',$row->id_kabupaten)}}">{{$row->getKomunitas->count()}}
                                                Komunitas</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <!--/ Komunitas Per-Kabupaten  -->

    <div class="travel_variation_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="img/icon_fitur/tour.png" alt="">
                        </div>
                        <h3>Paket Wisata</h3>
                        <p>Perjalanan wisata yang dirancang agar perjalanan lebih menyenangkan.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="img/icon_fitur/komunitas.png" alt="">
                        </div>
                        <h3>Comunity Based Tourism</h3>
                        <p>Komunitas yang dibangun untuk meningkatkan produktivitas penyaji wisata.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="img/icon_fitur/kalender.png" alt="">
                        </div>
                        <h3>Kalender Event</h3>
                        <p>Event di Kawasan Danau Toba sangatlah banyak, sehingga kita perlu tahu ecent apakah yang akan
                            berlangsung atau sedang berlansung.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="popular_places_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <a href="{{route('paket')}}"><h3>Paket Wisata</h3></a>
                        <p>Paket wisata tersedia di 7 kabupaten disekitaran danau toba, pilih paketmu dan jelajahi lah
                            indahnya Danau Toba</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($kabupaten as $row)
                    @if($row->nama_kabupaten=='Toba')
                        <div class="col-lg-4 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                    <a href="{{route('paket.filter.kabupaten',$row->id_kabupaten)}}">
                                        <img src="img/filter-paket/toba.png" alt="">
                                    </a>
                                </div>
                                <div class="place_info">
                                    <a href="{{route('paket.filter.kabupaten',$row->id_kabupaten)}}"><h3>Toba</h3></a>
                                    <div class="rating_days d-flex justify-content-between">
                                        <div class="days">
                                            <i class="fa fa-clock-o"></i>
                                            <a href="{{route('paket.filter.kabupaten',$row->id_kabupaten)}}">{{$count_toba}}
                                                Paket Wisata</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($row->nama_kabupaten == 'Samosir')
                        <div class="col-lg-4 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                    <a href="{{route('paket.filter.kabupaten',$row->id_kabupaten)}}">
                                        <img src="img/filter-paket/samosir.png" alt="">
                                    </a>
                                </div>
                                <div class="place_info">
                                    <a href="{{route('paket.filter.kabupaten',$row->id_kabupaten)}}"><h3>Samosir</h3>
                                    </a>
                                    <div class="rating_days d-flex justify-content-between">

                                        <div class="days">
                                            <i class="fa fa-clock-o"></i>
                                            <a href="{{route('paket.filter.kabupaten',$row->id_kabupaten)}}">{{$count_samosir}}
                                                Paket Wisata</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($row->nama_kabupaten == 'Tapanuli Utara')

                        <div class="col-lg-4 col-md-6">
                            <div class="single_place">
                                <div class="thumb"><a href="{{route('paket.filter.kabupaten',$row->id_kabupaten)}}">
                                        <img src="img/filter-paket/taput.png" alt=""></a>
                                </div>
                                <div class="place_info">
                                    <a href="{{route('paket.filter.kabupaten',$row->id_kabupaten)}}"><h3>Tapanuli
                                            Utara</h3></a>
                                    <div class="rating_days d-flex justify-content-between">

                                        <div class="days">
                                            <i class="fa fa-clock-o"></i>
                                            <a href="{{route('paket.filter.kabupaten',$row->id_kabupaten)}}">{{$count_taput}}
                                                Paket Wisata</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @elseif($row->nama_kabupaten == 'Karo')

                        <div class="col-lg-4 col-md-6">
                            <div class="single_place">
                                <div class="thumb"><a href="{{route('paket.filter.kabupaten',$row->id_kabupaten)}}">
                                        <img src="img/filter-paket/karo.png" alt=""></a>
                                </div>
                                <div class="place_info">
                                    <a href="{{route('paket.filter.kabupaten',$row->id_kabupaten)}}"><h3>Karo</h3>
                                    </a>
                                    <div class="rating_days d-flex justify-content-between">

                                        <div class="days">
                                            <i class="fa fa-clock-o"></i>
                                            <a href="{{route('paket.filter.kabupaten',$row->id_kabupaten)}}">{{$count_karo}}
                                                Paket Wisata</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($row->nama_kabupaten == 'Simalungun')
                        <div class="col-lg-4 col-md-6">
                            <div class="single_place">
                                <div class="thumb"><a href="{{route('paket.filter.kabupaten',$row->id_kabupaten)}}">
                                        <img src="img/filter-paket/simalungun.png" alt=""></a>
                                </div>
                                <div class="place_info">
                                    <a href="{{route('paket.filter.kabupaten',$row->id_kabupaten)}}"><h3>
                                            Simalungun</h3>
                                    </a>
                                    <div class="rating_days d-flex justify-content-between">

                                        <div class="days">
                                            <i class="fa fa-clock-o"></i>
                                            <a href="{{route('paket.filter.kabupaten',$row->id_kabupaten)}}">{{$count_simalungun}}
                                                Paket Wisata</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($row->nama_kabupaten == 'Humbang Hasundutan')

                        <div class="col-lg-4 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                    <a href="{{route('paket.filter.kabupaten',$row->id_kabupaten)}}">
                                        <img src="img/filter-paket/humbahas.png" alt=""></a>
                                </div>
                                <div class="place_info">

                                    <a href="{{route('paket.filter.kabupaten',$row->id_kabupaten)}}"><h3>Humbang
                                            Hasundutan</h3></a>
                                    <div class="rating_days d-flex justify-content-between">

                                        <div class="days">
                                            <i class="fa fa-clock-o"></i>
                                            <a href="{{route('paket.filter.kabupaten',$row->id_kabupaten)}}">{{$count_humbang}}
                                                Paket Wisata</a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    @elseif($row->nama_kabupaten == 'Dairi')
                        <div class="col-lg-4 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                    <a href="{{route('paket.filter.kabupaten',$row->id_kabupaten)}}">
                                        <img src="img/filter-paket/dairi.png" alt="">
                                    </a>
                                </div>
                                <div class="place_info">
                                    <a href="{{route('paket.filter.kabupaten',$row->id_kabupaten)}}"><h3>Dairi</h3>
                                    </a>
                                    <div class="rating_days d-flex justify-content-between">

                                        <div class="days">
                                            <i class="fa fa-clock-o"></i>
                                            <a href="{{route('paket.filter.kabupaten',$row->id_kabupaten)}}">{{$count_dairi}}
                                                Paket Wisata</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>


    <div class="video_area video_bg overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video_wrap text-center">
                        <h3>Enjoy Video</h3>
                        <div class="video_icon">
                            <a class="popup-video video_play_button" href="https://www.youtube.com/watch?v=Za2zEoGcfmU">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- popular_destination_area_start  -->
    <div class="popular_destination_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <a href="{{url('/eventkalender')}}"><h3>Kalender Event Danau Toba</h3></a>
                        <p>Event di Kawasan Danau Toba sangatlah banyak, sehingga kita perlu tahu ecent apakah yang akan
                            berlangsung atau sedang berlansung.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($kals as $kal)
                    <div class="col-lg-4 col-md-6">
                        <a href="{{ route('detail-eventkalender',$kal->id_kalenderevent) }}">
                            <div class="single_destination">
                                <div class="thumb">
                                    <img src="{{asset('storage/img/kalender/'.$kal->gambar_event)}}" alt=""
                                         style="height: 250px;">
                                </div>
                                <div class="content">
                                    <p class="d-flex align-items-center">{{$kal->nama_event}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- popular_destination_area_end  -->
@endsection

@extends('layout.front.main')
@section('content')

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->
    <div class="popular_places_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="filter_result_wrap">
                        <h3>Filter Result</h3>
                        <div class="filter_bordered">

                            <form action="{{route('paket.filter')}}" method="post">
                                @csrf
                                <div class="filter_inner">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="single_select">
                                                <select name="kabupaten">
                                                    <option data-display="Kabupaten">Kabupaten</option>
                                                    @foreach($kabupaten as $row)
                                                        <option
                                                            value="{{$row->id_kabupaten}}"
                                                            data-display="{{$row->nama_kabupaten}}" {{(isset($id_kab)&&($id_kab==$row->id_kabupaten))?'selected':null}}>{{$row->nama_kabupaten}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="single_select">
                                                <select name="jenis">
                                                    <option data-display="Tipe/Jenis Perjalanan">Tipe/Jenis Perjalanan
                                                    </option>
                                                    @foreach($jenis as $row)
                                                        <option value="{{$row->jenis_paket}}"
                                                                data-display="{{$row->jenis_paket}}" {{(isset($jeniss)&&(strcmp($jeniss,$row->jenis_paket)==0)?'selected':null)}}>{{$row->jenis_paket}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="reset_btn">
                                    <button class="boxed-btn4" type="submit">Reset</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        @forelse($paket as $row)
                            <div class="col-lg-6 col-md-6">
                                <div class="single_place">
                                    <div class="thumb" style="max-height: 200px">
                                        <img src="{{asset('storage/img/paket/'.$row->gambar)}}" alt="">
                                        <a href="#" class="prise">Rp.{{number_format($row->harga_paket)}}</a>
                                    </div>
                                    <div class="place_info">
                                        <a href="{{route('paket.detail',$row->id_paket)}}"><h3>{{$row->nama_paket}}</h3>
                                        </a>
                                        <p>{{$row->getKabupaten->nama_kabupaten}}</p>
                                        <div class="rating_days d-flex justify-content-between">
                                        <span class="d-flex justify-content-center align-items-center">
                                             <a href="#">(20 Review)</a>
                                        </span>
                                            <div class="days">
                                                <i class="fa fa-clock-o"></i>
                                                <a href="#">{{$row->durasi}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col"></div>
                            <div class="text-center col-lg-6 col-md-6">
                                <h4>Paket Wisata Sedang Tidak Ada !</h4>
                            </div>
                            <div class="col"></div>
                        @endforelse
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            {!! $paket->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--Awal Recent Trip--}}
    <div class="recent_trip_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Paket Wisata Terbaru</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($paket_lainnya as $roww)
                    <div class="col-lg-4 col-md-6">
                        <div class="single_trip">
                            <div class="thumb" style="max-height: 180px">
                                <img src="{{asset('/storage/img/paket/'.$roww->gambar)}}" alt="">
                            </div>
                            <div class="info">
                                <div class="date">
                                    <span>
                                        <i class="fa fa-clock-o"></i>
                                        <a href="#">{{$roww->durasi}}</a>
                                    </span>
                                </div>
                                <a href="#">
                                    <h3>{{str_limit($roww->nama_paket,40)}}</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{--Akhir Recent Trip--}}
@endsection

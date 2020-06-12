@extends('layout.front.main')
@section('content')


    <div class="destination_banner_wrap overlay"
         style="background-image: url({{asset('storage/img/paket/'.$paket->gambar)}});">
        <div class="destination_text text-center">
            <h3>{{$paket->nama_paket}}</h3>
            <p>Kabupaten {{ucfirst($paket->getKabupaten->nama_kabupaten)}}</p>
            <a style="margin-top: 50px;" href="#pemesanan" class="boxed-btn3">Pemesanan</a>
            {{--            <a    class="genric-btn info e-large">Pemesanan</a>--}}
        </div>
    </div>
    <div class="container-fluid">
        <div class="row cakupan">
            <div class="col item">
                <div class="row simbol">
                    <div class="col">
                        <i class="fa fa-clock-o simbol-detail" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h2 style="color: white;">{{$paket->durasi}}</h2>
                    </div>
                </div>
            </div>
            <div class="col item">
                <div class="row simbol">
                    <div class="col">
                        <i class="fa fa-user simbol-detail" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h2 style="color: white;">{{$paket->availability}} Orang</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="destination_details_info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-9">
                    <div class="destination_info">
                        <h3>Description</h3>
                        <hr>
                        {{--                        Mulai Deskripsi--}}
                        <?php echo($paket->deskripsi_paket); ?>
                        {{--                        Akhir Deskripsi--}}
                        <br><br>
                        <h3>Itinerary</h3>
                        <hr>
                        {{--                    Mulai Itinerary        --}}
                        <?= $paket->rencana_perjalanan ?>
                        {{--                        Akhir Itinerary--}}
                        <br><br>
                    </div>
                    <div class="destination_info">
                        <h3>Tambahan</h3>
                        <hr>
                        <?= $paket->tambahan ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(isset($hotel))
        <div class="popular_places_area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section_title text-center mb_70">
                            <h3>Rekomendasi Hotel</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($hotel as $row)
                        <div class="col-lg-4 col-md-6">
                            <div class="single_place">

                                <div class="place_info">
                                    <a href="#"><h3>{{$row->nama_layanan}}</h3></a>
                                    <p>{{$row->deskripsi_layanan}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    <div class="newletter_area overlay">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="newsletter_text">
                                <center><h4>Included</h4></center>
                                <ul class="unordered-list ior">
                                    @foreach($paket->getIncludedNotIncluded as $row)
                                        @if($row->jenis_ini=='included')
                                            <li>{{$row->keterangan}}</li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="newsletter_text">
                                <center><h4>Not Included</h4></center>
                                <ul class="unordered-list ior">
                                    @foreach($paket->getIncludedNotIncluded as $row)
                                        @if($row->jenis_ini=='not included')
                                            <li>{{$row->keterangan}}</li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="pemesanan" class="destination_details_info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-9">
                    <div></div>
                    <div class="contact_join text-center">
                        @if(Auth::check())
                            <h3>P E M E S A N A N <br><br>(Rp.{{number_format($paket->harga_paket)}} / Person)</h3>
                            <form name="pemesanan" action="{{route('paket.pesan',$paket->id_paket)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="mt-10">
                                            <input min="1" type="number" name="jumlah_peserta"
                                                   placeholder="Jumlah Peserta Wisata"
                                                   onfocus="this.placeholder = ''"
                                                   onblur="this.placeholder = 'Jumlah Peserta Wisata'" required
                                                   class="single-input-primary">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="input-group-icon mt-10">
                                            <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                                            <div class="form-select single-input-primary" id="default-select"
                                            ">
                                            <select name="sesi">
                                                <option>Pilih Jadwal</option>
                                                @foreach($sesi as $row)
                                                    <option
                                                        value="{{$row->id_sesi}}"
                                                    >{{$row->jadwal}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mt-10">
                                        <textarea name="pesan" class="single-textarea single-input-primary"
                                                  placeholder="Pesan/Pertanyaan Untuk Pemesanan"
                                                  onfocus="this.placeholder = ''"
                                                  onblur="this.placeholder = 'Pesan/Pertanyaan Untuk Pemesanan'"
                                                  required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="submit_btn mt-10">
                                <button class="boxed-btn4" type="submit">submit</button>
                            </div>
                        </div>
                    </div>
                    </form>
                    @else
                        <h3>P E M E S A N A N <br><br></h3>
                        <h4 class="text-dark">Untuk Melakukan Pemesanan, Anda Harus Login Terlebih Dahulu <br><br>
                        </h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="submit_btn mt-10">
                                    <a href="{{route('login')}}" class="boxed-btn4" type="submit"><i
                                            class="fa fa-sign-in"></i> Login </a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>
    @if(\Illuminate\Support\Facades\Auth::check())
        {{--    Awal Komentar --}}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">Comments</div>

                        <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif


                            <form id="comment-form" method="post" action="{{ route('comments.store') }}">
                                {{ csrf_field() }}
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <div class="row" style="padding: 10px;">
                                    <div class="form-group">
                                        <textarea class="single-textarea single-input-primary" name="comment"
                                                  placeholder="Write something from your heart..!"></textarea>
                                    </div>
                                </div>
                                <div class="row" style="padding: 0 10px 0 10px;">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary btn-lg" style="width: 100%"
                                               name="submit">
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
            @endif
            <div class="row justify-content-center">
                <div class="col-md-8 col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">Comments</div>

                        <div class="panel-body comment-container">

                            @foreach($comments as $comment)
                                <div class="well">
                                    <i><b> {{ $comment->name }} </b></i>&nbsp;&nbsp;
                                    <span> {{ $comment->comment }} </span>
                                    <div style="margin-left:10px;">
                                        @if(Auth::check())
                                            <a style="cursor: pointer;" cid="{{ $comment->id }}"
                                               name_a="{{ Auth::user()->name }}" token="{{ csrf_token() }}"
                                               class="reply">Reply</a>
                                            &nbsp;
                                            <a style="cursor: pointer;" class="delete-comment"
                                               token="{{ csrf_token() }}"
                                               comment-did="{{ $comment->id }}">Delete</a>
                                        @endif
                                        <div class="reply-form">

                                            <!-- Dynamic Reply form -->

                                        </div>
                                        @foreach($comment->replies as $rep)
                                            @if($comment->id === $rep->comment_id)
                                                <div class="well">
                                                    <i><b> {{ $rep->name }} </b></i>&nbsp;&nbsp;
                                                    <span> {{ $rep->reply }} </span>
                                                    <div style="margin-left:10px;">
                                                        <a rname="{{ Auth::user()->name }}" rid="{{ $comment->id }}"
                                                           style="cursor: pointer;" class="reply-to-reply"
                                                           token="{{ csrf_token() }}">Reply</a>&nbsp;<a
                                                            did="{{ $rep->id }}"
                                                            class="delete-reply"
                                                            token="{{ csrf_token() }}">Delete</a>
                                                    </div>
                                                    <div class="reply-to-reply-form">

                                                        <!-- Dynamic Reply form -->

                                                    </div>

                                                </div>
                                            @endif
                                        @endforeach

                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>


        </div>
        {{--    Akhir Komentar--}}
        @if(isset($paket_lainnya))
            <div class="popular_places_area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="section_title text-center mb_70">
                                <h3>Paket Wisata Lainnya</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($paket_lainnya as $rows)
                            <div class="col-lg-4 col-md-6">
                                <div class="single_place">
                                    <div class="thumb">
                                        <img src="{{asset('storage/img/paket/'.$row->gambar)}}" alt="">
                                        <a href="#" class="prise">Rp.{{number_format($row->harga_paket)}}</a>
                                    </div>
                                    <div class="place_info">
                                        <a href="{{route('paket.detail',$row->id_paket)}}"><h3>{{$row->nama_paket}}</h3></a>
                                        <p>{{$row->getKabupaten->nama_kabupaten}}</p>
                                        <div class="rating_days d-flex justify-content-between">
                                        <span class="d-flex justify-content-center align-items-center">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
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
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col">
                            {!! $paket->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        @endif
@endsection

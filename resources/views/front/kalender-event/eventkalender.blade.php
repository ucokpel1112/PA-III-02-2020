@extends('layout.front.main')
@section('content')
    <div class="bradcam_area bradcam_bg_4">
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
    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">

            <div class="row" style="margin-bottom: 20px">
                <div class="col"></div>
                <div class="col-3">
                </div>
                <div class="col"></div>
            </div>
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        @foreach($kalenders as $kalender)
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <a class="d-inline-block"
                                       href="{{ route('detail-eventkalender',$kalender->id_kalenderevent) }}">
                                        <img class="card-img rounded-0"
                                             src="{{asset('storage/img/kalender/'.$kalender->gambar_event)}}"
                                             alt="">
                                    </a>
                                    <a href="#" class="blog_item_date">
                                        <h3>{{$kalender->tanggal_event}}
                                        <!--                                    --><?php //echo date('d F Y');?>
                                        </h3>
                                        <p>{{$kalender->jam_event}}</p>
                                    </a>
                                </div>
                                <div class="blog_details">
                                    <a class="d-inline-block"
                                       href="{{ route('detail-eventkalender',$kalender->id_kalenderevent) }}">
                                        <h2>{{ $kalender->nama_event}}</h2>
                                    </a>
                                    <p>
                                        <?php echo substr(strip_tags(str_replace(PHP_EOL, '<br>', $kalender->deskripsi_event), '<br>'), 0, 310);?>

                                        <a href="{{ route('detail-eventkalender',$kalender->id_kalenderevent) }}"> baca
                                            selengkapnya...</a>
                                    </p>
                                    <ul class="blog-info-link">
                                        <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                        <li><a href="#"><i class="fas fa-address-book"></i> 03 Comments</a></li>
                                        <li class="small"><span class="fa-li"><i class="fa fa-clock"></i></span> Test
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        @endforeach
                        {{--                    batas--}}
                    </div>
                </div>
                {{--            div class samping--}}
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Upcoming Event</h3>
                            @foreach($kals_up as $kals_up)
                                <div class="media post_item">
                                    <a href="{{ route('detail-eventkalender',$kals_up->id_kalenderevent) }}">
                                        <img src="{{asset('storage/img/kalender/'.$kals_up->gambar_event)}}"
                                             style="height: 50px;" alt="post">
                                    </a>
                                    <div class="media-body">
                                        <a href="{{ route('detail-eventkalender',$kals_up->id_kalenderevent) }}">
                                            <h3>{{$kals_up->nama_event}}</h3>
                                        </a>
                                        <p>{{$kals_up->tanggal_event}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </aside>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col"></div>
                <div class="col-3">
                    {!! $kalenders->appends(['sort' => 'nama_event'])->links() !!}
                </div>
                <div class="col"></div>
            </div>
        </div>
    </section>
@endsection


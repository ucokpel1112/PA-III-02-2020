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
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    @foreach($kalenders as $kalenders)
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img rounded-0" src="{{asset('storage/Image/kalender/'.$kalenders->gambar_event)}}" alt="">
                            <a href="#" class="blog_item_date">
                                <h3>{{$kalenders->tanggal_event}}
<!--                                    --><?php //echo date('d F Y');?>
                                </h3>
                                <p>{{$kalenders->jam_event}}</p>
                            </a>
                        </div>
                        <div class="blog_details">
                            <a class="d-inline-block" href="{{ route('detail-eventkalender',$kalenders->id_kalenderevent) }}">
                                <h2>{{ $kalenders->nama_event}}</h2>
                            </a>
                            <p>
                                <?php echo substr(strip_tags(str_replace(PHP_EOL,'<br>',$kalenders->deskripsi_event),'<br>'),0,310);?>

                                    <a href="{{ route('detail-eventkalender',$kalenders->id_kalenderevent) }}">  baca selengkapnya...</a>
                            </p>
                            <ul class="blog-info-link">
                                <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                <li><a href="#"><i class="fas fa-address-book"></i> 03 Comments</a></li>
                                <li class="small"><span class="fa-li"><i class="fa fa-clock"></i></span> Test</li>
                            </ul>
                        </div>
                    </article>
                    @endforeach
{{--                    batas--}}
                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Previous">
                                    <i class="ti-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Next">
                                    <i class="ti-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

{{--            div class samping--}}
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Recent Post</h3>
                        <div class="media post_item">
                            <img src="img/post/post_1.png" alt="post">
                            <div class="media-body">
                                <a href="single-blog.html">
                                    <h3>From life was you fish...</h3>
                                </a>
                                <p>January 12, 2019</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="img/post/post_2.png" alt="post">
                            <div class="media-body">
                                <a href="single-blog.html">
                                    <h3>The Amazing Hubble</h3>
                                </a>
                                <p>02 Hours ago</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="img/post/post_3.png" alt="post">
                            <div class="media-body">
                                <a href="single-blog.html">
                                    <h3>Astronomy Or Astrology</h3>
                                </a>
                                <p>03 Hours ago</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="img/post/post_4.png" alt="post">
                            <div class="media-body">
                                <a href="single-blog.html">
                                    <h3>Asteroids telescope</h3>
                                </a>
                                <p>01 Hours ago</p>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


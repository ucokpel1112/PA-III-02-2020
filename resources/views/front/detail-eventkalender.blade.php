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

    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            <img class="img-fluid" src="{{asset('storage/img/kalender/'.$kalenders->gambar_event)}}" alt="">
                        </div>
                        <div class="blog_details">
                            <h2>{{$kalenders->nama_event}}
                            </h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><a href="#"><i class="fa fa-map-marker "></i> {{$kalenders->nama_tempat}}</a></li>
                                <li><a href="#"><i class="fa fa-calendar"></i>{{$kalenders->tanggal_event}}</a></li>
                                <li><a href="#"><i class="fa fa-clock-o "></i> {{$kalenders->jam_event}} WIB</a></li>
                                <li><a href="#"><i class="fa fa-location-arrow "></i> {{$kalenders->alamat_event}}</a></li>                            </ul>
                            <p class="excert">
                                <?php echo $kalenders->deskripsi_event;?>
                            </p>


                        </div>
                    </div>
    </section>

@endsection

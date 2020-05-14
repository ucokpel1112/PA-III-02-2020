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
                            <img class="img-fluid" src="{{asset('storage/Image/kalender/'.$kalenders->gambar_event)}}" alt="">
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

                            <div class="quote-wrapper">
                                <div class="quotes">
                                    MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                                    should have to spend money on boot camp when you can get the MCSE study materials yourself at
                                    a fraction of the camp price. However, who has the willpower to actually sit through a
                                    self-imposed MCSE training.
                                </div>
                            </div>
                            <p>
                                MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                                should have to spend money on boot camp when you can get the MCSE study materials yourself at a
                                fraction of the camp price. However, who has the willpower
                            </p>
                            <p>
                                MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                                should have to spend money on boot camp when you can get the MCSE study materials yourself at a
                                fraction of the camp price. However, who has the willpower to actually sit through a
                                self-imposed MCSE training. who has the willpower to actually
                            </p>
                        </div>
                    </div>
    </section>

@endsection

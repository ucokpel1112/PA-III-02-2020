<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layout.front.includes.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="where_togo_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="form_area">
                        <h3>Where you want to go?</h3>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="search_wrap">
                        <form class="search_form" action="#">
                            <div class="input_field">
                                <input type="text" placeholder="Where to go?">
                            </div>
                            <div class="input_field">
                                <input id="datepicker" placeholder="Date">
                            </div>
                            <div class="input_field">
                                <select>
                                    <option data-display="Travel type">Travel type</option>
                                    <option value="1">Some option</option>
                                    <option value="2">Another option</option>
                                </select>
                            </div>
                            <div class="search_btn">
                                <button class="boxed-btn4 " type="submit" >Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- where_togo_area_end  -->

    <!-- popular_destination_area_start  -->
    <div class="popular_destination_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Kalender Event Danau Toba</h3>
                        <p>Event di Kawasan Danau Toba sangatlah banyak, sehingga kita perlu tahu ecent apakah yang akan berlangsung atau sedang berlansung.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $kals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kals): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img src="<?php echo e(asset('storage/img/kalender/'.$kals->gambar_event)); ?>" width="200px" alt="">
                        </div>
                        <div class="content">
                              <a href="<?php echo e(route('detail-eventkalender',$kals->id_kalenderevent)); ?>"> <p class="d-flex align-items-center"><?php echo e($kals->nama_event); ?></p></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <!-- popular_destination_area_end  -->

    <!-- newletter_area_start  -->
    <div class="newletter_area overlay">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-10">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="newsletter_text">
                                <h4>Subscribe Our Newsletter</h4>
                                <p>Subscribe newsletter to get offers and about
                                    new places to discover.</p>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="mail_form">
                                <div class="row no-gutters">
                                    <div class="col-lg-9 col-md-8">
                                        <div class="newsletter_field">
                                            <input type="email" placeholder="Your mail" >
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="newsletter_btn">
                                            <button class="boxed-btn4 " type="submit" >Subscribe</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- newletter_area_end  -->

    <div class="popular_places_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Paket Wisata</h3>
                        <p>Paket wisata tersedia di 7 kabupaten disekitaran danau toba, pilih paketmu dan jelajahi lah indahnya Danau Toba</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="img/place/1.png" alt="">
                        </div>
                        <div class="place_info">
                            <a href="destination_details.html"><h3>Samosir</h3></a>
                            <div class="rating_days d-flex justify-content-between">

                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#">4 Paket Wisata</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                <div class="single_place">
                        <div class="thumb">
                            <img src="img/place/1.png" alt="">
                        </div>
                        <div class="place_info">
                            <a href="destination_details.html"><h3>Samosir</h3></a>
                            <div class="rating_days d-flex justify-content-between">

                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#">4 Paket Wisata</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                <div class="single_place">
                        <div class="thumb">
                            <img src="img/place/1.png" alt="">
                        </div>
                        <div class="place_info">
                            <a href="destination_details.html"><h3>Samosir</h3></a>
                            <div class="rating_days d-flex justify-content-between">

                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#">4 Paket Wisata</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                <div class="single_place">
                        <div class="thumb">
                            <img src="img/place/1.png" alt="">
                        </div>
                        <div class="place_info">
                            <a href="destination_details.html"><h3>Samosir</h3></a>
                            <div class="rating_days d-flex justify-content-between">

                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#">4 Paket Wisata</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                <div class="single_place">
                        <div class="thumb">
                            <img src="img/place/1.png" alt="">
                        </div>
                        <div class="place_info">
                            <a href="destination_details.html"><h3>Samosir</h3></a>
                            <div class="rating_days d-flex justify-content-between">

                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#">4 Paket Wisata</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                <div class="single_place">
                        <div class="thumb">
                            <img src="img/place/1.png" alt="">
                        </div>
                        <div class="place_info">
                            <a href="destination_details.html"><h3>Samosir</h3></a>
                            <div class="rating_days d-flex justify-content-between">

                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#">4 Paket Wisata</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="more_place_btn text-center">
                        <a class="boxed-btn4" href="#">More Places</a>
                    </div>
                </div>
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
                        <p>Event di Kawasan Danau Toba sangatlah banyak, sehingga kita perlu tahu ecent apakah yang akan berlangsung atau sedang berlansung.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- testimonial_area  -->
    <div class="testimonial_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <div class="author_thumb">
                                            <img src="img/testmonial/author.png" alt="">
                                        </div>
                                        <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                                        <div class="testmonial_author">
                                            <h3>- Micky Mouse</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <div class="author_thumb">
                                            <img src="img/testmonial/author.png" alt="">
                                        </div>
                                        <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                                        <div class="testmonial_author">
                                            <h3>- Tom Mouse</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <div class="author_thumb">
                                            <img src="img/testmonial/author.png" alt="">
                                        </div>
                                        <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                                        <div class="testmonial_author">
                                            <h3>- Jerry Mouse</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /testimonial_area  -->






<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.front.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Backup Data Kristopel\Kuliah ITdel\Semester 6\PA III\Project\git\PA-III-02-2020\resources\views/welcome.blade.php ENDPATH**/ ?>
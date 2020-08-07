<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layout.front.includes.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <!-- Komunitas Per-Kabupaten  -->
    <div class="popular_places_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <a href="<?php echo e(asset('/komunitas')); ?>"><h3>Komunitas</h3></a>
                        <p>Terdapat komunitas - komunitas di 7 kabupaten di sekitaran Danau Toba</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $kabupaten; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($row->nama_kabupaten=='Toba'): ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                    <a href="<?php echo e(route('komunitas.show',$row->id_kabupaten)); ?>">
                                        <img src="img/filter-paket/toba.png">
                                    </a>
                                </div>
                                <div class="place_info">
                                    
                                    <a href="<?php echo e(route('komunitas.show',$row->id_kabupaten)); ?>"><h3>Toba</h3></a>
                                    <div class="rating_days d-flex justify-content-between">
                                        <div class="days">
                                            <i class="fa fa-users"></i>
                                            <a href="<?php echo e(route('komunitas.show',$row->id_kabupaten)); ?>"><?php echo e($row->getKomunitas->count()); ?>

                                                Komunitas</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php elseif($row->nama_kabupaten == 'Samosir'): ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                    <a href="<?php echo e(route('komunitas.show',$row->id_kabupaten)); ?>">
                                        <img src="img/filter-paket/samosir.png" alt="">
                                    </a>
                                </div>
                                <div class="place_info">
                                    <a href="<?php echo e(route('komunitas.show',$row->id_kabupaten)); ?>"><h3>Samosir</h3>
                                    </a>
                                    <div class="rating_days d-flex justify-content-between">
                                        <div class="days">
                                            <i class="fa fa-users"></i>
                                            <a href="<?php echo e(route('komunitas.show',$row->id_kabupaten)); ?>"><?php echo e($row->getKomunitas->count()); ?>

                                                Komunitas</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php elseif($row->nama_kabupaten == 'Tapanuli Utara'): ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                    <a href="<?php echo e(route('komunitas.show',$row->id_kabupaten)); ?>">
                                        <img src="img/filter-paket/taput.png" alt="">
                                    </a>
                                </div>
                                <div class="place_info">
                                    <a href="<?php echo e(route('komunitas.show',$row->id_kabupaten)); ?>"><h3>Tapanuli Utara</h3></a>
                                    <div class="rating_days d-flex justify-content-between">
                                        <div class="days">
                                            <i class="fa fa-users"></i>
                                            <a href="<?php echo e(route('komunitas.show',$row->id_kabupaten)); ?>"><?php echo e($row->getKomunitas->count()); ?>

                                                Komunitas</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php elseif($row->nama_kabupaten == 'Karo'): ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                    <a href="<?php echo e(route('komunitas.show',$row->id_kabupaten)); ?>">
                                        <img src="img/filter-paket/karo.png" alt="">
                                    </a>
                                </div>
                                <div class="place_info">
                                    <a href="<?php echo e(route('komunitas.show',$row->id_kabupaten)); ?>"><h3>Karo</h3></a>
                                    <div class="rating_days d-flex justify-content-between">
                                        <div class="days">
                                            <i class="fa fa-users"></i>
                                            <a href="<?php echo e(route('komunitas.show',$row->id_kabupaten)); ?>"><?php echo e($row->getKomunitas->count()); ?>

                                                Komunitas</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php elseif($row->nama_kabupaten == 'Simalungun'): ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                    <a href="<?php echo e(route('komunitas.show',$row->id_kabupaten)); ?>">
                                        <img src="img/filter-paket/simalungun.png" alt="">
                                    </a>
                                </div>
                                <div class="place_info">
                                    <a href="<?php echo e(route('komunitas.show',$row->id_kabupaten)); ?>"><h3>Simalungun</h3>
                                    </a>
                                    <div class="rating_days d-flex justify-content-between">
                                        <div class="days">
                                            <i class="fa fa-users"></i>
                                            <a href="<?php echo e(route('komunitas.show',$row->id_kabupaten)); ?>"><?php echo e($row->getKomunitas->count()); ?>

                                                Komunitas</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php elseif($row->nama_kabupaten == 'Humbang Hasundutan'): ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                    <a href="<?php echo e(route('komunitas.show',$row->id_kabupaten)); ?>">
                                        <img src="img/filter-paket/humbahas.png" alt="">
                                    </a>
                                </div>
                                <div class="place_info">
                                    <a href="<?php echo e(route('komunitas.show',$row->id_kabupaten)); ?>"><h3>Humbang Hasundutan</h3>
                                    </a>
                                    <div class="rating_days d-flex justify-content-between">
                                        <div class="days">
                                            <i class="fa fa-users"></i>
                                            <a href="<?php echo e(route('komunitas.show',$row->id_kabupaten)); ?>"><?php echo e($row->getKomunitas->count()); ?>

                                                Komunitas</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php elseif($row->nama_kabupaten == 'Dairi'): ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                    <a href="<?php echo e(route('komunitas.show',$row->id_kabupaten)); ?>">
                                        <img src="img/filter-paket/dairi.png" alt="">
                                    </a>
                                </div>
                                <div class="place_info">
                                    <a href="<?php echo e(route('komunitas.show',$row->id_kabupaten)); ?>"><h3>Dairi</h3></a>
                                    <div class="rating_days d-flex justify-content-between">
                                        <div class="days">
                                            <i class="fa fa-users"></i>
                                            <a href="<?php echo e(route('komunitas.show',$row->id_kabupaten)); ?>"><?php echo e($row->getKomunitas->count()); ?>

                                                Komunitas</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                        <a href="<?php echo e(route('paket')); ?>"><h3>Paket Wisata</h3></a>
                        <p>Paket wisata tersedia di 7 kabupaten disekitaran danau toba, pilih paketmu dan jelajahi lah
                            indahnya Danau Toba</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $kabupaten; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($row->nama_kabupaten=='Toba'): ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                    <a href="<?php echo e(route('paket.filter.kabupaten',$row->id_kabupaten)); ?>">
                                        <img src="img/filter-paket/toba.png" alt="">
                                    </a>
                                </div>
                                <div class="place_info">
                                    <a href="<?php echo e(route('paket.filter.kabupaten',$row->id_kabupaten)); ?>"><h3>Toba</h3></a>
                                    <div class="rating_days d-flex justify-content-between">
                                        <div class="days">
                                            <i class="fa fa-clock-o"></i>
                                            <a href="<?php echo e(route('paket.filter.kabupaten',$row->id_kabupaten)); ?>"><?php echo e($count_toba); ?>

                                                Paket Wisata</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php elseif($row->nama_kabupaten == 'Samosir'): ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                    <a href="<?php echo e(route('paket.filter.kabupaten',$row->id_kabupaten)); ?>">
                                        <img src="img/filter-paket/samosir.png" alt="">
                                    </a>
                                </div>
                                <div class="place_info">
                                    <a href="<?php echo e(route('paket.filter.kabupaten',$row->id_kabupaten)); ?>"><h3>Samosir</h3>
                                    </a>
                                    <div class="rating_days d-flex justify-content-between">

                                        <div class="days">
                                            <i class="fa fa-clock-o"></i>
                                            <a href="<?php echo e(route('paket.filter.kabupaten',$row->id_kabupaten)); ?>"><?php echo e($count_samosir); ?>

                                                Paket Wisata</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php elseif($row->nama_kabupaten == 'Tapanuli Utara'): ?>

                        <div class="col-lg-4 col-md-6">
                            <div class="single_place">
                                <div class="thumb"><a href="<?php echo e(route('paket.filter.kabupaten',$row->id_kabupaten)); ?>">
                                        <img src="img/filter-paket/taput.png" alt=""></a>
                                </div>
                                <div class="place_info">
                                    <a href="<?php echo e(route('paket.filter.kabupaten',$row->id_kabupaten)); ?>"><h3>Tapanuli
                                            Utara</h3></a>
                                    <div class="rating_days d-flex justify-content-between">

                                        <div class="days">
                                            <i class="fa fa-clock-o"></i>
                                            <a href="<?php echo e(route('paket.filter.kabupaten',$row->id_kabupaten)); ?>"><?php echo e($count_taput); ?>

                                                Paket Wisata</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php elseif($row->nama_kabupaten == 'Karo'): ?>

                        <div class="col-lg-4 col-md-6">
                            <div class="single_place">
                                <div class="thumb"><a href="<?php echo e(route('paket.filter.kabupaten',$row->id_kabupaten)); ?>">
                                        <img src="img/filter-paket/karo.png" alt=""></a>
                                </div>
                                <div class="place_info">
                                    <a href="<?php echo e(route('paket.filter.kabupaten',$row->id_kabupaten)); ?>"><h3>Karo</h3>
                                    </a>
                                    <div class="rating_days d-flex justify-content-between">

                                        <div class="days">
                                            <i class="fa fa-clock-o"></i>
                                            <a href="<?php echo e(route('paket.filter.kabupaten',$row->id_kabupaten)); ?>"><?php echo e($count_karo); ?>

                                                Paket Wisata</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php elseif($row->nama_kabupaten == 'Simalungun'): ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="single_place">
                                <div class="thumb"><a href="<?php echo e(route('paket.filter.kabupaten',$row->id_kabupaten)); ?>">
                                        <img src="img/filter-paket/simalungun.png" alt=""></a>
                                </div>
                                <div class="place_info">
                                    <a href="<?php echo e(route('paket.filter.kabupaten',$row->id_kabupaten)); ?>"><h3>
                                            Simalungun</h3>
                                    </a>
                                    <div class="rating_days d-flex justify-content-between">

                                        <div class="days">
                                            <i class="fa fa-clock-o"></i>
                                            <a href="<?php echo e(route('paket.filter.kabupaten',$row->id_kabupaten)); ?>"><?php echo e($count_simalungun); ?>

                                                Paket Wisata</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php elseif($row->nama_kabupaten == 'Humbang Hasundutan'): ?>

                        <div class="col-lg-4 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                    <a href="<?php echo e(route('paket.filter.kabupaten',$row->id_kabupaten)); ?>">
                                        <img src="img/filter-paket/humbahas.png" alt=""></a>
                                </div>
                                <div class="place_info">

                                    <a href="<?php echo e(route('paket.filter.kabupaten',$row->id_kabupaten)); ?>"><h3>Humbang
                                            Hasundutan</h3></a>
                                    <div class="rating_days d-flex justify-content-between">

                                        <div class="days">
                                            <i class="fa fa-clock-o"></i>
                                            <a href="<?php echo e(route('paket.filter.kabupaten',$row->id_kabupaten)); ?>"><?php echo e($count_humbang); ?>

                                                Paket Wisata</a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php elseif($row->nama_kabupaten == 'Dairi'): ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                    <a href="<?php echo e(route('paket.filter.kabupaten',$row->id_kabupaten)); ?>">
                                        <img src="img/filter-paket/dairi.png" alt="">
                                    </a>
                                </div>
                                <div class="place_info">
                                    <a href="<?php echo e(route('paket.filter.kabupaten',$row->id_kabupaten)); ?>"><h3>Dairi</h3>
                                    </a>
                                    <div class="rating_days d-flex justify-content-between">

                                        <div class="days">
                                            <i class="fa fa-clock-o"></i>
                                            <a href="<?php echo e(route('paket.filter.kabupaten',$row->id_kabupaten)); ?>"><?php echo e($count_dairi); ?>

                                                Paket Wisata</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                        <a href="<?php echo e(url('/eventkalender')); ?>"><h3>Kalender Event Danau Toba</h3></a>
                        <p>Event di Kawasan Danau Toba sangatlah banyak, sehingga kita perlu tahu ecent apakah yang akan
                            berlangsung atau sedang berlansung.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $kals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6">
                        <a href="<?php echo e(route('detail-eventkalender',$kal->id_kalenderevent)); ?>">
                            <div class="single_destination">
                                <div class="thumb">
                                    <img src="<?php echo e(asset('storage/img/kalender/'.$kal->gambar_event)); ?>" alt=""
                                         style="height: 250px;">
                                </div>
                                <div class="content">
                                    <p class="d-flex align-items-center"><?php echo e($kal->nama_event); ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <!-- popular_destination_area_end  -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.front.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PAIII-paling baru\PA-III-02-2020\resources\views/welcome.blade.php ENDPATH**/ ?>
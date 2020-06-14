<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layout.front.includes.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- popular_destination_area_start  -->
    <div class="popular_destination_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Kalender Event Danau Toba</h3>
                        <p>Event di Kawasan Danau Toba sangatlah banyak, sehingga kita perlu tahu ecent apakah yang akan
                            berlangsung atau sedang berlansung.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $kals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_destination">
                            <div class="thumb">
                                <img src="<?php echo e(asset('storage/img/kalender/'.$kal->gambar_event)); ?>" alt=""
                                     style="height: 250px;">
                            </div>
                            <div class="content">
                                <a href="<?php echo e(route('detail-eventkalender',$kal->id_kalenderevent)); ?>"><p
                                        class="d-flex align-items-center"><?php echo e($kal->nama_event); ?></p></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <!-- popular_destination_area_end  -->


    <div class="popular_places_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Paket Wisata</h3>
                        <p>Paket wisata tersedia di 7 kabupaten disekitaran danau toba, pilih paketmu dan jelajahi lah
                            indahnya Danau Toba</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="img/filter-paket/toba.png" alt="">
                        </div>
                        <div class="place_info">
                            <?php $__currentLoopData = $kabupaten; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($row->nama_kabupaten=='Toba'): ?>
                                    <a href="<?php echo e(route('paket.filter.kabupaten',$row->id_kabupaten)); ?>"><h3>Toba</h3></a>
                                    <div class="rating_days d-flex justify-content-between">
                                        <div class="days">
                                            <i class="fa fa-clock-o"></i>
                                            <a href="<?php echo e(route('paket.filter.kabupaten',$row->id_kabupaten)); ?>"><?php echo e($count_toba); ?> Paket Wisata</a>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="img/filter-paket/Samosir.png" alt="">
                        </div>
                        <div class="place_info">
                            <?php $__currentLoopData = $kabupaten; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($row->nama_kabupaten == 'Samosir'): ?>
                                    <a href="<?php echo e(route('paket.filter.kabupaten',$row->id_kabupaten)); ?>"><h3>Samosir</h3>
                                    </a>
                                    <div class="rating_days d-flex justify-content-between">

                                        <div class="days">
                                            <i class="fa fa-clock-o"></i>
                                            <a href="<?php echo e(route('paket.filter.kabupaten',$row->id_kabupaten)); ?>"><?php echo e($count_samosir); ?>

                                                Paket Wisata</a>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="img/filter-paket/taput.png" alt="">
                        </div>
                        <div class="place_info">
                            <?php $__currentLoopData = $kabupaten; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($row->nama_kabupaten == 'Tapanuli Utara'): ?>
                                    <a href="<?php echo e(route('paket.filter.kabupaten',$row->id_kabupaten)); ?>"><h3>Tapanuli
                                            Utara</h3></a>
                                    <div class="rating_days d-flex justify-content-between">

                                        <div class="days">
                                            <i class="fa fa-clock-o"></i>
                                            <a href="<?php echo e(route('paket.filter.kabupaten',$row->id_kabupaten)); ?>"><?php echo e($count_taput); ?>

                                                Paket Wisata</a>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="img/filter-paket/karo.png" alt="">
                        </div>
                        <div class="place_info">
                            <?php $__currentLoopData = $kabupaten; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($row->nama_kabupaten == 'Karo'): ?>
                                    <a href="<?php echo e(route('paket.filter.kabupaten',$row->id_kabupaten)); ?>"><h3>Karo</h3></a>
                                    <div class="rating_days d-flex justify-content-between">

                                        <div class="days">
                                            <i class="fa fa-clock-o"></i>
                                            <a href="<?php echo e(route('paket.filter.kabupaten',$row->id_kabupaten)); ?>"><?php echo e($count_karo); ?>

                                                Paket Wisata</a>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="img/filter-paket/simalungun.png" alt="">
                        </div>
                        <div class="place_info">
                            <?php $__currentLoopData = $kabupaten; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($row->nama_kabupaten == 'Simalungun'): ?>
                                    <a href="<?php echo e(route('paket.filter.kabupaten',$row->id_kabupaten)); ?>"><h3>Simalungun</h3>
                                    </a>
                                    <div class="rating_days d-flex justify-content-between">

                                        <div class="days">
                                            <i class="fa fa-clock-o"></i>
                                            <a href="<?php echo e(route('paket.filter.kabupaten',$row->id_kabupaten)); ?>"><?php echo e($count_simalungun); ?>

                                                Paket Wisata</a>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="img/filter-paket/humbahas.png" alt="">
                        </div>
                        <div class="place_info">
                            <?php $__currentLoopData = $kabupaten; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($row->nama_kabupaten == 'Humbang Hasundutan'): ?>

                                    <a href="<?php echo e(route('paket.filter.kabupaten',$row->id_kabupaten)); ?>"><h3>Humbang
                                            Hasundutan</h3></a>
                                    <div class="rating_days d-flex justify-content-between">

                                        <div class="days">
                                            <i class="fa fa-clock-o"></i>
                                            <a href="<?php echo e(route('paket.filter.kabupaten',$row->id_kabupaten)); ?>"><?php echo e($count_humbang); ?>

                                                Paket Wisata</a>
                                        </div>

                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="img/filter-paket/dairi.png" alt="">
                        </div>
                        <div class="place_info">
                            <?php $__currentLoopData = $kabupaten; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($row->nama_kabupaten == 'Dairi'): ?>
                                    <a href="<?php echo e(route('paket.filter.kabupaten',$row->id_kabupaten)); ?>"><h3>Dairi</h3></a>
                                    <div class="rating_days d-flex justify-content-between">

                                        <div class="days">
                                            <i class="fa fa-clock-o"></i>
                                            <a href="<?php echo e(route('paket.filter.kabupaten',$row->id_kabupaten)); ?>"><?php echo e($count_dairi); ?>

                                                Paket Wisata</a>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
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
                        <p>Event di Kawasan Danau Toba sangatlah banyak, sehingga kita perlu tahu ecent apakah yang akan
                            berlangsung atau sedang berlansung.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.front.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Backup Data Kristopel\Kuliah ITdel\Semester 6\PA III\Project\git\v.8.1\PA-III-02-2020\resources\views/welcome.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_6">
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


    <!-- Tentang Komunitas  -->
    <div class="about_story">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="story_heading">
                        <h3>Tentang Komunitas</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-11 offset-lg-1">
                            <div class="story_info">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <p>Community Based Tourism ( CBT ) yaitu konsep pengembangan suatu destinasi
                                            wisata melalui pemberdayaan masyarakat lokal, dimana masyarakat turut andil
                                            dalam perencanaan, pengelolaan, dan pemberian suara berupa keputusan dalam
                                            pembangunannya.</p>
                                        <p>Komunitas pariwisata yang ada pada aplikasi VisitToba merupakan komunitas
                                            pariwisata yang berada di 7 kabupaten sekitar Danau Toba.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="counter_wrap">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single_counter text-center">
                                            <h3 class="counter"><?php echo e($c_komunitas); ?></h3>
                                            <p>Komunitas</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single_counter text-center">
                                            <h3 class="counter"><?php echo e($c_member); ?></h3>
                                            <p>Member</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single_counter text-center">
                                            <h3 class="counter"><?php echo e($c_layanan); ?></h3>
                                            <p>Layanan Wisata</p>
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
    <!--/ Tentang Komunitas  -->

    <!-- Komunitas Per-Kabupaten  -->
    <div class="popular_places_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Komunitas Di Setiap Kabupaten</h3>
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
                                        <img src="img/filter-paket/Samosir.png" alt="">
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

    <!-- Tentang Pendaftaran  -->
    <div class="about_story">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                    <center>
                        <div class="story_heading">
                            <h3>Pendaftaran untuk Keanggotaan CBT</h3>
                        </div>
                    </center>
                    <div class="row">
                        <div class="col-lg-12 offset-lg-1">
                            <div class="story_info">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <p>Untuk menjadi Anggota CBT, pemilik usaha layanan wisata harus mendaftarkan
                                            dirinya ke dalam aplikasi. Setelah menjadi Anggota CBT, pemilik layanan
                                            wisata nantinya akan dapat menggunakan aplikasi ini untuk mengelola layanan
                                            wisata yang dimilikinya, melihat history penjualan, melihat komunitas yang
                                            berpasrtisipasi, dan melakukan pendaftaran ke komunitas.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-10">
                                        <br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="more_place_btn text-center">
                                            <a class="boxed-btn4" style="width: 250px" href="<?php echo e(route('register',1)); ?>">Daftar</a>
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
    <!--/ Tentang Komunitas  -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.front.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PAIII-paling baru\PA-III-02-2020\resources\views/front/komunitas/komunitas.blade.php ENDPATH**/ ?>
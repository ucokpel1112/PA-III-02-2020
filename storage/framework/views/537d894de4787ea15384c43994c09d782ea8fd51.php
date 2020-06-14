<?php $__env->startSection('content'); ?>

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

                            <form action="<?php echo e(route('paket.filter')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="filter_inner">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="single_select">
                                                <select name="kabupaten">
                                                    <option data-display="Kabupaten">Kabupaten</option>
                                                    <?php $__currentLoopData = $kabupaten; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option
                                                            value="<?php echo e($row->id_kabupaten); ?>"
                                                            data-display="<?php echo e($row->nama_kabupaten); ?>" <?php echo e((isset($id_kab)&&($id_kab==$row->id_kabupaten))?'selected':null); ?>><?php echo e($row->nama_kabupaten); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="single_select">
                                                <select name="jenis">
                                                    <option data-display="Tipe/Jenis Perjalanan">Tipe/Jenis Perjalanan
                                                    </option>
                                                    <?php $__currentLoopData = $jenis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($row->jenis_paket); ?>"
                                                                data-display="<?php echo e($row->jenis_paket); ?>" <?php echo e((isset($jeniss)&&(strcmp($jeniss,$row->jenis_paket)==0)?'selected':null)); ?>><?php echo e($row->jenis_paket); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                        <?php $__empty_1 = true; $__currentLoopData = $paket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="col-lg-6 col-md-6">
                                <div class="single_place">
                                    <div class="thumb" style="max-height: 200px">
                                        <img src="<?php echo e(asset('storage/img/paket/'.$row->gambar)); ?>" alt="">
                                        <a href="#" class="prise">Rp.<?php echo e(number_format($row->harga_paket)); ?></a>
                                    </div>
                                    <div class="place_info">
                                        <a href="<?php echo e(route('paket.detail',$row->id_paket)); ?>"><h3><?php echo e($row->nama_paket); ?></h3>
                                        </a>
                                        <p><?php echo e($row->getKabupaten->nama_kabupaten); ?></p>
                                        <div class="rating_days d-flex justify-content-between">
                                        <span class="d-flex justify-content-center align-items-center">
                                             <a href="#">(20 Review)</a>
                                        </span>
                                            <div class="days">
                                                <i class="fa fa-clock-o"></i>
                                                <a href="#"><?php echo e($row->durasi); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <div class="col"></div>
                            <div class="text-center col-lg-6 col-md-6">
                                <h4>Paket Wisata Sedang Tidak Ada !</h4>
                            </div>
                            <div class="col"></div>
                        <?php endif; ?>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <?php echo $paket->links(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
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
                <?php $__currentLoopData = $paket_lainnya; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $roww): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="single_trip">
                            <div class="thumb" style="max-height: 180px">
                                <img src="<?php echo e(asset('/storage/img/paket/'.$roww->gambar)); ?>" alt="">
                            </div>
                            <div class="info">
                                <div class="date">
                                    <span>
                                        <i class="fa fa-clock-o"></i>
                                        <a href="#"><?php echo e($row->durasi); ?></a>
                                    </span>
                                </div>
                                <a href="#">
                                    <h3><?php echo e(str_limit($roww->nama_paket,40)); ?></h3>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.front.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Backup Data Kristopel\Kuliah ITdel\Semester 6\PA III\Project\git\v.7.1\PA-III-02-2020\resources\views/front/paket/view_paket.blade.php ENDPATH**/ ?>
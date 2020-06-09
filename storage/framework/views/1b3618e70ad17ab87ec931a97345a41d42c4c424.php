<?php $__env->startSection('content'); ?>

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_4">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Pesanan Saya</h3>
                        <p>Riwayat Pemesanan yang Sudah Pernah Anda Lakukan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Align Area -->
    <div class="whole-wrap">
        <div class="container box_1170">

            <div class="section-top-border">
                <h3 class="mb-30">Riwayat Pemesanan</h3>
                <div class="progress-table-wrap">
                    <div class="progress-table">
                        <div class="table-head">
                            <div class="serial">#</div>
                            <div class="percentage">Nama Paket Wisata</div>
                            <div class="country">Status Pemesanan</div>
                            <div class="visit">Jumlah Peserta Perjalanan</div>
                            <div class="visit"></div>
                        </div>

                        <?php $__empty_1 = true; $__currentLoopData = $pemesanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="table-row">
                                <div class="serial">
                                    <?php echo e($index+1); ?></div>
                                <div class="percentage">
                                    <?php echo e($row->getSesi->getPaket->nama_paket); ?>

                                </div>
                                <div class="country">
                                    <?php echo e($row->defineStatus($row->status)); ?>

                                </div>
                                <div class="visit">
                                    <?php echo e($row->jumlah_peserta); ?>

                                </div>
                                <div class="visit">
                                    <a href="<?php echo e(route('pemesanan.detail',$row->id_pemesanan)); ?>"
                                       class="btn btn-success">Detail</a>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <div class="table-row">
                                <div class="serial"></div>
                                <div class="percentage"></div>
                                <div class="country"> Anda Belum Memiliki Riwayat Pemesanan</div>
                                <div class="visit"></div>
                                <div class="visit"></div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.front.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Backup Data Kristopel\Kuliah ITdel\Semester 6\PA III\Project\git\v.3.1\PA-III-02-2020\resources\views/front/Pemesanan/pemesanan.blade.php ENDPATH**/ ?>
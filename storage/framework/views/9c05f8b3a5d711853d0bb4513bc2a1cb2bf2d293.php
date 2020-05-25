<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row">
            <div class="col-10">
                <div class="row">
                    <div class="col-1">
                        No
                    </div>
                    <div class="col">
                        Nama Paket
                    </div>
                    <div class="col">
                        Status
                    </div>
                    <div class="col">
                        Jumlah Peserta
                    </div>
                    <div class="col">
                        Aksi
                    </div>
                </div>
                <?php $__empty_1 = true; $__currentLoopData = $pemesanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="row">
                        <div class="col-1">
                            <?php echo e($index+1); ?>

                        </div>
                        <div class="col">
                            <?php echo e($row->getSesi->getPaket->nama_paket); ?>

                        </div>
                        <div class="col">
                            <?php echo e($row->defineStatus($row->status)); ?>

                        </div>
                        <div class="col">
                            <?php echo e($row->jumlah_peserta); ?>

                        </div>
                        <div class="col">
                            <a href="<?php echo e(route('pemesanan.detail',$row->id_pemesanan)); ?>" class="btn btn-success">Detail</a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="row">
                        <div class="col text-center">
                            <h4>Anda Belum Memiliki Pemesanan</h4>
                        </div>
                    </div>
                <?php endif; ?>
                <?php echo $pemesanan->links(); ?>

            </div>
            <div class="col"></div>
        </div>
    </div>
    <div class="recent_trip_area">

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.front.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PA-III-02-2020\resources\views/front/Pemesanan/pemesanan.blade.php ENDPATH**/ ?>
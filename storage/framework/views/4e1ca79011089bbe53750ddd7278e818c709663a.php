<?php $__env->startSection('content'); ?>
<br>
    <section class="content">
        <!-- Default box -->
        <div class="card card-solid">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="col-12">
                            <img src="<?php echo e(asset('storage/img/kalender/'.$kalenders->gambar_event)); ?>" class="product-image" alt="Event Image">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <h3 class="my-3"><?php echo e($kalenders->nama_event); ?></h3>
                        <hr>
                        <ul class="ml-4 mb-0 fa-ul text-muted">
                            <li class="small"><span class="fa-li"><i class="fa fa-map-marker "></i></span> <?php echo e($kalenders->nama_tempat); ?></li>
                            <li class="small"><span class="fa-li"><i class="fa fa-calendar"></i></span> <?php echo e($kalenders->tanggal_event); ?></li>
                            <li class="small"><span class="fa-li"><i class="fa fa-clock"></i></span> <?php echo e($kalenders->jam_event); ?></li>
                            <li class="small"><span class="fa-li"><i class="fa fa-location-arrow"></i></span> <?php echo e($kalenders->alamat_event); ?></li>
                        </ul>
                        <hr>
                        <p><?php echo $kalenders->deskripsi_event;?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PA-III-02-2020\resources\views/admin/kalender/detail-kalender.blade.php ENDPATH**/ ?>
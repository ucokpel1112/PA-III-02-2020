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
            <?php $__empty_1 = true; $__currentLoopData = $komunitas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indexK => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="row">
                    <div class="col-lg-12">
                        <?php if($indexK>0): ?>
                            <br><br><br><br><br><br>
                            <?php endif; ?>
                        <div class="story_heading">
                            <h3><?php echo e($indexK+1); ?>. <?php echo e($row->nama_komunitas); ?></h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-11 offset-lg-1">
                                <div class="story_info">
                                    <div class="row">
                                        <div class="col-lg-10">
                                            <p><?= $row['deskripsi'] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Gambar Komunitas -->
                                <div class="story_thumb">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="thumb">
                                                <img src="<?php echo e(asset('storage/img/komunitas/'.$row->gambar)); ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/Gambar Komunitas -->
                            </div>
                        </div>
                        <h3 class="mb-30">Anggota Komunitas : </h3>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="progress-table-wrap">
                                    <div class="progress-table">
                                        <div class="table-head">
                                            <div class="serial">#</div>
                                            <div class="country">Gambar</div>
                                            <div class="visit">Nama</div>
                                            <div class="percentage">Jumlah Layanan yang Dimiliki</div>
                                        </div>
                                        <?php if(isset($row->getKomunitasMember)&&$row->getKomunitasMember->count()>0): ?>
                                            <?php $__currentLoopData = $row->getKomunitasMember; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="table-row">
                                                    <div class="serial"><?php echo e($index+1); ?></div>
                                                    <div class="country"><img
                                                            src="<?php echo e(asset('/storage/img/member/'.$member->photo)); ?>"
                                                            alt="flag" style="width: 20%">
                                                    </div>
                                                    <div class="visit"><?php echo e($member->getUser->name); ?></div>
                                                    <div class="percentage"><?php echo e($member->getLayanan->count()); ?></div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                            <div class="table-row">
                                                <div class="serial"></div>
                                                <div class="country">Belum Memiliki Anggota</div>
                                                <div class="visit"></div>
                                                <div class="percentage"></div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <h3 class="mb-30">Layanan Wisata : </h3>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="progress-table-wrap">
                                    <div class="progress-table">
                                        <div class="table-head">
                                            <div class="serial">#</div>
                                            <div class="country">Nama Layanan</div>
                                            <div class="visit">Pemilik Layanan</div>
                                            <div class="visit">Jenis Layanan</div>
                                            <div class="percentage">Deskripsi</div>
                                        </div>
                                        <?php if(isset($row->getKomunitasMember)&&$row->getKomunitasMember->count()>0): ?>
                                            <?php $indexx = 1 ?>
                                            <?php $__currentLoopData = $row->getKomunitasMember; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if(isset($member->getLayanan)): ?>
                                                    <?php $__currentLoopData = $member->getLayanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $layanan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="table-row">
                                                            <div class="serial"><?php echo e($indexx); ?><?php $indexx += 1 ?></div>
                                                            <div class="country"><?php echo e($layanan->nama_layanan); ?></div>
                                                            <div class="visit"><?php echo e($member->getUser->name); ?></div>
                                                            <div
                                                                class="visit"><?php echo e($layanan->getJenisLayanan->nama_jenis_layanan); ?></div>
                                                            <div
                                                                class="percentage"><?php echo e($layanan->deskripsi_layanan); ?></div>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                            <div class="table-row">
                                                <div class="serial"></div>
                                                <div class="country">Belum memiliki Layanan Wisata</div>
                                                <div class="visit"></div>
                                                <div
                                                    class="visit"></div>
                                                <div
                                                    class="percentage"></div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <div class="row">
                    <div class="col-lg-12">
                        <h3>Belum Ada Komunitas Di Daerah Ini !</h3>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <!--/ Tentang Komunitas  -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.front.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PAIII-paling baru\PA-III-02-2020\resources\views/front/komunitas/show.blade.php ENDPATH**/ ?>
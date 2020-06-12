<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pemesanan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Pemesanan</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    Pemesanan


                </h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                            title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">

                    <thead>
                    <tr>
                        <th style="width: 1%">
                            ID
                        </th>
                        <th style="width: 10%">
                            Gambar
                        </th>
                        <th style="width: 30%">
                            Nama Paket Wisata
                        </th>
                        <th class="text-center">
                            Status
                        </th>
                        <th class="text-center">
                            Jumlah Peserta
                        </th>
                        <th style="width: 30%">
                        </th>
                    </tr>
                    </thead>
                    <form action="<?php echo e(route('admin.pemesanan.filter')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <div class="form-group">
                                    <select name="paket" class="form-control custom-select">
                                        <option selected="" disabled="">Pilih Paket</option>
                                        <option value="semua">Semua Paket</option>
                                        <?php $__currentLoopData = $paket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option
                                                value="<?php echo e($row->id_paket); ?>" <?php echo e((isset($id_paket)&&($id_paket==$row->id_paket))?'selected':null); ?>><?php echo e($row->nama_paket); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <select name="status" class="form-control custom-select">
                                        <option selected="" disabled="">Pilih Status</option>
                                        <option value="semua">Semua Status</option>
                                        <option value="0" <?php echo e((isset($status)&&($status==0))?'selected':null); ?>>Pemesanan
                                            Dibatalkan
                                        </option>
                                        <option value="1" <?php echo e((isset($status)&&($status==1))?'selected':null); ?>>Menunggu
                                            Pembayaran
                                        </option>
                                        <option value="2" <?php echo e((isset($status)&&($status==2))?'selected':null); ?>>Menunggu
                                            Konfirmasi Pembayaran Pengelola
                                        </option>
                                        <option value="3" <?php echo e((isset($status)&&($status==3))?'selected':null); ?>>Pemesanan
                                            Telah Berhasil
                                        </option>
                                        <option value="4" <?php echo e((isset($status)&&($status==4))?'selected':null); ?>>Pemesanan
                                            Telah Selesan/Berakhir
                                        </option>
                                    </select>
                                </div>
                            </td>
                            <td></td>
                            <td class="project-actions text-right">
                                <button type="submit" style="width: 180px" class="btn btn-success btn-sm">
                                    <i class="fas fa-filter">
                                    </i>
                                    Filter
                                </button>
                            </td>
                        </tr>
                    </form>
                    <tbody>
                    
                    <?php $__empty_1 = true; $__currentLoopData = $pemesanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="6" class="text-center">Tidak Ada Data</td>
                        </tr>
                    <?php endif; ?>
                    <?php $__currentLoopData = $pemesanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($row->status==2): ?>
                            <tr>
                                <td>
                                    <?php echo e($row->id_pemesanan); ?>

                                </td>
                                <td>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <img alt="Avatar" class="table-avatar"
                                                 src="<?php echo e(asset('storage/img/paket/'.$row->getSesi->getPaket->gambar)); ?>">
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <?php echo e($row->getSesi->getPaket->nama_paket); ?>

                                </td>
                                <td class="project-state">
                                    <span class="badge badge-success"><?php echo e($row->defineStatus($row->status)); ?></span>
                                </td>
                                <td class="project-state">
                                    <span class="badge badge-primary"><?php echo e($row->jumlah_peserta); ?></span>
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" style="width: 180px"
                                       href="<?php echo e(route('admin.pemesanan.show',$row->id_pemesanan)); ?>">
                                        <i class="fas fa-folder">
                                        </i>
                                        Lihat Pemesanan
                                    </a>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $pemesanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($row->status==3): ?>
                            <tr>
                                <td>
                                    <?php echo e($row->id_pemesanan); ?>

                                </td>
                                <td>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <img alt="Avatar" class="table-avatar"
                                                 src="<?php echo e(asset('storage/img/paket/'.$row->getSesi->getPaket->gambar)); ?>">
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <?php echo e($row->getSesi->getPaket->nama_paket); ?>

                                </td>
                                <td class="project-state">
                                    <span class="badge badge-success"><?php echo e($row->defineStatus($row->status)); ?></span>
                                </td>
                                <td class="project-state">
                                    <span class="badge badge-primary"><?php echo e($row->jumlah_peserta); ?></span>
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" style="width: 180px"
                                       href="<?php echo e(route('admin.pemesanan.show',$row->id_pemesanan)); ?>">
                                        <i class="fas fa-folder">
                                        </i>
                                        Lihat Pemesanan
                                    </a>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $pemesanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($row->status==1): ?>
                            <tr>
                                <td>
                                    <?php echo e($row->id_pemesanan); ?>

                                </td>
                                <td>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <img alt="Avatar" class="table-avatar"
                                                 src="<?php echo e(asset('storage/img/paket/'.$row->getSesi->getPaket->gambar)); ?>">
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <?php echo e($row->getSesi->getPaket->nama_paket); ?>

                                </td>
                                <td class="project-state">
                                    <span class="badge badge-success"><?php echo e($row->defineStatus($row->status)); ?></span>
                                </td>
                                <td class="project-state">
                                    <span class="badge badge-primary"><?php echo e($row->jumlah_peserta); ?></span>
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" style="width: 180px"
                                       href="<?php echo e(route('admin.pemesanan.show',$row->id_pemesanan)); ?>">
                                        <i class="fas fa-folder">
                                        </i>
                                        Lihat Pemesanan
                                    </a>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $pemesanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($row->status==4): ?>
                            <tr>
                                <td>
                                    <?php echo e($row->id_pemesanan); ?>

                                </td>
                                <td>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <img alt="Avatar" class="table-avatar"
                                                 src="<?php echo e(asset('storage/img/paket/'.$row->getSesi->getPaket->gambar)); ?>">
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <?php echo e($row->getSesi->getPaket->nama_paket); ?>

                                </td>
                                <td class="project-state">
                                    <span class="badge badge-success"><?php echo e($row->defineStatus($row->status)); ?></span>
                                </td>
                                <td class="project-state">
                                    <span class="badge badge-primary"><?php echo e($row->jumlah_peserta); ?></span>
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" style="width: 180px"
                                       href="<?php echo e(route('admin.pemesanan.show',$row->id_pemesanan)); ?>">
                                        <i class="fas fa-folder">
                                        </i>
                                        Lihat Pemesanan
                                    </a>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $pemesanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($row->status==0): ?>
                            <tr>
                                <td>
                                    <?php echo e($row->id_pemesanan); ?>

                                </td>
                                <td>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <img alt="Avatar" class="table-avatar"
                                                 src="<?php echo e(asset('storage/img/paket/'.$row->getSesi->getPaket->gambar)); ?>">
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <?php echo e($row->getSesi->getPaket->nama_paket); ?>

                                </td>
                                <td class="project-state">
                                    <span class="badge badge-success"><?php echo e($row->defineStatus($row->status)); ?></span>
                                </td>
                                <td class="project-state">
                                    <span class="badge badge-primary"><?php echo e($row->jumlah_peserta); ?></span>
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" style="width: 180px"
                                       href="<?php echo e(route('admin.pemesanan.show',$row->id_pemesanan)); ?>">
                                        <i class="fas fa-folder">
                                        </i>
                                        Lihat Pemesanan
                                    </a>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td colspan="6" class="text-center">
                            <?php echo $pemesanan->links(); ?>

                        </td>
                    </tr>
                    </tbody>
                </table>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PA-III-02-2020\resources\views/admin/pemesanan/pemesanan.blade.php ENDPATH**/ ?>
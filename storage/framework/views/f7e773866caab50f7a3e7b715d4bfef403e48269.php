<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detail Pemesanan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pemesanan</a></li>
                        <li class="breadcrumb-item active">Detail</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">


                            <h3 class="profile-username text-center"><?php echo e($user->name); ?></h3>

                            <p class="text-muted text-center">( Customer Pemesan )</p>


                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Total Pemesanan</b> <a class="float-right"><?php echo e($user->getPemesanan->count()); ?></a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- About Me Box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Informasi Tentang Pemesan</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="far fa-file-alt mr-1"></i> Nama</strong>

                            <p class="text-muted">
                                <?php echo e($user->name); ?>

                            </p>

                            <hr>

                            <strong><i class="fas fa-book mr-1"></i> Nomor HP</strong>

                            <p class="text-muted"><?php echo e($user->no_HP); ?></p>

                            <hr>

                            <strong><i class="fas fa-book mr-1"></i> Nomor WhatsApp</strong>

                            <p class="text-muted"><?php echo e($user->no_WA); ?></p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#detailpemesanan"
                                                        data-toggle="tab">Detail Pemesanan</a></li>
                                <li class="nav-item"><a class="nav-link" href="#pembayaran"
                                                        data-toggle="tab">Pembayaran</a></li>
                                <li class="nav-item"><a class="nav-link" href="#detail" data-toggle="tab">Detail
                                        Paket</a></li>
                                <li class="nav-item"><a class="nav-link" href="#layanan-wisata" data-toggle="tab">Layanan
                                        Wisata</a></li>
                                <li class="nav-item"><a class="nav-link" href="#included-not-included"
                                                        data-toggle="tab">Included &amp; Not Included</a></li>
                            </ul>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="detailpemesanan">
                                    <strong>Status</strong>

                                    <p class="text-muted">
                                        <?php echo e($pemesanan->defineStatus($pemesanan->status)); ?>

                                    </p>

                                    <hr>
                                    <strong>Jumlah Peserta</strong>

                                    <p class="text-muted">
                                        <?php echo e($pemesanan->jumlah_peserta); ?>

                                    </p>

                                    <hr>
                                    <strong>Pesan</strong>
                                    <p class="text-muted">
                                        <?php echo e($pemesanan->pesan); ?>

                                    </p>
                                    <ul class="nav nav-pills">
                                        <li class="nav-item"><a class="btn btn-light border nav-link" href="#formubahpesan"
                                                                data-toggle="tab">Titip Pesan Untuk Customer</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane" id="formubahpesan">
                                            <form action="<?php echo e(route('admin.pemesanan.ubahPesan',$pemesanan->id_pemesanan)); ?>" method="post">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('PUT'); ?>
                                                <div class="form-group">
                                                    <label for="pesan">Pesan Untuk Customer</label>
                                                    <input type="text" class="form-control" name="pesan"
                                                           id="pesan"
                                                           placeholder="Pesan" required>
                                                    
                                                </div>
                                                <button type="submit" class="btn btn-primary">Kirim</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="pembayaran">
                                    <strong>Status</strong>

                                    <p class="text-muted">
                                        <?php echo e($pemesanan->defineStatus($pemesanan->status)); ?>

                                    </p>

                                    <hr>

                                    <?php $__empty_1 = true; $__currentLoopData = $pemesanan->getTransaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <div class="row">
                                            <div class="col">
                                                <strong>Rekening Pembayaran</strong>
                                                <ul>
                                                    <li><?php echo e($row->getRekening->nama_bank); ?> (<?php echo e($row->getRekening->nomor_rekening); ?>)
                                                    </li>
                                                </ul>
                                                <br>
                                                <img src="<?php echo e(asset('storage/img/rekening/'.$row->getRekening->gambar)); ?>"
                                                     style="width: 300px">
                                                <hr>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <strong>Bukti Pembayaran <?php echo e($index); ?><?php if($pemesanan->status==2): ?>(Belum Di
                                                    Konfirmasi)<?php endif; ?></strong>
                                                <ul>
                                                    <li><?php echo e($row->getRekening->nama_bank); ?>

                                                        (<?php echo e($row->getRekening->nomor_rekening); ?>)
                                                    </li>
                                                </ul>
                                                <br>
                                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                                                    <img src="<?php echo e(asset('storage/img/pembayaran/'.$row->gambar)); ?>"
                                                         style="width: 400px"
                                                         class="img-fluid mb-2" alt="white sample">
                                                </button>
                                                <div class="modal fade" id="modal-default">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Gambar</h4>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="ekko-lightbox-container">
                                                                    <a href="<?php echo e(asset('storage/img/pembayaran/'.$row->gambar)); ?>">
                                                                        <img src="<?php echo e(asset('storage/img/pembayaran/'.$row->gambar)); ?>"
                                                                             class="img-fluid" style="width: 100%;">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                            </div>
                                            <?php if($pemesanan->status==2): ?>
                                                <form action="<?php echo e(route('admin.pemesanan.konfirmasi',$pemesanan->id_pemesanan)); ?>" method="post">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('PUT'); ?>
                                                    <div class="col ">
                                                        <button class="btn btn-primary btn-md">Konfirmasi</button>
                                                    </div>
                                                </form>||
                                                <form action="<?php echo e(route('admin.pemesanan.upload',$pemesanan->id_pemesanan)); ?>" method="post">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('PUT'); ?>
                                                    <div class="col ">
                                                        <button class="btn btn-success btn-md">Ajukan untuk Upload Ulang</button>
                                                    </div>
                                                </form>||
                                                <form action="<?php echo e(route('admin.pemesanan.tolak',$pemesanan->id_pemesanan)); ?>" method="post">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('PUT'); ?>
                                                    <div class="col ">
                                                        <button class="btn btn-danger btn-md">Tolak</button>
                                                    </div>
                                                </form>
                                            <?php endif; ?>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <div class="row">
                                            <div class="col">
                                                <strong>Bukti Pembayaran</strong>
                                                <ul>
                                                    <li>Belum Ada Bukti Pembayaran</li>
                                                </ul>
                                                <br>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <hr>
                                    <strong>Jumlah Peserta</strong>

                                    <p class="text-muted">
                                        <?php echo e($pemesanan->jumlah_peserta); ?>

                                    </p>
                                    <hr>
                                    <strong>Total Harga Yang harus Dibayarkan</strong>

                                    <p class="text-muted">
                                        Rp. <?php echo e(number_format((($pemesanan->jumlah_peserta)*($pemesanan->getSesi->getPaket->harga_paket)))); ?>

                                    </p>
                                    <hr>
                                    <strong>Total yang telah dibayarkan</strong>

                                    <p class="text-muted">
                                        <?php echo e($total); ?>

                                    </p>

                                </div>
                                <div class="tab-pane" id="detail">
                                    <strong><?php echo e($paket->nama_paket); ?></strong>

                                    <p class="text-muted">
                                        Paket Kabupaten <?php echo e($paket->getKabupaten->nama_kabupaten); ?>

                                    </p>

                                    <hr>
                                    <strong>Harga Paket Wisata</strong>

                                    <p class="text-muted">
                                        <?php echo e(number_format($paket->harga_paket)); ?>

                                    </p>

                                    <hr>
                                    <strong>Avalability</strong>

                                    <p class="text-muted">
                                        <?php echo e($paket->availability); ?>

                                    </p>

                                    <hr>
                                    <strong>Durasi</strong>

                                    <p class="text-muted">
                                        <?php echo e($paket->durasi); ?>

                                    </p>

                                    <hr>
                                    <strong>Deskripsi Paket</strong>

                                    <p class="text-muted">
                                        <?php echo $paket->deskripsi_paket; ?>
                                        <br>
                                    </p>

                                    <hr>
                                    <strong>Rencana Perjalanan</strong>

                                    <p class="text-muted">
                                        <?php echo $paket->rencana_perjalanan; ?>
                                        <br>
                                    </p>

                                    <hr>
                                    <strong>Tambahan</strong>

                                    <p class="text-muted">
                                        <?php echo $paket->tambahan; ?>
                                        <br>
                                    </p>

                                    <hr>
                                    <strong>Daerah</strong>

                                    <p class="text-muted">
                                        Kabupaten <?php echo e($paket->getKabupaten->nama_kabupaten); ?>

                                        <br>
                                    </p>

                                    <hr>
                                    <strong>Gambar</strong>
                                    <p></p>
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <img class="img-fluid" src="<?php echo e(asset('storage/img/paket/'.$paket->gambar)); ?>"
                                                 alt="Photo">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="layanan-wisata">
                                    <?php $__currentLoopData = $paket->getPaketLayanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $layanan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <hr>
                                        <strong><?php echo e($layanan->nama_layanan); ?></strong>

                                        <p class="text-muted">
                                            <?php echo e($layanan->deskripsi_layanan); ?>

                                        </p>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <div class="tab-pane" id="included-not-included">
                                    <strong>Included</strong>
                                    <ul>
                                        <?php $__currentLoopData = $paket->getIncludedNotIncluded; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ini): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($ini->jenis_ini=='included'): ?>
                                                <li>
                                                    <?php echo e($ini->keterangan); ?>

                                                </li>
                                            <?php endif; ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                    <hr>
                                    <strong>Not Included</strong>

                                    <ul>
                                        <?php $__currentLoopData = $paket->getIncludedNotIncluded; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ini): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($ini->jenis_ini=='not included'): ?>
                                                <li>
                                                    <?php echo e($ini->keterangan); ?>

                                                </li>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>

                                    <hr>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PAIII-paling baru\PA-III-02-2020\resources\views/admin/pemesanan/detail.blade.php ENDPATH**/ ?>
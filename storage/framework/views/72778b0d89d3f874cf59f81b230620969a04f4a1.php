<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <div class="container-fluid">
            <?php if(isset($error)): ?>
            <div class="row danger bg-danger">
                <div class="col text-center" style="margin: 5px;">
                    <?php echo e($error); ?>

                </div>
            </div>
            <?php endif; ?>
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detail Paket</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home.admin')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.paket')); ?>">Paket Wisata</a></li>
                        <li class="breadcrumb-item active">Detail</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#detail"
                                                        data-toggle="tab">Detail</a></li>
                                <li class="nav-item"><a class="nav-link" href="#layanan-wisata" data-toggle="tab">Layanan
                                        Wisata</a></li>
                                <li class="nav-item"><a class="nav-link" href="#included-not-included"
                                                        data-toggle="tab">Included & Not Included</a></li>
                                <li class="nav-item"><a class="nav-link" href="#sesi"
                                                        data-toggle="tab">Sesi/Jadwal Paket Wisata</a></li>
                                <li class="nav-item" style="margin-left: 10px">
                                    <a class="btn btn-info btn-md" href="<?php echo e(route('admin.paket.editChoice',$paket->id_paket)); ?>">
                                        <i class="fas fa-edit"></i>
                                        Edit Paket
                                    </a>
                                </li>
                                <li class="nav-item" style="margin-left: 10px">
                                    <button type="button" class="btn btn-danger btn-md" data-toggle="modal"
                                            data-target="#delete_<?php echo e($paket->id_paket); ?>">
                                        <i class="fas fa-trash-alt">
                                        </i>
                                        Hapus Paket
                                    </button>
                                    <div class="modal fade" id="delete_<?php echo e($paket->id_paket); ?>" tabindex="-1" role="dialog"
                                         aria-labelledby="deleteModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="hapusModalLongTitle">Hapus Paket Wisata</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-left">
                                                    Anda Yakin Ingin Menghapus Paket ...
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                        Batal
                                                    </button>
                                                    <form action="<?php echo e(route('admin.paket.hapus',$paket->id_paket)); ?>"
                                                          method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="detail">
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
                                    <div class="row border" style="border-radius: 10px;padding: 5px">
                                        <div class="col-sm-10 text-center">
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
                                <div class="tab-pane" id="sesi">
                                    <a class="btn btn-success btn-sm" style="margin-bottom:10px"
                                       href="<?php echo e(route('admin.sesi.create',$paket->id_paket)); ?>">
                                        <i class="fas fa-plus">
                                        </i>
                                        Tambah Sesi Paket
                                    </a>
                                    <table class="table table-striped projects">
                                        <thead>
                                        <tr>
                                            <th style="width: 1%">
                                                ID
                                            </th>
                                            <th style="width: 30%">
                                                Jadwal/tanggal Kegiatan Paket
                                            </th>
                                            <th style="width: 20%">
                                                Kuota Peserta
                                            </th>
                                            <th class="text-center">
                                                Status
                                            </th>
                                            <th style="width: 30%">
                                            </th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        
                                        <?php $__empty_1 = true; $__currentLoopData = $sesi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index =>  $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <tr>
                                                <td>
                                                    <?php echo e($index+1); ?>

                                                </td>
                                                <td>
                                                    <?php echo e($row->jadwal); ?>

                                                </td>
                                                <td>
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <?php echo e($row->kuota_peserta); ?>

                                                        </li>
                                                    </ul>
                                                </td>
                                                <td class="project-state">
                                                    <?php echo e($row->defineStatus($row->status)); ?>

                                                </td>

                                                <td class="project-actions text-right">
                                                    <a class="btn btn-info btn-sm"
                                                       href="<?php echo e(route('admin.sesi.edit',$row->id_sesi)); ?>">
                                                        <i class="fas fa-edit">
                                                        </i>
                                                        Edit
                                                    </a>
                                                    <?php if($row->status==0): ?>
                                                        <button type="button" class="btn btn-danger btn-sm"
                                                                data-toggle="modal"
                                                                data-target="#delete_sesi_<?php echo e($row->id_sesi); ?>">
                                                            <i class="fas fa-trash-alt">
                                                            </i>
                                                            Hapus
                                                        </button>
                                                        <div class="modal fade" id="delete_sesi_<?php echo e($row->id_sesi); ?>"
                                                             tabindex="-1" role="dialog"
                                                             aria-labelledby="deleteModalCenterTitle"
                                                             aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered"
                                                                 role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="hapusModalLongTitle">
                                                                            Hapus Sesi Paket Wisata</h5>
                                                                        <button type="button" class="close"
                                                                                data-dismiss="modal"
                                                                                aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body text-left">
                                                                        Anda Yakin Ingin Menghapus Sesi Paket ...
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                                data-dismiss="modal">
                                                                            Batal
                                                                        </button>
                                                                        <form
                                                                            action="<?php echo e(route('admin.sesi.delete',$row->id_sesi)); ?>"
                                                                            method="post">
                                                                            <?php echo csrf_field(); ?>
                                                                            <?php echo method_field('DELETE'); ?>
                                                                            <button type="submit"
                                                                                    class="btn btn-danger">
                                                                                Hapus
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php elseif($row->status==1): ?>
                                                        <button type="button" class="btn btn-danger btn-sm"
                                                                data-toggle="modal"
                                                                data-target="#nonaktif_sesi_<?php echo e($row->id_sesi); ?>">
                                                            Non-Aktifkan
                                                        </button>
                                                        <div class="modal fade" id="nonaktif_sesi_<?php echo e($row->id_sesi); ?>"
                                                             tabindex="-1" role="dialog"
                                                             aria-labelledby="deleteModalCenterTitle"
                                                             aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered"
                                                                 role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="hapusModalLongTitle">
                                                                            Non-Aktifkan Sesi Paket Wisata</h5>
                                                                        <button type="button" class="close"
                                                                                data-dismiss="modal"
                                                                                aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body text-left">
                                                                        Anda Yakin Ingin Non-Aktifkan Sesi Paket ?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                                data-dismiss="modal">
                                                                            Batal
                                                                        </button>
                                                                        <form
                                                                            action="<?php echo e(route('admin.sesi.nonaktif',$row->id_sesi)); ?>"
                                                                            method="post">
                                                                            <?php echo csrf_field(); ?>
                                                                            <?php echo method_field('DELETE'); ?>
                                                                            <button type="submit"
                                                                                    class="btn btn-danger">
                                                                                Non-Aktifkan
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <tr>
                                                <td colspan="6" class="text-center">Belum Ada Sesi</td>
                                            </tr>
                                        <?php endif; ?>
                                        <tr>
                                            <td colspan="6" class="text-center">
                                                <?php echo $sesi->links(); ?>

                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
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

<?php echo $__env->make('layout.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PA-III-02-2020\resources\views/admin/paket/detail_paket_wisata.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Paket Wisata</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home.admin')); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Paket Wisata</li>
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
                    Paket Wisata
                    |
                    <a class="btn btn-success btn-sm" href="<?php echo e(route('admin.paket.tambah')); ?>">
                        <i class="fas fa-plus">
                        </i>
                        Tambah Paket Wisata
                    </a>
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
                        <th style="width: 50px;">
                            ID
                        </th>
                        <th style="width: 50px;">
                            Gambar
                        </th>
                        <th style="width: 300px;">
                            Nama Paket Wisata
                        </th>
                        <th style="width: 50px;" class="text-center">
                            Harga Paket
                        </th>
                        <th style="width: 190px;" class="text-center">
                            Kabupaten
                        </th>
                        <th style="width: 120px;" class="text-center">
                            Status
                        </th>
                        <th style="width: 280px">
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <form action="<?php echo e(route('admin.paket.filter')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <div class="form-group">
                                    <select name="kabupaten" class="form-control custom-select">
                                        <option selected="" disabled="">Pilih Kabupaten</option>
                                        <option
                                            value="semua" <?php echo e((isset($id_kabupaten)&&($id_kabupaten=='semua'))?'selected':null); ?>>
                                            Semua Kabupaten
                                        </option>
                                        <?php $__currentLoopData = $kabupaten; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option
                                                value="<?php echo e($row->id_kabupaten); ?>" <?php echo e((isset($id_kabupaten)&&($id_kabupaten==$row->id_kabupaten))?'selected':null); ?>><?php echo e($row->nama_kabupaten); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <select name="status" class="form-control custom-select">
                                        <option selected="" disabled="">Pilih Status</option>
                                        <option value="-1" <?php echo e((isset($id_status)&&($id_status== -1))?'selected':null); ?>>
                                            Semua Status
                                        </option>
                                        <option value="0" <?php echo e((isset($id_status)&&($id_status==0))?'selected':null); ?>>
                                            Non-Aktif
                                        </option>
                                        <option value="1" <?php echo e((isset($id_status)&&($id_status==1))?'selected':null); ?>>
                                            Aktif
                                        </option>
                                        <option value="2" <?php echo e((isset($id_status)&&($id_status==2))?'selected':null); ?>>
                                            Dihapus
                                        </option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <button style="width: 180px" type="submit" class="btn btn-success btn-sm"><i
                                        class="fa fa-filter"></i>Filter
                                </button>
                            </td>
                        </tr>
                    </form>
                    
                    <?php $__empty_1 = true; $__currentLoopData = $pakets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $paket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td>
                                <?php echo e($index+1); ?>

                            </td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar"
                                             src="<?php echo e(asset('storage/img/paket/'.$paket->gambar)); ?>">
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <?php echo e($paket->nama_paket); ?>

                            </td>
                            <td class="project-state">
                                <span class="badge badge-info">Rp. <?php echo e(number_format($paket->harga_paket)); ?></span>
                            </td>
                            <td class="project-state">
                                <span class="badge badge-primary"><?php echo e($paket->getKabupaten->nama_kabupaten); ?></span>
                            </td>
                            <td class="project-state">
                                <span
                                    class="badge badge-<?php echo e($paket->defineClass($paket->status)); ?>"><?php echo e($paket->defineStatus($paket->status)); ?></span>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="<?php echo e(route('admin.paket.show',$paket->id_paket)); ?>">
                                    <i class="fas fa-eye">
                                    </i>
                                    Lihat
                                </a>
                                <a class="btn btn-info btn-sm"
                                   href="<?php echo e(route('admin.paket.editChoice',$paket->id_paket)); ?>">
                                    <i class="fas fa-edit">
                                    </i>
                                    Edit
                                </a>
                                <?php if($paket->status==2): ?>
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                            data-target="#aktifkan_<?php echo e($paket->id_paket); ?>">
                                        <i class="fas fa-recycle">
                                        </i>
                                        Recycle
                                    </button>
                                    <div class="modal fade" id="aktifkan_<?php echo e($paket->id_paket); ?>" tabindex="-1" role="dialog"
                                         aria-labelledby="deleteModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="hapusModalLongTitle"><i>Recycle</i> Paket
                                                        Wisata</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-left">
                                                    Anda Yakin Ingin Me-<i>recycle</i> Paket ...
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">
                                                        Tidak
                                                    </button>
                                                    <form action="<?php echo e(route('admin.paket.recycle',$paket->id_paket)); ?>"
                                                          method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <button type="submit" class="btn btn-danger"><i>Recycle</i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php elseif($paket->status==0): ?>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                            data-target="#delete_<?php echo e($paket->id_paket); ?>">
                                        <i class="fas fa-trash-alt">
                                        </i>
                                        Hapus
                                    </button>
                                    <div class="modal fade" id="delete_<?php echo e($paket->id_paket); ?>" tabindex="-1" role="dialog"
                                         aria-labelledby="deleteModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="hapusModalLongTitle">Hapus Paket
                                                        Wisata</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-left">
                                                    Anda Yakin Ingin Menghapus Paket ...
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">
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
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="6" class="text-center">Tidak Ada Data</td>
                        </tr>
                    <?php endif; ?>
                    <tr>
                        <td colspan="6" class="text-center">
                            <?php echo $pakets->links(); ?>

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

<?php echo $__env->make('layout.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Backup Data Kristopel\Kuliah ITdel\Semester 6\PA III\Project\git\v.7.1\PA-III-02-2020\resources\views/admin/paket/paket_wisata.blade.php ENDPATH**/ ?>
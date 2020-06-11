<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Paket Wisata</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">Administrator</li>
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
                        <i class="fas fa-pencil-alt">
                        </i>
                        Create
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
                            Harga Paket
                        </th>
                        <th class="text-center">
                            Daerah
                        </th>
                        <th style="width: 30%">
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    
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
                                <span class="badge badge-success"><?php echo e(number_format($paket->harga_paket)); ?></span>
                            </td>
                            <td class="project-state">
                                <span class="badge badge-primary"><?php echo e($paket->getKabupaten->nama_kabupaten); ?></span>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="<?php echo e(route('admin.paket.show',$paket->id_paket)); ?>">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="<?php echo e(route('admin.paket.editChoice',$paket->id_paket)); ?>">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#delete_<?php echo e($paket->id_paket); ?>">
                                    Delete
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
                                            <div class="modal-body">
                                                Anda Yakin Ingin Menhapus Paket ...
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Batal
                                                </button>
                                                <form action="<?php echo e(route('admin.paket.hapus',$paket->id_paket)); ?>"
                                                      method="post">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-primary">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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

<?php echo $__env->make('layout.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Backup Data Kristopel\Kuliah ITdel\Semester 6\PA III\Project\git\v.4.1\PA-III-02-2020\resources\views/admin/paket/paket_wisata.blade.php ENDPATH**/ ?>
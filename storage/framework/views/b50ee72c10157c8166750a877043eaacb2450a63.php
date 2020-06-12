<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Adminstrator</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home.admin')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.paket')); ?>">Paket Wisata</a></li>
                        <li class="breadcrumb-item active">Edit Paket Wisata</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"><?php echo e(Request::segment(3)=== 'add' ? 'Tambah Paket Wisata' : 'Edit Paket Wisata'); ?></h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <a class="btn btn-primary btn-lg" href="<?php echo e(route('admin.paket.edit',$id_paket)); ?>">
                                    <i class="fas fa-folder">
                                    </i>
                                    Informasi Utama
                                </a>
                            </div>
                            <div class="col">
                                <a class="btn btn-info btn-lg" href="<?php echo e(route('admin.paket.ini',$id_paket)); ?>">
                                    <i class="fas fa-folder">
                                    </i>
                                    Included & Not Included
                                </a>
                            </div>
                            <div class="col">
                                <a class="btn btn-secondary btn-lg" href="<?php echo e(route('admin.paket.layanan',$id_paket)); ?>">
                                    <i class="fas fa-folder">
                                    </i>
                                    Layanan Paket
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PA-III-02-2020\resources\views/admin/paket/edit_choice_paket.blade.php ENDPATH**/ ?>
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
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.paket.show',$id_paket)); ?>">Detail</a></li>
                        <li class="breadcrumb-item active">Tambah Sesi Wisata</li>
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
                            <h3 class="card-title">Tambah Sesi Wisata</h3>
                        </div>
                        <form action="<?php echo e(route('admin.sesi.store',$id_paket)); ?>" method="post"
                              enctype="multipart/form-data"
                              id="store-form">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="kuota">Kuota Peserta</label>
                                    <input type="number" class="form-control"
                                           name="kuota_peserta"
                                           id="kuota_peserta"
                                           placeholder="Kouta Peserta" value="0" min="0" required>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="jadwal">Jadwal</label>
                                    <input type="date" class="form-control"
                                           name="jadwal"
                                           id="jadwal" required>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="<?php echo e(route('admin.paket.show',$id_paket)); ?>" class="btn btn-danger">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Backup Data Kristopel\Kuliah ITdel\Semester 6\PA III\Project\git\v.5.1\PA-III-02-2020\resources\views/admin/paket/create_sesi.blade.php ENDPATH**/ ?>
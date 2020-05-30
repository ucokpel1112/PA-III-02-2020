<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Adminstrator</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Paket Wisata</a></li>
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
                        <form action="<?php echo e(route('admin.sesi.update',$sesi->id_sesi)); ?>" method="post"
                              enctype="multipart/form-data"
                              id="store-form">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="kuota_peserta">Kuota Peserta</label>
                                    <input type="number" class="form-control"
                                           name="kuota_peserta"
                                           id="kuota_peserta"
                                           placeholder="Kuota Peserta" value="<?php echo e($sesi->kuota_peserta); ?>" min="0" required>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="jadwal">Jadwal</label>
                                    <input type="date" value="<?php echo e($sesi->jadwal); ?>" class="form-control"
                                           name="jadwal"
                                           id="jadwal" required>
                                </div>

                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control custom-select" name="status" id="status" required>
                                        <option selected="" disabled="">Pilih status</option>

                                        <option value="1" <?php echo e(($sesi->status==1)?'selected':null); ?>>Aktif</option>
                                        <option value="0" <?php echo e(($sesi->status==0)?'selected':null); ?>>Non-Aktif</option>

                                    </select>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PA-III-02-2020\resources\views/admin/paket/edit_sesi.blade.php ENDPATH**/ ?>
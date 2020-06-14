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
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.pemesanan')); ?>">Pemesanan</a></li>
                        <li class="breadcrumb-item active">Edit Rekening</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Rekening</h3>
                        </div>
                        <form  action="<?php echo e(route('admin.rekening.update',$rekening->id_rekening)); ?>"  method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama Bank</label>
                                    <input name="nama_bank" class="form-control" type="text" placeholder="Nama Bank" value="<?php echo e($rekening->nama_bank); ?>">
                                </div>
                                <div class="form-group">
                                    <label>Nama Bank</label>
                                    <input name="nomor_rekening" class="form-control" type="text" placeholder="Nomor Rekening" value="<?php echo e($rekening->nomor_rekening); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="gambar">Gambar/Logo Bank</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="gambar" id="gambar"
                                            >
                                            <label class="custom-file-label" for="gambar">Choose file</label>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row border" style="padding: 5px;border-radius: 10px">
                                        <div class="col-sm-10 text-center">
                                            <img class="img-fluid" src="<?php echo e(asset('storage/img/rekening/'.$rekening->gambar)); ?>"
                                                 alt="Photo">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Edit</button>
                                <a href="<?php echo e(route('admin.pemesanan')); ?>" class="btn btn-danger">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PAIII-paling baru\PA-III-02-2020\resources\views/admin/pemesanan/edit_rekening.blade.php ENDPATH**/ ?>
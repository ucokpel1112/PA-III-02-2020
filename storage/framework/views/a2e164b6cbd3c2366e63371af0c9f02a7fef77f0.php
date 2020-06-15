<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Anggota CBT</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Layanan Wisata</a></li>
                        <li class="breadcrumb-item active">Edit Layanan Wisata</li>
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
                            <h3>Edit Data Layanan Wisata</h3>
                            <?php if(session('sukses')): ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo e(session('sukses')); ?>

                                </div>
                            <?php endif; ?>
                        </div>

                        <form action="<?php echo e(route('anggotacbt.layanan.update',$layanan_wisata->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Layanan</label>
                                    <input name="nama_layanan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Layanan" value="<?php echo e($layanan_wisata->nama_layanan); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Pilih Jenis Layanan</label>
                                    <select name="jenisLayanan_id" class="form-control" id="exampleFormControlSelect1">
                                        <?php $__currentLoopData = $jenis_layanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($row->id); ?>" <?php if($layanan_wisata->jenisLayanan_id == $row->id): ?> selected <?php endif; ?>><?php echo e($row->nama_jenis_layanan); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Pilih Kabupaten</label>
                                    <select name="kabupaten_id" class="form-control" id="exampleFormControlSelect1">
                                        <?php $__currentLoopData = $kabupaten; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($row->id_kabupaten); ?>" <?php if($layanan_wisata->kabupaten_id == $row->id_kabupaten): ?> selected <?php endif; ?>><?php echo e($row->nama_kabupaten); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Deskripsi Layanan</label>
                                    <textarea name="deskripsi_layanan" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo e($layanan_wisata->deskripsi_layanan); ?></textarea>
                                </div>


                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-warning">Update</button>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.anggotacbt.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PAIII-paling baru\PA-III-02-2020\resources\views/anggotacbt/layanan_wisata/edit.blade.php ENDPATH**/ ?>
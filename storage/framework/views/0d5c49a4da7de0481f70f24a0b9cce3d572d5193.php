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
                                    <select name="jenislayanan_id" class="form-control" id="exampleFormControlSelect1">
                                        <option value=1 <?php if($layanan_wisata->jenislayanan_id == 1): ?> selected <?php endif; ?>>1</option>
                                        <option value=2 <?php if($layanan_wisata->jenislayanan_id == 2): ?> selected <?php endif; ?>>2</option>
                                        <option value=3 <?php if($layanan_wisata->jenislayanan_id == 3): ?> selected <?php endif; ?>>3</option>
                                        <option value=4 <?php if($layanan_wisata->jenislayanan_id == 4): ?> selected <?php endif; ?>>4</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Pilih Kabupaten</label>
                                    <select name="kabupaten_id" class="form-control" id="exampleFormControlSelect1">
                                        <option value=1 <?php if($layanan_wisata->jenislayanan_id == 1): ?> selected <?php endif; ?>>1</option>
                                        <option value=2 <?php if($layanan_wisata->jenislayanan_id == 2): ?> selected <?php endif; ?>>2</option>
                                        <option value=3 <?php if($layanan_wisata->jenislayanan_id == 3): ?> selected <?php endif; ?>>3</option>
                                        <option value=4 <?php if($layanan_wisata->jenislayanan_id == 4): ?> selected <?php endif; ?>>4</option>
                                        <option value=5 <?php if($layanan_wisata->jenislayanan_id == 5): ?> selected <?php endif; ?>>5</option>
                                        <option value=6 <?php if($layanan_wisata->jenislayanan_id == 6): ?> selected <?php endif; ?>>6</option>
                                        <option value=7 <?php if($layanan_wisata->jenislayanan_id == 7): ?> selected <?php endif; ?>>7</option>
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


<?php echo $__env->make('layout.anggotacbt.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Backup Data Kristopel\Kuliah ITdel\Semester 6\PA III\Project\git\PA-III-02-2020\resources\views/anggotacbt/layanan_wisata/edit.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Adminstrator</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Kalender Event</a></li>
                        <li class="breadcrumb-item active">Tambah Kalender</li>
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
                            <h3 class="card-title">Tambah Kalender Event</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="<?php echo e(route('updatekalender',$kalenders->id_kalenderevent)); ?>"  method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="Nama Event">Nama Event</label>
                                    <input type="text" name="nama_event" class="form-control" id="Nama Event" value="<?php echo e($kalenders->nama_event); ?>">
                                </div>
                                <div class="form-group" >
                                    <label for="exampleInputPasNama Tempatsword1">Nama Tempat</label>
                                    <input type="text" name="nama_tempat" class="form-control" id="Nama Tempat" value="<?php echo e($kalenders->nama_tempat); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="Tanggal">Tanggal</label>
                                    <input type="date" name="tanggal_event" class="form-control" id="Tanggal" value="<?php echo e($kalenders->tanggal_event); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="Jam">Jam</label>
                                    <input type="time" name="jam_event" class="form-control" id="Jam" value="<?php echo e($kalenders->jam_event); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="Alamat">Alamat</label>
                                    <input type="text" name="alamat_event" class="form-control" id="Alamat" value="<?php echo e($kalenders->alamat_event); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="Deskripsi">Deskripsi</label>
                                    <div class="mb-3">
                                <textarea name="deskripsi_event" class="textarea" placeholder="Deskripsi"
                                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo e($kalenders->deskripsi_event); ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Gambar/Poster</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="gambar_event" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-10">
                                                <img class="img-fluid" src="<?php echo e(asset('storage/img/kalender/'.$kalenders->gambar_event)); ?>" alt="Photo">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PA-III-02-2020\resources\views/admin/kalender/updatekalender.blade.php ENDPATH**/ ?>
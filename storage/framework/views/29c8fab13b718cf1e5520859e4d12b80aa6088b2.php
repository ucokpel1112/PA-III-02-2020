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
                <form role="form" action="<?php echo e(route('tambahkalender')); ?>" method="post" enctype="multipart/form-data">
                       <?php echo e(csrf_field()); ?>

                        <div class="card-body">
                        <div class="form-group">
                            <label for="Nama Event">Nama Event</label>
                            <input type="text" name="nama_event" class="form-control" id="Nama Event" placeholder="Nama Event">
                        </div>
                        <div class="form-group">
                            <label for="Nama Tempat">Nama Tempat</label>
                            <input type="text" name="nama_tempat" class="form-control" id="Nama Tempat" placeholder="Nama Tempat">
                        </div>
                        <div class="form-group">
                            <label for="Tanggal">Tanggal</label>
                            <input type="date" name="tanggal_event" class="form-control" id="Tanggal" placeholder="Tanggal">
                        </div>
                        <div class="form-group">
                            <label for="Jam">Jam</label>
                            <input type="time" name="jam_event" class="form-control" id="Jam" placeholder="Jam">
                        </div>
                        <div class="form-group">
                            <label for="Alamat">Alamat</label>
                            <input type="text" name="alamat_event" class="form-control" id="Alamat" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <label for="Deskripsi">Deskripsi</label>
                            <div class="mb-3">
                                <textarea name="deskripsi_event" class="textarea" placeholder="Deskripsi"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Gambar/Poster</label>
                            <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="gambar_event" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            </div>
                        </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>   
             </div>
        </div>

        

        </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Backup Data Kristopel\Kuliah ITdel\Semester 6\PA III\Project\git\PA-III-02-2020\resources\views/admin/kalender/tambahkalender.blade.php ENDPATH**/ ?>
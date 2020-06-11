<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pendaftar Komunitas</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Pendaftar Pariwisata</li>
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
                </h3>

                <div class="card-tools">

                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th>
                            Nama Anggota
                        </th>
                        <th>
                            Nomor Whatsapp
                        </th>
                        <th>
                            Layanan Wisata
                        </th>
                        <th>
                            Nama Komunitas
                        </th>


                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $data_pendaftar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $daftar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <select name="status" class="form-control custom-select">
                                        <option selected="" disabled="">Pilih Status</option>
                                        <option value="semua">Semua Status</option>
                                        <option value="0" <?php echo e((isset($status)&&($status==0))?'selected':null); ?>>Pemesanan
                                            Dibatalkan
                                        </option>
                                        <option value="1" <?php echo e((isset($status)&&($status==1))?'selected':null); ?>>Menunggu
                                            Pembayaran
                                        </option>
                                        <option value="2" <?php echo e((isset($status)&&($status==2))?'selected':null); ?>>Menunggu
                                            Konfirmasi Pembayaran Pengelola
                                        </option>
                                        <option value="3" <?php echo e((isset($status)&&($status==3))?'selected':null); ?>>Pemesanan
                                            Telah Berhasil
                                        </option>
                                        <option value="4" <?php echo e((isset($status)&&($status==4))?'selected':null); ?>>Pemesanan
                                            Telah Selesan/Berakhir
                                        </option>
                                    </select>
                                </div>
                            </td>
                            <td><?php echo e($daftar->nama); ?></td>
                            <td><?php echo e($daftar->no_wa); ?></td>
                            <td><?php echo e($daftar->layanan); ?></td>
                            <td><?php echo e($daftar->getKomunitas->nama_komunitas); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>




        </div>
        <!-- /.card-body -->


        <!-- /.card -->

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Backup Data Kristopel\Kuliah ITdel\Semester 6\PA III\Project\git\v.3.1\PA-III-02-2020\resources\views/admin/komunitas/view_pendaftar.blade.php ENDPATH**/ ?>
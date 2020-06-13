<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard</h1>
                </div>
                
                
                
                
                
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?php echo e($count_p); ?></h3>

                            <p>Paket Wisata</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-cube"></i>
                        </div>
                        <a href="<?php echo e(url('/adm/paket')); ?>" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?php echo e($count); ?></h3>

                            <p>Kalender Wisata</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pricetag"></i>

                        </div>
                        <a href="<?php echo e(url('/adm/listkalender')); ?>" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?php echo e($count_m); ?></h3>

                            <p>Member CBT</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person"></i>
                        </div>
                        <a href="<?php echo e(url('adm/komunitas/pendaftar')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?php echo e($count_c); ?></h3>

                            <p>Customer</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Title</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove"
                                        data-toggle="tooltip" title="Remove">
                                    <i class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php echo $usersChart->container(); ?>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            Footer
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">

                                    </div>
                                    <div class="body">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <td>No</td>
                                                <td>Nama Paket</td>
                                                <td>Nama Layanan</td>
                                                <td>Nama Jenis Layanan</td>
                                                <td>Jumlah</td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $no = 1;
                                            ?>
                                            <?php $__currentLoopData = $tabel_chart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tabel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?=$no?></td>
                                                    <td><?=$tabel->nama_paket?></td>
                                                    <td><?=$tabel->nama_layanan?></td>
                                                    <td><?=$tabel->nama_jenis_layanan?></td>
                                                    <td><?=$tabel->jumlah?></td>
                                                </tr>
                                                <?php
                                                $no++;
                                                ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- Main row -->
        </div>
    </section>

    <script src="<?php echo e($usersChart->cdn()); ?>"></script>
    <?php echo $usersChart->script(); ?>

<?php $__env->stopSection(); ?>





<?php echo $__env->make('layout.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Backup Data Kristopel\Kuliah ITdel\Semester 6\PA III\Project\git\v.6.1\PA-III-02-2020\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>
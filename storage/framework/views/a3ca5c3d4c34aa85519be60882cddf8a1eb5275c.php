<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Komunitas Pariwisata</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Komunitas Pariwisata</li>
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
                    <a href="<?php echo e(url('anggotacbt/komunitas/pendaftar')); ?>" class="btn btn-primary btn-sm"> Daftar Anggota Komunitas</a>
                </h3>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="width: 5%;">
                            No
                        </th>
                        <th style="width: 20%">
                            Nama Komunitas
                        </th>
                            <th style="width: 30%">
                                Deskripsi
                            </th>
                        <th style="width: 20%">
                            Link Gabung Group Komunitas
                        </th>
                        <th class="text-center" style="width: 25%">
                            Kabupaten
                        </th>


                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $data_komunitas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $komunitas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $a=1; ?>
                        <tr>
                            <td><?php echo $a++ ;?></td>
                            <td><?php echo e($komunitas->nama_komunitas); ?></td>
                            <td> <?php echo $komunitas->deskripsi ?></td>
                            <td> <a href="<?php echo e($komunitas->link); ?>"><?php echo e($komunitas->link); ?></a></td>
                            <td><?php echo e($komunitas->getKabupaten->nama_kabupaten); ?></td>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>

            <!-- Modal -->

            <!-- Modal -->



        </div>
        <!-- /.card-body -->


        <!-- /.card -->

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.anggotacbt.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PA-III-02-2020\resources\views/anggotacbt/komunitas/komunitas.blade.php ENDPATH**/ ?>
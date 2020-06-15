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


                    <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal"
                            data-target="#exampleModal">
                        Bergabung Komunitas
                    </button>


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
                            <td><?php echo e($daftar->getUser->name); ?></td>
                            <td><?php echo e($daftar->getUser->no_WA); ?></td>
                            <td>
                                <ul>
                                    <?php $__currentLoopData = $daftar->getLayanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($row->nama_layanan); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <?php $__currentLoopData = $daftar->getKomunitasMember; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($row->nama_komunitas); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Komunitas</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?php echo e(route('gabung_daftar')); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>

                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Pilih Komunitas</label>
                                    <select name="komunitas_id" class="form-control" id="exampleFormControlSelect1">
                                        <option selected="" disabled="">Pilih Komunitas</option>
                                        <?php $__currentLoopData = $komunitas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($row->id); ?>"
                                                    <?php if($row->id): ?> selected <?php endif; ?>><?php echo e($row->nama_komunitas); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Mendaftar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <!-- Modal -->


        </div>
        <!-- /.card-body -->


        <!-- /.card -->

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.anggotacbt.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PAIII-paling baru\PA-III-02-2020\resources\views/anggotacbt/komunitas/anggota_komunitas.blade.php ENDPATH**/ ?>
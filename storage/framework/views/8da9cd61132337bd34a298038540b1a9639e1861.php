<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Layanan Wisata</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Anggota CBT</a></li>
                        <li class="breadcrumb-item active">Layanan Wisata</li>

                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header border-0">
                            <h3 class="card-title text-bold text-gray-dark">Layanan Wisata</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                        data-target="#exampleModal">
                                    <i class="fas fa-plus"> </i> Tambah Data Layanan Wisata
                                </button>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped table-valign-middle">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Layanan</th>
                                    <th>Jenis Layanan</th>
                                    <th>Kabupaten</th>
                                    <th>Deskripsi Layanan</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $data_layanan_wisata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $layanan_wisata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <?php echo e($index+1); ?>

                                        </td>
                                        <td>
                                            <?php echo e($layanan_wisata->nama_layanan); ?>

                                        </td>
                                        <td>
                                            <?php echo e($layanan_wisata->getJenisLayanan->nama_jenis_layanan); ?>

                                        </td>
                                        <td>
                                            <?php echo e($layanan_wisata->getKabupaten->nama_kabupaten); ?>

                                        </td>
                                        <td>
                                            <?php echo e($layanan_wisata->deskripsi_layanan); ?>

                                        </td>
                                        <td>
                                            <a href="<?php echo e(route('anggotacbt.layanan.edit',$layanan_wisata->id)); ?>"
                                               class="btn btn-warning btn-sm">Edit</a>
                                            <a href="<?php echo e(route('anggotacbt.layanan.delete',$layanan_wisata->id)); ?>"
                                               class="btn btn-danger btn-sm"
                                               onclick="return confirm('Apakah data ini ingin dihapus?')">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Layanan Wisata</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?php echo e(route('anggotacbt.layanan.tambah')); ?>" method="POST"
                          enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Layanan</label>
                                <input name="nama_layanan" type="text" class="form-control" id="exampleInputEmail1"
                                       aria-describedby="emailHelp" placeholder="Nama Layanan">
                            </div>


                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Pilih Jenis Layanan</label>
                                <select name="jenisLayanan_id" class="form-control" id="exampleFormControlSelect1"
                                        required>
                                    <option selected="" disabled="">Pilih Jenis Layanan</option>
                                    <?php $__currentLoopData = $jenis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($row->id); ?>"><?php echo e($row->nama_jenis_layanan); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Pilih Kabupaten</label>
                                <select name="kabupaten_id" class="form-control" id="exampleFormControlSelect1">
                                    <option selected="" disabled="">Pilih Kabupaten</option>
                                    <?php $__currentLoopData = $kabupaten; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($row->id_kabupaten); ?>"><?php echo e($row->nama_kabupaten); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Deskripsi Layanan</label>
                                <textarea name="deskripsi_layanan" class="form-control"
                                          id="exampleFormControlTextarea1"
                                          rows="3"></textarea>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.anggotacbt.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PA-III-02-2020\resources\views/anggotacbt/layanan_wisata/index.blade.php ENDPATH**/ ?>
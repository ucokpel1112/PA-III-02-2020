<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Komunitas</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home.admin')); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Komunitas</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <?php if(session('sukses')): ?>
            <div class="alert alert-success">
                <?php echo e(session('sukses')); ?>

            </div>
        <?php elseif(session('gagal')): ?>
            <div class="alert alert-danger">
                <?php echo e(session('gagal')); ?>

            </div>
        <?php endif; ?>
    <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <button type="button" class="btn btn-success btn-sm float-right" data-toggle="modal"
                            data-target="#exampleModal">
                        <i class="fa fa-plus"> </i> Tambah data komunitas
                    </button>
                </h3>

                <div class="card-tools">

                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="width: 20%">
                            Nama Komunitas
                        </th>
                        <th>
                            Deskripsi
                        </th>
                        <th>
                            Link Gabung Group Komunitas
                        </th>
                        <th class="text-center" style="width: 20%">
                            Kabupaten
                        </th>
                        <th class="text-center" style="width:25%">
                            Aksi
                        </th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $data_komunitas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $komunitas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($komunitas->nama_komunitas); ?></td>
                            <td> <?php echo str_limit($komunitas->deskripsi,100,'...'); ?></td>
                            <td><a href="<?php echo e($komunitas->link); ?>"><?php echo e($komunitas->link); ?></a></td>
                            <td><?php echo e($komunitas->getKabupaten->nama_kabupaten); ?></td>
                            <td class="text-center">
                                <a href="<?php echo e(route('show_komunitas',$komunitas->id)); ?>" class="btn btn-primary btn-sm"><i
                                        class="fa fa-eye"></i>Lihat</a>
                                <a href="<?php echo e(route('edit_komunitas',$komunitas->id)); ?>" class="btn btn-info btn-sm"><i
                                        class="fa fa-edit"> </i> Edit</a>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#delete_<?php echo e($komunitas->id); ?>">
                                    <i class="fas fa-trash-alt">
                                    </i>
                                    Hapus
                                </button>
                                <div class="modal fade" id="delete_<?php echo e($komunitas->id); ?>" tabindex="-1" role="dialog"
                                     aria-labelledby="deleteModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="hapusModalLongTitle">Hapus Komunitas</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-left">
                                                Anda Yakin Ingin Menghapus Komunitas ...
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Batal
                                                </button>
                                                <a href="<?php echo e(route('hapus_komunitas',$komunitas->id)); ?>"
                                                   class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash-alt"> </i> Hapus
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>

            <!-- Modal -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"> Tambah Komunitas</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?php echo e(route('tambah_komunitas')); ?>" enctype="multipart/form-data" role="form" method="POST">
                            <?php echo e(csrf_field()); ?>

                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Nama Komunitas</label>
                                    <input name="nama_komunitas" class="form-control" type="text"
                                           placeholder="Nama Komunitas">
                                </div>
                                <div class="form-group">
                                    <label for="Deskripsi">Deskripsi</label>
                                    <textarea name="deskripsi" class="textarea" placeholder="Deskripsi"
                                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="gambar">Gambar</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                            <label class="custom-file-label" for="gambar">Pilih file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">Upload</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Link WhatsApp Group Komunitas</label>
                                    <textarea name="link" class="form-control" id="exampleFormControlTextarea1"
                                              rows="3"></textarea>
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

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
        <!-- /.card-body -->


        <!-- /.card -->

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PAIII-paling baru\PA-III-02-2020\resources\views/admin/komunitas/daftar_komunitas.blade.php ENDPATH**/ ?>
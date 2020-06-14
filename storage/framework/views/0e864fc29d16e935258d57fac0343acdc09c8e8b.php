<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pemesanan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Pemesanan</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#pemesanan" data-toggle="tab">List
                                        Pemesanan</a></li>
                                <li class="nav-item"><a class="nav-link" href="#rekening" data-toggle="tab">Rekening</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="pemesanan">
                                    <table class="table table-striped projects">

                                        <thead>
                                        <tr>
                                            <th style="width: 1%">
                                                ID
                                            </th>
                                            <th style="width: 10%">
                                                Gambar
                                            </th>
                                            <th style="width: 30%">
                                                Nama Paket Wisata
                                            </th>
                                            <th class="text-center">
                                                Status
                                            </th>
                                            <th class="text-center">
                                                Jumlah Peserta
                                            </th>
                                            <th style="width: 30%">
                                            </th>
                                        </tr>
                                        </thead>
                                        <form action="<?php echo e(route('admin.pemesanan.filter')); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <div class="form-group">
                                                        <select name="paket" class="form-control custom-select">
                                                            <option selected="" disabled="">Pilih Paket</option>
                                                            <option value="semua">Semua Paket</option>
                                                            <?php $__currentLoopData = $paket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option
                                                                    value="<?php echo e($row->id_paket); ?>" <?php echo e((isset($id_paket)&&($id_paket==$row->id_paket))?'selected':null); ?>><?php echo e($row->nama_paket); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <select name="status" class="form-control custom-select">
                                                            <option selected="" disabled="">Pilih Status</option>
                                                            <option value="semua">Semua Status</option>
                                                            <option
                                                                value="0" <?php echo e((isset($status)&&($status==0))?'selected':null); ?>>
                                                                Pemesanan
                                                                Dibatalkan
                                                            </option>
                                                            <option
                                                                value="1" <?php echo e((isset($status)&&($status==1))?'selected':null); ?>>
                                                                Menunggu
                                                                Pembayaran
                                                            </option>
                                                            <option
                                                                value="2" <?php echo e((isset($status)&&($status==2))?'selected':null); ?>>
                                                                Menunggu
                                                                Konfirmasi Pembayaran Pengelola
                                                            </option>
                                                            <option
                                                                value="3" <?php echo e((isset($status)&&($status==3))?'selected':null); ?>>
                                                                Pemesanan
                                                                Telah Berhasil
                                                            </option>
                                                            <option
                                                                value="4" <?php echo e((isset($status)&&($status==4))?'selected':null); ?>>
                                                                Pemesanan
                                                                Telah Selesan/Berakhir
                                                            </option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td></td>
                                                <td class="project-actions text-right">
                                                    <button type="submit" style="width: 180px"
                                                            class="btn btn-success btn-sm">
                                                        <i class="fas fa-filter">
                                                        </i>
                                                        Filter
                                                    </button>
                                                </td>
                                            </tr>
                                        </form>
                                        <tbody>
                                        
                                        <?php $__empty_1 = true; $__currentLoopData = $pemesanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <tr>
                                                <td colspan="6" class="text-center">Tidak Ada Data</td>
                                            </tr>
                                        <?php endif; ?>
                                        <?php $__currentLoopData = $pemesanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($row->status==2): ?>
                                                <tr>
                                                    <td>
                                                        <?php echo e($row->id_pemesanan); ?>

                                                    </td>
                                                    <td>
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <img alt="Avatar" class="table-avatar"
                                                                     src="<?php echo e(asset('storage/img/paket/'.$row->getSesi->getPaket->gambar)); ?>">
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <?php echo e($row->getSesi->getPaket->nama_paket); ?>

                                                    </td>
                                                    <td class="project-state">
                                                        <span
                                                            class="badge badge-success"><?php echo e($row->defineStatus($row->status)); ?></span>
                                                    </td>
                                                    <td class="project-state">
                                                        <span
                                                            class="badge badge-primary"><?php echo e($row->jumlah_peserta); ?></span>
                                                    </td>
                                                    <td class="project-actions text-right">
                                                        <a class="btn btn-primary btn-sm" style="width: 180px"
                                                           href="<?php echo e(route('admin.pemesanan.show',$row->id_pemesanan)); ?>">
                                                            <i class="fas fa-folder">
                                                            </i>
                                                            Lihat Pemesanan
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php $__currentLoopData = $pemesanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($row->status==3): ?>
                                                <tr>
                                                    <td>
                                                        <?php echo e($row->id_pemesanan); ?>

                                                    </td>
                                                    <td>
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <img alt="Avatar" class="table-avatar"
                                                                     src="<?php echo e(asset('storage/img/paket/'.$row->getSesi->getPaket->gambar)); ?>">
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <?php echo e($row->getSesi->getPaket->nama_paket); ?>

                                                    </td>
                                                    <td class="project-state">
                                                        <span
                                                            class="badge badge-success"><?php echo e($row->defineStatus($row->status)); ?></span>
                                                    </td>
                                                    <td class="project-state">
                                                        <span
                                                            class="badge badge-primary"><?php echo e($row->jumlah_peserta); ?></span>
                                                    </td>
                                                    <td class="project-actions text-right">
                                                        <a class="btn btn-primary btn-sm" style="width: 180px"
                                                           href="<?php echo e(route('admin.pemesanan.show',$row->id_pemesanan)); ?>">
                                                            <i class="fas fa-folder">
                                                            </i>
                                                            Lihat Pemesanan
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php $__currentLoopData = $pemesanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($row->status==1): ?>
                                                <tr>
                                                    <td>
                                                        <?php echo e($row->id_pemesanan); ?>

                                                    </td>
                                                    <td>
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <img alt="Avatar" class="table-avatar"
                                                                     src="<?php echo e(asset('storage/img/paket/'.$row->getSesi->getPaket->gambar)); ?>">
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <?php echo e($row->getSesi->getPaket->nama_paket); ?>

                                                    </td>
                                                    <td class="project-state">
                                                        <span
                                                            class="badge badge-success"><?php echo e($row->defineStatus($row->status)); ?></span>
                                                    </td>
                                                    <td class="project-state">
                                                        <span
                                                            class="badge badge-primary"><?php echo e($row->jumlah_peserta); ?></span>
                                                    </td>
                                                    <td class="project-actions text-right">
                                                        <a class="btn btn-primary btn-sm" style="width: 180px"
                                                           href="<?php echo e(route('admin.pemesanan.show',$row->id_pemesanan)); ?>">
                                                            <i class="fas fa-folder">
                                                            </i>
                                                            Lihat Pemesanan
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php $__currentLoopData = $pemesanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($row->status==4): ?>
                                                <tr>
                                                    <td>
                                                        <?php echo e($row->id_pemesanan); ?>

                                                    </td>
                                                    <td>
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <img alt="Avatar" class="table-avatar"
                                                                     src="<?php echo e(asset('storage/img/paket/'.$row->getSesi->getPaket->gambar)); ?>">
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <?php echo e($row->getSesi->getPaket->nama_paket); ?>

                                                    </td>
                                                    <td class="project-state">
                                                        <span
                                                            class="badge badge-success"><?php echo e($row->defineStatus($row->status)); ?></span>
                                                    </td>
                                                    <td class="project-state">
                                                        <span
                                                            class="badge badge-primary"><?php echo e($row->jumlah_peserta); ?></span>
                                                    </td>
                                                    <td class="project-actions text-right">
                                                        <a class="btn btn-primary btn-sm" style="width: 180px"
                                                           href="<?php echo e(route('admin.pemesanan.show',$row->id_pemesanan)); ?>">
                                                            <i class="fas fa-folder">
                                                            </i>
                                                            Lihat Pemesanan
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php $__currentLoopData = $pemesanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($row->status==0): ?>
                                                <tr>
                                                    <td>
                                                        <?php echo e($row->id_pemesanan); ?>

                                                    </td>
                                                    <td>
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <img alt="Avatar" class="table-avatar"
                                                                     src="<?php echo e(asset('storage/img/paket/'.$row->getSesi->getPaket->gambar)); ?>">
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <?php echo e($row->getSesi->getPaket->nama_paket); ?>

                                                    </td>
                                                    <td class="project-state">
                                                        <span
                                                            class="badge badge-success"><?php echo e($row->defineStatus($row->status)); ?></span>
                                                    </td>
                                                    <td class="project-state">
                                                        <span
                                                            class="badge badge-primary"><?php echo e($row->jumlah_peserta); ?></span>
                                                    </td>
                                                    <td class="project-actions text-right">
                                                        <a class="btn btn-primary btn-sm" style="width: 180px"
                                                           href="<?php echo e(route('admin.pemesanan.show',$row->id_pemesanan)); ?>">
                                                            <i class="fas fa-folder">
                                                            </i>
                                                            Lihat Pemesanan
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td colspan="6" class="text-center">
                                                <?php echo $pemesanan->links(); ?>

                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane" id="rekening">
                                    <button style="margin-bottom: 10px" type="button" class="btn btn-primary btn-sm"
                                            data-toggle="modal"
                                            data-target="#exampleModal">
                                        <i class="fas fa-plus"> </i> Tambah Rekening
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel"
                                         aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Rekening</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="<?php echo e(route('admin.rekening.tambah')); ?>" method="POST"
                                                      enctype="multipart/form-data">
                                                    <?php echo csrf_field(); ?>
                                                    <div class="modal-body">

                                                        <div class="form-group">
                                                            <label for="nama_bank">Nama Bank</label>
                                                            <input name="nama_bank" type="text" class="form-control"
                                                                   id="nama_bank"
                                                                   aria-describedby="emailHelp" placeholder="Nama Bank">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nomor_rekening">Nomor Rekening</label>
                                                            <input name="nomor_rekening" type="text"
                                                                   class="form-control" id="nomor_rekening"
                                                                   aria-describedby="emailHelp"
                                                                   placeholder="Nomor Rekening">
                                                        </div>
                                                        <div class="form-group input-group">
                                                            <label for="gambar">Foto/Logo Bank</label>
                                                            <div class="input-group">
                                                                <div class="custom-file">
                                                                    <input name="gambar" type="file"
                                                                           class="custom-file-input" id="gambar">
                                                                    <label class="custom-file-label"
                                                                           for="exampleInputFile">Pilih file</label>
                                                                </div>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text" id="">Upload</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Batal
                                                        </button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                    <?php if(session('status')): ?>
                                        <div class="alert alert-success">
                                            <?php echo e(session('status')); ?>

                                        </div>
                                    <?php endif; ?>
                                    <table class="table table-striped projects">
                                        <thead>
                                        <tr>
                                            <th style="width: 40px">
                                                ID
                                            </th>
                                            <th class="text-center">
                                                Gambar
                                            </th>
                                            <th class="text-center">
                                                Nama Bank
                                            </th>
                                            <th class="text-center">
                                                Nomor Rekening
                                            </th>
                                            <th style="width: 200px"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = $rekening; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <tr style="font-size: 15px">
                                                <td><?php echo e($index+1); ?></td>
                                                <td>
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <img alt="Avatar" class="table-avatar"
                                                                 src="<?php echo e(asset('storage/img/rekening/'.$row->gambar)); ?>">
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td><?php echo e($row->nama_bank); ?></td>
                                                <td><?php echo e($row->nomor_rekening); ?></td>
                                                <td>
                                                    <a href="<?php echo e(route('admin.rekening.edit',$row->id_rekening)); ?>"
                                                       class="btn btn-sm btn-warning">Edit</a>
                                                    <button type="button" class="btn btn-danger btn-sm"
                                                            data-toggle="modal"
                                                            data-target="#delete_<?php echo e($row->id_rekening); ?>">
                                                        <i class="fas fa-trash-alt">
                                                        </i>
                                                        Hapus
                                                    </button>
                                                    <div class="modal fade" id="delete_<?php echo e($row->id_rekening); ?>"
                                                         tabindex="-1" role="dialog"
                                                         aria-labelledby="deleteModalCenterTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="hapusModalLongTitle">
                                                                        Hapus Rekening</h5>
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body text-left">
                                                                    Anda Yakin Ingin Menghapus Data Rekening ?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">
                                                                        Batal
                                                                    </button>
                                                                    <form
                                                                        action="<?php echo e(route('admin.rekening.hapus',$row->id_rekening)); ?>"
                                                                        method="post">
                                                                        <?php echo csrf_field(); ?>
                                                                        <?php echo method_field('DELETE'); ?>
                                                                        <button type="submit" class="btn btn-danger">
                                                                            Hapus
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <tr style="font-size: 15px">
                                                <td colspan="5">
                                                    <center>Belum ada Rekening Terdaftar</center>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PAIII-paling baru\PA-III-02-2020\resources\views/admin/pemesanan/pemesanan.blade.php ENDPATH**/ ?>
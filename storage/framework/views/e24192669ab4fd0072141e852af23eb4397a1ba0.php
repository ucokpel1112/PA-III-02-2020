<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detail Pemesanan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pemesanan</a></li>
                        <li class="breadcrumb-item active">Detail</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                     src="<?php echo e(asset('/storage/img/member/'.$member->photo)); ?>" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center"><?php echo e($member->getUser->name); ?></h3>

                            <p class="text-muted text-center"><?php echo e($member->getUser->email); ?></p>

                            <?php if(isset($member->getLayanan)): ?>
                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Total Layanan </b> <a
                                            class="float-right"> <?php echo e($member->getLayanan->count()); ?></a>
                                    </li>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#detailmember" data-toggle="tab">Data
                                        Diri</a></li>
                                <li class="nav-item"><a class="nav-link" href="#layanan" data-toggle="tab">Layanan
                                        Wisata</a></li>
                            </ul>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="detailmember">
                                    <strong><i class="far fa-file-alt mr-1"></i> Nama</strong>

                                    <p class="text-muted">
                                        <?php echo e($member->getUser->name); ?>

                                    </p>

                                    <hr>

                                    <strong><i class="fas fa-book mr-1"></i> Nomor HP</strong>

                                    <p class="text-muted"><?php echo e($member->getUser->no_HP); ?></p>

                                    <hr>

                                    <strong><i class="fas fa-phone mr-1"></i> Nomor WhatsApp</strong>

                                    <p class="text-muted"><?php echo e($member->getUser->no_WA); ?></p>

                                    <hr>

                                    <strong><i class="fas fa-mail-bulk mr-1"></i> Email</strong>

                                    <p class="text-muted"><?php echo e($member->getUser->email); ?></p>

                                    <hr>

                                    <strong><i class="fas fa-question-circle mr-1"></i> Status</strong>

                                    <p class="text-muted"><?php echo e($member->defineStatus($member->register_status)); ?></p>

                                    <hr>

                                    <strong><i class="fas fa-user-friends mr-1"></i> Komunitas</strong>


                                    <table class="table table-striped table-valign-middle">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Komunitas</th>
                                            <th>Kabupaten</th>
                                            <th>Link Whats App</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $member->getKomunitasMember; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>
                                                    <?php echo e($index+1); ?>

                                                </td>
                                                <td>
                                                    <?php echo e($row->nama_komunitas); ?>

                                                </td>
                                                <td>
                                                    <?php echo e($row->getkabupaten->nama_kabupaten); ?>

                                                </td>
                                                <td>
                                                    <?php echo e($row->link); ?>

                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                    <hr>

                                    <strong><i class="fas fa-user-friends mr-1"></i> Nomor KTP</strong>

                                    <p class="text-muted"><?php echo e($member->no_ktp); ?></p>
                                </div>
                                <div class="tab-pane" id="layanan">
                                    <table class="table table-striped table-valign-middle">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Layanan</th>
                                            <th>Jenis Layanan</th>
                                            <th>Kabupaten</th>
                                            <th>Deskripsi Layanan</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $member->getLayanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $layanan_wisata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Backup Data Kristopel\Kuliah ITdel\Semester 6\PA III\Project\git\v.5.1\PA-III-02-2020\resources\views/admin/anggotacbt/detail_member.blade.php ENDPATH**/ ?>
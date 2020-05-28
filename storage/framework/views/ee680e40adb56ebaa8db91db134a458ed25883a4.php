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
                                     src="<?php echo e(asset('adminlte/dist/img/user4-128x128.jpg')); ?>" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">Nama Member</h3>

                            <p class="text-muted text-center">Anggota Komunitas </p>


                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Total Layanan</b> <a class="float-right">1</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#detailmember"data-toggle="tab">Layanan Wisata</a></li>
                                <li class="nav-item"><a class="nav-link" href="#layanan"data-toggle="tab">Layanan Wisata</a></li>
                            </ul>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane" id="detailmember">
                                    <strong><i class="far fa-file-alt mr-1"></i> Nama</strong>

                                    <p class="text-muted">
                                        Helmuth Simon Tampubolon
                                    </p>

                                    <hr>

                                    <strong><i class="fas fa-book mr-1"></i> Nomor HP</strong>

                                    <p class="text-muted">082160085708</p>

                                    <hr>

                                    <strong><i class="fas fa-phone mr-1"></i> Nomor WhatsApp</strong>

                                    <p class="text-muted">082160085708</p>

                                    <hr>

                                    <strong><i class="fas fa-mail-bulk mr-1"></i> Email</strong>

                                    <p class="text-muted">helmuthsimon123@gmail.com</p>

                                    <hr>

                                    <strong><i class="fas fa-question-circle mr-1"></i> Status</strong>

                                    <p class="text-muted">Aktif</p>

                                    <hr>

                                    <strong><i class="fas fa-user-friends mr-1"></i> Komunitas</strong>

                                    <p class="text-muted">Komunitas</p>

                                    <hr>

                                    <strong><i class="fas fa-user-friends mr-1"></i> Nomor KTP</strong>

                                    <p class="text-muted">121287465902365</p>
                                </div>
                                <div class="active tab-pane" id="layanan">
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
                                        
                                        <tr>
                                            <td>1
                                                
                                            </td>
                                            <td>nama layanan
                                                
                                            </td>
                                            <td>jenis layanan
                                                
                                            </td>
                                            <td>nama kabupaten
                                                
                                            </td>
                                            <td>deskripsi layanan
                                                
                                            </td>

                                        </tr>
                                        
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

<?php echo $__env->make('layout.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PA-III-02-2020\resources\views/desgin.blade.php ENDPATH**/ ?>
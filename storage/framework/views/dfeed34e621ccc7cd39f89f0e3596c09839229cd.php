<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Member</a></li>
                        <li class="breadcrumb-item active">Detail Profile</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img style="max-width: 300px;height: 200px;border: 3px solid #adb5bd;padding: 3px;" class="rounded mx-auto d-block"
                                     src="<?php echo e(asset('/storage/img/member/'.$member->photo)); ?>"
                                     alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center"><?php echo e($member->getUser->name); ?></h3>

                            <p class="text-muted text-center"><?php echo e($member->getUser->email); ?></p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Nama</b> <a class="float-right"><?php echo e($member->getUser->name); ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Email</b> <a class="float-right"><?php echo e($member->getUser->email); ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Nomor WhatsApp ( WA )</b> <a class="float-right"><?php echo e($member->getUser->no_WA); ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Nomor Telepon ( Hp )</b> <a class="float-right"><?php echo e($member->getUser->no_HP); ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Status Keanggotaan </b> <a class="float-right"><?php echo e($member->defineStatus($member->getUser->registerStatus)); ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Nomor KTP </b> <a class="float-right"><?php echo e($member->no_KTP); ?></a>
                                </li>
                            </ul>

                            <a href="<?php echo e(route('member.request.terima',$member->id)); ?>" class="btn btn-primary btn-block"><b>Terima</b></a>
                            <a href="<?php echo e(route('member.request.tolak',$member->id)); ?>" class="btn btn-danger btn-block"><b>Tolak</b></a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PA-III-02-2020\resources\views/admin/anggotacbt/detail_request.blade.php ENDPATH**/ ?>
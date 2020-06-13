<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center" style="opacity: 80%">
        <div class="col-md-8">
            <div class="card" style=" background-color: #2F4F4F">
                <div class="card-header">
                    <center>
                        <div class="register-logo">
                        </div>
                    </center>
                    <br>
                    <center><img src="<?php echo e(asset('img/Register-.png')); ?>"
                                 alt="CBT Logo"
                                 class="brand-image img-circle elevation-3"
                                 style="width: 150px"></center>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col text-center">
                            <a class="btn btn-primary btn-lg" style="width: 320px" href="<?php echo e(route('register',1)); ?>">Ingin Menjadi
                                Anggota
                                Komunitas</a>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col text-center">
                            <br>
                            <a class="btn btn-secondary btn-lg" style="width: 320px" href="<?php echo e(route('register',0)); ?>">Registrasi Sebagai
                                Pembeli</a>
                            <br><br></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.auth.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Backup Data Kristopel\Kuliah ITdel\Semester 6\PA III\Project\git\v.5.1\PA-III-02-2020\resources\views/auth/register_choice.blade.php ENDPATH**/ ?>
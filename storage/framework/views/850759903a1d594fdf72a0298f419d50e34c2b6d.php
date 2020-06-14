<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center" style="opacity: 80%">
            <div class="col-md-8">
                <div class="card" style=" background-color: #2F4F4F">
                    <div class="card-header">
                        <center>
                            <div class="register-logo">
                                <!-- <img src="member/img/register.png"
                   alt="CBT Logo"
                   class="brand-image img-circle elevation-3"
                   style="width: 200px">
                             --></div>
                        </center>
                        <br>
                        <h4><b>
                                <center><img src="<?php echo e(asset('img/Register-.png')); ?>"
                                             alt="CBT Logo"
                                             class="brand-image img-circle elevation-3"
                                             style="width: 150px"></center>
                            </b></h4>
                    </div>

                    <!-- <div id="intro" class="view">
                        <div class="full-bg-img">

                        </div>
                    </div> -->

                    <div class="card-body">
                        <form method="POST" action="<?php echo e(url('register')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <label for="name" class="col-md-3 col-form-label text-md-right"></label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="name"
                                           value="<?php echo e(old('name')); ?>" required autocomplete="name"
                                           placeholder="Nama Lengkap" autofocus>

                                    <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="no_WA" class="col-md-3 col-form-label text-md-right"></label>

                                <div class="col-md-6">
                                    <input id="no_WA" type="text"
                                           class="form-control <?php if ($errors->has('no_WA')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('no_WA'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="no_WA"
                                           value="<?php echo e(old('no_WA')); ?>" required autocomplete="no_WA"
                                           placeholder="Nomor WhatsApp" autofocus>

                                    <?php if ($errors->has('no_WA')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('no_WA'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="no_HP" class="col-md-3 col-form-label text-md-right"></label>

                                <div class="col-md-6">
                                    <input id="no_HP" type="text"
                                           class="form-control <?php if ($errors->has('no_HP')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('no_HP'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="no_HP"
                                           value="<?php echo e(old('no_HP')); ?>" required autocomplete="no_HP"
                                           placeholder="Nomor Handphone" autofocus>

                                    <?php if ($errors->has('no_HP')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('no_HP'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="email" class="col-md-3 col-form-label text-md-right"></label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email"
                                           value="<?php echo e(old('email')); ?>" placeholder="E-mail" required
                                           autocomplete="email">

                                    <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-3 col-form-label text-md-right"></label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password"
                                           placeholder="Kata Sandi" required autocomplete="new-password">

                                    <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-3 col-form-label text-md-right"></label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" placeholder="Konfirmasi Kata Sandi" required
                                           autocomplete="new-password">
                                </div>
                            </div>


                            <?php if($status==1): ?>
                                <div class="form-group row">
                                    <label for="no_KTP" class="col-md-3 col-form-label text-md-right"></label>

                                    <div class="col-md-6">
                                        <input id="no_KTP" type="text"
                                               class="form-control <?php if ($errors->has('no_KTP')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('no_KTP'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="no_KTP"
                                               value="<?php echo e(old('no_KTP')); ?>" required autocomplete="no_KTP"
                                               placeholder="Nomor KTP" autofocus>

                                        <?php if ($errors->has('no_KTP')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('no_KTP'); ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="photo" class="col-md-3 col-form-label text-md-right"></label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;<div class="col-md-6">
                                        <input type="file" name="photo"
                                               class="custom-file-input <?php if ($errors->has('photo')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('photo'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" required
                                               autocomplete="photo">
                                        <label class="custom-file-label" style="width: 330px">Foto KTP</label>

                                        <?php if ($errors->has('photo')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('photo'); ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="member" class="col-md-3 col-form-label text-md-right"></label>
                                    <div class="col-md-6">

                                        <select name="komunitas" id="komunitas" class="form-control" required>
                                            <option disabled="" selected="">== Select Komunitas ==</option>
                                            <?php $__currentLoopData = $komunitas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($row->id); ?>"><?php echo e($row->nama_komunitas); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>

                            <?php endif; ?>

                            <br>
                            <div class="form-group row mb-0" style="padding-left: 280px; ">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary" style="background-color: #2E8B57">
                                        <?php echo e(__('Register')); ?>

                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.auth.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Backup Data Kristopel\Kuliah ITdel\Semester 6\PA III\Project\git\v.7.1\PA-III-02-2020\resources\views/auth/register.blade.php ENDPATH**/ ?>
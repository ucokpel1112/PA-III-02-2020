<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Adminstrator</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home.admin')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.paket')); ?>">Paket Wisata</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.paket.editChoice',$paket->id_paket)); ?>">Edit Paket Wisata</a></li>
                        <li class="breadcrumb-item active">Included & Not Included</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"><?php echo e(Request::segment(3)=== 'add' ? 'Tambah Paket Wisata' : 'Edit Paket Wisata'); ?></h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="includeds">Included yang Ada</label>
                            <div class="mb-3">
                                
                                <?php $__currentLoopData = $paket->getIncludedNotIncluded; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($row->jenis_ini=='included'): ?>
                                        <div class="row" id="includeds">
                                            <div class="col-10">
                                                <br>
                                                <input type="text" value="<?php echo e($row->keterangan); ?>" class="form-control"
                                                       placeholder="Included" disabled required>
                                                
                                            </div>
                                            <div class="col-2">
                                                <br>
                                                <a href="<?php echo e(route('admin.paket.hapus.ini',$row->id_ini)); ?>"
                                                   class="btn btn-danger"><i class="fas fa-minus"></i></a>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="includedss">Not Included yang Ada</label>
                            <div class="mb-3">
                                
                                <?php $__currentLoopData = $paket->getIncludedNotIncluded; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($row->jenis_ini=='not included'): ?>
                                        <div class="row" id="includedss">
                                            <div class="col-10">
                                                <br>
                                                <input type="text" value="<?php echo e($row->keterangan); ?>" class="form-control"
                                                       placeholder="Included" disabled required>
                                                
                                            </div>
                                            <div class="col-2">
                                                <br>
                                                <a href="<?php echo e(route('admin.paket.hapus.ini',$row->id_ini)); ?>"
                                                   class="btn btn-danger"><i class="fas fa-minus"></i></a>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </div>
                        </div>
                        <hr>
                        <hr>
                        <br>
                        <form action="<?php echo e(route('admin.paket.update.ini',$paket->id_paket)); ?>" method="post" id="store-form">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>

                            <div class="form-group">
                                <label for="included">Tambah Included
                                    <button type="button" onclick="tambahi()" class="btn btn-success">
                                        <i class="fas fa-plus"></i></button>
                                </label>
                                <div class="mb-3" id="included_to_add">

                                </div>
                                <input id="jlh_included" type="number" name="jlh_included" value="<?= $ci ?>" hidden></input>
                            </div>
                            <div class="form-group">
                                <label for="not_included">Not Included
                                    <button type="button" onclick="tambahu()" class="btn btn-success">
                                        <i class="fas fa-plus"></i></button>
                                </label>
                                <div class="mb-3" id="not_included_to_add">

                                </div>
                                <input type="number" id="jlh_not_included" name="jlh_not_included" value="<?= $cu ?>" hidden></input>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Edit</button>
                                <a href="<?php echo e(route('admin.paket.editChoice',$paket->id_paket)); ?>" class="btn btn-danger">Batal</a>
                            </div>
                        </form>

                        <script>
                            var ci = <?= $ci ?>;
                            var cu = <?= $cu ?>;

                            function tambahi() {
                                ci += 1;
                                var html = '';
                                html += '<div class="row" id="item_included_'+ci+'">';
                                html += '<div class="col-10"><br>';
                                html += '<input type="text" class="form-control" name="included_'+ ci +'" id="included_'+ ci +'" placeholder="Included">';
                                html += '</div>';
                                html += '<div class="col-2"><br>';
                                html += '<button type="button" onclick="removei()" class="btn btn-danger"><i class="fas fa-minus"></i></button>';
                                html += '</div>';
                                html += '</div>';
                                $("#included_to_add").append(html);
                                $('#jlh_included').val(ci);
                            }

                            function removei() {
                                $('#item_included_'+ci).remove();
                                ci--;
                                $('#jlh_included').val(ci);
                            }

                            function tambahu() {

                                cu += 1;
                                var html = '';
                                html += '<div class="row" id="item_not_included_'+ cu +'">';
                                html += '<div class="col-10"><br>';
                                html += '<input type="text" class="form-control" name="not_included_'+cu +'" id="not_included_'+cu +'" placeholder="Not Included">';
                                html += '</div>';
                                html += '<div class="col-2"><br>';
                                html += '<button type="button" onclick="removeu()" class="btn btn-danger"><i class="fas fa-minus"></i></button>';
                                html += '</div>';
                                html += '</div>';
                                $('#not_included_to_add').append(html);
                                $('#jlh_not_included').val(cu);
                            }

                            function removeu() {
                                $('#item_not_included_'+cu).remove();
                                cu --;
                                $('#jlh_not_included').val(cu);
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PA-III-02-2020\resources\views/admin/paket/edit_ini_paket.blade.php ENDPATH**/ ?>
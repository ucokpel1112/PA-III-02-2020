<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Adminstrator</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Paket Wisata</a></li>
                        <li class="breadcrumb-item active">Edit Paket Wisata</li>
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
                            <label for="layanans">Layanan yang Ada</label>
                            <div class="mb-3">
                                
                                <?php $__currentLoopData = $paket->getPaketLayanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="row" id="layanans">
                                            <div class="col-10">
                                                <br>
                                                <input type="text" value="<?php echo e($row->nama_layanan); ?>" class="form-control"
                                                       placeholder="Layanan" disabled required>
                                                
                                            </div>
                                            <div class="col-2">
                                                <br>
                                                <a href="<?php echo e(route('admin.paket.hapus.layanan',['id_layanan'=>$row->id,'id_paket'=>$paket->id_paket])); ?>"
                                                   class="btn btn-danger"><i class="fas fa-minus"></i></a>
                                            </div>
                                        </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </div>
                        </div>
                        <hr>
                        <hr>
                        <br>
                        <form action="<?php echo e(route('admin.paket.update.layanan',$paket->id_paket)); ?>" method="post" id="store-form">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>

                            <div class="form-group">
                                <label for="layanan">Tambah Layanan
                                    <button type="button" onclick="tambah()" class="btn btn-success">
                                        <i class="fas fa-plus"></i></button>
                                </label>
                                <div class="mb-3" id="item_to_add">

                                </div>
                                <input id="jlh_layanan" type="number" name="jlh_layanan" value="<?= $c ?>" hidden></input>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>

                        <script>
                            var c = <?= $c ?>;

                            function tambah() {
                                c++;
                                var html = '';
                                html += '<div class="row" id="new_layanan_'+c+'"><div class="col-md-10"><br>';
                                html += '<select class="form-control custom-select" name="layanan_'+c +'">';
                                html += '<option selected="" disabled="">Pilih Layanan Wisata</option><?php echo $options; ?>';
                                html += '</select>';
                                html += '</div>';
                                html += '<div class="col-md-2"><br>';
                                html += '<button type="button" onclick="remove()" class="btn btn-danger"><i class="fas fa-minus"></i></button>';
                                html += '</div></div>';
                                $("#item_to_add").append(html);
                                $('#jlh_layanan').val(c);
                            }

                            function remove() {
                                $('#new_layanan_'+c).remove();
                                c--;
                                $('#jlh_layanan').val(c);}
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Backup Data Kristopel\Kuliah ITdel\Semester 6\PA III\Project\git\PA-III-02-2020\resources\views/admin/paket/edit_layanan_paket.blade.php ENDPATH**/ ?>
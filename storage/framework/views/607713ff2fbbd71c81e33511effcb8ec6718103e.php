<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detail Paket</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Member</a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link <?php echo e(((Request::segment(2) === 'member')&&(Request::segment(3) == null)) ? 'active' : null); ?>" href="#member"
                                                        data-toggle="tab">Member</a></li>
                                <li class="nav-item"><a class="nav-link <?php echo e(((Request::segment(2) === 'member')&&(Request::segment(3) == 'request')) ? 'active' : null); ?>" href="#request" data-toggle="tab">Request
                                        Member</a></li>
                            </ul>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane <?php echo e(((Request::segment(2) === 'member')&&(Request::segment(3) == null)) ? 'active' : null); ?> " id="member">
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#exampleModal">
                                        <i class="fas fa-plus"> </i> Tambah Data Layanan Wisata
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                         aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Member</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="<?php echo e(route('member.tambah')); ?>" method="POST"
                                                      enctype="multipart/form-data">
                                                    <?php echo csrf_field(); ?>
                                                    <div class="modal-body">

                                                        <div class="form-group">
                                                            <label for="name">Nama Anggota/Member</label>
                                                            <input name="name" type="text" class="form-control" id="name"
                                                                   aria-describedby="emailHelp" placeholder="Nama Anggota/Member">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="no_wa">Nomor WhatsApp (WA)</label>
                                                            <input name="no_WA" type="text" class="form-control" id="no_WA"
                                                                   aria-describedby="emailHelp" placeholder="Nomor WhatsApp (WA)">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="no_HP">Nomor Telepon (Hp)</label>
                                                            <input name="no_HP" type="text" class="form-control" id="no_HP"
                                                                   aria-describedby="emailHelp" placeholder="Nomor Telepon (Hp)">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="no_KTP">Nomor KTP </label>
                                                            <input name="no_KTP" type="text" class="form-control" id="no_KTP"
                                                                   aria-describedby="emailHelp" placeholder="Nomor KTP">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email">Email</label>
                                                            <input name="email" type="email" class="form-control" id="email"
                                                                   aria-describedby="emailHelp" placeholder="Email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="password">Password</label>
                                                            <input name="password" type="text" class="form-control" id="password"
                                                                   aria-describedby="emailHelp" placeholder="Password">
                                                        </div>
                                                        <div class="form-group input-group">
                                                            <label for="photo">Foto KTP</label>
                                                            <div class="input-group">
                                                                <div class="custom-file">
                                                                    <input name="photo" type="file" class="custom-file-input" id="exampleInputFile">
                                                                    <label class="custom-file-label" for="exampleInputFile">Pilih file</label>
                                                                </div>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text" id="">Upload</span>
                                                                </div>
                                                            </div>
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
                                    <table class="table table-striped projects">
                                        <thead>
                                        <tr>
                                            <th style="width: 40px">
                                                ID
                                            </th>
                                            <th class="text-center">
                                                Nama
                                            </th>
                                            <th class="text-center">
                                                Nomor WA/Telepon
                                            </th>
                                            <th class="text-center">
                                                Komunitas
                                            </th>
                                            <th class="text-center">
                                                Email
                                            </th>
                                            <th style="width: 100px">
                                                Status
                                            </th>
                                            <th style="width: 200px"></th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <form action="<?php echo e(route('member.filter')); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <div class="form-group">
                                                        <select name="komunitas" class="form-control custom-select">
                                                            <option selected="" disabled="">Pilih Komunitas</option>
                                                            <option value="semua" <?php echo e((isset($id_komut)&&($id_komut=='semua'))?'selected':null); ?>>Semua Komunitas</option>
                                                            <?php $__currentLoopData = $komunitas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option
                                                                    value="<?php echo e($row->id); ?>" <?php echo e((isset($id_komut)&&($id_komut==$row->id))?'selected':null); ?>><?php echo e($row->nama_komunitas); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td></td>
                                                <td>
                                                    <div class="form-group">
                                                        <select name="status" class="form-control custom-select">
                                                            <option selected="" disabled="">Pilih Status</option>
                                                            <option value="semua" <?php echo e((isset($status)&&($status=='semua'))?'selected':null); ?>>Semua Status</option>
                                                            <option value="2" <?php echo e((isset($status)&&($status=='2'))?'selected':null); ?>>
                                                                Non Aktif
                                                            </option>
                                                            <option
                                                                value="1" <?php echo e((isset($status)&&($status=='1'))?'selected':null); ?>>
                                                                Aktif
                                                            </option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td class="project-actions text-right">
                                                    <button type="submit" style="width: 180px"
                                                            class="btn btn-success btn-sm">
                                                        <i class="fas fa-pencil-alt">
                                                        </i>
                                                        Filter
                                                    </button>
                                                </td>
                                            </tr>
                                        </form>
                                        <?php $__empty_1 = true; $__currentLoopData = $member; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <tr style="font-size: 15px">
                                                <td><?php echo e($index+1); ?></td>
                                                <td><?php echo e($row->getUser->name); ?></td>
                                                <?php if(($row->getUser->no_WA)==($row->getUser->no_HP)): ?>
                                                    <td> <?php echo e($row->getUser->no_WA); ?> <b>(Nomor WA & Telopon)</b>
                                                    </td>
                                                <?php else: ?>
                                                    <td><?php echo e($row->getUser->no_WA); ?> <br><b>(no wa)</b>
                                                        <br> <?php echo e($row->getUser->no_HP); ?> <br><b>(no
                                                            telepon)</b>
                                                    </td>
                                                <?php endif; ?>
                                                <td><?php $__currentLoopData = $row->getKomunitasMember; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php echo e($rows->nama_komunitas); ?><br>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </td>
                                                <td><?php echo e($row->getUser->email); ?></td>
                                                <td><?php echo e($row->defineStatus($row->getUser->register_status)); ?></td>
                                                <td>
                                                    <a href="<?php echo e(route('member.detail',$row->id)); ?>" class="btn btn-sm btn-info">Detail</a>
                                                    <?php if($row->getUser->register_status==1): ?>
                                                        <a href="<?php echo e(route('member.nonaktifkan',$row->id)); ?>" class="btn btn-sm btn-warning">Non-Aktif kan</a>
                                                    <?php elseif($row->getUser->register_status==2): ?>
                                                        <a href="<?php echo e(route('member.aktifkan',$row->id)); ?>" class="btn btn-sm btn-success">Aktif-kan</a>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <tr style="font-size: 15px">
                                                <td colspan="5">
                                                    <center>Belum ada member/anggota CBT</center>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane <?php echo e(((Request::segment(2) === 'member')&&(Request::segment(3) == 'request')) ? 'active' : null); ?>" id="request">
                                    <table class="table table-striped projects">
                                        <thead>
                                        <tr>
                                            <th style="width: 40px">
                                                ID
                                            </th>
                                            <th class="text-center">
                                                Nama
                                            </th>
                                            <th class="text-center">
                                                Nomor WA/Telepon
                                            </th>
                                            <th class="text-center">
                                                Komunitas
                                            </th>
                                            <th class="text-center">
                                                Email
                                            </th>
                                            <th style="width: 100px">
                                                Status
                                            </th>
                                            <th style="width: 200px"></th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <form action="<?php echo e(route('member.request.filter')); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <div class="form-group">
                                                        <select name="komunitas_r" class="form-control custom-select">
                                                            <option selected="" disabled="">Pilih Komunitas</option>
                                                            <option value="semua" <?php echo e((isset($id_komut_req)&&($id_komut_req==='semua'))?'selected':null); ?>>Semua Komunitas</option>
                                                            <?php $__currentLoopData = $komunitas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option
                                                                    value="<?php echo e($row->id); ?>" <?php echo e((isset($id_komut_req)&&($id_komut_req==$row->id))?'selected':null); ?>><?php echo e($row->nama_komunitas); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td></td>
                                                <td>
                                                    <div class="form-group">
                                                        <select name="status_r" class="form-control custom-select">
                                                            <option selected="" disabled="">Pilih Status</option>
                                                            <option value="semua" <?php echo e((isset($status_req)&&($status_req==='semua'))?'selected':null); ?>>Semua Status</option>
                                                            <option
                                                                value="0" <?php echo e((isset($status_req)&&($status_req=='0'))?'selected':null); ?>>
                                                                Request
                                                            </option>
                                                            <option
                                                                value="4" <?php echo e((isset($status_req)&&($status_req=='4'))?'selected':null); ?>>
                                                                Ditolak
                                                            </option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td class="project-actions text-right">
                                                    <button type="submit" style="width: 180px"
                                                            class="btn btn-success btn-sm">
                                                        <i class="fas fa-pencil-alt">
                                                        </i>
                                                        Filter
                                                    </button>
                                                </td>
                                            </tr>
                                        </form>
                                        <?php $__empty_1 = true; $__currentLoopData = $req; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <tr style="font-size: 15px">
                                                <td><?php echo e($index+1); ?></td>
                                                <td><?php echo e($row->getUser->name); ?></td>
                                                <?php if(($row->getUser->no_WA)==($row->getUser->no_HP)): ?>
                                                    <td> <?php echo e($row->getUser->no_WA); ?>

                                                    </td>
                                                <?php else: ?>
                                                    <td><?php echo e($row->getUser->no_WA); ?> <br><b>(no wa)</b>
                                                        <br> <?php echo e($row->getUser->no_HP); ?> <br><b>(no
                                                            telepon)</b>
                                                    </td>
                                                <?php endif; ?>
                                                <td><?php $__currentLoopData = $row->getKomunitasMember; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php echo e($rows->nama_komunitas); ?><br>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </td>
                                                <td><?php echo e($row->getUser->email); ?></td>
                                                <td><?php echo e($row->defineStatus($row->getUser->register_status)); ?></td>
                                                <td>
                                                    <a href="<?php echo e(route('member.request.detail',$row->id)); ?>" class="btn btn-sm btn-info">Detail</a>
                                                    <?php if($row->getUser->register_status==0): ?>
                                                        <a href="<?php echo e(route('member.request.tolak',$row->id)); ?>" class="btn btn-sm btn-warning">Tolak</a>
                                                        <a href="<?php echo e(route('member.request.terima',$row->id)); ?>" class="btn btn-sm btn-warning">Terima</a>
                                                    <?php elseif($row->getUser->register_status==4): ?>
                                                        <a href="<?php echo e(route('member.request.terima',$row->id)); ?>" class="btn btn-sm btn-success">Terima</a>
                                                        <a href="<?php echo e(route('member.request.hapus',$row->id)); ?>" class="btn btn-sm btn-success">Hapus</a>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <tr style="font-size: 15px">
                                                <td colspan="5">
                                                    <center>Belum ada member/anggota CBT</center>
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
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Backup Data Kristopel\Kuliah ITdel\Semester 6\PA III\Project\git\v.4.1\PA-III-02-2020\resources\views/admin/anggotacbt/member.blade.php ENDPATH**/ ?>
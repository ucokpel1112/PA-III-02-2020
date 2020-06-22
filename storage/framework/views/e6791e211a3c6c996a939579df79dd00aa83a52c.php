<?php $__env->startSection('content'); ?>


    <div class="destination_banner_wrap overlay"
         style="background-image: url(<?php echo e(asset('storage/img/paket/'.$paket->gambar)); ?>);">
        <div class="destination_text text-center">
            <h3><?php echo e($paket->nama_paket); ?></h3>
            <p>Kabupaten <?php echo e(ucfirst($paket->getKabupaten->nama_kabupaten)); ?></p>
            
            
        </div>
    </div>
    <div class="container-fluid">
        <div class="row cakupan">
            <div class="col item">
                <div class="row simbol">
                    <div class="col">
                        <i class="fa fa-clock-o simbol-detail" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h2 style="color: white;"><?php echo e($paket->durasi); ?></h2>
                    </div>
                </div>
            </div>
            <div class="col item">
                <div class="row simbol">
                    <div class="col">
                        <i class="fa fa-user simbol-detail" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h2 style="color: white;"><?php echo e($paket->availability); ?> Orang</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="destination_details_info">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-8 col-md-9 border" style="padding: 20px;margin-bottom: 90px;border-radius: 5px">
                    <div></div>
                    <div class="contact_join text-center">
                        <?php if(Auth::check()): ?>
                            <h3>P E M E S A N A N <br><br>(Rp.<?php echo e(number_format($paket->harga_paket)); ?> / Person)</h3>
                            <form name="pemesanan" action="<?php echo e(route('paket.pesan',$paket->id_paket)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="mt-10">
                                            <input min="1" type="number" name="jumlah_peserta"
                                                   placeholder="Jumlah Peserta Wisata"
                                                   onfocus="this.placeholder = ''"
                                                   onblur="this.placeholder = 'Jumlah Peserta Wisata'" required
                                                   class="single-input-primary">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="input-group-icon mt-10">
                                            <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                                            <div class="form-select single-input-primary" id="default-select">
                                                <select name="sesi">
                                                    <option onselect="" disabled="">Pilih Jadwal</option>
                                                    <?php $__currentLoopData = $sesi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($row->id_sesi); ?>"><?php echo e($row->jadwal); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mt-10">
                                            <textarea name="pesan" class="single-textarea single-input-primary"
                                                      placeholder="Pesan/Pertanyaan Untuk Pemesanan"
                                                      onfocus="this.placeholder = ''"
                                                      onblur="this.placeholder = 'Pesan/Pertanyaan Untuk Pemesanan'"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="submit_btn mt-10">
                                            <button class="boxed-btn4" type="submit">submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        <?php else: ?>
                            <h3>P E M E S A N A N <br><br></h3>
                            <h4 class="text-dark">Untuk Melakukan Pemesanan, Anda Harus <b>Login</b> atau <b>Daftar</b>
                                Terlebih Dahulu <br><br>
                            </h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="button-group-area ">
                                        <a href="<?php echo e(route('login')); ?>" class="genric-btn radius large primary"> Login </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-10">
                                <div class="col">
                                    <hr>
                                </div>
                                <div class="col-2 mt-10">
                                    <h4>Atau</h4>
                                </div>
                                <div class="col ">
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="button-group-area mt-10">
                                        <a href="<?php echo e(route('register',0)); ?>"
                                           class="genric-btn radius large success">Daftar</a>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-9">
                    <div class="destination_info">
                        <h3>Description</h3>
                        <hr>
                        
                        <?php echo($paket->deskripsi_paket); ?>
                        
                        <br><br>
                        <h3>Itinerary</h3>
                        <hr>
                        
                        <?= $paket->rencana_perjalanan ?>
                        
                        <br><br>
                    </div>
                    <?php if(isset($paket->tambahan)): ?>
                        <div class="destination_info">
                            <h3>Tambahan</h3>
                            <hr>
                            <?= $paket->tambahan ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php if(isset($hotel)&&count($hotel)>0): ?>
        <div class="popular_places_area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section_title text-center mb_70">
                            <h3>Rekomendasi Hotel</h3>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <?php $__currentLoopData = $hotel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="single_place">

                                <div class="place_info">
                                    <a href="#"><h3><?php echo e($row->nama_layanan); ?></h3></a>
                                    <p><?php echo e($row->deskripsi_layanan); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="newletter_area overlay">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="newsletter_text">
                                <center><h4>Included</h4></center>
                                <ul class="unordered-list ior">
                                    <?php $__currentLoopData = $paket->getIncludedNotIncluded; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($row->jenis_ini=='included'): ?>
                                            <li><?php echo e($row->keterangan); ?></li>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="newsletter_text">
                                <center><h4>Not Included</h4></center>
                                <ul class="unordered-list ior">
                                    <?php $__currentLoopData = $paket->getIncludedNotIncluded; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($row->jenis_ini=='not included'): ?>
                                            <li><?php echo e($row->keterangan); ?></li>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="pemesanan" class="destination_details_info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-9">
                    <div></div>
                    <div class="contact_join text-center">
                        <?php if(Auth::check()): ?>
                            <h3>P E M E S A N A N <br><br>(Rp.<?php echo e(number_format($paket->harga_paket)); ?> / Person)</h3>
                            <form name="pemesanan" action="<?php echo e(route('paket.pesan',$paket->id_paket)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="mt-10">
                                            <input min="1" type="number" name="jumlah_peserta"
                                                   placeholder="Jumlah Peserta Wisata"
                                                   onfocus="this.placeholder = ''"
                                                   onblur="this.placeholder = 'Jumlah Peserta Wisata'" required
                                                   class="single-input-primary">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="input-group-icon mt-10">
                                            <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                                            <div class="form-select single-input-primary" id="default-select">
                                                <select name="sesi">
                                                    <option onselect="" disabled="">Pilih Jadwal</option>
                                                    <?php $__currentLoopData = $sesi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option
                                                            value="<?php echo e($row->id_sesi); ?>"
                                                        ><?php echo e($row->jadwal); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mt-10">
                                        <textarea name="pesan" class="single-textarea single-input-primary"
                                                  placeholder="Pesan/Pertanyaan Untuk Pemesanan"
                                                  onfocus="this.placeholder = ''"
                                                  onblur="this.placeholder = 'Pesan/Pertanyaan Untuk Pemesanan'"
                                        ></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="submit_btn mt-10">
                                            <button class="boxed-btn4" type="submit">submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        <?php else: ?>
                            <h3>P E M E S A N A N <br><br></h3>
                            <h4 class="text-dark">Untuk Melakukan Pemesanan, Anda Harus <b>Login</b> atau <b>Daftar</b>
                                Terlebih Dahulu <br><br>
                            </h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="button-group-area ">
                                        <a href="<?php echo e(route('login')); ?>" class="genric-btn radius large primary"> Login </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-10">
                                <div class="col">
                                    <hr>
                                </div>
                                <div class="col-2 mt-10">
                                    <h4>Atau</h4>
                                </div>
                                <div class="col ">
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="button-group-area mt-10">
                                        <a href="<?php echo e(route('register',0)); ?>"
                                           class="genric-btn radius large success">Daftar</a>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 posts-list">
                <?php if(Auth::check()): ?>
                    <div class="comment-form">
                        <h4>Berikan Komentar</h4>
                        <form method="POST" class="form-contact comment_form" action="<?php echo e(route('comments.store')); ?>"
                              id="commentForm">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>">
                                        <input type="hidden" name="paket_id" value="<?php echo e($paket->id_paket); ?>">
                                        <textarea class="form-control w-100" name="comment" id="comment" cols="30"
                                                  rows="9"
                                                  placeholder="Write Comment"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="button button-contactForm btn_1 boxed-btn">Kirim</button>
                            </div>
                        </form>
                    </div>
                <?php endif; ?>
                <div class="comments-area comment-container">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <?php $__currentLoopData = $paket->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $counts += $c->replies->count()?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php if(count($paket->comments)+$counts>0): ?>
                        <h3><?php echo e(count($paket->comments)+$counts); ?> Komentar</h3>
                        <?php $__empty_1 = true; $__currentLoopData = $paket->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="desc">

                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <h5>
                                                        <a href="#"><?php echo e($comment->name); ?></a>
                                                    </h5>
                                                    <p class="date">
                                                        <?php echo e(\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $comment->created_at)->format('F d, Y')); ?>

                                                        at <?php echo e(\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $comment->created_at)->format('g:i a')); ?>

                                                    </p>
                                                </div>
                                                <?php if(Auth::check()): ?>
                                                    <div class="reply-btn ">
                                                        <a class="btn-reply text-uppercase reply"
                                                           style="cursor: pointer;"
                                                           cid="<?php echo e($comment->id); ?>"
                                                           name_a="<?php echo e(Auth::user()->name); ?>"
                                                           token="<?php echo e(csrf_token()); ?>"
                                                        >Balas</a>
                                                    </div>
                                                    <?php if(Auth::user()->id==$comment->user_id): ?>
                                                        <div class="reply-btn ">
                                                            <a class="btn-reply text-uppercase delete-comment"
                                                               style="cursor: pointer;"
                                                               token="<?php echo e(csrf_token()); ?>"
                                                               comment-did="<?php echo e($comment->id); ?>">Hapus</a>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </div>
                                            <p class="comment">
                                                <?php echo e($comment->comment); ?>

                                            </p>
                                            <div class="reply-form"></div>
                                            <div class="row" style="margin-top: 10px">
                                                <div class="col-2">

                                                </div>
                                                <div class="col">
                                                    <?php $__empty_2 = true; $__currentLoopData = $comment->replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                                                        <?php if($comment->id === $rep->comment_id): ?>
                                                            <div class="comment-list">
                                                                <div
                                                                    class="single-comment justify-content-between d-flex">
                                                                    <div class="user justify-content-between d-flex">
                                                                        <div class="desc">

                                                                            <div class="d-flex justify-content-between">
                                                                                <div class="d-flex align-items-center">
                                                                                    <h5>
                                                                                        <a href="#"><?php echo e($rep->name); ?></a>
                                                                                    </h5>
                                                                                    <p class="date">
                                                                                        <?php echo e(\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $rep->created_at)->format('F d, Y')); ?>

                                                                                        at <?php echo e(\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $rep->created_at)->format('g:i a')); ?>

                                                                                    </p>
                                                                                </div>
                                                                                <?php if(Auth::check()): ?>
                                                                                    <div class="reply-btn">
                                                                                        <a class="btn-reply text-uppercase reply-to-reply"
                                                                                           rname="<?php echo e(Auth::user()->name); ?>"
                                                                                           rid="<?php echo e($comment->id); ?>"
                                                                                           style="cursor: pointer;"
                                                                                           token="<?php echo e(csrf_token()); ?>"
                                                                                        >Balas</a>

                                                                                    </div>
                                                                                    <?php if(Auth::user()->id==$rep->user_id): ?>
                                                                                        <div class="reply-btn">
                                                                                            <a class="btn-reply text-uppercase delete-reply"
                                                                                               did="<?php echo e($rep->id); ?>"
                                                                                               token="<?php echo e(csrf_token()); ?>"
                                                                                            >Hapus</a>
                                                                                        </div>
                                                                                    <?php endif; ?>
                                                                                <?php endif; ?>
                                                                            </div>
                                                                            <p class="comment">
                                                                                <?php echo e($rep->reply); ?>

                                                                            </p>
                                                                            <div class="reply-to-reply-form">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>

                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    
    
    

    
    
    
    
    
    


    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    


    
    
    
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    

    

    
    
    

    
    
    

    

    
    
    
    


    
    
    <?php if(isset($paket_lain)&&$paket_lain->count()>0): ?>
        <div class="popular_places_area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section_title text-center mb_70">
                            <h3>Paket Wisata Lainnya</h3>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <?php $__currentLoopData = $paket_lain; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="single_place">
                                <div class="thumb">
                                    <img src="<?php echo e(asset('storage/img/paket/'.$row->gambar)); ?>" alt="">
                                    <a href="#" class="prise">Rp.<?php echo e(number_format($row->harga_paket)); ?></a>
                                </div>
                                <div class="place_info">
                                    <a href="<?php echo e(route('paket.detail',$row->id_paket)); ?>"><h3><?php echo e($row->nama_paket); ?></h3>
                                    </a>
                                    <p><?php echo e($row->getKabupaten->nama_kabupaten); ?></p>
                                    <div class="rating_days d-flex justify-content-between">
                                        <span class="d-flex justify-content-center align-items-center">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <a href="#">(20 Review)</a>
                                        </span>
                                        <div class="days">
                                            <i class="fa fa-clock-o"></i>
                                            <a href="#"><?php echo e($row->durasi); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="row">
                    <div class="col">
                        <?php echo $paket_lain->links(); ?>

                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.front.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PAIII-paling baru\PA-III-02-2020\resources\views/front/paket/detail_paket.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
    <div class="bradcam_area bradcam_bg_4">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->
    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <?php $__currentLoopData = $kalenders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kalenders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="<?php echo e(asset('storage/img/kalender/'.$kalenders->gambar_event)); ?>" alt="">
                                    <a href="#" class="blog_item_date">
                                        <h3><?php echo e($kalenders->tanggal_event); ?>

                                        <!--                                    --><?php //echo date('d F Y');?>
                                        </h3>
                                        <p><?php echo e($kalenders->jam_event); ?></p>
                                    </a>
                                </div>
                                <div class="blog_details">
                                    <a class="d-inline-block" href="<?php echo e(route('detail-eventkalender',$kalenders->id_kalenderevent)); ?>">
                                        <h2><?php echo e($kalenders->nama_event); ?></h2>
                                    </a>
                                    <p>
                                        <?php echo substr(strip_tags(str_replace(PHP_EOL,'<br>',$kalenders->deskripsi_event),'<br>'),0,310);?>

                                        <a href="<?php echo e(route('detail-eventkalender',$kalenders->id_kalenderevent)); ?>">  baca selengkapnya...</a>
                                    </p>
                                    <ul class="blog-info-link">
                                        <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                        <li><a href="#"><i class="fas fa-address-book"></i> 03 Comments</a></li>
                                        <li class="small"><span class="fa-li"><i class="fa fa-clock"></i></span> Test</li>
                                    </ul>
                                </div>
                            </article>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

                
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Upcoming Event</h3>
                            <?php $__currentLoopData = $kals_up; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kals_up): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="media post_item">
                                <img src="<?php echo e(asset('storage/img/kalender/'.$kals_up->gambar_event)); ?>"  style="height: 50px;" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3><?php echo e($kals_up->nama_event); ?></h3>
                                    </a>
                                    <p><?php echo e($kals_up->tanggal_event); ?></p>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.front.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Backup Data Kristopel\Kuliah ITdel\Semester 6\PA III\Project\git\v.5.1\PA-III-02-2020\resources\views/front/kalender-event/eventkalender.blade.php ENDPATH**/ ?>
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="<?php echo e(url('/')); ?>">
                                    <img src="<?php echo e(url('img/logo.png')); ?>" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="/">Home</a></li>
                                        <?php if(Auth::check()): ?>
                                            <li><a href="#">Paket Wisata <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="<?php echo e(route('paket')); ?>">Paket Wisata</a></li>
                                                    <li><a href="<?php echo e(route('pemesanan')); ?>">Pesanan Saya</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        <?php else: ?>
                                            <li><a href="<?php echo e(route('paket')); ?>">Paket Wisata</a></li>
                                        <?php endif; ?>
                                        <li><a href="<?php echo e(url('/eventkalender')); ?>">Kalender Event </a>

                                        </li>
                                        <li><a href="<?php echo e(asset('/kontak')); ?>">Tentang Visit Toba</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="social_wrap d-flex align-items-center justify-content-end">

                                <div class="social_links d-none d-xl-block">
                                    <ul>
                                        <?php if(Auth::check()): ?>
                                        <li><a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                <i class="fa fa-sign-out"></i> <?php echo e(__('Logout')); ?>

                                            </a>
                                            <form id="logout-form" action="<?php echo e(route('logout')); ?>"
                                                  method="POST"
                                                  style="display: none;">
                                                <?php echo csrf_field(); ?>
                                            </form>
                                        </li>
                                        <?php else: ?>
                                        <li><a href="<?php echo e(route('login')); ?>"> <i class="fa fa-sign-in"></i>
                                                Login</a>
                                        </li>
                                        <li><a href="<?php echo e(route('register.choice')); ?>"> <i
                                                    class="fa fa-registered"></i>
                                                Register</a></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<?php /**PATH D:\Backup Data Kristopel\Kuliah ITdel\Semester 6\PA III\Project\git\v.8.1\PA-III-02-2020\resources\views/layout/front/includes/header.blade.php ENDPATH**/ ?>
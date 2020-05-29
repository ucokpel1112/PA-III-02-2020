<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
<<<<<<< HEAD
        <img src="<?php echo e(asset('adminlte/dist/img/admin-settings-male.png')); ?>" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Administrator</span>
=======
<<<<<<< HEAD
        <img src="<?php echo e(asset('img/logosAdmin.png')); ?>" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Visit Toba</span>
=======
        <img src="<?php echo e(url('adminlte/dist/img/AdminLTELogo.png')); ?>" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Admin CBT</span>
>>>>>>> 0b4a8137f8bfc709fd3533ad35bbe1f7a134ad45
>>>>>>> master
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
<<<<<<< HEAD
                <img src="<?php echo e(url('img/register.png')); ?>" class="img-circle elevation-2"
                     alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Visit Toba</a>
=======
<<<<<<< HEAD
                <img src="<?php echo e(url('adminlte/dist/img/admin-settings-male.png')); ?>" class="img-circle elevation-2"
                     alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Administrator</a>
=======
                <img src="<?php echo e(url('adminlte/dist/img/user2-160x160.jpg')); ?>" class="img-circle elevation-2"
                     alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
>>>>>>> 0b4a8137f8bfc709fd3533ad35bbe1f7a134ad45
>>>>>>> master
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
<<<<<<< HEAD
                <!-- <?php if($_SERVER['SCRIPT_NAME']=="/home.php") { ?>  class="active"   <?php   }  ?> -->
                <li class="nav-item has-treeview <?php echo e(Request::segment(2) === 'dashboard' ? 'menu-open' : null); ?>">
                    <a href="<?php echo e(route('admin.home')); ?>" class="nav-link <?php echo e(Request::segment(2) === 'dashboard' ? 'active' : null); ?>">
=======
{{--                <?php if($_SERVER['SCRIPT_NAME']=="/home.php") { ?>  class="active"   <?php   }  ?>--}}
                <li class="nav-item has-treeview <?php echo e(Request::segment(2) === 'dashboard' ? 'menu-open' : null); ?>">
                    <a href="#" class="nav-link <?php echo e(Request::segment(2) === 'dashboard' ? 'active' : null); ?>">
>>>>>>> 0b4a8137f8bfc709fd3533ad35bbe1f7a134ad45
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
<<<<<<< HEAD
                <li class="nav-item has-treeview <?php echo e(Request::segment(2) === 'paket' ? 'menu-open' : null); ?>">
                    <a href="#" class="nav-link <?php echo e(Request::segment(2) === 'paket' ? 'active' : null); ?>">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Paket Wisata
=======
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Nav
>>>>>>> 0b4a8137f8bfc709fd3533ad35bbe1f7a134ad45
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
<<<<<<< HEAD
                            <a href="<?php echo e(route('admin.paket')); ?>" class="nav-link <?php echo e((Request::segment(3)==null)&&(Request::segment(2)=='paket')? 'active' : null); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar Paket Wisata</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.paket.tambah')); ?>" class="nav-link <?php echo e((Request::segment(3)=='add')&&(Request::segment(2)=='paket')? 'active' : null); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah Paket Wisata</p>
=======
                            <a href="pages/layout/top-nav.html" class="nav-link">

                                <p>Top Navigation</p>
                                <i class="nav-icon far fa-calendar-alt"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                        <li class="nav-item">
                            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Top Navigation + Sidebar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/boxed.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Boxed</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fixed Sidebar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/fixed-topnav.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fixed Navbar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/fixed-footer.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fixed Footer</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Collapsed Sidebar</p>
>>>>>>> 0b4a8137f8bfc709fd3533ad35bbe1f7a134ad45
                            </a>
                        </li>
                    </ul>
                </li>
<<<<<<< HEAD
                <li class="nav-item has-treeview <?php echo e(Request::segment(2) === 'pemesanan' ? 'menu-open' : null); ?>">
                    <a href="#" class="nav-link <?php echo e(Request::segment(2) === 'pemesanan' ? 'active' : null); ?>">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Pemesanan
=======
                <li class="nav-item has-treeview <?php echo e(Request::segment(2) === 'paket' ? 'menu-open' : null); ?>">
                    <a href="#" class="nav-link <?php echo e(Request::segment(2) === 'paket' ? 'active' : null); ?>">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Paket Wisata
>>>>>>> 0b4a8137f8bfc709fd3533ad35bbe1f7a134ad45
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
<<<<<<< HEAD
                            <a href="<?php echo e(route('admin.pemesanan')); ?>" class="nav-link <?php echo e((Request::segment(3)==null)&&(Request::segment(2)=='pemesanan')? 'active' : null); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar Pemesanan Paket Wisata</p>
=======
                            <a href="<?php echo e(route('admin.paket')); ?>" class="nav-link <?php echo e((Request::segment(3)==null)&&(Request::segment(2)=='paket')? 'active' : null); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar Paket Wisata</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.paket.tambah')); ?>" class="nav-link <?php echo e((Request::segment(3)=='add')&&(Request::segment(2)=='paket')? 'active' : null); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah Paket Wisata</p>
>>>>>>> 0b4a8137f8bfc709fd3533ad35bbe1f7a134ad45
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview <?php echo e(Request::segment(2) === 'member' ? 'menu-open' : null); ?>">
                    <a href="#" class="nav-link <?php echo e(Request::segment(2) === 'member' ? 'active' : null); ?>">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Member
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo e(route('member')); ?>" class="nav-link <?php echo e((Request::segment(3)==null)&&(Request::segment(2)=='member')? 'active' : null); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar Member</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('member.request')); ?>" class="nav-link <?php echo e((Request::segment(3)=='request')&&(Request::segment(2)=='member')? 'active' : null); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Request Member</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview <?php echo e(Request::segment(2) === 'kalender' ? 'menu-open' : null); ?>">
                    <a href="#" class="nav-link <?php echo e(Request::segment(2) === 'kalender' ? 'active' : null); ?>">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Kalender Event
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"></li>
                        <li class="nav-item">
                            <a href="<?php echo e(url('/adm/kalender/listkalender')); ?>" class="nav-link <?php echo e(Request::segment(3) === 'listkalender' ? 'active' : null); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar Event</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(url('/adm/kalender/addkalender')); ?>" class="nav-link <?php echo e(Request::segment(3) === 'addkalender' ? 'active' : null); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah Kalender Event</p>
                            </a>
                        </li>

                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<?php /**PATH C:\xampp\htdocs\PA-III-02-2020\resources\views/layout/admin/sidebar.blade.php ENDPATH**/ ?>
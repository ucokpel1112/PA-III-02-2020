<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?php echo e(url('adminlte/dist/img/AdminLTELogo.png')); ?>" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Anggota CBT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo e(url('img/register.png')); ?>" class="img-circle elevation-2"
                     alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Visit Toba</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview <?php echo e(Request::segment(2) === 'dashboard' ? 'menu-open' : null); ?>">
                    <a href="#" class="nav-link <?php echo e(Request::segment(2) === 'dashboard' ? 'active' : null); ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview <?php echo e(Request::segment(2) === 'layananwisata' ? 'menu-open' : null); ?>">
                    <a href="#" class="nav-link <?php echo e(Request::segment(2) === 'layananwisata' ? 'active' : null); ?>">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            Layanan Wisata
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"></li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('anggotacbt.layanan')); ?>" class="nav-link <?php echo e(Request::segment(2) === 'layananwisata' ? 'active' : null); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar Layanan</p>
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
<?php /**PATH C:\xampp\htdocs\PA-III-02-2020\resources\views/layout/anggotacbt/sidebar.blade.php ENDPATH**/ ?>
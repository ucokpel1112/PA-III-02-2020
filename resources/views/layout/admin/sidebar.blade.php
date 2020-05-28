<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('adminlte/dist/img/admin-settings-male.png')}}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Administrator</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{url('img/register.png')}}" class="img-circle elevation-2"
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
                <!-- <?php if($_SERVER['SCRIPT_NAME']=="/home.php") { ?>  class="active"   <?php   }  ?> -->
                <li class="nav-item has-treeview {{Request::segment(2) === 'dashboard' ? 'menu-open' : null}}">
                    <a href="{{route('admin.home')}}" class="nav-link {{Request::segment(2) === 'dashboard' ? 'active' : null}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview {{Request::segment(2) === 'paket' ? 'menu-open' : null}}">
                    <a href="#" class="nav-link {{Request::segment(2) === 'paket' ? 'active' : null}}">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Paket Wisata
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.paket')}}" class="nav-link {{(Request::segment(3)==null)&&(Request::segment(2)=='paket')? 'active' : null}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar Paket Wisata</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.paket.tambah')}}" class="nav-link {{(Request::segment(3)=='add')&&(Request::segment(2)=='paket')? 'active' : null}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah Paket Wisata</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview {{Request::segment(2) === 'pemesanan' ? 'menu-open' : null}}">
                    <a href="#" class="nav-link {{Request::segment(2) === 'pemesanan' ? 'active' : null}}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Pemesanan
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.pemesanan')}}" class="nav-link {{(Request::segment(3)==null)&&(Request::segment(2)=='pemesanan')? 'active' : null}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar Pemesanan Paket Wisata</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview {{Request::segment(2) === 'member' ? 'menu-open' : null}}">
                    <a href="#" class="nav-link {{Request::segment(2) === 'member' ? 'active' : null}}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Member
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('member')}}" class="nav-link {{(Request::segment(3)==null)&&(Request::segment(2)=='member')? 'active' : null}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar Member</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('member.request')}}" class="nav-link {{(Request::segment(3)=='request')&&(Request::segment(2)=='member')? 'active' : null}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Request Member</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview {{Request::segment(2) === 'kalender' ? 'menu-open' : null}}">
                    <a href="#" class="nav-link {{Request::segment(2) === 'kalender' ? 'active' : null}}">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Kalender Event
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"></li>
                        <li class="nav-item">
                            <a href="{{ url('/adm/kalender/listkalender') }}" class="nav-link {{Request::segment(3) === 'listkalender' ? 'active' : null}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar Event</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/adm/kalender/addkalender') }}" class="nav-link {{Request::segment(3) === 'addkalender' ? 'active' : null}}">
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

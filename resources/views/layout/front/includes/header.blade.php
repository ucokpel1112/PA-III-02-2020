<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="/">
                                    <img src="img/logos.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="/">Home</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="#">Paket Wisata<i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{route('paket')}}">Paket Wisata</a></li>
                                                <li><a href="{{route('pemesanan')}}">Pesanan Saya</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('/eventkalender') }}">Kalender Event </a>

                                        </li>
                                        <li><a href="contact.html">Kontak </a></li>
                                        <li><a href="#">Anggota CBT </a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="social_wrap d-flex align-items-center justify-content-end">

                                <div class="social_links d-none d-xl-block">
                                    <ul>@if(\Illuminate\Support\Facades\Auth::check())
                                            <li><a href="{{route('logout')}}"> <i class="fa fa-sign-out"></i> Logout</a></li>
                                        @else
                                            <li><a href="{{route('login')}}"> <i class="fa fa-sign-in"></i> Login</a></li>
                                            <li><a href="{{route('register')}}"> <i class="fa fa-registered"></i> Register</a></li>
                                        @endif
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

@extends('layout.admin.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detail Pemesanan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pemesanan</a></li>
                        <li class="breadcrumb-item active">Detail</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                     src="{{asset('adminlte/dist/img/user4-128x128.jpg')}}" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">Helmuth Simon Tampubolon</h3>

                            <p class="text-muted text-center">Pemesanan</p>


                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Total Pemesanan</b> <a class="float-right">5</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- About Me Box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Informasi Tentang Pemesan</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="far fa-file-alt mr-1"></i> Nama</strong>

                            <p class="text-muted">
                                Helmuth Simon Tampubolon
                            </p>

                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Kota Asal</strong>

                            <p class="text-muted">Balige, Kabupaten Toba, Provinsi Sumatera Utara, Indonesia</p>

                            <hr>

                            <strong><i class="fas fa-book mr-1"></i> Nomor Telepon/WA</strong>

                            <p class="text-muted">082160085708</p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#detailpemesanan"
                                                        data-toggle="tab">Detail Pemesanan</a></li>
                                <li class="nav-item"><a class="nav-link" href="#pembayaran"
                                                        data-toggle="tab">Pembayaran</a></li>
                                <li class="nav-item"><a class="nav-link" href="#detail" data-toggle="tab">Detail
                                        Paket</a></li>
                                <li class="nav-item"><a class="nav-link" href="#layanan-wisata" data-toggle="tab">Layanan
                                        Wisata</a></li>
                                <li class="nav-item"><a class="nav-link" href="#included-not-included"
                                                        data-toggle="tab">Included &amp; Not Included</a></li>
                            </ul>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="detailpemesanan">
                                    <strong>Status</strong>

                                    <p class="text-muted">
                                        Menunggu Konfirmasi Pembayaran Pengelola Paket
                                    </p>

                                    <hr>
                                    <strong>Jumlah Peserta</strong>

                                    <p class="text-muted">
                                        2 Orang
                                    </p>

                                    <hr>
                                    <strong>Pesan</strong>

                                    <p class="text-muted">
                                        Bagaimana Cara ini itu
                                    </p>

                                    <ul class="nav nav-pills">
                                        <li class="nav-item"><a class="btn btn-light nav-link" href="#formubahpesan"
                                                                data-toggle="tab">Ubah Pesan</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane" id="formubahpesan">
                                            <form action="#">
                                                <div class="form-group">
                                                    <label for="pesan">Ubah Pesan Pemesanan</label>
                                                    <input type="text" class="form-control" name="pesan"
                                                           id="pesan"
                                                           placeholder="Pesan" required>
                                                    {{--                                    <p class="text-danger">{{$error->first('nama-paket-wisata')}}</p>--}}
                                                </div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="pembayaran">
                                    <strong>Status</strong>

                                    <p class="text-muted">
                                        Menunggu Konfirmasi Pembayaran Pengelola Paket
                                    </p>

                                    <hr>
                                    <strong>Rekening Pembayaran</strong>
                                    <ul>
                                        <li>Bank BRI (123123123123)</li>
                                    </ul>
                                    <br>
                                    <img src="{{asset('storage/img/pembayaran/1588770507_1_6.jpeg')}}"
                                         style="width: 300px">
                                    <hr>

                                    <div class="row">
                                        <div class="col">
                                            <strong>Bukti Pembayaran (Belum Di Konfirmasi)</strong>
                                            <ul>
                                                <li>Bank BRI (123123123123)</li>
                                            </ul>
                                            <br>
                                            <img src="{{asset('storage/img/pembayaran/1588770507_1_6.jpeg')}}"
                                                 style="width: 300px">
                                        </div>
                                        <div class="col ">
                                            <a href="#" class="btn btn-primary btn-md">Konfirmasi</a>
                                        </div>
                                    </div>
                                    <hr>
                                    <strong>Jumlah Peserta</strong>

                                    <p class="text-muted">
                                        2 Orang
                                    </p>
                                    <hr>
                                    <strong>Total Harga Yang harus Dibayarkan</strong>

                                    <p class="text-muted">
                                        Rp.200.000
                                    </p>
                                    <hr>
                                    <strong>Total yang telah dibayarkan</strong>

                                    <p class="text-muted">
                                        Rp.200.000
                                    </p>

                                </div>
                                <div class="tab-pane" id="detail">
                                    <strong>Amazing Tour Package Padang Bukittinggi 3D2N</strong>

                                    <p class="text-muted">
                                        Paket Kabupaten Toba
                                    </p>

                                    <hr>
                                    <strong>Harga Paket Wisata</strong>

                                    <p class="text-muted">
                                        1,200,000
                                    </p>

                                    <hr>
                                    <strong>Avalability</strong>

                                    <p class="text-muted">
                                        3
                                    </p>

                                    <hr>
                                    <strong>Durasi</strong>

                                    <p class="text-muted">
                                        3 Hari 2 Malam
                                    </p>

                                    <hr>
                                    <strong>Deskripsi Paket</strong>

                                    <p class="text-muted">
                                    </p>
                                    <p><font face="Poppins, sans-serif" color="#467fe7"><span
                                                style="box-sizing: inherit; border-style: initial; border-color: rgb(225, 225, 225); border-image: initial; outline-color: initial; outline-style: initial; background: rgb(255, 255, 255); transition: background 300ms ease 0s, color 300ms ease 0s, border-color 300ms ease 0s; font-size: 14px;">Amazing Tour Package Padang Bukittinggi 3D2N</span></font><span
                                            style="color: rgb(51, 51, 51); font-family: Poppins, sans-serif; font-size: 14px;">&nbsp;merupakan sebuah paket wisata dengan mengunjungi di kota di&nbsp;</span><font
                                            face="Poppins, sans-serif" color="#467fe7"><span
                                                style="box-sizing: inherit; border-style: initial; border-color: rgb(225, 225, 225); border-image: initial; outline-color: initial; outline-style: initial; background: rgb(255, 255, 255); transition: background 300ms ease 0s, color 300ms ease 0s, border-color 300ms ease 0s; font-size: 14px;">Sumatera Barat</span></font><span
                                            style="color: rgb(51, 51, 51); font-family: Poppins, sans-serif; font-size: 14px;">&nbsp;yang terkenal dengan wisata kuliner dan alamnya.</span><br>
                                    </p>                                        <br>
                                    <p></p>

                                    <hr>
                                    <strong>Rencana Perjalanan</strong>

                                    <p class="text-muted">
                                    </p><h4
                                        class="gdlr-core-toggle-box-item-title gdlr-core-js  gdlr-core-skin-e-background gdlr-core-skin-e-content"
                                        style="box-sizing: inherit; border: 0px rgb(225, 225, 225); outline: 0px; vertical-align: baseline; background: rgb(243, 243, 243); margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 23px 25px 22px; font-weight: 600; font-family: Poppins, sans-serif; font-size: 13px; color: rgb(38, 38, 38); cursor: pointer; border-radius: 3px; transition: background 300ms ease 0s;">
                                        <span class="gdlr-core-head"
                                              style="box-sizing: inherit; border: 0px rgb(225, 225, 225); outline: 0px; vertical-align: baseline; background: transparent; margin: 0px 13px 0px 0px; padding: 0px; color: rgb(25, 25, 25);">DAY 1</span>AIRPORT
                                        – BUKITTINGGI TOUR (L / D)</h4>
                                    <p style="box-sizing: inherit; border: 0px rgb(225, 225, 225); outline: 0px; vertical-align: baseline; background: rgb(243, 243, 243); margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 23px 25px 22px; font-weight: 600; font-family: Poppins, sans-serif; font-size: 13px; color: rgb(38, 38, 38); cursor: pointer; border-radius: 3px; transition: background 300ms ease 0s;">
                                        <span
                                            style="color: rgb(51, 51, 51); font-size: 14px; font-weight: 400; background-color: rgb(255, 255, 255);">Setibanya di Bandara Internasional Minangkabau, selamat datang di kota kuliner. Pemandu wisata kami yang berpengalaman akan menyambut Anda. Setelah persiapan bagasi selesai kemudian menuju lokal restoran. Setelah makan siang,tTransfer menuju Bukittinggi melalui Lembah Anai. Diperjalanan berhenti di Air Terjun Batang Anai dan Pusat Informasi Budaya Minangkabau. Kunjungan diteruskan ke Desa Pandai Sikek untuk membeli Kerajinan Tenun “KainSongket”, yang ditenun secara manual (sulam, telekung, dan ukiran kayu). Jalan-jalan sore dan belanja di Pasar Atas diseputaran Jam Gadang. Proses check-in hotel *** BukitTinggi , kemudian makan malam disiapkan di hotel. Tour malam untuk melihat tarian tradisional Minangkabau (opsional tour).</span><br>
                                    </p><h4
                                        class="gdlr-core-toggle-box-item-title gdlr-core-js  gdlr-core-skin-e-background gdlr-core-skin-e-content"
                                        style="box-sizing: inherit; border: 0px rgb(225, 225, 225); outline: 0px; vertical-align: baseline; background: rgb(243, 243, 243); margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 23px 25px 22px; font-weight: 600; font-family: Poppins, sans-serif; font-size: 13px; color: rgb(38, 38, 38); cursor: pointer; border-radius: 3px; transition: background 300ms ease 0s;">
                                        <span class="gdlr-core-head"
                                              style="box-sizing: inherit; border: 0px rgb(225, 225, 225); outline: 0px; vertical-align: baseline; background: transparent; margin: 0px 13px 0px 0px; padding: 0px; color: rgb(25, 25, 25);">DAY 2</span>BUKITTINGGI
                                        TOUR - PADANG (L / D)</h4>
                                    <p style="box-sizing: inherit; border: 0px rgb(225, 225, 225); outline: 0px; vertical-align: baseline; background: rgb(243, 243, 243); margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 23px 25px 22px; font-weight: 600; font-family: Poppins, sans-serif; font-size: 13px; color: rgb(38, 38, 38); cursor: pointer; border-radius: 3px; transition: background 300ms ease 0s;">
                                        <span
                                            style="color: rgb(51, 51, 51); font-size: 14px; font-weight: 400; background-color: rgb(255, 255, 255);">Setelah sarapan di hotel, tour ke Ngarai Sianok (Grand Canyon) dan Japanese Tunnel, Benteng Fort De Kock dan Kebun Binatang. Makan siang di restoran Pondok Flora, lalu lanjutkan ke King’s Palace (Istana Lindung Bulan di Batu Sangkar). Kemudian tour diteruskan menuju Padang. City tour mengunjungi Pantai Padang, Siti Nurbaya Brigde, Check in hotel *** Padang. Makan malam disiapkan dilokal restoran.</span><br>
                                    </p><h4
                                        class="gdlr-core-toggle-box-item-title gdlr-core-js  gdlr-core-skin-e-background gdlr-core-skin-e-content"
                                        style="box-sizing: inherit; border: 0px rgb(225, 225, 225); outline: 0px; vertical-align: baseline; background: rgb(243, 243, 243); margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 23px 25px 22px; font-weight: 600; font-family: Poppins, sans-serif; font-size: 13px; color: rgb(38, 38, 38); cursor: pointer; border-radius: 3px; transition: background 300ms ease 0s;">
                                        <span class="gdlr-core-head"
                                              style="box-sizing: inherit; border: 0px rgb(225, 225, 225); outline: 0px; vertical-align: baseline; background: transparent; margin: 0px 13px 0px 0px; padding: 0px; color: rgb(25, 25, 25);">DAY 3&nbsp; PADANG - AIRPORT</span>(L
                                        / D)</h4>
                                    <p style="box-sizing: inherit; border: 0px rgb(225, 225, 225); outline: 0px; vertical-align: baseline; background: rgb(243, 243, 243); margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 23px 25px 22px; font-weight: 600; font-family: Poppins, sans-serif; font-size: 13px; color: rgb(38, 38, 38); cursor: pointer; border-radius: 3px; transition: background 300ms ease 0s;">
                                        <span
                                            style="color: rgb(51, 51, 51); font-size: 14px; font-weight: 400; background-color: rgb(255, 255, 255);">Setelah makan pagi di hotel,proses check out dan tour ke China Town dan Pasar Raya hingga diantar ke bandara Minangkabau. Tour selesai dan sampai jumpa pada tour kami berikutnya</span><br>
                                    </p>                                        <br>
                                    <p></p>

                                    <hr>
                                    <strong>Tambahan</strong>

                                    <p class="text-muted">
                                        Things to Bring:
                                        Topi, sepatu, sandal, kacamata, sunblock, obat-obatan pribadi, kamera dan
                                        perlengkapannya, power bank, kaos, Tas (Bodypack/daypack/backpack)
                                        <br>
                                    </p>

                                    <hr>
                                    <strong>Daerah</strong>

                                    <p class="text-muted">
                                        Kabupaten Toba
                                        <br>
                                    </p>

                                    <hr>
                                    <strong>Gambar</strong>
                                    <p></p>
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <img class="img-fluid"
                                                 src="http://localhost:8000/storage/paket/1587832096.jpg"
                                                 alt="Photo">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="layanan-wisata">
                                </div>
                                <div class="tab-pane" id="included-not-included">
                                    <strong>Included</strong>
                                    <ul>
                                    </ul>
                                    <hr>
                                    <strong>Not Included</strong>

                                    <ul>
                                    </ul>

                                    <hr>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </section>
@endsection

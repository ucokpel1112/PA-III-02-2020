@extends('layout.admin.app')

@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Member</a></li>
                            <li class="breadcrumb-item active">Detail Profile</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md">

                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img style="max-width: 300px;height: 200px;border: 3px solid #adb5bd;padding: 3px;" class="rounded mx-auto d-block"
                                         src="{{asset('img/blog/blog_1.png')}}"
                                         alt="User profile picture">
                                </div>

                                <h3 class="profile-username text-center">Nina Mcintire</h3>

                                <p class="text-muted text-center">helmuthsimon123@gmail.com</p>

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Nama</b> <a class="float-right">Helmuth Simon Tampubolon</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Email</b> <a class="float-right">helmuthsimon123@gmail.com</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Nomor WhatsApp ( WA )</b> <a class="float-right">082160085708</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Nomor Telepon ( Hp )</b> <a class="float-right">082160085708</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Status Keanggotaan </b> <a class="float-right">Request</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Nomor KTP </b> <a class="float-right">1212011208990003</a>
                                    </li>
                                </ul>

                                <a href="#" class="btn btn-primary btn-block"><b>Terima</b></a>
                                <a href="#" class="btn btn-danger btn-block"><b>Tolak</b></a>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
@endsection

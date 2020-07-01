@extends('layout.front.main')
@section('content')
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_6">
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


    <!-- Tentang Komunitas  -->
    <div class="about_story">
        <div class="container">
            @forelse($komunitas as $indexK => $row)
                <div class="row">
                    <div class="col-lg-12">
                        @if($indexK>0)
                            <br><br><br><br><br><br>
                            @endif
                        <div class="story_heading">
                            <h3>{{$indexK+1}}. {{$row->nama_komunitas}}</h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-11 offset-lg-1">
                                <div class="story_info">
                                    <div class="row">
                                        <div class="col-lg-10">
                                            <p><?= $row['deskripsi'] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Gambar Komunitas -->
                                <div class="story_thumb">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="thumb">
                                                <img src="{{asset('storage/img/komunitas/'.$row->gambar)}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/Gambar Komunitas -->
                            </div>
                        </div>
                        <h3 class="mb-30">Anggota Komunitas : </h3>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="progress-table-wrap">
                                    <div class="progress-table">
                                        <div class="table-head">
                                            <div class="serial">#</div>
                                            <div class="country">Gambar</div>
                                            <div class="visit">Nama</div>
                                            <div class="percentage">Jumlah Layanan yang Dimiliki</div>
                                        </div>
                                        @if(isset($row->getKomunitasMember)&&$row->getKomunitasMember->count()>0)
                                            @foreach($row->getKomunitasMember as $index => $member)
                                                <div class="table-row">
                                                    <div class="serial">{{$index+1}}</div>
                                                    <div class="country"><img
                                                            src="{{asset('/storage/img/member/'.$member->photo)}}"
                                                            alt="flag" style="width: 20%">
                                                    </div>
                                                    <div class="visit">{{$member->getUser->name}}</div>
                                                    <div class="percentage">{{$member->getLayanan->count()}}</div>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="table-row">
                                                <div class="serial"></div>
                                                <div class="country">Belum Memiliki Anggota</div>
                                                <div class="visit"></div>
                                                <div class="percentage"></div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <h3 class="mb-30">Layanan Wisata : </h3>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="progress-table-wrap">
                                    <div class="progress-table">
                                        <div class="table-head">
                                            <div class="serial">#</div>
                                            <div class="country">Nama Layanan</div>
                                            <div class="visit">Pemilik Layanan</div>
                                            <div class="visit">Jenis Layanan</div>
                                            <div class="percentage">Deskripsi</div>
                                        </div>
                                        @if(isset($row->getKomunitasMember)&&$row->getKomunitasMember->count()>0)
                                            <?php $indexx = 1 ?>
                                            @foreach($row->getKomunitasMember as $member)
                                                @if(isset($member->getLayanan))
                                                    @foreach($member->getLayanan as $layanan)
                                                        <div class="table-row">
                                                            <div class="serial">{{$indexx}}<?php $indexx += 1 ?></div>
                                                            <div class="country">{{$layanan->nama_layanan}}</div>
                                                            <div class="visit">{{$member->getUser->name}}</div>
                                                            <div
                                                                class="visit">{{$layanan->getJenisLayanan->nama_jenis_layanan}}</div>
                                                            <div
                                                                class="percentage">{{$layanan->deskripsi_layanan}}</div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            @endforeach
                                        @else
                                            <div class="table-row">
                                                <div class="serial"></div>
                                                <div class="country">Belum memiliki Layanan Wisata</div>
                                                <div class="visit"></div>
                                                <div
                                                    class="visit"></div>
                                                <div
                                                    class="percentage"></div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty

                <div class="row">
                    <div class="col-lg-12">
                        <h3>Belum Ada Komunitas Di Daerah Ini !</h3>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
    <!--/ Tentang Komunitas  -->

@endsection

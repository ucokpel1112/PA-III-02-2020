@extends('layout.front.main')

@section('content')

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_4">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Pesanan Saya</h3>
                        <p>Riwayat Pemesanan yang Sudah Pernah Anda Lakukan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Align Area -->
    <div class="whole-wrap">
        <div class="container box_1170">

            <div class="section-top-border">
                <h3 class="mb-30">Riwayat Pemesanan</h3>
                <div class="progress-table-wrap">
                    <div class="progress-table">
                        <div class="table-head">
                            <div class="serial">#</div>
                            <div class="percentage">Nama Paket Wisata</div>
                            <div class="country">Status Pemesanan</div>
                            <div class="visit">Jumlah Peserta Perjalanan</div>
                            <div class="visit"></div>
                        </div>

                        @forelse($pemesanan as $index => $row)
                            <div class="table-row">
                                <div class="serial">
                                    {{$index+1}}</div>
                                <div class="percentage">
                                    {{$row->getSesi->getPaket->nama_paket}}
                                </div>
                                <div class="country">
                                    {{$row->defineStatus($row->status)}}
                                </div>
                                <div class="visit">
                                    {{$row->jumlah_peserta}}
                                </div>
                                <div class="visit">
                                    <a href="{{route('pemesanan.detail',$row->id_pemesanan)}}"
                                       class="btn btn-success">Detail</a>
                                </div>
                            </div>
                        @empty
                            <div class="table-row">
                                <div class="serial"></div>
                                <div class="percentage"></div>
                                <div class="country"> Anda Belum Memiliki Riwayat Pemesanan</div>
                                <div class="visit"></div>
                                <div class="visit"></div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@extends('layout.front.main')

@section('content')
    <!--/ bradcam_area  -->

    <!--================Blog Area =================-->
    <div class="popular_places_area">
        <div class="container">
            <div class="row">
                <div class="col"></div>
                <div class="col-8" style="background: rgba(130, 139, 178, 0.1);line-height: 1.733;">
                    <div class="row">
                        <div class="col" style="padding: 35px 35px 35px 50px;">
                            <div class="row" style="margin-bottom: 30px;">
                                <div class="col text-center">
                                    <h1>Detail Pemesanan Paket Wisata</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col"></div>
                                <div class="col-lg-7 col-md-7">
                                    <div class="single_place">
                                        <div class="thumb">
                                            <img src="{{asset('img/paket/'.$pemesanan->getPaket->gambar)}}" alt="">
                                            <a href="#"
                                               class="prise">Rp.{{number_format($pemesanan->getPaket->harga_paket)}}</a>
                                        </div>
                                        <div class="place_info">
                                            <a href="{{route('paket.detail',$pemesanan->getPaket->id_paket)}}">
                                                <h3>{{$pemesanan->getPaket->nama_paket}}</h3></a>
                                            <p>{{$pemesanan->getPaket->getKabupaten->nama_kabupaten}}</p>
                                            <div class="rating_days d-flex justify-content-between">
                                        <span class="d-flex justify-content-center align-items-center">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <a href="#">(20 Review)</a>
                                        </span>
                                                <div class="days">
                                                    <i class="fa fa-clock-o"></i>
                                                    <a href="#">{{$pemesanan->getPaket->durasi}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col"></div>
                            </div>
                            <div class="row">
                                <div class="col"></div>
                                <div class="col-10" style="border: 2px solid;padding: 35px 35px 35px 50px;">
                                    <div class="media contact-info">
                                        <div class="media-body">
                                            <h3>Status</h3>
                                            <p>{{$status}}</p>
                                        </div>
                                    </div>
                                    <div class="media contact-info">
                                        <div class="media-body">
                                            <h3>Jadwal Perjalan</h3>
                                            <p>{{$pemesanan->getPaket->jadwal}}</p>
                                        </div>
                                    </div>
                                    <div class="media contact-info">
                                        <div class="media-body">
                                            <h3>Pesan</h3>
                                            <p>
                                                {{$pemesanan->pesan}}
                                            </p>
                                        </div>
                                    </div>
                                    @forelse($pemesanan->getTransaksi as $row)
                                        <div class="media contact-info">
                                            <div class="media-body">
                                                <h3>Bukti Pembayaran</h3>
                                                <br>
                                                    <img src="{{asset('img/pembayaran/'.$row->gambar)}}" style="width: 90%" >
                                            </div>
                                        </div>
                                    @empty

                                    @endforelse
                                    @if($pemesanan->status==1)
                                        <div class="row">

                                            <div class="col text-center">
                                                <button type="button" class="btn btn-success btn-md" data-toggle="modal"
                                                        data-target="#upload_{{$pemesanan->id_pemesanan}}">
                                                    Pembayaran
                                                </button>
                                                <div class="modal fade" id="upload_{{$pemesanan->id_pemesanan}}"
                                                     tabindex="-1" role="dialog"
                                                     aria-labelledby="uploadModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="uploadModalLongTitle">Upload
                                                                    Bukti Pembayaran</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form
                                                                action="{{route('transaksi.kirim',$pemesanan->id_pemesanan)}}"
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="modal-body text-center">
                                                                    <div class="row">
                                                                        <div class="col form-check">
                                                                            Pilih Rekening Tujuan <br>
                                                                            @foreach($rekening as $row)
                                                                                <input type="radio"
                                                                                       class="form-check-input"
                                                                                       name="rekening"
                                                                                       id="rekening_{{$row->id_rekening}}"
                                                                                       value="{{$row->id_rekening}}"
                                                                                       checked>
                                                                                <img style="width: 40px"
                                                                                     src="{{asset('img/rekening/'.$row->gambar)}}">
                                                                                <label class="form-check-label"
                                                                                       for="rekening_{{$row->id_rekening}}">
                                                                                    ({{$row->nomor_rekening}}
                                                                                    ) {{$row->nama_bank}}
                                                                                </label><br><br>
                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-3">

                                                                        </div>
                                                                        <div class="col">

                                                                            <input type="file" class="custom-file-input"
                                                                                   name="bukti" id="gambar"
                                                                                   required>
                                                                            <label class="custom-file-label"
                                                                                   for="gambar">Choose file</label>
                                                                        </div>
                                                                        <div class="col-3"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer text-center">
                                                                    <button type="submit" class="btn btn-primary">Kirim
                                                                    </button>
                                                                </div>

                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col text-center">
                                                <button type="button" class="btn btn-danger btn-md" data-toggle="modal"
                                                        data-target="#delete_{{$pemesanan->id_pemesanan}}">
                                                    Batalkan Pemesanan
                                                </button>
                                                <div class="modal fade" id="delete_{{$pemesanan->id_pemesanan}}"
                                                     tabindex="-1" role="dialog"
                                                     aria-labelledby="deleteModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="hapusModalLongTitle">
                                                                    Batalkan Pemesanan</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Anda Yakin Ingin Membatalkan Pemesanan Paket ini ?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">
                                                                    Tidak
                                                                </button>
                                                                <form
                                                                    action="{{route('pemesanan.batal',$pemesanan->id_pemesanan)}}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-danger">Ya
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    @else
                                        <div class="row">
                                            <div class="col">
                                                <a href="{{route('pemesanan')}}"
                                                   class="btn btn-primary btn-md">Kembali</a>
                                            </div>
                                        </div>
                                    @endif

                                </div>
                                <div class="col">

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>
    <div class="recent_trip_area">
        <div class="container">
        </div>
    </div>
    <!--================ Blog Area end =================-->
@endsection

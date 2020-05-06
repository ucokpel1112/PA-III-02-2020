@extends('layout.front.main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-10">
                <div class="row">
                    <div class="col-1">
                        No
                    </div>
                    <div class="col">
                        Nama Paket
                    </div>
                    <div class="col">
                        Status
                    </div>
                    <div class="col">
                        Jumlah Peserta
                    </div>
                    <div class="col">
                        Aksi
                    </div>
                </div>
                @forelse($pemesanan as $index => $row)
                    <div class="row">
                        <div class="col-1">
                            {{$index+1}}
                        </div>
                        <div class="col">
                            {{$row->getPaket->nama_paket}}
                        </div>
                        <div class="col">
                            {{$row->defineStatus($row->status)}}
                        </div>
                        <div class="col">
                            {{$row->jumlah_peserta}}
                        </div>
                        <div class="col">
                            <a href="{{route('pemesanan.detail',$row->id_pemesanan)}}" class="btn btn-success">Detail</a>
                        </div>
                    </div>
                @empty
                    <div class="row">
                        <div class="col text-center">
                            <h4>Anda Belum Memiliki Pemesanan</h4>
                        </div>
                    </div>
                @endforelse
                {!! $pemesanan->links() !!}
            </div>
            <div class="col"></div>
        </div>
    </div>
    <div class="recent_trip_area">

    </div>
@endsection

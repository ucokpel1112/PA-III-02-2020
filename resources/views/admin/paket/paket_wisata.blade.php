@extends('layout.admin.app')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Paket Wisata</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Administrator</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    Paket Wisata
                    |
                    <a class="btn btn-success btn-sm" href="{{route('admin.paket.tambah')}}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Create
                    </a>
                </h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                            title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="width: 1%">
                            ID
                        </th>
                        <th style="width: 10%">
                            Gambar
                        </th>
                        <th style="width: 30%">
                            Nama Paket Wisata
                        </th>
                        <th class="text-center">
                            Harga Paket
                        </th>
                        <th class="text-center">
                            Daerah
                        </th>
                        <th style="width: 30%">
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    {{--                    mulai loop data--}}
                    @forelse($pakets as $paket)
                        <tr>
                            <td>
                                {{$paket->id_paket}}
                            </td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar"
                                             src="{{asset('storage/img/paket/'.$paket->gambar)}}">
                                    </li>
                                </ul>
                            </td>
                            <td>
                                {{$paket->nama_paket}}
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success">{{number_format($paket->harga_paket)}}</span>
                            </td>
                            <td class="project-state">
                                <span class="badge badge-primary">{{$paket->getKabupaten->nama_kabupaten}}</span>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.paket.show',$paket->id_paket)}}">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="{{ route('admin.paket.editChoice',$paket->id_paket) }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#delete_{{$paket->id_paket}}">
                                    Delete
                                </button>
                                <div class="modal fade" id="delete_{{$paket->id_paket}}" tabindex="-1" role="dialog"
                                     aria-labelledby="deleteModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="hapusModalLongTitle">Hapus Paket Wisata</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Anda Yakin Ingin Menhapus Paket ...
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Batal
                                                </button>
                                                <form action="{{route('admin.paket.hapus',$paket->id_paket)}}"
                                                      method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-primary">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Tidak Ada Data</td>
                        </tr>
                    @endforelse
                    <tr>
                        <td colspan="6" class="text-center">
                            {!! $pakets->links() !!}
                        </td>
                    </tr>
                    </tbody>
                </table>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
@endsection

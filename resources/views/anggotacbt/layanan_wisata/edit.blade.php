@extends('layout.anggotacbt.app')

@section('content')
		<h1>Edit Data Layanan Wisata</h1>
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
		  {{session('sukses')}}
		</div>
		@endif
		<div class="row">
			<div class="col-lg-12">
			<form action="{{route('anggotacbt.layanan.update',$layanan_wisata->id)}}" method="POST">
					@csrf
				 <div class="form-group">
				    <label for="exampleInputEmail1">Nama Layanan</label>
				    <input name="nama_layanan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Layanan" value="{{$layanan_wisata->nama_layanan}}">
				</div>


				<div class="form-group">
				    <label for="exampleFormControlSelect1">Pilih Jenis Layanan</label>
				    <select name="jenislayanan_id" class="form-control" id="exampleFormControlSelect1">
				      <option value=1 @if($layanan_wisata->jenislayanan_id == 1) selected @endif>1</option>
				      <option value=2 @if($layanan_wisata->jenislayanan_id == 2) selected @endif>2</option>
				      <option value=3 @if($layanan_wisata->jenislayanan_id == 3) selected @endif>3</option>
				      <option value=4 @if($layanan_wisata->jenislayanan_id == 4) selected @endif>4</option>

				    </select>
				 </div>

				<div class="form-group">
				    <label for="exampleFormControlSelect1">Pilih Kabupaten</label>
				    <select name="kabupaten_id" class="form-control" id="exampleFormControlSelect1">
				      <option value=1 @if($layanan_wisata->jenislayanan_id == 1) selected @endif>1</option>
				      <option value=2 @if($layanan_wisata->jenislayanan_id == 2) selected @endif>2</option>
				      <option value=3 @if($layanan_wisata->jenislayanan_id == 3) selected @endif>3</option>
				      <option value=4 @if($layanan_wisata->jenislayanan_id == 4) selected @endif>4</option>
				      <option value=5 @if($layanan_wisata->jenislayanan_id == 5) selected @endif>5</option>
				      <option value=6 @if($layanan_wisata->jenislayanan_id == 6) selected @endif>6</option>
				      <option value=7 @if($layanan_wisata->jenislayanan_id == 7) selected @endif>7</option>
				    </select>
				  </div>

				<div class="form-group">
				    <label for="exampleFormControlTextarea1">Deskripsi Layanan</label>
				    <textarea name="deskripsi_layanan" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$layanan_wisata->deskripsi_layanan}}</textarea>
				 </div>
				<button type="submit" class="btn btn-warning">Update</button>
			</form>
			</div>
		</div>
	@endsection

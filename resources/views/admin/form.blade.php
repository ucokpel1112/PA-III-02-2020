<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">{{Request::segment(3)=== 'add' ? 'Tambah Paket Wisata' : 'Edit Paket Wisata'}}</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                   <form role="form">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama-paket-wisata">Nama Paket Wisata</label>
                                <input type="text" class="form-control" name="nama-paket-wisata" id="nama-paket-wisata" placeholder="Nama Paket Wisata">
                            </div>
                            <div class="form-group">
                                <label for="harga-paket-wisata">Harga Paket Wisata</label>
                                <input type="number" class="form-control" name="harga-paket-wisata" id="harga-paket-wisata" value="0" min="0">
                            </div>
                            <div class="form-group">
                                <label for="availability">Availability</label>
                                <input type="number" class="form-control" name="availability" id="availability" placeholder="Availability">
                            </div>
                            <div class="form-group">
                                <label for="durasi">Durasi</label>
                                <input type="text" class="form-control" name="durasi" id="durasi" placeholder="Durasi">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi Paket</label>
                                <div class="mb-3">
                                <textarea class="textarea" id="deskripsi" name="deskripsi" placeholder="Deskripsi Paket" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rencana-perjalanan">Rencana Perjalanan (Itinerary)</label>
                                <div class="mb-3">
                                <textarea class="textarea" name="rencana-perjalanan" id="rencana-perjalanan" placeholder="Rencana Perjalanan ( Itinerary )" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tambahan">Tambahan</label>
                                <div class="mb-3">
                                    <textarea class="textarea" name="tambahan" id="tambahan" placeholder="Tambahan" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="daerah">Daerah</label>
                                <select class="form-control custom-select" name="daerah" id="daerah">
                                    <option selected="" disabled="">Pilih Daerah</option>
                                    <option value="1">Toba</option>
                                    <option value="2">Samosir</option>
                                    <option value="3">Tapanuli Utara</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                        <label class="custom-file-label" for="gambar">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main content -->
<?php $options = '<option value="1">Toba</option><option value="2">Samosir</option><option value="3">Tapanuli Utara</option>'; ?>
<?php $c = 1;$ci = 1;$cu = 1;?>
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
                    <form role="form" id="store-form">
                        <div class="card-body">

                            <div class="form-group">
                                <label for="nama-paket-wisata">Nama Paket Wisata</label>
                                <input type="text" class="form-control" name="nama-paket-wisata" id="nama-paket-wisata"
                                       placeholder="Nama Paket Wisata">
                            </div>
                            <div class="form-group">
                                <label for="harga-paket-wisata">Harga Paket Wisata</label>
                                <input type="number" class="form-control" name="harga-paket-wisata"
                                       id="harga-paket-wisata" value="0" min="0">
                            </div>
                            <div class="form-group">
                                <label for="availability">Availability</label>
                                <input type="number" class="form-control" name="availability" id="availability"
                                       placeholder="Availability">
                            </div>
                            <div class="form-group">
                                <label for="durasi">Durasi</label>
                                <input type="text" class="form-control" name="durasi" id="durasi" placeholder="Durasi">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi Paket</label>
                                <div class="mb-3">
                                    <textarea class="textarea" id="deskripsi" name="deskripsi"
                                              placeholder="Deskripsi Paket"
                                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rencana-perjalanan">Rencana Perjalanan (Itinerary)</label>
                                <div class="mb-3">
                                    <textarea class="textarea" name="rencana-perjalanan" id="rencana-perjalanan"
                                              placeholder="Rencana Perjalanan ( Itinerary )"
                                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tambahan">Tambahan</label>
                                <div class="mb-3">
                                    <textarea class="textarea" name="tambahan" id="tambahan" placeholder="Tambahan"
                                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="included">Included
                                    <button type="button" onclick="tambahi()" class="btn btn-success">
                                        <i class="fas fa-plus"></i></button>
                                </label>
                                <div class="mb-3" id="included_to_add">
                                    <div class="row" id="item_included_<?= $ci ?>">
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="included_<?= $ci ?>"
                                                   id="included_<?= $ci ?>"
                                                   placeholder="Included">
                                        </div>
                                        <div class="col-2">

                                        </div>
                                    </div>
                                </div>
                                <input type="number" name="jlh_included" value="<?= $ci ?>" hidden></input>
                            </div>
                            <div class="form-group">
                                <label for="not_included">Not Included
                                    <button type="button" onclick="tambahu()" class="btn btn-success">
                                        <i class="fas fa-plus"></i></button>
                                </label>
                                <div class="mb-3" id="not_included_to_add">
                                    <div class="row" id="item_not_included_<?= $ci ?>">
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="not_included_<?= $ci ?>"
                                                   id="not_included_<?= $ci ?>"
                                                   placeholder="Not Included">
                                        </div>
                                        <div class="col-2">

                                        </div>
                                    </div>
                                </div>
                                <input type="number" name="jlh_included" value="<?= $ci ?>" hidden></input>
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
                                <label for="item_to_add">Layanan Wisata
                                    <button type="button" name="add" onclick="tambah()" class="btn add btn-success">
                                        <i class="fas fa-plus"></i></button>
                                </label>
                                <div id="item_to_add">
                                    <div class="row" id="new-layanan_1">
                                        <div class="col-md-10">
                                            <select class="form-control custom-select" name="layanan_1">
                                                <option selected="" disabled="">Pilih Daerah</option>
                                                <option value="1">Toba</option>
                                                <option value="2">Samosir</option>
                                                <option value="3">Tapanuli Utara</option>
                                            </select>
                                            <input type="number" name="jlh_layanan" hidden value="<?= $c ?>">
                                        </div>
                                        <div class="col-md-2">

                                        </div>
                                    </div>
                                </div>

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
<script>
    function tambah() {
            <?php $c += 1; ?>
        var html = '';
        html += '<div class="row" id="new_layanan_<?= $c ?>"><div class="col-md-10"><br>';
        html += '<select class="form-control custom-select" name="layanan_<?= $c ?>">';
        html += '<option selected="" disabled="">Pilih Layanan Wisata</option><?php echo $options; ?>';
        html += '</select>';
        html += '</div>';
        html += '<div class="col-md-2"><br>';
        html += '<button type="button" onclick="remove()" class="btn btn-danger"><i class="fas fa-minus"></i></button>';
        html += '</div></div>';
        $("#item_to_add").append(html);
    }

    function remove() {
        $('#new_layanan_<?= $c ?>').remove();
        <?php $c -= 1; ?>
    }

    function tambahi() {
            <?php $ci += 1; ?>
        var html = '';
        html += '<div class="row" id="item_included_<?= $ci ?>">';
        html += '<div class="col-10"><br>';
        html += '<input type="text" class="form-control" name="included_<?= $ci ?>" id="included_<?= $ci ?>" placeholder="Included">';
        html += '</div>';
        html += '<div class="col-2"><br>';
        html += '<button type="button" onclick="removei()" class="btn btn-danger"><i class="fas fa-minus"></i></button>';
        html += '</div>';
        html += '</div>';
        $("#included_to_add").append(html);
    }

    function removei() {
        $('#item_included_<?= $ci ?>').remove();
        <?php $ci -= 1; ?>
    }

    function tambahu() {

            <?php $cu += 1; ?>
        var html = '';
        html += '<div class="row" id="item_not_included_<?= $cu ?>">';
        html += '<div class="col-10"><br>';
        html += '<input type="text" class="form-control" name="not_included_<?= $cu ?>" id="not_included_<?= $cu ?>" placeholder="Not Included">';
        html += '</div>';
        html += '<div class="col-2"><br>';
        html += '<button type="button" onclick="removeu()" class="btn btn-danger"><i class="fas fa-minus"></i></button>';
        html += '</div>';
        html += '</div>';
        $('#not_included_to_add').append(html);
    }

    function removeu() {
        $('#item_not_included_<?= $cu ?>').remove();
        <?php $cu -= 1; ?>
    }
</script>

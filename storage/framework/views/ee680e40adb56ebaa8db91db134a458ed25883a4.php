<?php $__env->startSection('content'); ?>
    <div class="bradcam_area bradcam_bg_4">
        <div class="container">
            <div class="row">
                <div class="col-xl">
                    <div class="bradcam_text text-center">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid popular_places_area " style="margin-top: 1px">
        <div class="row" style="margin-left: 10px">
            <div style="padding-bottom: 0px;" class="col-4">
                <div class="blog_right_sidebar border" style="background-color: white;border-radius: 5px;">
                    <aside class="single_sidebar_widget post_category_widget" style="background: white;">
                        <h4 class="widget_title">Paket Wisata</h4>
                        <div class="single_place border cat-list">
                            <div class="thumb">
                                <img src="<?php echo e(asset('storage/img/paket/'.$pemesanan->getSesi->getPaket->gambar)); ?>" alt="">
                                <a href="#"
                                   class="prise">Rp.<?php echo e(number_format($pemesanan->getSesi->getPaket->harga_paket)); ?></a>
                            </div>
                            <div class="place_info">
                                <a href="<?php echo e(route('paket.detail',$pemesanan->getSesi->getPaket->id_paket)); ?>">
                                    <h3><?php echo e($pemesanan->getSesi->getPaket->nama_paket); ?></h3></a>
                                <p><?php echo e($pemesanan->getSesi->getPaket->getKabupaten->nama_kabupaten); ?>

                                    <a href="#" class="float-right"><i
                                            class="fa fa-clock-o"> </i> <?php echo e($pemesanan->getSesi->getPaket->durasi); ?></a>
                                </p>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
            <div class=" col-lg" style="margin-left: 5px;">
                <div class="row border"
                     style="border-radius: 5px; background: white;padding: 10px;margin-bottom: 10px;">
                    <div class="col ">
                        <h2 class="gj-text-align-center">Detail Pemesanan</h2>
                        <hr>
                        <table width="100%">
                            <tr>
                                <th style="width: 48%"></th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <td><b>Status</b></td>
                                <td><p>: </p></td>
                                <td><p>Menunggu Pembayaran</p></td>
                            </tr>
                            <tr>
                                <td><b>Tanggal Pemesanan</b></td>
                                <td><p>: </p></td>
                                <td><p>12 Agustus 2019</p></td>
                            </tr>
                            <tr>
                                <td><b>Total Pembayaran</b></td>
                                <td><p>: </p></td>
                                <td><p>Rp. 20.000,00</p></td>
                            </tr>
                            <tr>
                                <td><b>Jumlah Peserta</b></td>
                                <td><p>: </p></td>
                                <td><p>3 Orang</p></td>
                            </tr>
                            <tr>
                                <td><b>Pesan :</b></td>
                                <td><p></p></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="3"><p>pesan pesan pesan pesan pesan pesan pesan pesan pesan pesan pesan
                                        pesan </p></td>

                            </tr>
                        </table>

                    </div>
                </div>
                <div class="border row "
                     style="border-radius: 5px; background: #fbf9ff;padding: 10px;margin-bottom: 10px;">
                    <div class="col gj-text-align-center" style="padding-bottom: 20px">
                        <p>Segera selesaikan pembayaran Anda !</p>
                        <br>
                        <h2>23 jam 40 menit 30 detik</h2>
                        <br>
                        <p><i>(Sebelum Sabtu, Juni 6 2020, 4:52:29 sore)</i></p>
                    </div>
                </div>
                <div class="border row" style="background: white;padding: 10px;margin-bottom: 10px;border-radius: 5px">
                    <div class="col ">
                        <p class="gj-text-align-center">Transfer pembayaran ke nomor Virtual Account :</p>
                        <hr>
                        <h3 class="mb-30">Bank BRI</h3>
                        <div class="row">
                            <div class="col-md-2">
                                <img src="img/elements/d.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-10 mt-sm-20">
                                <p><b>Nomor Rekening : 1212121212</b></p>
                                <p>a/n Ruth Elvin Harianja </p>
                            </div>
                        </div>
                        <hr>
                        <h3 class="mb-30">Bank BNI</h3>
                        <div class="row">
                            <div class="col-md-2">
                                <img src="img/elements/d.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-10 mt-sm-20">
                                <p><b>Nomor Rekening : 1212121212</b></p>
                                <p>a/n Ruth Elvin Harianja </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <button data-toggle="modal"
                                    data-target="#exampleModal" type="button" class="btn btn-primary col-md mt-sm-20">
                                Upload Bukti Pembayaran
                            </button>

                            <!-- Modal -->
                            <div
                                class="modal fade"
                                id="exampleModal"
                                tabindex="-1"
                                role="dialog"
                                aria-labelledby="exampleModalLabel"
                                aria-hidden="true"
                            >
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Bayar</h5>
                                            <button
                                                type="button"
                                                class="close"
                                                data-dismiss="modal"
                                                aria-label="Close"
                                            >
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form>
                                            <div class="modal-body">
                                                <p>Total Yang Harus Dibayar : <b>Rp. 50.000,00</b></p>
                                                <hr>
                                                <label for="rekening" class="small">Pilih Rekening</label>
                                                <hr>
                                                <div id="rekening" class="form-group">
                                                    <input type="radio" id="rekening_1" name="rekening_id">
                                                    <label for="rekening_1">
                                                        <img src="img/elements/d.jpg" width="50"> Bank BRI
                                                        (112313123123)</label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="radio" id="rekening_2" name="rekening_id">
                                                    <label for="rekening_2">
                                                        <img src="img/elements/d.jpg" width="50"> Bank BRI
                                                        (112313123123)</label>
                                                </div>
                                                <br>
                                                <hr>
                                                <div class="form-group">
                                                    <label for="bukti" class="small">Bukti Pembayaran</label>
                                                    
                                                    <div class="upload-btn-wrapper">
                                                        <input id="bukti" name="gambar" class="form-control-file"
                                                               type="file"
                                                               name="myfile">
                                                    </div>
                                                    <small class="form-text text-muted"></small>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="row modal-footer">
                                            <div class="col-1">
                                            </div>
                                            <button type="submit" class="col btn btn-primary">Upload
                                            </button>
                                            <div class="col-1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end Modal -->
                        </div>
                        <form action="#">
                            <div class="row" style="margin-top:10px">
                                <button class="btn btn-danger col-md mt-sm-20">
                                    Batalkan Pemesanan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.front.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PA-III-02-2020\resources\views/desgin.blade.php ENDPATH**/ ?>
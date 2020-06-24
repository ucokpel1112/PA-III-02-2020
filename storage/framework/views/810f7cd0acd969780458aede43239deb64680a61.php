<?php $__env->startSection('content'); ?>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <div id="app">
        <div class="bradcam_area bradcam_bg_5">
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
                                    <img src="<?php echo e(asset('storage/img/paket/'.$pemesanan->getSesi->getPaket->gambar)); ?>"
                                         alt="">
                                    <a href="#"
                                       class="prise">Rp.{{ pemesanan.status
                                        }}<?php echo e(number_format($pemesanan->getSesi->getPaket->harga_paket)); ?></a>
                                </div>
                                <div class="place_info">
                                    <a href="<?php echo e(route('paket.detail',$pemesanan->getSesi->getPaket->id_paket)); ?>">
                                        <h3><?php echo e($pemesanan->getSesi->getPaket->nama_paket); ?></h3></a>
                                    <p><?php echo e($pemesanan->getSesi->getPaket->getKabupaten->nama_kabupaten); ?>

                                        <a href="#" class="float-right"><i
                                                class="fa fa-clock-o"> </i> <?php echo e($pemesanan->getSesi->getPaket->durasi); ?>

                                        </a>
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
                            <div class="row">
                                <div class="col-4">

                                    <a class="btn btn-primary btn-md" href="<?php echo e(route('pemesanan')); ?>">Kembali</a>
                                </div>
                                <div class="col">

                                    <h2>Detail Pemesanan</h2>
                                </div>
                            </div>
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
                                    <td><p><?php echo e($status); ?></p></td>
                                </tr>
                                <tr>
                                    <td><b>Jadwal Kegiatan Perjalanan</b></td>
                                    <td><p>: </p></td>
                                    <td><p><?php echo e($pemesanan->getSesi->jadwal); ?></p></td>
                                </tr>
                                <tr>
                                    <td><b>Tanggal Pemesanan</b></td>
                                    <td><p>: </p></td>
                                    <td><p><?php echo e($pemesanan->created_at); ?></p></td>
                                </tr>
                                <tr>
                                    <td><b>Total Pembayaran</b></td>
                                    <td><p>: </p></td>
                                    <td><p>
                                            Rp. <?php echo e(number_format($pemesanan->getSesi->getPaket->harga_paket*$pemesanan->jumlah_peserta)); ?></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Jumlah Peserta</b></td>
                                    <td><p>: </p></td>
                                    <td><p><?php echo e($pemesanan->jumlah_peserta); ?> Orang</p></td>
                                </tr>
                                <tr>
                                    <td><b>Pesan :</b></td>
                                    <td><p></p></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td colspan="3"><p><?php echo e($pemesanan->pesan); ?></p></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div v-if="status==1">
                        <div class="border row "
                             style="border-radius: 5px; background: #fbf9ff;padding: 10px;margin-bottom: 10px;">
                            <div class="col gj-text-align-center" style="padding-bottom: 20px">
                                <p>Segera selesaikan pembayaran Anda !</p>
                                <br>
                                <h2>{{duration._data.hours}} Jam {{ duration._data.minutes}} Menit {{
                                    duration._data.seconds }} Detik</h2>
                                <br>
                                <p><i>(Sebelum {{ getDeatline() }})</i></p>
                            </div>
                        </div>
                        <div class="border row"
                             style="background: white;padding: 10px;margin-bottom: 10px;border-radius: 5px">
                            <div class="col ">
                                <p class="gj-text-align-center">Transfer pembayaran ke salah satu nomor Account di bawah
                                    ini :</p>
                                <?php $__currentLoopData = $rekening; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <hr>
                                    <h3 class="mb-30"><?php echo e($row->nama_bank); ?></h3>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="<?php echo e(asset('storage/img/rekening/'.$row->gambar)); ?>"
                                                 class="img-fluid">
                                        </div>
                                        <div class="col-md-10 mt-sm-20">
                                            <p><b>Nomor Rekening : <?php echo e($row->nomor_rekening); ?></b></p>
                                            <p>a/n Kristopel Lumbantoruan </p>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <hr>
                                <div class="row">
                                    <button data-toggle="modal"
                                            data-target="#exampleModal"
                                            class="btn btn-primary col-md mt-sm-20">
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
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Upload Bukti
                                                        Bayar</h5>
                                                    <button
                                                        type="button"
                                                        class="close"
                                                        data-dismiss="modal"
                                                        aria-label="Close"
                                                    >
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="<?php echo e(route('transaksi.kirim',$pemesanan->id_pemesanan)); ?>"
                                                      method="post" enctype="multipart/form-data">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('PUT'); ?>
                                                    <div class="modal-body">
                                                        <p>Total Yang Harus Dibayar :
                                                            <b>Rp. <?php echo e(number_format($pemesanan->getSesi->getPaket->harga_paket*$pemesanan->jumlah_peserta)); ?></b>
                                                        </p>
                                                        <hr>
                                                        <label for="rekening" class="small">Pilih Rekening</label>
                                                        <hr>
                                                        <?php $__currentLoopData = $rekening; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div id="rekening" class="form-group">
                                                                <input type="radio" value="<?php echo e($row->id_rekening); ?>"
                                                                       id="rekening_<?php echo e($row->id_rekening); ?>"
                                                                       name="rekening"
                                                                       required>
                                                                <label for="rekening_<?php echo e($row->id_rekening); ?>">
                                                                    <img
                                                                        src="<?php echo e(asset('storage/img/rekening/'.$row->gambar)); ?>"
                                                                        width="50"> <?php echo e($row->nama_bank); ?>

                                                                    (<?php echo e($row->nomor_rekening); ?>)</label>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <br>
                                                        <hr>
                                                        <div class="form-group">
                                                            <label for="bukti" class="small">Bukti Pembayaran</label>
                                                            <hr>
                                                            <div class="upload-btn-wrapper">
                                                                <input id="bukti" name="bukti" class="form-control-file"
                                                                       type="file" required>
                                                            </div>
                                                            <small class="form-text text-muted"></small>
                                                        </div>
                                                        <hr>
                                                        <div class="form-group">
                                                            <label for="jumlah" class="small">Jumlah Nilai (Rp) yang
                                                                Ditransfer</label>
                                                            <hr>
                                                            <div class="upload-btn-wrapper">
                                                                <input type="number" id="jumlah" min="0" name="jumlah"
                                                                       placeholder="Jumlah Nilai Transaksi (Rp)"
                                                                       required>
                                                            </div>
                                                            <small class="form-text text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div class="row modal-footer">
                                                        <div class="col-1">
                                                        </div>
                                                        <button type="submit" class="col btn btn-primary">Upload
                                                        </button>
                                                        <div class="col-1">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end Modal -->
                                </div>
                                <div class="row" style="margin-top:10px">
                                    <button type="button" class="btn btn-danger col-md mt-sm-20" data-toggle="modal"
                                            data-target="#delete_<?php echo e($pemesanan->id_pemesanan); ?>">
                                        Batalkan Pemesanan
                                    </button>
                                    <div class="modal fade" id="delete_<?php echo e($pemesanan->id_pemesanan); ?>"
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
                                                        action="<?php echo e(route('pemesanan.batal',$pemesanan->id_pemesanan)); ?>"
                                                        method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <button type="submit" class="btn btn-danger">Ya
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div v-else-if="status==5">
                        <div class="border row "
                             style="border-radius: 5px; background: #fbf9ff;padding: 10px;margin-bottom: 10px;">
                            <div class="col gj-text-align-center" style="padding-bottom: 20px">
                                <p>Terima Kasih, <?php echo e(\Illuminate\Support\Facades\Auth::user()->name); ?></p>
                                <br>
                                <h2>Waktu Pembayaran Anda Telah Habis</h2>
                                <br>
                            </div>
                        </div>
                    </div>

                    <div v-else-if="status==6">
                        <div class="border row "
                             style="border-radius: 5px; background: #fbf9ff;padding: 10px;margin-bottom: 10px;">
                            <div class="col gj-text-align-center" style="padding-bottom: 20px">
                                <p>Mohon Maaf, <?php echo e(\Illuminate\Support\Facades\Auth::user()->name); ?></p>
                                <br>
                                <h2>Bukti Pembayaran anda ditolak atau tidak dapat divalidasi !</h2>
                                <br>
                            </div>
                        </div>
                        <?php $__currentLoopData = $pemesanan->getTransaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaksi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(isset($transaksi->gambar)): ?>
                                <div class="border row "
                                     style="border-radius: 5px; background: #fbf9ff;padding: 10px;margin-bottom: 10px;">
                                    <div class="col gj-text-align-center" style="padding-bottom: 20px">
                                        <h3>Bukti Pembayaran </h3>
                                        <br>
                                        <img src="<?php echo e(asset('/storage/img/pembayaran/'.$transaksi->gambar)); ?>"
                                             style="max-width: 300px">

                                        <div class="row" style="margin-top:20px;">
                                            <button data-toggle="modal"
                                                    data-target="#exampleModal" type="button"
                                                    class="btn btn-primary col-md mt-sm-20">
                                                Ganti Bukti Pembayaran
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
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Upload Bukti
                                                                Bayar</h5>
                                                            <button
                                                                type="button"
                                                                class="close"
                                                                data-dismiss="modal"
                                                                aria-label="Close"
                                                            >
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="<?php echo e(route('transaksi.update',$transaksi->id_transaksi)); ?>"
                                                            method="post" enctype="multipart/form-data">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('PUT'); ?>
                                                            <div class="modal-body">
                                                                <p>Total Yang Harus Dibayar :
                                                                    <b>Rp. <?php echo e(number_format($pemesanan->getSesi->getPaket->harga_paket*$pemesanan->jumlah_peserta)); ?></b>
                                                                </p>
                                                                <hr>
                                                                <label for="rekening" class="small">Pilih
                                                                    Rekening</label>
                                                                <hr>
                                                                <?php $__currentLoopData = $rekening; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <div id="rekening" class="form-group">
                                                                        <input type="radio"
                                                                               value="<?php echo e($row->id_rekening); ?>"
                                                                               id="rekening_<?php echo e($row->id_rekening); ?>"
                                                                               name="rekening"
                                                                               required>
                                                                        <label for="rekening_<?php echo e($row->id_rekening); ?>">
                                                                            <img
                                                                                src="<?php echo e(asset('storage/img/rekening/'.$row->gambar)); ?>"
                                                                                width="50"> <?php echo e($row->nama_bank); ?>

                                                                            (<?php echo e($row->nomor_rekening); ?>)</label>
                                                                    </div>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <br>
                                                                <hr>
                                                                <div class="form-group">
                                                                    <label for="bukti" class="small">Bukti
                                                                        Pembayaran</label>
                                                                    <hr>
                                                                    <div class="upload-btn-wrapper">
                                                                        <input id="bukti" name="bukti"
                                                                               class="form-control-file"
                                                                               type="file" required>
                                                                    </div>
                                                                    <small class="form-text text-muted"></small>
                                                                </div>
                                                                <hr>
                                                                <div class="form-group">
                                                                    <label for="jumlah" class="small">Jumlah Nilai (Rp)
                                                                        yang
                                                                        Ditransfer</label>
                                                                    <hr>
                                                                    <div class="upload-btn-wrapper">
                                                                        <input type="number" id="jumlah" min="0"
                                                                               name="jumlah"
                                                                               placeholder="Jumlah Nilai Transaksi (Rp)"
                                                                               required>
                                                                    </div>
                                                                    <small class="form-text text-muted"></small>
                                                                </div>
                                                            </div>
                                                            <div class="row modal-footer">
                                                                <div class="col-1">
                                                                </div>
                                                                <button type="submit" class="col btn btn-primary">Upload
                                                                </button>
                                                                <div class="col-1">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end Modal -->
                                        </div>
                                    </div>
                                </div>

                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <div v-else>
                        <?php $__currentLoopData = $pemesanan->getTransaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaksi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(isset($transaksi->gambar)): ?>
                                <div class="border row "
                                     style="border-radius: 5px; background: #fbf9ff;padding: 10px;margin-bottom: 10px;">
                                    <div class="col gj-text-align-center" style="padding-bottom: 20px">
                                        <h3>Bukti Pembayaran </h3>
                                        <br>
                                        <img src="<?php echo e(asset('/storage/img/pembayaran/'.$transaksi->gambar)); ?>"
                                             style="max-width: 300px">
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.11/dist/vue.min.js"></script>
    <script src="https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
    <script>

        new Vue({
            el: '#app',
            data: function () {
                return {
                    pemesanan: [],
                    status: 0,
                    deadline: "",
                    statusUpdated: false,
                    duration: {
                        _data: {
                            hours: 0,
                            minutes: 0,
                            seconds: 0
                        }
                    }
                }
            },
            methods: {
                getTransaction() {
                    var id = window.location.href.split('/').pop();
                    const response = axios.get("/api/pemesanan/detail/" + id)
                        .then(response => {
                            this.pemesanan = response.data;
                            this.status = this.pemesanan.status;
                            if (this.status != 1) {
                                this.statusUpdated = true;
                            }
                            this.deadline = moment(this.pemesanan.created_at).add(1, "days");
                        })
                },
                getDeatline() {
                    return moment(this.pemesanan.created_at)
                        .add(1, "days")
                        .format("dddd, MMMM Do YYYY, h:mm:ss a");
                },
                updateDuration() {
                    this.duration = moment.duration(this.deadline.diff(moment()));
                    if (
                        this.duration._data.hours <= 0 &&
                        this.duration._data.minutes <= 0 &&
                        this.duration._data.seconds <= 0 &&
                        this.statusUpdated == false
                    ) {
                        this.updateStatusCanceled();
                    }
                },
                updateStatusCanceled() {
                    var id = window.location.href.split('/').pop();
                    axios
                        .post("/api/pemesanan/" + id + "/update-status")
                        .then(() => {
                            this.status = 5;
                            this.statusUpdated = true;
                        })
                        .catch(err => {
                            console.log(err);
                        });
                }
            },
            created() {
                this.getTransaction();
                setInterval(() => {
                    this.updateDuration();
                }, 1000);

            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.front.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PAIII-paling baru\PA-III-02-2020\resources\views/front/Pemesanan/detail_pemesanan.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>


<<<<<<< HEAD:resources/views/front/paket/detail_paket.blade.php
    <div class="destination_banner_wrap overlay"
         style="background-image: url({{asset('storage/img/paket/'.$paket->gambar)}});">
=======
    <div class="destination_banner_wrap overlay" style="background-image: url(<?php echo e(asset('/img/banner/lake-toba-1.jpg')); ?>);">
>>>>>>> 0b4a8137f8bfc709fd3533ad35bbe1f7a134ad45:storage/framework/views/5e21d0d81d6225a12b6d7ef3da779808c5bfebe4.php
        <div class="destination_text text-center">
            <h3>{{$paket->nama_paket}}</h3>
            <p>Kabupaten {{ucfirst($paket->getKabupaten->nama_kabupaten)}}</p>
            <a style="margin-top: 50px;" href="#pemesanan" class="boxed-btn3">Pemesanan</a>
            
        </div>
    </div>
    <div class="container-fluid">
        <div class="row cakupan">
            <div class="col item">
                <div class="row simbol">
                    <div class="col">
                        <i class="fa fa-clock-o simbol-detail" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h2 style="color: white;">{{$paket->durasi}}</h2>
                    </div>
                </div>
            </div>
            <div class="col item">
                <div class="row simbol">
                    <div class="col">
                        <i class="fa fa-user simbol-detail" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h2 style="color: white;">{{$paket->availability}} Orang</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="destination_details_info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-9">
                    <div class="destination_info">
                        <h3>Description</h3>
                        <hr>
                        {{--                        Mulai Deskripsi--}}
                        <?php echo($paket->deskripsi_paket); ?>
                        {{--                        Akhir Deskripsi--}}
                        <br><br>
                        <h3>Itinerary</h3>
                        <hr>
                        {{--                    Mulai Itinerary        --}}
                        <?= $paket->rencana_perjalanan ?>
                        {{--                        Akhir Itinerary--}}
                        <br><br>
                    </div>
                    <div class="destination_info">
                        <h3>Tambahan</h3>
                        <hr>
                        <?= $paket->tambahan ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="newletter_area overlay">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="newsletter_text">
                                <center><h4>Included</h4></center>
                                <ul class="unordered-list ior">
                                    @foreach($paket->getIncludedNotIncluded as $row)
                                        @if($row->jenis_ini=='included')
                                            <li>{{$row->keterangan}}</li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="newsletter_text">
                                <center><h4>Not Included</h4></center>
                                <ul class="unordered-list ior">
                                    @foreach($paket->getIncludedNotIncluded as $row)
                                        @if($row->jenis_ini=='not included')
                                            <li>{{$row->keterangan}}</li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="pemesanan" class="destination_details_info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-9">
                    <div></div>
                    <div class="contact_join">
                        <h3>Pemesanan <br><br>(Rp.{{number_format($paket->harga_paket)}} / Person)</h3>
                        <form name="pemesanan" action="{{route('paket.pesan',$paket->id_paket)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="mt-10">
                                        <input min="1" type="number" name="jumlah_peserta" placeholder="Jumlah Peserta Wisata"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Jumlah Peserta Wisata'" required
                                    class="single-input-primary">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group-icon mt-10">
                                <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                                <div class="form-select single-input-primary" id="default-select"">
                                            <select name="sesi">
                                                    <option>Pilih Jadwal</option>
                                                    @foreach($sesi as $row)
                                                        <option
                                                            value="{{$row->id_sesi}}"
                                                            >{{$row->jadwal}}</option>
                                                    @endforeach
                                                </select>
                                </div>
                            </div>
                            </div>
                                </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mt-10">
                                        <textarea name="pesan" class="single-textarea single-input-primary" placeholder="Pesan/Pertanyaan Untuk Pemesanan" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Pesan/Pertanyaan Untuk Pemesanan'" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="submit_btn mt-10">
                                        <button class="boxed-btn4" type="submit">submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- newletter_area_start  -->
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <!-- newletter_area_end  -->

    <div class="popular_places_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Paket Wisata Lainnya</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="img/place/1.png" alt="">
                            <a href="#" class="prise">$500</a>
                        </div>
                        <div class="place_info">
                            <a href="#"><h3>California</h3></a>
                            <p>United State of America</p>
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
                                    <a href="#">5 Days</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="img/place/2.png" alt="">
                            <a href="#" class="prise">$500</a>
                        </div>
                        <div class="place_info">
                            <a href="#"><h3>Korola Megna</h3></a>
                            <p>United State of America</p>
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
                                    <a href="#">5 Days</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="img/place/3.png" alt="">
                            <a href="#" class="prise">$500</a>
                        </div>
                        <div class="place_info">
                            <a href="#"><h3>London</h3></a>
                            <p>United State of America</p>
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
                                    <a href="#">5 Days</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.front.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Backup Data Kristopel\Kuliah ITdel\Semester 6\PA III\Project\git\PA-III-02-2020\resources\views/front/detail-paket.blade.php ENDPATH**/ ?>
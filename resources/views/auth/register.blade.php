@extends('layout.auth.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center" style="opacity: 80%">
            <div class="col-md-8">
                <div class="card" style=" background-color: #2F4F4F">
                    <div class="card-header">
                        <center>
                            <div class="register-logo">
                                <!-- <img src="member/img/register.png"
                   alt="CBT Logo"
                   class="brand-image img-circle elevation-3"
                   style="width: 200px">
                             --></div>
                        </center>
                        <br>
                        <h4><b>
                                <center><img src="{{asset('img/Register-.png')}}"
                                             alt="CBT Logo"
                                             class="brand-image img-circle elevation-3"
                                             style="width: 150px"></center>
                            </b></h4>
                    </div>

                    <!-- <div id="intro" class="view">
                        <div class="full-bg-img">

                        </div>
                    </div> -->

                    <div class="card-body">
                        <form method="POST" action="{{ url('register') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-3 col-form-label text-md-right"></label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{ old('name') }}" required autocomplete="name"
                                           placeholder="Nama Lengkap" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="no_WA" class="col-md-3 col-form-label text-md-right"></label>

                                <div class="col-md-6">
                                    <input id="no_WA" type="text"
                                           class="form-control @error('no_WA') is-invalid @enderror" name="no_WA"
                                           value="{{ old('no_WA') }}" required autocomplete="no_WA"
                                           placeholder="Nomor WhatsApp" autofocus>

                                    @error('no_WA')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="no_HP" class="col-md-3 col-form-label text-md-right"></label>

                                <div class="col-md-6">
                                    <input id="no_HP" type="text"
                                           class="form-control @error('no_HP') is-invalid @enderror" name="no_HP"
                                           value="{{ old('no_HP') }}" required autocomplete="no_HP"
                                           placeholder="Nomor Handphone" autofocus>

                                    @error('no_HP')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="email" class="col-md-3 col-form-label text-md-right"></label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" placeholder="E-mail" required
                                           autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-3 col-form-label text-md-right"></label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           placeholder="Kata Sandi" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-3 col-form-label text-md-right"></label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" placeholder="Konfirmasi Kata Sandi" required
                                           autocomplete="new-password">
                                </div>
                            </div>


                            @if($status==1)
                                <div class="form-group row">
                                    <label for="no_KTP" class="col-md-3 col-form-label text-md-right"></label>

                                    <div class="col-md-6">
                                        <input id="no_KTP" type="text"
                                               class="form-control @error('no_KTP') is-invalid @enderror" name="no_KTP"
                                               value="{{ old('no_KTP') }}" required autocomplete="no_KTP"
                                               placeholder="Nomor KTP" autofocus>

                                        @error('no_KTP')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="photo" class="col-md-3 col-form-label text-md-right"></label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;<div class="col-md-6">
                                        <input type="file" name="photo"
                                               class="custom-file-input @error('photo') is-invalid @enderror" required
                                               autocomplete="photo">
                                        <label class="custom-file-label" style="width: 330px">Foto KTP</label>

                                        @error('photo')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="member" class="col-md-3 col-form-label text-md-right"></label>
                                    <div class="col-md-6">

                                        <select name="komunitas" id="komunitas" class="form-control" required>
                                            <option disabled="" selected="">== Select Komunitas ==</option>
                                            @foreach($komunitas as $row)
                                                <option value="{{$row->id}}">{{$row->nama_komunitas}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            @endif

                            <br>
                            <div class="form-group row mb-0" >
                                <div class="col-md-8 offset-md-5">
                                    <button type="submit" class="btn btn-primary" style="background-color: #2E8B57">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                            <br>
                            <div class="form-group row mb-0" >
                                <div class="col-md-6 offset-md-4">
                                    <a class="btn btn-link" href="{{ route('login') }}"
                                       style="color: #87CEEB">
                                        {{ __('Sudah Memiliki Akun? Login.') }}
                                    </a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

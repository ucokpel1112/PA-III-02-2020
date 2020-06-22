@extends('layout.auth.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center" style="opacity: 80%">
            <div class="col-md-8">
                <!-- <div class="alert alert-success">
                        <i class="fa fa-info-circle"></i>Silahkan periksa email untuk melihat verifikasi email anda.
                </div> -->
                @if(session('info'))
                    <div class="alert alert-success">
                        <i class="fa fa-info-circle"></i>{{session('info')}}
                    </div>
                @endif
                <div class="card" style=" background-color: #2F4F4F">
                    <center>
                        <div class="card-header"><img src="{{asset('img/Login.png')}}"
                                                      alt="CBT Logo"
                                                      class="brand-image img-circle elevation-3"
                                                      style="width: 150px"></div>
                    </center>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-3 col-form-label text-md-right"></label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email" autofocus
                                           placeholder="Alamat E-Mail">

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
                                           required autocomplete="current-password" placeholder="Password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-3">
                                    <button type="submit" class="btn btn-primary" style="background-color: #2E8B57">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}"
                                           style="color: #87CEEB">
                                            {{ __('Lupa Password?') }}
                                        </a>
                                    @endif|
                                    <a class="btn btn-link" href="{{ route('register',0) }}"
                                       style="color: #87CEEB">
                                        {{ __('Belum Memiliki Akun? Daftar.') }}
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

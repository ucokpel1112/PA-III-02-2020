@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <center><div class="register-logo">
                                <a href="../../index2.html"><b>Member</b>CBT</a>
                            </div></center>
                        </br>
                        <center>{{ __('Register a New Membership') }}</center>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="no_KTP" class="col-md-4 col-form-label text-md-right">{{ __('NO KTP') }}</label>

                                <div class="col-md-6">
                                    <input id="no_KTP" type="text" class="form-control @error('no_KTP') is-invalid @enderror" name="no_KTP" value="{{ old('no_KTP') }}" required autocomplete="no_KTP" autofocus>

                                    @error('no_KTP')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="no_WA" class="col-md-4 col-form-label text-md-right">{{ __('NO WA') }}</label>

                                <div class="col-md-6">
                                    <input id="no_WA" type="text" class="form-control @error('no_WA') is-invalid @enderror" name="no_WA" value="{{ old('no_WA') }}" required autocomplete="no_WA" autofocus>

                                    @error('no_WA')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="no_HP" class="col-md-4 col-form-label text-md-right">{{ __('NO HP') }}</label>

                                <div class="col-md-6">
                                    <input id="no_HP" type="text" class="form-control @error('no_HP') is-invalid @enderror" name="no_HP" value="{{ old('no_HP') }}" required autocomplete="no_HP" autofocus>

                                    @error('no_HP')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="input-group" style="padding-left: 110px; width: 500px" >
                                <label for="photo" class="col-md-4 col-form-label text-md-right" style="padding-left: 50px">{{ __('Foto KTP') }}</label>
                                <div class="custom-file">
                                    <input type="file" name="photo" class="custom-file-input">
                                    <label class="custom-file-label">Pilih Gambar</label>
                                </div>
                            </div>
                            <br>

                        <!-- <div class="form-group row">
                            <label for="jenisLayanan_id" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Layanan') }}</label>

                            <div class="col-md-6">
                                <input id="jenisLayanan_id" type="text" class="form-control @error('jenisLayanan_id') is-invalid @enderror" name="jenisLayanan_id" value="{{ old('jenisLayanan_id') }}" required autocomplete="jenisLayanan_id" autofocus>

                                @error('jenisLayanan_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->


                        <!-- <div class="form-group row">
                            <label for="kabupaten_id " class="col-md-4 col-form-label text-md-right">{{ __('Kabupaten') }}</label>

                            <div class="col-md-6">
                                <input id="kabupaten_id " type="text" class="form-control @error('kabupaten_id ') is-invalid @enderror" name="kabupaten_id" value="{{ old('kabupaten_id ') }}" required autocomplete="kabupaten_id " autofocus>

                                @error('kabupaten_id ')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->


                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Kata Sandi') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Konfirmasi Kata Sandi') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="form-group row" style="padding-left: 260px">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                    <label for="agreeTerms">
                                        I agree to the <a href="#">terms</a>
                                    </label>
                                </div>
                            </div>

                        <!-- <div class="social-auth-links text-center">
                            <a href="{{ url('/Next') }}" class="btn btn-block btn-primary">
                              <i class="fab fa-facebook mr-2"></i>
                              Next
                            </a>
                        </div> -->

                            <div class="form-group row mb-0" style="padding-left: 360px">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

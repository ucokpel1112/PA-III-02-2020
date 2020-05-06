@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Silahkan Verifikasi Email Anda') }}</div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('Tautan verifikasi baru telah dikirim ke alamat email Anda.') }}
                            </div>
                        @endif

                        {{ __('Sebelum melanjutkan, silakan periksa email Anda untuk tautan verifikasi.') }}
                        {{ __('Jika Anda belum menerima email') }}, <a href="{{ route('verification.resend') }}">{{ __('klik di sini untuk meminta yang verifikasi email') }}</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

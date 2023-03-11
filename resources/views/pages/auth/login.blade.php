@extends('layouts.auth.app', ['title' => 'Login Rivvana Inc'])

@section('content')
    <form method="POST" action="{{ route('login.post') }}" novalidate="novalidate" enctype="multipart/form-data"
        accept-charset="utf-8">
        @csrf
        <div class="wrapper wrapper-login">
            <div class="container container-login animated fadeIn">
                <div class="panel-heading text-center text-soft">
                    <h1 class="text-center fw-bold mt-3">Rivvana Inc</h1>
                    D.I. Yogyakarta
                    <hr>
                    <h4 class="panel-title text-center fw-bold mb-3">Login Admin</h4>
                </div>
                <div class="card-sub text-center alert-login mt-3 mb-2">Masukkan email & password dengan benar!</div>
                <div class="login-form">
                    <div class="form-group form-floating-label">
                        <input type="email" class="form-control input-pill @error('email') is-invalid @enderror"
                            id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                        @error('email')
                            <small id="dateHelp" class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="position-relative">
                            <input type="password" class="form-control input-pill @error('password') is-invalid @enderror"
                                id="password" name="password" placeholder="Password">
                            <div class="show-password">
                                <i class="flaticon-interface"></i>
                            </div>
                        </div>
                        @error('password')
                            <small id="dateHelp" class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-action pb-3 pt-2 px-0">
                        <button type="submit" class="btn bg-base btn-rounded btn-block fw-bold">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

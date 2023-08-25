@extends('layouts.full_screen_app')

@section('content')

<div class="app-container mt-5">
    <div class="row" style="">
        <div class="col-12 col-xl-4 offset-xl-4 col-md-6 offset-md-3">
            <div class="bg-white shadow-md p-2 py-3 p-md-5 rounded" style="align-items: center">
                <form novalidate method="POST" action="{{ route('login') }}">
                    <div class="modal-body">
                        {{-- <div class="h5 modal-title">
                            @if ($message = Session::get('error'))
                                <div class="alert alert-danger alert-block mb-3" style="max-width:430px">
                                    <strong style="font-size: 0.9rem;">{{ $message }}</strong>
                                </div>
                            @elseif ($message = Session::get('message'))
                                <div class="alert alert-success alert-block mb-3" style="max-width:430px">
                                    <strong style="font-size: 0.9rem;">{{ $message }}</strong>
                                </div>
                            @endif
                        </div> --}}

                        @csrf
                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="position-relative form-group"><label>Username</label><input id="username"
                                        type="text" class="form-control @error('username') is-invalid @enderror"
                                        name="username" value="{{ old('username') }}" required autocomplete="username"
                                        autofocus>
                                    @if ($errors->has('username'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="position-relative form-group">
                                    <label>Password</label>
                                    <div class="pos-relative">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror igore-sp-validations"
                                            name="password" required autocomplete="current-password">
                                        <span toggle="#password-field"
                                            class="fa fa-fw fa-eye toggle-password icon-password"></span>
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <input type="hidden" value="{{ $rurl ?? '' }}" name="rurl" />
                        </div>
                    </div>
                    <div class="clearfix px-3">
                        <div class="float-right">
                            <button type="submit" class="btn btn-primary w-100  p-2">Login</button>
                        </div>
                    </div>
                    <div class="row px-3">
                        <div class="col-12 mt-2">
                            @if (Route::has('password.request'))
                                <a class="btn btn-light w-100  p-2" href="/forgot-password">
                                    {{ __('Forgot Your Password ?') }}
                                </a>
                            @endif
                        </div>
                        {{-- <div class="col-12 mt-4">
                            <a class="btn btn-primary-inverse w-100  p-2" href="/jobseeker/signup?rurl={{$rurl}}">Create an Account</a>
                        </div> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

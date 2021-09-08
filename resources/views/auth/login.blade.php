@extends('layouts.app')
@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center" style="background-color: #82ae46;color: white;font-size: 20px;">{{ __('ورود به مای سبزی') }}</div>

                <div class="card-body " style="direction: rtl">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row ">

                            <div class="col-md-12">
                                <input id="phone_number" type="text" class="form-control"  placeholder="شماره تماس" name="phone_number" required autocomplete="phone_number" autofocus>

                            </div>
                        </div>

                        <div class="form-group row center">

                            <div class="col-md-12">
                                <input id="password" type="password" placeholder="رمز ورود" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>

                        <div class="form-group row">
                            <div class="col-md-4 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label mr-3" for="remember">
                                        {{ __('مرا بیاد داشته باش!') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('ورود') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text-danger" href="{{ route('password.request') }}">
                                        {{ __('رمز عبورم را فراموش کرده ام!') }}
                                    </a>
                                @endif

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts/template')

@include('layouts/head')

@section('content')
<div class="login-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">JPT ログイン</h4>
                        <div class="main-visula">
                            <img src="{{ asset('/images/fun-at-carnival.jpg') }}" alt="笑っている女性">
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="email" class="col-md-6 col-form-label text-md-left">{{ __('メールアドレス') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-6 col-form-label text-md-left">{{ __('パスワード') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row check">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <label class="form-check-label" for="remember">
                                                {{ __('ログインを継続する') }}
                                            </label>
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0 btn-group">
                                    <div class="col-md-8">
                                        <button type="submit" class="submit btn btn-warning">
                                            {{ __('ログイン') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('パスワードを忘れた時') }}
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
    </div>
</div>
@endsection

@extends('layouts/template')

@section('title','JPT｜パスワードリセット')
@include('layouts/head')

@section('content')
<div class="login-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            <a class="" href="{{ url('') }}">JPT</a>
                            パスワードリセット
                        </h4>
                        <div class="main-visula">
                            <img src="{{ asset('/images/fun-at-carnival.jpg') }}" alt="笑っている女性">
                        </div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="email" class="col-md-6 col-form-label text-md-left  ">{{ __('メールアドレス') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-0 btn-group">
                                    <div class="col-md-10">
                                        <button type="submit" class="submit btn btn-warning">
                                            パスワードをリセットする
                                        </button>
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

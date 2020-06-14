@extends('layouts/template')

@include('layouts/head')

@section('content')

    @include('layouts/sidebar')

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">アプリの使い方</h4>
                    <p class="card-text">
                        アプリの使い方の説明を入力する。
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $user->name }}さん専用 質問URL</h4>
                    <p class="card-text">
                        下記の表示されているURLをコピーするか、<br>
                        クリップボードをクリックしてコピーしてください。
                    </p>
                    <p id="copyTarget" class="card-text">
                        {{url('/question')}}?id={{ $user->id }}
                    </p>
                    <button class="submit btn btn-warning" onclick="copyToClipboard()">URLをコピー</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@include('layouts/footer')

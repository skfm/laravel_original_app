@extends('layouts/template')

@section('title','JPT|詳細')
@include('layouts/head')

@section('content')

@include('layouts/sidebar')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">JPTの使い方</h4>
                <p class="card-text">
                    1.「結果の登録確認または編集」から情報を登録<br>
                    2.「結果の確認」から結果を確認<br>
                    3.問題なければ専用URLを気になる異性に送って相性テストにチャレンジしてもらおう！
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

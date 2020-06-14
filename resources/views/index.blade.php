@extends('layouts/template')

@section('title','JTP')
@include('layouts/head')

@section('content')

    <div class="content index">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">JPT</h4>
                <div class="main-visula">
                  <img src="{{ asset('/images/fun-at-carnival.jpg') }}" alt="笑っている女性">
                </div>
                <div class="card-desc">
                  「JPT」は相性診断テスト風ジョークアプリです。<br>
                  使用したい相手に URL を送り質問に答えてもらうと  予め登録しているメッセージと画像が診断結果に表示されます。<br><br>
                  「初対面の異性との話のネタに困っている」、「面白いことを言えずに会話が盛り上がらない」と悩んでいる人向けです。<br><br>

                  初めての方は新規登録から登録を行い利用してください。
                </div>
                <div class="btn-wrapper">
                  <a class="signup btn btn-warning" href="{{ route('register') }}">新規登録</a>
                  <a class="login btn btn-warning" href="{{ route('login') }}">ログイン</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

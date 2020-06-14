@extends('layouts/template')

@section('title','500ページ')
@include('layouts/head')

@section('content')
  <div class="container" style="margin-top: 50px;">
    <div class="row">
      <div class="col col-md-offset-3 col-md-6">
        <div class="text-center">
          <p>システムエラーの為、アクセスできません。運営者に問い合わせるか時間を置いて再度お試しください。</p>
          <a href="{{ route('home') }}" class="btn">
            ホームへ戻る
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection

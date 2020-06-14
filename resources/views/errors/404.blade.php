@extends('layouts/template')

@section('title','404ページ')
@include('layouts/head')

@section('content')
  <div class="container" style="margin-top: 50px;">
    <div class="row">
      <div class="col col-md-offset-3 col-md-6">
        <div class="text-center">
          <p>お探しのページは見つかりませんでした。</p>
          <a href="{{ route('home') }}" class="btn">
            ホームへ戻る
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection

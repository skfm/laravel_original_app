@extends('layouts/template')

@include('layouts/head')

@section('content')
  <div class="container" style="margin-top: 50px;">
    <div class="row">
      <div class="col col-md-offset-3 col-md-6">
        <div class="text-center">
          <p>お探しのページにアクセスする権限がありません。</p>
          <a href="{{ route('home') }}" class="btn">
            ホームへ戻る
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection

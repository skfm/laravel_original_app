@extends('layouts/template')

@section('title','理想のお相手診断テスト｜結果')
@include('layouts/head')

@section('content')
<section class="section">
    <div class="title_wrapper">
        <h1>理想のお相手診断テスト</h1>
    </div>
    <div class="result_wrapper">
        <div class="result_item title">
            <p>
                理想の相手の名前は<br>{{ $user->name }}さん
            </p>
        </div>
        <div class="result_item">
            <img src="{{ Storage::disk('s3')->url($user->image_path) }}" alt="ユーザーが登録した画像">
        </div>
        <div class="result_item">
            {{ $user->content }}
        </div>
    </div>
</section>
@endsection

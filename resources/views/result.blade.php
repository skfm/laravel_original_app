@extends('layouts/template')

@section('title','理想のお相手診断テスト｜結果')
@include('layouts/head')

@section('content')
<section class="section">
    <div class="title_wrapper">
        <i class="far fa-heart"></i>
        <h1>理想のお相手診断テスト</h1>
    </div>
    <div class="result_wrapper">
        <div class="result_item title">
            <p>
                理想の相手の名前は<br>{{ $user->name }}さん
            </p>
        </div>
        <div class="result_item">
            @if (!empty($user->image_path))
                <img src="{{ Storage::disk('s3')->url($user->image_path) }}" alt="ユーザーが登録した画像">
            @else
                <p>
                    画像の登録がされていません。<br>
                    管理画面から診断結果で表示させたい画像を登録してください。
                </p>
            @endif
        </div>
        <div class="result_item">
            {{ $user->content }}
        </div>
    </div>
</section>
@endsection

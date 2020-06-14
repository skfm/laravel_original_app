@extends('layouts/template')

@include('layouts/head')

@section('content')

    @include('layouts/sidebar')

    @if($errors->any())
        <div class="row">
            <div class="alert alert-danger col-md-6">
            @foreach($errors->all() as $message)
                    <p>{{ $message }}</p>
            @endforeach
            </div>
        </div>
    @endif

          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">編集方法</h4>
                  <p class="card-text">
                    下記のフォームに相性診断の結果に表示させたい<br>
                    「名前」、「表示メッセージ」、「画像」を<br>
                    入力してください。
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <form class="edit" action="{{ route('user.update', ['user' => $user->id]) }}"
                method="POST" enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                <h4>登録内容</h4>
              </div>
              <div class="form-group">
                <label for="name" class="bmd-label-floating">名前</label>
                <input type="text" name="name" value="{{ old('title', $user->name) }}" class="form-control">
              </div>
              <div class="form-group">
                <label for="content">メッセージ</label>
                <textarea class="form-control" name="content" rows="5">{{ $user->content }}</textarea>
              </div>
              @if ($user->image_path)
              <div class="form-group">
                <label for="image_path" class="bmd-label-floating">登録されている画像</label>
                <img src="{{ asset('storage/result_img/' . $user->image_path) }}" alt="ユーザーが登録した画像">
              </div>
              @endif
              <div class="form-group">
                <label for="image_path" class="bmd-label-floating">画像アップロード</label>
                <input type="file" name="image_path" value="" class="form-control">
              </div>
              <div class="form-group">
              <input type="submit" name="btn_submit" value="編集する" class="btn btn-warning">
              <a class="btn_cancel btn btn-default" href="{{ route('user.show', ['user' => $user->id]) }}">戻る</a>
              </div>
              <input type="hidden" name="_method" value="patch">
              </form>
            </div>
@endsection

@include('layouts/footer')

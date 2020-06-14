@extends('layouts/template')

@section('title','JPT|退会確認')
@include('layouts/head')

@section('content')

@include('layouts/sidebar')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">退会について</h4>
                    <p class="card-text">
                        このアプリを退会しますか？<br>
                        退会する場合は退会ボタンをクリックしてください。
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form class="delete" action="{{ route('user.destroy', ['user' => $user->id]) }}" method="post">
                @csrf
            <div class="form-group">
                <h4>登録内容</h4>
            </div>
            <div class="form-group">
                <label for="name" class="bmd-label-floating">名前</label>
                <input type="text" name="name" value="{{ old('title', $user->name) }}" class="form-control" readonly>
            </div>
            <div class="form-group">
                <input type="submit" name="btn_submit" value="退会" class="btn btn-warning">
                    <a class="btn_cancel btn btn-default" href="{{ route('user.show', ['user' => $user->id]) }}">戻る</a>
                </div>
                <input name="_method" type="hidden" value="DELETE">
            </form>
        </div>
    </div>
</div>
@endsection

@include('layouts/footer')

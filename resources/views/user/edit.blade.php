<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>
	<script src="{{ asset('js/add.js') }}" defer></script>

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/material-dashboard.css?v=2.1.0') }}" rel="stylesheet">
	<link href="{{ asset('css/add.css') }}" rel="stylesheet">
</head>
<body>
	<div id="app">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                アプリ名
            </a>
        </div>
        <div class="sidebar-wrapper ps-container ps-theme-default" data-ps-id="54c5e70f-1292-ed79-06c8-ac070c19f468">
        <ul class="nav">
            <li class="nav-item active">
                <a class="nav-link" href="">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.edit', ['user' => $user->id]) }}">
                <i class="material-icons">edit</i>
                    <p>結果の登録または編集</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="">
                    <i class="material-icons">phone_iphone</i>
                    <p>結果の確認</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="material-icons">undo</i>
                    <p>ログアウト</p>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            <li class="nav-item active-pro">
                <a class="nav-link" href="">
                    <i class="material-icons">delete</i>
                    <p>退会</p>
                </a>
            </li>
        </ul>
        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
				</div>
				<div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;">
					<div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div>
				</div>
			</div>
		<div class="sidebar-background" style="background-image: url(../assets/img/sidebar-1.jpg) "></div>
	</div>

  <main class="content">
    <div class="container">
		@if($errors->any())
			<div class="alert alert-danger">
			@foreach($errors->all() as $message)
					<p>{{ $message }}</p>
			@endforeach
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
                <label for="text">メッセージ</label>
                <textarea class="form-control" name="content" rows="5">{{ $user->content }}</textarea>
              </div>
              <div class="form-group">
              <input type="submit" name="btn_submit" value="編集する" class="btn btn-warning">
              <a class="btn_cancel btn btn-default" href="{{ route('user.show', ['user' => $user->id]) }}">戻る</a>
              </div>
              <input type="hidden" name="_method" value="patch">
              </form>
            </div>
          </div>
  </main>
  <footer class="footer">
    <div class="container-fluid">
      <div class="copyright">
        ©
        <script>
          document.write(new Date().getFullYear())
        </script> made with <i class="material-icons">favorite</i> by Creative Maverick
      </div>
    </div>
  </footer>
</body>
</html>

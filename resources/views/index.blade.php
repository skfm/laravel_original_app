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
<body class="index">
  <div class="wrapper">
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">アプリ名</h4>
                <div class="main-visula">
                  <img src="{{ asset('/images/fun-at-carnival.jpg') }}" alt="笑っている女性">
                </div>
                <div class="card-desc">
                  「アプリ名」は相性占い風ジョークアプリです。<br>
                  使用したい相手に URL を送り質問に答えてもらうと  予め登録しているメッセージと画像が相性占い結果に表示されます。<br><br>
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
    </div>
  </div>
</body>
</html>

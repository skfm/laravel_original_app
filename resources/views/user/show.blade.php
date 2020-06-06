@extends('layouts.app')

@section('content')

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
					<h4 class="card-title">{{ $user->name }}さん専用 質問URL</h4>
					<p class="card-text">
					下記の表示されているURLをコピーするか、<br>
					クリップボードをクリックしてコピーしてください。
					</p>
					<p id="copyTarget" class="card-text">
						http://localhost/php/original_app/question.php?id={{ $user->id }}
					</p>
					<button class="submit btn btn-warning" onclick="copyToClipboard()">URLをコピー</button>
				</div>
			</div>
	</div>


@endsection

@section('sidebar')
<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                アプリ名
            </a>
        </div>
        <div class="sidebar-wrapper ps-container ps-theme-default" data-ps-id="54c5e70f-1292-ed79-06c8-ac070c19f468">
        <ul class="nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('user.show', ['user' => $user->id]) }}">
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
                <a class="nav-link" href="{{ route('result', ['user' => $user->id]) }}">
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
                <a class="nav-link" href="{{ route('user.delete', ['user' => $user->id]) }}">
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
@endsection

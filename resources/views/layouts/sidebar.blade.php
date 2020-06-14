@section('sidebar')
<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
        <div class="logo">
            <a href="{{ route('user.show', ['user' => $user->id]) }}" class="simple-text logo-normal">
                JPT
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
            <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
    <div class="sidebar-background" style="background-image: url(../assets/img/sidebar-1.jpg) "></div></div>
        <div class="sidebar-background" style="background-image: url(../assets/img/sidebar-1.jpg) "></div>
        <div class="main-panel ps-container ps-theme-default ps-active-y" data-ps-id="55c276fd-4544-2436-6fe2-f3ca07d3de6b">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="{{ route('user.show', ['user' => $user->id]) }}">
                JPT
            </a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
        </div>
      </nav>
    </div>
</div>
@endsection

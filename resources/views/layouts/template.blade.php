<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @yield('head')
</head>
<body>
<div class="app">
<main class="content">

    @if(\Route::is('user.*'))
        @yield('sidebar')
    @endif

    @yield('content')
</main>
</div>
@if(\Route::is('user.*'))
    @yield('footer')
@endif
</body>
</html>

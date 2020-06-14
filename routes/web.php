<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Webルート
|--------------------------------------------------------------------------
|
| ここでアプリケーションのWebルートを登録できます。"web"ルートは
| ミドルウェアのグループの中へ、RouteServiceProviderによりロード
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('user', 'UsersController');
Route::get('/user/delete/{user}', 'UsersController@delete')->name('user.delete');

Route::get('/result/{user}', 'UsersController@result')->name('result');
Route::post('/result/{user}', 'UsersController@result')->name('result');

Route::get('/question', function () {
    return view('question');
})->name('question');

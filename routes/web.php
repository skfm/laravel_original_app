<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::resource('user', 'UsersController');
Route::get('/user/delete/{user}', 'UsersController@delete')->name('user.delete');

Route::get('/result/{user}', 'UsersController@result')->name('result');
Route::post('/result/{user}', 'UsersController@result')->name('result');

Route::get('/question', function () {
    return view('question');
})->name('question');

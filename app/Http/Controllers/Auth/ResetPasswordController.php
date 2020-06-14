<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | パスワードリセットコントローラ
    |--------------------------------------------------------------------------
    |
    | このコントローラはパスワードリセットリクエストの処理に責任を持ち、その
    | 振る舞いを取り込むために、シンプルなトレイトを使用しています。望み通りに
    | 調整するため、このトレイトを使い、メソッドをオーバーライドしてください。
    |
    */

    use ResetsPasswords;

    /**
     * パスワードをリセットした後のユーザリダイレクト先
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignOutController extends Controller
{
    public function signout()
    {
        // ユーザーログアウト
        Auth::logout();

        // トップページにリダイレクト
        return redirect('/');
    }
}

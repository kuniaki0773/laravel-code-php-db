<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignInController extends Controller
{
    public function show()
    {
        // サインインページのビューを返す
        return view('signin');
    }

    public function signin(Request $request)
    {
        // 入力データの検証
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        // ユーザーの認証処理
        $credentials = $request->only('name', 'password');


    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        if (Auth::attempt($credentials)) {
            // 認証成功時の処理
            return redirect()->route('index')->with('success', 'サインインに成功しました。');
        } else {
            // 認証失敗時の処理
            return redirect()->route('signin')->with('error', 'サインインに失敗しました。');
        }
    }
}

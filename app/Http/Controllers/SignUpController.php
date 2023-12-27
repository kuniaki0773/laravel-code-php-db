<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SignUpController extends Controller
{

    // サインアップ画面の表示処理
    public function show()
    {
        // サインイン画面の表示
        return view('signup');
    }

    // サインアップの処理
    public function signup(Request $request)
    {
        DB::beginTransaction(); // トランザクションを開始

        try {
            // 入力データの検証(バリデーションルール)
            $request->validate([
                'name' => 'required|unique:users', // 必須項目|同一のname禁止
                'password' => 'required|min:6', // 必須項目|６文字以上
        ]);

            // ユーザーの作成
            $user = User::create([
                'name' => $request->input('name'),
                'password' => $request->input('password'),
        ]);


            // サインアップ成功時の処理
            DB::commit();


            // サインアップ成功時の処理
            return redirect()->route('signin')->with('success', 'Sign up successful')->with('user', $user);

        } catch (\Illuminate\Validation\ValidationException $e) {

             // エラーログの記録や例外の再スローなど
            DB::rollback();

            return redirect()->route('signup.show')->withErrors($e->errors())->withInput();
        }
    }
}

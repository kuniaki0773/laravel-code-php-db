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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;

class HistoryController extends Controller
{
     public function show()
    {
        // サインインページのビューを返す
        return view('history');
    }

    public function postHistory(Request $request)
    {
        // フォームの内容をここに追加
        $account_id = auth()->id();
        $section_id = $request->input('section_id');

        History::create([
            'account_id' => $account_id,
            'section_id' => $section_id,
        ]);


        return redirect()->back()->with('success', 'フォームが正常に送信されました');
    }
}

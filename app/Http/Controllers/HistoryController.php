<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;

class HistoryController extends Controller
{
     public function show()
    {
            // ユーザーの学習履歴を取得してビューに渡す
        $histories = History::with('section.course')
            ->where('user_id', auth()->id())
            ->orderByDesc('created_at')
            ->get();

        return view('history', compact('histories'));
    }

    public function postHistory(Request $request)
    {
        // フォームの内容をここに追加
        $this->validate($request, [
            'section_id' => 'required|exists:sections,id',
        ]);

        $user_id = auth()->id();
        $section_id = $request->input('section_id');
        $course_id = $request->input('course_id'); // この行を確認

        // History モデルにデータを保存
        History::create([
            'user_id' => $user_id,
            'section_id' => $section_id,
            'course_id' => $course_id,
        ]);

        return redirect()->back()->with('success', '学習履歴が正常に追加されました');
    }
}

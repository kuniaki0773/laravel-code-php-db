<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index()
    {
        // データベースからコースを取得
        $courses = Course::with('category')->ordered()->get();

        // index　ビューに必要な情報を渡す
        return view('index', compact('courses'));
    }

    public function show($id)
    {
        // 指定されたIDに一致するコースを取得する（見つからない場合は例外を投げる）
        $course = Course::findOrFail($id);

        // コースに関連するセクションを取得し、no（順序）でソートする
        $sections = $course->sections()->orderBy('no')->get();

        // セクションから最初のセクションを取得する
        $current_section = $sections->first();

        // detail ビューに必要な情報を渡す
        return view('detail', compact('course', 'sections', 'current_section'));
    }
}

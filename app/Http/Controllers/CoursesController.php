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

        // コースをビューに渡す（ビューファイルはresources/views/index.blade.php）
        return view('index', compact('courses'));
    }

    public function show($id)
    {
        $course = Course::findOrFail($id);
        $sections = $course->sections()->orderBy('no')->get();
        $current_section = $sections->first();

        return view('detail', compact('course', 'sections', 'current_section'));
    }
}

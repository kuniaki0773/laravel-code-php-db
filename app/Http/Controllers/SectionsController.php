<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\Course;

class SectionsController extends Controller
{
    public function show($course_id, $section_id)
    {
    $course = Course::findOrFail($course_id);
    $sections = $course->sections()->ordered()->get();
    $current_section = $sections->find($section_id);

    return view('detail', compact('course', 'sections', 'current_section'));
    }
}

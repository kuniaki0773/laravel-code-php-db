<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\Course;

class SectionsController extends Controller
{
    public function show($course_id, $section_id)
    {
        $section = Section::findOrFail($section_id);
        $course = $section->course;
        $sections = $course->sections()->orderBy('no')->get();

        return view('sections.show', compact('course', 'sections', 'section'));
    }
}

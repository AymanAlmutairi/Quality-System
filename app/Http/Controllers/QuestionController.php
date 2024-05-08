<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Section;
use App\Models\Course;
use App\Models\Question;

class QuestionController extends Controller
{
    //

    public function create($id)
    {

        $instructors = User::where('role', 'instructor')->get();

        $sections = Section::get();

        $courses = Course::get();

        $course = Course::find($id);

        return view('questions.create', compact('instructors', 'sections', 'courses', 'course'));
    }

    public function store(Request $request)
    {
        Question::create($request->all());
        return redirect()->route('courses.index');
    }
}

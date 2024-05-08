<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;
use App\Models\Question;
use App\Models\User;
use App\Models\Section;

class GradeController extends Controller
{



    public function index($section_id)
    {
        $questions = Question::where('section_id', $section_id)->get();

        return view('methods.index', compact('questions'));
    }

    public function create($method_id)
    {

        $students = User::where('role', 'user')->get();

        $method = Question::find($method_id);

        return view('grades.create', compact('students', 'method'));
    }

    public function store(Request $request)
    {
        Grade::create($request->all());
        return redirect()->route('methods.grades', $request->method_id);
    }

    public function showGrades($method_id)
    {

        $grades = Grade::where('method_id',$method_id)->get();

        $method = Question::find($method_id);


        return view('grades.index', compact('grades', 'method'));
    }
}

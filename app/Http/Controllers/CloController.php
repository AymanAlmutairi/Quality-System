<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Clo;

class CloController extends Controller
{
    //

    public function create(){

        $courses = Course::all();
        return view('clo.create',compact('courses'));

    }

    public function store(Request $request){

        $clo = Clo::create($request->all());

        return redirect()->route('courses.show',$request->course_id);

    }
}

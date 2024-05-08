<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Content;

class ContentController extends Controller
{
    //
    public function create(){

        $courses = Course::all();
        return view('contents.create',compact('courses'));

    }

    public function store(Request $request){

        $content = Content::create($request->all());

        return redirect()->route('courses.show',$request->course_id);

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\CourseRequest;
use  PDF;
use App\Models\Section;

class CourseController extends Controller
{
    //

    public function index()
    {

        $courses = Course::withCount('students');

        if (auth()->user()->role == 'instructor') {
            $courses =  $courses->where('instructor_id', auth()->id());
        }
        $courses = $courses->get();

        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        $instructors = User::where('role', 'instructor')->get();
        $coordinators = User::where('role', 'course_coordinator')->get();
        $sections = Section::all();
        return view('courses.create', compact('instructors', 'coordinators', 'sections'));
    }

    public function store(Request $request)
    {
        $inputs = $request->all();
        $inputs['user_id'] = auth()->user()->id;
        $course = Course::create($inputs);

        return redirect()->route('courses.index');
    }

    public function show($id)
    {

        $course = Course::find($id);
        return view('courses.show', compact('course'));
    }

    public function report($id)
    {

        $course = Course::find($id);
        return view('courses.report', compact('course'));
    }

    public function getReport(Request $request, $id)
    {
        set_time_limit(3000);
        $course = Course::find($id);
        $course->recommendations = $request->recommendations;
        $course->comments = $request->comments;
        $course->save();
        $content = view('courses.export', compact('course'))->render();
        $filename = $course->title . '.docx';
        \Storage::put($filename, $content);

        return response()->download(storage_path("app/{$filename}"));
    }

    public function edit($id)
    {
        $course = Course::find($id);
        $instructors = User::where('role', 'instructor')->get();
        $coordinators = User::where('role', 'course_coordinator')->get();
        $sections = Section::all();
        return view('courses.edit', compact('instructors', 'coordinators', 'sections', 'course'));
    }

    public function update($id, Request $request)
    {

        $course = Course::find($id);
        $course->update($request->all());
        return redirect()->route('courses.index');
    }


    public function requestEdit($id)
    {

        $request = CourseRequest::create([

            'course_id' => $id,
            'user_id' => auth()->user()->id,

        ]);
        return redirect()->route('courses.index');
    }


    public function getRequestEdit()
    {
        $requests = CourseRequest::where('status',0)->get();
        return view('courses.requests', compact('requests'));
    }

    public function requestAccept($id)
    {


        $request = CourseRequest::find($id);
        $request->update([
            'status' => 1
        ]);
        return redirect()->route('courses.requests');
    }

    public function requestRefuse($id)
    {


        $request = CourseRequest::find($id);
        $request->delete();
        return redirect()->route('courses.requests');
    }
}

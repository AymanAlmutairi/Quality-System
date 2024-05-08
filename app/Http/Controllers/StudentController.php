<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Course;

class StudentController extends Controller
{
    //

    public function index(){
        $students = User::where('role', 'user')->get();
        return view('students.index',compact('students'));
    }

    public function create(){
        $courses = Course::all();
        return view('students.create', compact('courses'));
    }

    public function store(Request $request){
       $user = User::create([
             'name' => $request->name,
             'email' => '',
             'student_id' => $request->student_id,
             'address' => $request->address,
             'phone'=>$request->phone,
             'password' => Hash::make($request->password),
             'role' => 'user',
             'collage' => $request->collage,
             'department' => $request->department,
             'program'=>$request->program
        ]);

        $user->courses()->sync($request->courses);

        return redirect()->route('students.index');

    }


    public function edit($id){

        $student = User::find($id);
        $courses = Course::all();
        return view('students.edit', compact('student','courses'));

    }
    public function update(Request $request,$id){

        $student = User::find($id);
        $student->update($request->all());
        return redirect()->route('students.index');

    }
}

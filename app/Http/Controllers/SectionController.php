<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Section;

class SectionController extends Controller
{
    //

    public function index()
    {
        $sections = Section::all();
        return view('sections.index', compact('sections'));
    }

    public function create()
    {
        $instructors = User::where('role', 'instructor')->get();
        return view('sections.create', compact('instructors'));
    }


    public function store(Request $request)
    {

        $section = Section::create($request->all());

        return redirect()->route('sections.index');
    }
}

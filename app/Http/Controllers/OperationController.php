<?php

namespace App\Http\Controllers;

use App\Models\Operation;
use Illuminate\Http\Request;

class OperationController extends Controller
{
    //
    public function index()
    {

        $operations = Operation::all();
        return view('operations.index', compact('operations'));
    }

    public function create()
    {
        return view('operations.create');
    }

    public function store(Request $request)
    {
         Operation::create($request->all());
        return redirect()->route('operations.index');
    }
}

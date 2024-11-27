<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {

        $tests = Test::where('is_active', '=', '1')->get();
        return view('test.index')->with('tests', $tests);
    }

    public function create() {
        return view('test.create');
    }

    public function store(Request $request)
    {
        $request->validate([
           'name' => 'required',
           'description' => 'nullable',
            'value' => 'required|numeric',
            'count' => 'required|numeric',
            'is_active' => 'sometimes'
        ],
        [
            'name' => 'The Test Name cannot be empty',
        ]);

        $test = new Test();
        $test->name = $request->name;
        $test->description = $request->description;
        $test->value = $request->value;
        $test->count = $request->count;
        $test->is_active = $request->is_active == true ? 1 : 0;
        $test->save();

//        Test::create([
//            'name' => $request->name,
//            'description' => $request->description,
//            'value' => $request->value,
//            'count' => $request->count,
//            'is_active' => $request->is_active == true ? 1 : 0,
//        ]);
        return redirect()->route('test')->with('message', 'Test Date Created Successfully');
    }
}

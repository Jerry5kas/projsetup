<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        $tests = Test::where(function ($query) {
            $query->where([
                ['is_active', '1'],
            ]);
        })->orderBy('name', 'asc')->get();

        $contacts = DB::table('contacts')
            ->orderBy('city', 'desc')
            ->get();

        return view('test.index')->with([
            'tests' => $tests,
            'contacts' => $contacts
        ]);
    }

    public function create()
    {
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

        return redirect()->route('test')->with('message', 'Test Date Created Successfully');
    }
}

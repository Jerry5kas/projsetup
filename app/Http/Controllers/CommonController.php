<?php

namespace App\Http\Controllers;

use App\Models\Label;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function label()
    {
        $labels = Label::where('is_active', 1)->get();
        return view('label.index')->with('labels', $labels);
    }

    public function create()
    {
        return view('label.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'is_active' => 'sometimes',
        ]);
        Label::create([
            'name' => $request->name,
            'description' => $request->description,
            'is_active' => $request->is_active == true ? 1 : 0,
        ]);
        return redirect()->route('label.index')->with('message', 'Label created successfully');
    }

    public function edit(int $id) {
        $label = Label::findOrFail($id);
        return view('label.edit')->with('label', $label);
    }

    public function update(Request $request,int $id) {
        $request->validate(['
        name' => 'required',
        'description' => 'required',
            'is_active' => 'sometimes',
        ]);
        $label = Label::findOrFail($id);
        $label->update([
            'name' => $request->name,
            'description' => $request->description,
            'is_active' => $request->is_active == true ? 1 : 0,
        ]);
        return redirect()->route('label.index')->with('message', 'Label updated successfully');
    }

    public function delete(int $id)
    {
        $labels = Label::findOrFail($id);
        $labels->delete();
        return redirect()->route('label.index')->with('message', 'Label deleted successfully');
    }
}

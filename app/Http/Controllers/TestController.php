<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        $tests = DB::table('tests')
        ->select('id','name','body_1','f_name','date','opening_amount','balance','is_active')
//        ->groupBy('l_name')
        ->orderBy('name', 'desc')
        ->get();
        $contacts = DB::table('contacts')
            ->orderBy('city', 'desc')
            ->get();
        $categories = DB::table('categories')
            ->select('id','name','is_active')
            ->whereIn('name',['Uganda','Spain','Romania','Nepal'] )
        ->where('is_active', 1)->get();
        return view('test.index')->with([
            'tests' => $tests,
            'contacts' => $contacts,
            'categories' => $categories,
        ]);
    }

    public function create()
    {
        return view('test.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:255|unique:tests,name',
            'f_name' => 'required',
            'l_name' => 'required',
            'age' => 'required',
            'phone' => 'required',
            'mail' => 'required|email|unique:tests,mail',
            'date' => 'required',
            's-date' => 'sometimes',
            'e-date' => 'sometimes',
            'body_1' => 'nullable',
            'body_2' => 'nullable',
            'body_3' => 'nullable',
            'city' => 'nullable',
            'state' => 'nullable',
            'country' => 'nullable',
            'opening_amount' => 'required',
            'balance' => 'nullable',
//            'faq' => 'nullable',
            'is_active' => 'sometimes'
        ]);
        $request['is_active'] = 1;
        Test::create([
            'name' => $request->name,
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'age' => $request->age,
            'phone' => $request->phone,
            'mail' => $request->mail,
            'date' => $request->date ?: Carbon::now()->format('Y-m-d'),
            's_date' => $request->s_date ?: Carbon::now()->format('Y-m-d'),
            'e_date' => $request->e_date ?: Carbon::now()->format('Y-m-d'),
            'body_1' => $request->body_1 ?: 'Description 1 ',
            'body_2' => $request->body_2 ?: 'Description 2 ',
            'body_3' => $request->body_3 ?: 'Description 3 ',
            'city' => $request->city ?: 'Tiruppur',
            'state' => $request->state ?: 'Tamil Nadu',
            'country' => $request->country ?: 'India',
            'opening_amount' => $request->opening_amount ?: 0,
            'balance' => $request->balance ?: 0,
            'is_active' => $request->is_active == true ? 1 : 0,
        ]);
        return redirect()->route('test')->with('message', 'Test Data Created Successfully');
    }

    public function edit(int $id)
    {
        $test = Test::findOrFail($id);
        return  redirect()->route('test.edit')->with(['test' => $test]);
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required|min:3|max:255|unique:tests,name',
            'f_name' => 'required',
            'l_name' => 'required',
            'age' => 'required',
            'phone' => 'required',
            'mail' => 'required|email|unique:tests,mail',
            'date' => 'required',
            's-date' => 'sometimes',
            'e-date' => 'sometimes',
            'body_1' => 'nullable',
            'body_2' => 'nullable',
            'body_3' => 'nullable',
            'city' => 'nullable',
            'state' => 'nullable',
            'country' => 'nullable',
            'opening_amount' => 'required',
            'balance' => 'nullable',
            'is_active' => 'sometimes'
        ]);

        $test = Test::findOrail($id);
        $test->update([
            'name' => $request->name,
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'age' => $request->age,
            'phone' => $request->phone,
            'mail' => $request->mail,
            'date' => $request->date ,
            's_date' => $request->s_date ,
            'e_date' => $request->e_date ,
            'body_1' => $request->body_1 ,
            'body_2' => $request->body_2 ,
            'body_3' => $request->body_3 ,
            'city' => $request->city ,
            'state' => $request->state ,
            'country' => $request->country,
            'opening_amount' => $request->opening_amount ,
            'balance' => $request->balance ,
            'is_active' => $request->is_active,
        ]);
        return view('test.index')->with('message', 'Test data updated successfully.');
    }

    public function destroy(int $id)
    {
        $test = Test::findOrFail($id);
        $test->delete();

        return redirect()->route('test.index')->with('message', 'Test data deleted successfully.');
    }
}

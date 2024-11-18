<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function upsert()
    {
        return view('contact.upsert');
    }

    public function save(Request $request) {
// $fields = $request->validate([
//             'name' => 'required',
//             'email' => 'required',
//             'phone' => 'required',
//             'adres_1' => 'required',
//             'adres_2' => 'required',
//             'city' => 'required',
//             'state' => 'required',
//             'pincode' => 'required',
//             'active_id' => ''
//         ]);

        // $fields['name'] = strip_tags($fields['name']);
        // $fields['email'] = strip_tags($fields['email']);
        // $fields['phone'] = strip_tags($fields['phone']);
        // $fields['adrs_1'] = strip_tags($fields['adrs_1']);
        // $fields['emadrs_2'] = strip_tags($fields['adrs_2']);
        // $fields['city'] = strip_tags($fields['city']);
        // $fields['state'] = strip_tags($fields['state']);
        // $fields['pincode'] = strip_tags($fields['pincode']);
        // $fields['active_1'] = strip_tags($fields['active_id']);
        // $fields['user_id'] = auth()->id();
        // $contacts = Contact::create($fields);
        // return redirect(route('contact.index'))->with('message', 'Contact Saved Succesfully');
        return 'contact Saved';
        }
}

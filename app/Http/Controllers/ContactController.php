<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = [];
        if (auth()->check()) {
            $contact = auth()->user()->contacts()->latest()->get();
        }
        return view('contact.index')->with('contacts', $contact);
    }

    public function upsert(Contact $contact)
    {
        return view('contact.upsert');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'active_id' => 'nullable',
        ]);
        $request['user_id']=auth()->id();
        $request['active_id']=1;
        Contact::create($request->all());
        return redirect()->route('contact.index')->with('message', 'Contact added successfully.');
    }

    public function showEditContact(Contact $contact)
    {
        if (auth()->id() !== $contact['user_id']) {
            return redirect()->route('contact.index');
        }
        return view('contact.edit', ['contact' => $contact]);
    }

    public function updateEditContact(Contact $contact, Request $request)
    {
        if (auth()->id() !== $contact['user_id']) {
            return redirect()->route('contact.index');
        }
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'active_id' => 'nullable',
        ]);
        $request['user_id']=auth()->id();
        $request['active_id']=1;
        $contact->update($request->all());
        return redirect()->route('contact.index')->with('message', 'Contact updated successfully.');
    }

    public function deleteContact(Contact $contact)
    {
        if (auth()->user()->id === $contact['user_id'])
        {
            $contact->delete();
        }
        return redirect()->route('contact.index')->with('message', 'Contact deleted successfully.');
    }
}

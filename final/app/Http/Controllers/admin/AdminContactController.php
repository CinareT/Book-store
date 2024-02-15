<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;

class AdminContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contacts.index', compact('contacts'));
    }

    public function create()
    {
        return view('admin.contacts.create');
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.contacts.edit', compact('contact'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'address' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email',
        ]);
    
        Contact::create($request->all());
    
        return redirect()->route('store.contacts.index')->with('success', 'Contact created successfully.');
    }
    

    public function update(Request $request, $id)
    {
        $request->validate([
            'address' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email',
        ]);
    
        $contact = Contact::findOrFail($id);
        $contact->update($request->all());
    
        return redirect()->route('store.contacts.index')->with('success', 'Contact updated successfully.');
    }
    

    public function show($id)
{
    $contact = Contact::findOrFail($id);
    return view('admin.contacts.show', compact('contact'));
}



public function destroy($id)
{
    $contact = Contact::findOrFail($id);
    $deleted = $contact->delete();
    
    if ($deleted) {
        return redirect()->route('store.contacts.index')->with('success', 'Contact deleted successfully.');
    } else {
        return redirect()->route('store.contacts.index')->with('error', 'Failed to delete contact.');
    }
}

}

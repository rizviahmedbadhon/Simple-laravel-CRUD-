<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class ContactsController extends Controller
{
    public function index(){
        $contacts = Contact::get();
        return view('contacts.index',compact('contacts'));
    }
    public function create(){
        return view('contacts.contact');
    }

    public function store(Request $request){
        Contact::create([
            'name'=>$request->get('name'),
            'number'=>$request->get('number'),
            'message'=>$request->get('message'),
        ]);
        return redirect()->back();
    }

    public function edit($id){
        $contacts = Contact::findOrFail($id);
        return view('contacts.edit', compact('contacts'));
    }

    public function update($id)
    {
        $contacts = Contact::findOrFail($id);
        $contacts->name = request('name');
        $contacts->number = request('number');
        $contacts->message = request('message');
        $contacts->save();
        return redirect()->to('/contacts');
     }

    public function destroy($id)
    {
        $contacts = Contact::findOrFail($id);
        $contacts->delete();
        return redirect()->to('/contacts');
     }

}

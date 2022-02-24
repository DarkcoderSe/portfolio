<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'type' => 'required|string',
            'message' => 'required|string'
        ]);

        $contact = new Contact;
        $contact->name = $request->get('name');
        $contact->email = $request->get('email');
        $contact->purpose = $request->get('type');
        $contact->message = $request->get('message');
        $contact->save();

        $request->session()->flash('message', 'Message sent successfully');

        return redirect()->back();
    }
}

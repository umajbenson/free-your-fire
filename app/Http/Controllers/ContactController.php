<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ContactFormRequest;

use App\Mail\ContactEmail;
use Mail;

class ContactController extends Controller
{
    public function create() {
        return view('contact.create');
    }

    public function store(ContactFormRequest $request) {
  
      $contact = [];
  
      $contact['name'] = $request->get('name');
      $contact['email'] = $request->get('email');
      $contact['msg'] = $request->get('msg');

      //dd($contact);
  
      Mail::to(env('CONTACT_EMAIL'))->send(new ContactEmail($contact));
  
      return back()->with('message', 'Message Sent');
  
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ContactFormRequest;
use App\Http\Requests\NewsletterRequest;

use App\Mail\ContactEmail;
use App\Mail\NewsletterEmail;
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

    public function viewNewsletter()
    {
        return view('newsletter.form');
    }

    public function submitNewsletter(NewsletterRequest $request)
    {
        $contact = [];
  
        $contact['name'] = $request->get('name');
        $contact['email'] = $request->get('email');

        Mail::to(env('CONTACT_EMAIL'))->send(new NewsLetterEmail($contact));
  
        return back()->with('message', 'You are signed up for the newsletter!');
    }
}

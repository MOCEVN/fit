<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
    	return view('/contact.create');
    }

    public function store()
    {

    	$data = request()->validate([
    		'name' => 'required',
    		'email' => 'required|email',
    		'message' => 'required',
    	]);


    	Mail::to('test@test.com')->send(new ContactMail());

    	return redirect('contact')->with('message', 'Thanks for your message. We\'ll be in touch.');
    }
}

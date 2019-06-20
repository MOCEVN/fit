<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
    	return view('contact.index');
    }

    public function store()
    {

    	$data = request()->validate([
    		'name' => 'required',
    		'email' => 'required|email',
    		'message' => 'required',
    	]);


    	Mail::to('test@test.com')->send(new ContactController($data));

    	return redirect('contact')->with('message', 'Thanks for your message. We\'ll be in touch.');
    }
}

<?php

namespace App\Http\Controllers;

// use App\Mail\ContactEmail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Show Contact Form Page (/contact)
	public function showForm() {
		return view('contact.form');
	}

	public function create()
    {

    }


}



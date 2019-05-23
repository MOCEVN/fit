<?php

namespace App\Http\Controllers;

use App\Form
use Illuminate\Http\Request;

class FormController extends Controller
{
   public function index()
   {

   		$forms = Form::all();

   		return view('forms.index', compact('Forms');
   }

   public function create()
   {

   		$trainings = Training::all();

   		return view('forms.create', compact('trainings'));
   }

   public function store()
   {

   		$data = request()->validate([
   			'name' => 'required|min:3',
   			'email' => 'required|email',
   			'active' => 'required',
   			'training_id' => 'required',

   		]);

   		Form::create($data);

   		return redirect('form');
   }
}

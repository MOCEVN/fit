<?php

namespace App\Http\Controllers;

use App\Training;
use App\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{


   public function index()
   {
   		$forms = Form::get();

   		return view('forms.index')
   			->with('forms', $forms);
   }



   public function create()
   {

   		$trainings = Training::get();

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

   public function show(Form $form)
   {

   		return view ('form.show', compact('form'));
   }

   public function edit(Form $form)
   {
   		$forms = Form::get();
   		return view('forms.edit', compact('form', 'forms'));
   }

   public function update(Form $form)
   {
   		$data = request()->validate([
   			'name' => 'required|min:3',
   			'email' => 'required|email',
   		]);

   		$form->update($data);

   		return redirect('forms/' . $form->id);
   }
}

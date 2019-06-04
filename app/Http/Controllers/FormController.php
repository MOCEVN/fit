<?php

namespace App\Http\Controllers;

use App\Training;
use App\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{

   public function __construct()
   {
      $this->middleware('auth')->except(['index']);
   }


   public function index()
   {
   		$forms = Form::get();

   		return view('forms.index')
   			->with('forms', $forms);
   }



   public function create()
   {

   		$trainings = Training::get();
         $form = new Form();

   		return view('forms.create', compact('trainings', 'form'));
   }

   public function store()
   {

   		Form::create($this->validateRequest());



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

   		$form->update($this->validateRequest());

   		return redirect('forms/' . $form->id);
   }

   private function validateRequest()
   {
      $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required',
            'training_id' => 'required',
         ]);
   }
}

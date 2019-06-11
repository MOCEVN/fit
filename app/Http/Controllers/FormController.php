<?php

namespace App\Http\Controllers;

// use App\Training;
use App\Form;
use App\Events\NewFormIsRegisteredEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

   		// $trainings = Training::get();
         $form = new Form();

   		return view('forms.create', compact('form'));

         $form->save();

   }

    public function store(Request $request)
    {
   		$form = Form::create($request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'workouts' => 'required',
        ]));

        $this->storeImage($form);

        event(new NewFormIsRegisteredEvent($form));

   		return redirect('form');


    }

   public function show(Form $form)
   {

   		return view ('forms.show', compact('form'));
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

      $this->storeImage($form);
   }

   private function validateRequest()
   {

      return tap(request()->validate([
            'full_name' => 'required|min:3',
            'email' => 'required|email',
            'workouts' => 'required',

         ]), function () {
              if (request()->hasFile('image')) {
                  request()->validate([
                  'image' => 'file|image|max:5000'
              ]);
          }

      });

    }

    private function storeImage($form)
    {
      if (request()->has('image')) {
          $form->update([
              'image' => request()->image->store('uploads', 'public'),
          ]);
      }
    }

   public function destroy(Form $Form)
    {
        $this->authorize('delete', $form);
        $form->delete();
        return redirect('form');
    }


}

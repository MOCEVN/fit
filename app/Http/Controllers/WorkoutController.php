<?php

namespace App\Http\Controllers;

use App\Workout;
use Illuminate\Http\Request;

class WorkoutController extends Controller
{
    public function index()
	{

		$workouts = Workout::with('exercises')->first();
// dd($workouts->exercises);
   		return view('workouts.index')
   			->with('workouts', $workouts);

		// $workouts = Workout::with('exercises')->first();

		// dd($workouts);
	}
}

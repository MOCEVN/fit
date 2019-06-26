<?php

namespace App\Http\Controllers;

use App\Exercise;
use App\Workout;
use App\ExerciseWorkout;
use Illuminate\Http\Request;

class WorkoutController extends Controller
{
    public function index()
	{

		$workouts = Workout::with('exercises')->get();

		return view('workouts.index')
   			->with('workouts', $workouts);

		foreach($workouts as $workout) {
			echo '<b>'.$workout->name. '</b><br>';
			foreach($workout->exercises as $exercise) {

				echo $exercise->name.'<br>';
			}
		}

	}
}

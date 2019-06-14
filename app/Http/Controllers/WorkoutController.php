<?php

namespace App\Http\Controllers;

use App\Workout;
use Illuminate\Http\Request;

class WorkoutController extends Controller
{
    public function index()
	{
		$workouts = Workout::get();

   		return view('workouts.index')
   			->with('workouts', $workouts->all());

   			$workouts = collection([

		// All the Workouts
		['name' => 'Lose weight', 'Beginner Female/Male', 'Weight Female/Male', 'Condition', 'BBB'],

		// Lose weight
		['name' => 'Lose weight',
			'exercises' => 'Warming up', 'Squat', 'Lunge', 'Chest press', 'Low row', 'Shoulder press', 'Cooling down'],

		// Beginner Female
		['name' => 'Beginner Female',
			'exercises' => 'Warming up', 'Leg press', 'Leg curl', 'Adductor', 'Abductor', 'Pull down', 'Chest press', 'Pectoral', 'Shoulder press', 'Arm extension', 'Rotary torso', 'Cooling down'],

		// Beginner Male
		['name' => 'Beginner Male',
			'exercises' => 'Warming up', 'Leg press', 'Leg curl', 'Pull down', 'Low row', 'Chest press', 'Pectoral', 'Shoulder press', 'Arm extension', 'Arm curl', 'Rotary torso', 'Total abdominal', 'Cooling down'],

		// Weight Female
		['name' => 'Weight Female',
			'exercises' => 'Warming up', 'Squat', 'Lunge', 'Glute', 'Pulldown', 'Low row', 'Chest press', 'Rotary torso', 'Total abdominal', 'Cooling down'],

		// Weight Male
		['name' => 'Weight Male',
			'exercises' => 'Warming up', 'Squat', 'Leg extension', 'Bench press', 'Pectoral', 'Pulldown', 'Low row', 'Shoulder press', 'Arm curl', 'Rotary torso', 'Total abdominal', 'Cooling down'],

		// Condition
		['name' => 'Condition',
			'exercises' => 'Warming up', 'Burpees', 'Jump rope', 'Step ups', 'High Intensity Interval Training', 'Cooling down'],
	]);

	}
}

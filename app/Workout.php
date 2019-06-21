<?php

namespace App;

// use App\Exercise;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
	protected $guarded = [];


	public function exercises()
	{
		return $this->belongsToMany('App\Exercise'); //, 'exercise_workout', 'workouts_id', 'exercise_id');
	}

}

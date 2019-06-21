<?php

namespace App;

// use App\Workout;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{

	protected $guarded = [];

    public function workouts()
    {
    	return $this->belongsToMany('App\Workout'); //, 'exercise_workout', 'workouts_id', 'exercise_id');
    }
}

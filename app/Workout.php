<?php

namespace App;

use App\ExerciseWorkout;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    // protected $table = 'workouts';
    public $timestamps = false;

    // public function exercise_workouts()
    // {
    //     return $this->belongsToMany('App\ExerciseWorkout');
    // }


    public function exercises()
    {
        return $this->belongsToMany(Exercise::class);
    }

}

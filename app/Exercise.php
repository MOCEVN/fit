<?php

namespace App;

// use App\Workout;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{

	protected $guarded = [];

    public function workouts()
    {
    	return $this->belongsToMany(Workout::class)->withTimestamps();
    }
}

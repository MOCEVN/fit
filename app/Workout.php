<?php

namespace App;

// use App\Exercise;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
	protected $guarded = [];


	public function exercises()
	{
		return $this->belongsToMany(Exercise::class)->withTimestamps();
	}

}

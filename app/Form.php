<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
	// Fillable example
		// protected $fillable = ['name', 'email', 'active'];

	// Guarded example
	protected $guarded = [];

	protected $attributes = [
		'workouts' => 1
	];

	public function getWorkoutsAttribute($attribute)
	{
		return $this->WorkoutsOptions()[$attribute];

	}

	public function WorkoutsOptions()
	{
		return [
			0 => 'Lose weight',
			1 => 'Beginner Female',
			2 => 'Beginner Male',
			3 => 'Weight Female',
			4 => 'Weight Male',
			5 => 'Condition',
			6 => 'BBB',


		];
	}
}


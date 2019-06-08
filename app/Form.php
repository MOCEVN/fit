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
		'active' => 1
	];

	public function getActiveAttribute($attribute)
	{
		return $this->activeOptions()[$attribute];
	}

	public function scopeActive($query)
	{
		return $query->where('active', 1);
	}

	public function scopeInactive($query)
	{
		return $query->where('active', 0);
	}

	// public function training()
	// {
	// 	return $this->belongsTo(Form::class);
	// }

	public function goalsOptions()
	{
		return [
			0 => 'Lose weight',
			1 => 'Beginner',
			2 => 'Weight',
			3 => 'Condition',
			4 => 'BBB',


		];
	}
}


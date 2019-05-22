<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = [];

    public function goals()
    {
    	return $this->hasMany(Goal::class);
    }
}


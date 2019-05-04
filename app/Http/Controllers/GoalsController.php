<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoalsController extends Controller
{
    public function list() {

    	$goals = [
		'Lose weight',
		'Beginner female / male',
		'Power female / male',
		'Condition',
		'BBB',

	];


    return view('internals.goals', [
    	'goals' => $goals,
    ]);

  }

}

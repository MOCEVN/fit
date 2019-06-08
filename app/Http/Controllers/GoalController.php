<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoalController extends Controller
{
	public function index()
	{
		$goals = Goal::get();

   		return view('goals.index')
   			->with('goals', $goals);
	}
}

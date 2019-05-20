<?php

namespace App\Http\Controllers;

use App\Goal;
use Illuminate\Http\Request;

class GoalsController extends Controller
{
    public function list() {

      $activeGoals = Goal::active()->get();
      $inactiveGoals = Goal::inactive()->get();
      $companies = Company::all();


    return view('internals.goals', compact('activeGoals', 'inactiveGoals', 'companies'));

  }

  public function store()
  {

  		$data = request()->validate([
  			'name' => 'required|min:3',
  			'email' => 'required',
        'active' => 'required',
        'company_id' => 'required',
		]);

      Goal::create($data);

  		return back();
  }

}


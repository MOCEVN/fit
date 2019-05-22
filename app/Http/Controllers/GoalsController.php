<?php

namespace App\Http\Controllers;

use App\Company;
use App\Goal;

use Illuminate\Http\Request;

class GoalsController extends Controller
{
    public function index() {

      $goals = Goal::all();


    return view('goals.index', compact('goals'));

  }

  public function create()
  {

    $companies = Company::all();
    return view('goals.create', compact('companies'));

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

  		return redirect('goals');
  }

}


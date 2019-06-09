@extends('layouts.app')

@section('title', 'Workouts & Exercises')

@section('content')

		<h1>Workouts & Exercises</h1>

		<ul>
			@foreach($workouts as $workout)
				<li>{{ $workout['name'] }}</li>
			@endforeach
		</ul>

@endsection

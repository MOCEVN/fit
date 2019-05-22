@extends('layouts.layout')

@section('title', 'Goals')

@section('content')

	<div class="row">
		<div class="col-12">
			<h1>Goals</h1>
			<p><a href="goals/create">Add new Goal</a></p>
		</div>
	</div>



	@foreach($goals as $goal)
		<div class="row">
				<div class="col-2">
					<div>
						{{ $customer->id }}
					</div>
				<div class="col-4">{{ $goal->name }}</div>
				<div class="col-4">{{ $goal->company->name }}</div>
				<div class="col-2">{{ $goal->active }}</div>
			</div>
		</div>
	@endforeach

@endsection

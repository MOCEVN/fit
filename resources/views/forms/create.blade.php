@extends('layouts.layout')

@section('title', 'Fill in the form')

@section('content')

	<div class="row">
		<div class="col-12">
			<h1>Fill in the form</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<form action="/form" method="POST">


			<div class="form-group pb-2">
				<label for="name">Full name</label>
				<input type="text"  name="name" value="{{ old('name') }}" class="form-control">
			</div>
			<div>{{ $errors->first('name') }}</div>


			<div class="form-group pb-2">
				<label for="email">Email</label>
				<input type="text"  name="email" value="{{ old('name') }}" class="form-control">
			</div>
			<div>{{ $errors->first('email') }}</div>

			<div class="form-group">
				<label class="active">Choose your Goal</label>
				<select name="active" id="active" class="form-control">
					<option class="1">Active</option>
					<option class="0">Inactive</option>
					{{-- <option value="0">Lose weight</option>
					<option value="1">Beginner Female/Male</option>
					<option value="2">Weight Training Female/Male</option>
					<option value="3">Condition</option>
					<option value="4">BBB</option> --}}
				</select>
			</div>

			<div class="form-group">
				<label class="training_id">Trainings</label>
				<select name="training_id" id="training_id" class="form-control">
					@foreach ($trainings as $training)
						<option value="{{ $training->id }}">{{ $training->name }}</option>
				</select>
			</div>


			<button type="submit" class="btn btn-primary">Submit</button>

				@csrf
			</form>
		</div>
	</div>

@endsection

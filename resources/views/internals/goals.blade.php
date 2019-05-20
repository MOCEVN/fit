@extends('layouts.layout')

@section('title', 'Goals')

@section('content')

	<div class="row">
		<div class="col-12">
			<h1>Goals</h1>
		</div>
	</div>


	<div class="row">
		<div class="col-12">
			<form action="goals" method="POST">


			<div class="form-group pb-1">
				<label for="name">Name:</label>
				<input type="text" name="name" value="{{ old('name') }}" class="form-control">
				<div>{{ $errors->first('name') }}</div>
			</div>


			<div class="form-group pb-1">
				<label for="email">Email:</label>
				<input type="text" name="email" value="{{ old('email') }}" class="form-control">
				<div>{{ $errors->first('email') }}</div>
			</div>

			<div class="form-group">
				<label for="active">Status</label>
				<select name="active" id="active" class="form-control">
					<option value="" disabled>Select goal status</option>
					<option value="1">Active</option>
					<option value="0">Inactive</option>
				</select>
			</div>

			<div class="form-group">
				<label for="company_id">Company</label>
				<select name="company_id" id="company_id" class="form-control">
					@foreach ($companies as $company)
						<option value="{{ $company->id }}">{{ $company->name }}</option>
					@endforeach
				</select>
			</div>


		<button type="submit" class="btn btn-primary">Add Goal</button>

		@csrf
	</form>
		</div>
	</div>


	<hr>

</hr>

	<div class="row">
			<div class="col-6">
				<h3>Active Goals</h3>
				<ul>
				@foreach ($activeGoals as $activeGoal)
					<li>{{ $activeGoal->name }} <span class="text-muted"></span>({{ $activeGoal->company->name }})</li>
				@endforeach
			</ul>
			</div>
		</div>

		<div class="row">
			<div class="col-6">
				<h3>Inactive Goals</h3>
				<ul>
				@foreach ($inactiveGoals as $inactiveGoal)
					<li>{{ $inactiveGoal->name }} <span class="text-muted"></span>({{ $inactiveGoal->company->name }})</li>
				@endforeach
			</ul>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				@foreach($companies as $company)
					<h3>{{ $company->name }}</h3>

					<ul>
						@foreach($company->goals as $goal)
							<li>{{ $goal->name }}</li>
						@endforeach
				@endforeach
					</ul>
		     </div>
		 </div>


@endsection

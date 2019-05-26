 @extends('layouts.app')

@section('title', 'Edit details for ' . $form->name)

@section('content')

	<div class="row">
		<div class="col-12">
			<h1>Edit details for {{ $form->name }}</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<form action="/forms/{{ $form->id }}" method="POST">
				@method('PATCH')
				@include('forms.form')


			<button type="submit" class="btn btn-primary">Save Form</button>


			</form>
		</div>
	</div>

@endsection

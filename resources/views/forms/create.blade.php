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
			<form action="/forms" method="POST">
				@include('forms.form')

			<button type="submit" class="btn btn-primary">Save Form</button>


			</form>
		</div>
	</div>

@endsection

@extends('layouts.app')

@section('title', 'Fill in the form')

@section('content')

	@if($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<div class="row">
		<div class="col-12">
			<h1>Fill in the form</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<form action="{{ route('form.store') }}" method="POST">
				@include('forms.form')

			<button type="submit" class="btn btn-primary" >Save Form</button>


			</form>
		</div>
	</div>

@endsection

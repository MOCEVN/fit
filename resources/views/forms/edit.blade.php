@extends('layouts.app')

@section('content')

	<div class="row">
		<div class="col-12">
			<h1>Edit details for {{ $form->full_name }}</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<form action="{{ route('form.update', ['form' => $form]) }}" method="POST" enctype="multipart/form-data">
				@method('PATCH')
				@include('forms.form')


			<button type="submit" class="btn btn-primary">Save Form</button>


			</form>
		</div>
	</div>

@endsection

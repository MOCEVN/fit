@extends('layouts.layout')

@section('title', 'Form')

@section('content')

	<div class="row">
		<div class="col-12">
			<h1>Form</h1>
			<p><a href="forms/create">Fill in the form</a></p>
		</div>
	</div>

@foreach($forms as $form)
	<div class="row">
		<div class="col-2">
			{{ $form->id }}
		</div>
		<div class="col-4">{{ $form->name }}</div>
		<div class="col-4">{{ $form->training->name }}</div>
	</div>
	@endforeach


@endsection

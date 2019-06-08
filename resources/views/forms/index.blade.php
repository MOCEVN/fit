@extends('layouts.app')

@section('title', 'Form')

@section('content')

	<div class="row">
		<div class="col-12">
			<h1>Form</h1>
			<button><a href="form/create">Fill in the form</a></button>
		</div>
	</div>


@foreach($forms as $form)
	<div class="row">
		<div class="col-2">
			{{ $form->id }}
		</div>
			<div class="col-4">
				<a href="/forms/{{ $form->id }}">{{ $form->first_name }} {{ $form->last_name }}
					{{ $form->email }} {{ $form->active }}</a>
			</div>
	</div>
	@endforeach


@endsection

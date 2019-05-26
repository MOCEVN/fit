@extends('layouts.app')

@section('title', 'Details for ' . $form->name)

@section('content')

	<div class="row">
		<div class="col-12">
			<h1>Details for {{ $form->name }}</h1>
			<p><a href="/forms/{{ $form->id }}/edit">Edit</a></p>
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<p><strong>Name</strong>{{ $form->name }}</p>
			<p><strong>Email</strong>{{ $form->email }}</p>
			<p><strong>Training</strong>{{ $form->training->name }}</p>
		</div>
	</div>

@endsection

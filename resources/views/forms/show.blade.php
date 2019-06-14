@extends('layouts.app')

@section('title', 'Details for ' . $form->full_name)

@section('content')

	<div class="row">
		<div class="col-12">
			<h1 class="pb-2">Details for {{ $form->full_name }} </h1>
			<button class="btn btn-dark">
				<a href="{{ route('form.edit', ['form' => $form]) }}">Edit</a>
			</button>
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<p><strong>Full name:</strong> {{ $form->full_name }}</p>
			<p><strong>Email:</strong> {{ $form->email }}</p>
			<p><strong>Workout:</strong> {{ $form->workouts }}</p>

			<form action="{{ route('form.destroy', ['form' => $form->id]) }}" method="POST" class="pb-2">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger" type="submit" value="Delete">Delete</button>

                {{-- <select name="workout">
                	@foreach($workouts as $workout)

						<option value="{{ $workout->id }}">{{ $workout->name }}</option>

					@endforeach
                </select> --}}
            </form>

			{{-- <p><strong>Training</strong>{{ $form->training->name }}</p> --}}
		</div>
	</div>

	@if($form->image)
		<div class="row">
			<div class="col-12">
				<img src="{{ asset('storage/' . $form->image) }}" alt="" class="img-thumbnail">
			</div>
		</div>
	@endif

@endsection

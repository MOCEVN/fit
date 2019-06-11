@extends('layouts.app')

@section('title', 'Details for ' . $form->full_name)

@section('content')

	<div class="row">
		<div class="col-12">
			<h1>Details for {{ $form->full_name }} </h1>
			<p><a href="{{ route('forms.edit', ['form' => $form]) }}">Edit</a></p>

            <form action="{{ route('forms.destroy', ['form' => $form]) }}" method="POST">
                @method('DELETE')
                @csrf

                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<p><strong>Full name</strong>{{ $form->full_name }}</p>
			<p><strong>Email</strong>{{ $form->email }}</p>

			{{-- <p><strong>Training</strong>{{ $form->training->name }}</p> --}}
		</div>
	</div>

	@if($form->image)
		<div class="row">
			<div class="col-12">
				<img src="{{ asset('storage/' . $form->image) }}" alt="" class="img-thumbnail">
			</div>
		</div>

@endsection

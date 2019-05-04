@extends('layouts.layout')


@section('content')

	<h1>Goals</h1>

		<ul>
			@foreach ($goals as $goal)
				<li>{{ $goal }}</li>
			@endforeach
		</ul>

@endsection

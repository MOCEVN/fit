@extends('layouts.app')

@section('title', 'Contact FIT')

@section('content')

		<h1>Contact</h1>


	@if( ! session()->has('message'))
		<form action="{{ route('contact.store') }} "method="POST">
			<div class="form-group pb-2">
					<label for="name">Full name</label>
					<input type="text"  name="name" value="{{ old('name') }}" class="form-control">
				</div>
				<div>{{ $errors->first('name') }}</div>


				<div class="form-group pb-2">
					<label for="email">Email</label>
					<input type="text"  name="email" value="{{ old('email') }}" class="form-control">
				</div>
				<div>{{ $errors->first('email') }}</div>

				<div class="form-group pb-2">
					<label for="message">Message</label>
					<textarea name="message" id="message" cols="38" rows="10" class="form-control">{{ old('message') }}</textarea>
				</div>
				<div>{{ $errors->first('message') }}</div>

				@csrf
				<button type="submit" class="btn btn-primary">Send Message</button>

			</form>
		@endif

@endsection

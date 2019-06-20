@extends('layouts.app')

@section('title', 'Form')

@section('content')

	<div class="row">
		<div class="col-12">
			<h1>FIT Form</h1>
			<button class="btn btn-dark btn-lg active"><a href="form/create">Fill in the form</a></button>
		</div>
	</div>

    <h4 class="pt-5"><strong>Click on your name to see your info</strong></h4>

	@foreach($forms as $form)
        <div class="row">
            <div class="col-2">
                <form action="{{ route('form.show', ['form' => $form->id]) }}" class="pb-2">
                @csrf
                <button class="btn btn-warning btn-lg text-white" type="submit" value="Showt">{{ $form->full_name }}</button>
            </form>
            </div>
        </div>
    @endforeach

@endsection

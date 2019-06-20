@extends('layouts.app')


@section('content')

	<div class="row">
		<div class="col-12">
                <h1 class="pb-2 pt-4">Dashboard</h1>
		</div>
	</div>

    <div class="container">
    <div class="row my-2">
        <div class="col-lg-8 order-lg-2">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#messages" data-toggle="tab" class="nav-link">Info</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Edit your account</a>
                </li>
            </ul>
            <div class="tab-content py-4">
                <div class="tab-pane active" id="profile">
                    <h5 class="mb-3"><strong>{{ $form->full_name }}</strong></h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
        <div class="col-12">
            <p><strong>Full name:</strong> {{ $form->full_name }}</p>
            <p><strong>Email:</strong> {{ $form->email }}</p>
            <p><strong>Workout:</strong> {{ $form->workouts }}</p>
        </div>
    </div>
    </div>

    <div class="col-md-6">
    <div class="form-group d-flex flex-column">
        {{-- <label for="image">Profile Image</label>
        <input type="file" name="image" class="py-2">
        <div>{{ $errors->first('image') }}</div> --}}
    </div>
</div>

    </div>
                    <!--/row-->
                </div>
                <div class="tab-pane" id="messages">
                    <div class="alert alert-info alert-dismissable">
                        <a class="panel-close close" data-dismiss="alert">×</a><strong>.ALERT</strong>. Hier horen eigenlijk de exercises, maar de relatie's leggen is helaas niet meer gelukt :(
                    </div>
                </div>
                <div class="tab-pane" id="edit">

    {{-- Buttons --}}
    <div class="col-md-6">
        <h5 class="pb-2"><strong>Wanna change sumn?</strong></h5>
            <form action="{{ route('form.edit', ['form' => $form->id]) }}" class="pb-2">
                @csrf
                <button class="btn btn-success" type="submit" value="Edit">Edit info</button>
            </form>

            <form action="{{ route('form.destroy', ['form' => $form->id]) }}" method="POST" class="pb-2">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger" type="submit" value="Delete">Delete form</button>
            </form>

        <hr>
        </div>

                </div>
            </div>
        </div>

    </div>
</div>

@endsection

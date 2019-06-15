@extends('layouts.app')


@section('content')

	<div class="row">
		<div class="col-12">
			<h1 class="pb-2">Dashboard</h1>
			{{-- <button class="btn btn-dark">
				<a href="{{ route('form.edit', ['form' => $form]) }}">Edit</a>
			</button> --}}
		</div>
	</div>

	<div class="container">
    <div class="row my-2">
        <div class="col-lg-8 order-lg-2">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <h4><strong>Profile</strong></h4>
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

{{-- Buttons --}}
    <div class="col-md-6">
        <h5><strong>Wanna change sumn?</strong></h5>
            <form action="{{ route('form.edit', ['form' => $form->id]) }}" class="pb-2">
                @csrf
                <button class="btn btn-success" type="submit" value="Edit">Edit your info</button>
            </form>

            <form action="{{ route('form.destroy', ['form' => $form->id]) }}" method="POST" class="pb-2">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger" type="submit" value="Delete">Delete</button>
            </form>

        <hr>
        </div>

            {{-- EXTRA??? --}}
            <div class="col-md-12">
                <h5 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span> Recent Activity</h5>
                    <table class="table table-sm table-hover table-striped">
                        <tbody>
                            <tr>
                                <td>
                                    <strong>Abby</strong> joined ACME Project Team in <strong>`Collaboration`</strong>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Gary</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Kensington</strong> deleted MyBoard3 in <strong>`Discussions`</strong>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>John</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Skell</strong> deleted his post Look at Why this is.. in <strong>`Discussions`</strong>
                                </td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
</div>


        </form>

        </div>
        {{-- <div class="col-lg-4 order-lg-1 text-center">
            <img src="//placehold.it/150" class="mx-auto img-fluid img-circle d-block" alt="avatar">
            <h6 class="mt-2">Upload a different photo</h6>
            <label class="custom-file">
                <input type="file" id="file" class="custom-file-input">
                <span class="custom-file-control">Choose file</span>
            </label>
        </div> --}}
    </div>
</div>

@endsection

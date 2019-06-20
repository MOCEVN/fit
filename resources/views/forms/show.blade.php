@extends('layouts.app')


@section('content')

	<div class="row">
		<div class="col-12">
			<button onclick="goBack()">Go Back</button>
                <script>
                    function goBack() {
                        window.history.back();
                                    }
                </script>
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

                       {{--  <div class="col-md-12">
                            <h5 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span>Information</h5>
                            <table class="table table-sm table-striped">
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
                        </div> --}}
                    </div>
                    <!--/row-->
                </div>
                <div class="tab-pane" id="messages">
                    {{-- <div class="alert alert-info alert-dismissable">
                        <a class="panel-close close" data-dismiss="alert">×</a> This is an <strong>.alert</strong>. Use this to show important messages to the user.
                    </div> --}}
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    <h5>BBB</h5>
                                    <input type="checkbox" name="exercise1" value="Leg Press">Leg Press<br>
                                    <input type="checkbox" name="exercise2" value="Leg Curl">Leg Curl<br>
                                    <input type="checkbox" name="exercise3" value="Adductor">Adductor<br>
                                    <input type="checkbox" name="exercise4" value="Abductor">Abductor<br>
                                    <input type="checkbox" name="exercise5" value="Pull Down">Pull Down<br>
                                    <input type="checkbox" name="exercise6" value="Chest Press"> Chest Press<br>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
                <button class="btn btn-danger" type="submit" value="Delete">Delete account</button>
            </form>

        <hr>
        </div>

                </div>
            </div>
        </div>

    </div>
</div>

@endsection

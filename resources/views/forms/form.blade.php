<div class="form-group pb-2">
	<label for="name">First name</label>
		<input type="text"  name="first_name" value="{{ old('first_name')  }}" class="form-control">
</div>
	<div>{{ $errors->first('first_name') }}</div>

<div class="form-group pb-2">
	<label for="name">Lastname</label>
		<input type="text"  name="last_name" value="{{ old('last_name')  }}" class="form-control">
</div>
	<div>{{ $errors->first('last_name') }}</div>


<div class="form-group pb-2">
	<label for="email">Email</label>
		<input type="text"  name="email" value="{{ old('email')  }}" class="form-control">
</div>
	<div>{{ $errors->first('email') }}</div>

<div class="form-group">
	<label class="active">What is your Goal?</label>
		<select name="active" id="active" class="form-control">

	{{-- <option value="1" {{ $form->active == 'Active' ? 'selected' : ''}}>Active</option>
	<option value="0" {{ $form->inactive == 'Inactive' ? 'selected' : ''}}>Inactive</option> --}}
		<option>Choose your Goal</option>
			<option value="0"{{ $form->loseweight == 'Lose weight' ? 'selected' : ''}}>Lose weight</option>
			<option value="1"{{ $form->beginner == 'Beginner' ? 'selected' : ''}}>Beginner Female/Male</option>
			<option value="2"{{ $form->weight == 'Weight' ? 'selected' : ''}}>Weight Training Female/Male</option>
			<option value="3"{{ $form->condition == 'Condition' ? 'selected' : ''}}>Condition</option>
			<option value="4"{{ $form->bbb == 'BBB' ? 'selected' : ''}}>BBB</option>
		</select>
	</div>

	{{-- <div class="form-group">
	<label class="training">How many times a week do you train?</label>
		<select name="training" id="training" class="form-control">
		<option>Choose your option</option>
			<option value="0"{{ $form->training1 == '1 or 2' ? 'selected' : ''}}>1 or 2</option>
			<option value="1"{{ $form->training2 == '3 or 4' ? 'selected' : ''}}>3 or 4</option>
			<option value="2"{{ $form->training3 == '5 or more' ? 'selected' : ''}}>5 or more</option>
		</select>
	</div> --}}

{{-- <div class="form-group">
	<label class="training_id">How many times a week do you train?</label>
		<select name="training" id="training" class="form-control">
			@foreach ($trainings as $training)
						<option value="{{ $training->id }}">{{ $training->id == $form->training_id ? 'selected' : '' }}</option>
					@endforeach
					<option>Choose your option</option>
			<option value="0"{{ $form->training1 == '1 or 2' ? 'selected' : ''}}>1 or 2</option>
			<option value="1"{{ $form->training2 == '3 or 4' ? 'selected' : ''}}>3 or 4</option>
			<option value="2"{{ $form->training3 == '5 or more' ? 'selected' : ''}}>5 or more</option>
		</select>
</div> --}}

			{{-- <div class="form-group">
				<label class="training_id">Trainings</label>
				<select name="training_id" id="training_id" class="form-control">
					@foreach ($trainings as $training)
						<option value="{{ $training->id }}">{{ $training->id == $form->training_id ? 'selected' : '' }}</option>
					@endforeach
				</select>
			</div> --}}
		@csrf


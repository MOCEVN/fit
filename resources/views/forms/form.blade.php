<div class="form-group pb-2">
	<label for="name">Full name</label>
		<input type="text"  name="full_name" value="{{ old('full_name')  }}" class="form-control">
</div>
	<div>{{ $errors->first('full_name') }}</div>


<div class="form-group pb-2">
	<label for="email">Email</label>
		<input type="text"  name="email" value="{{ old('email')  }}" class="form-control">
</div>
	<div>{{ $errors->first('email') }}</div>

<div class="form-group">
	<label class="workouts">Choose your workout</label>
		<select name="workouts" id="workouts" class="form-control">

	{{-- <option value="1" {{ $form->active == 'Active' ? 'selected' : ''}}>Active</option>
	<option value="0" {{ $form->inactive == 'Inactive' ? 'selected' : ''}}>Inactive</option> --}}
		<option>...</option>
			<option value="0"{{ $form->loseWeight == 'Lose weight' ? 'selected' : ''}}>Lose weight</option>

			<option value="1"{{ $form->beginnerFemale == 'Beginner Female' ? 'selected' : ''}}>Beginner Female</option>

			<option value="2"{{ $form->beginnerMale == 'Beginner Male' ? 'selected' : ''}}>Beginner Male</option>

			<option value="3"{{ $form->weightFemale == 'Weight Female' ? 'selected' : ''}}>Weight Training Female</option>

			<option value="4"{{ $form->weightMale == 'Weight Male' ? 'selected' : ''}}>Weight Training Male</option>

			<option value="5"{{ $form->condition == 'Condition' ? 'selected' : ''}}>Condition</option>

			<option value="6"{{ $form->bbb == 'BBB' ? 'selected' : ''}}>BBB</option>
		</select>
	</div>

	<div class="form-group d-flex flex-column">
		<label for="image">Profile Image</label>
		<input type="file" name="image" class="py-2">
		<div>{{ $errors->first('image') }}</div>
	</div>

	@csrf

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


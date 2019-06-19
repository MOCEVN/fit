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

	@csrf


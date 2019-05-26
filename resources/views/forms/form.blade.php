<div class="form-group pb-2">
				<label for="name">Full name</label>
				<input type="text"  name="name" value="{{ old('name')  }}" class="form-control">
			</div>
			<div>{{ $errors->first('name') }}</div>


			<div class="form-group pb-2">
				<label for="email">Email</label>
				<input type="text"  name="email" value="{{ old('name')  }}" class="form-control">
			</div>
			<div>{{ $errors->first('email') }}</div>

			<div class="form-group">
				<label class="active">Choose your Goal</label>
				<select name="active" id="active" class="form-control">


					{{-- <option value="1" {{ $form->active == 'Active' ? 'selected' : ''}}>Active</option>
					<option value="0" {{ $form->inactive == 'Inactive' ? 'selected' : ''}}>Inactive</option> --}}
					<option value="0"{{ $form->loseweight == 'Lose weight' ? 'selected' : ''}}>Lose weight</option>
					<option value="1"{{ $form->beginner == 'Beginner' ? 'selected' : ''}}>Beginner Female/Male</option>
					<option value="2"{{ $form->weight == 'Weight' ? 'selected' : ''}}>Weight Training Female/Male</option>
					<option value="3"{{ $form->condition == 'Condition' ? 'selected' : ''}}>Condition</option>
					<option value="4"{{ $form->bbb == 'BBB' ? 'selected' : ''}}>BBB</option>
				</select>
			</div>

			<div class="form-group">
				<label class="active">How many times a week do you train?</label>
				<select name="training" id="training" class="form-control">
					<option value="0">1 or 2</option>
					<option value="1">3 or 4</option>
					<option value="2">5 or more</option>
				</select>
			</div>

			{{-- <div class="form-group">
				<label class="training_id">Trainings</label>
				<select name="training_id" id="training_id" class="form-control">
					@foreach ($trainings as $training)
						<option value="{{ $training->id }}">{{ $training->id == $form->training_id ? 'selected' : '' }}</option>
					@endforeach
				</select>
			</div> --}}
		@csrf


@extends('layouts.app')

@section('title', 'Workouts & Exercises')

@section('content')

  <!-- Page Content -->
  <div class="container">

    <div class="row">
      <div class="col-md-8 mb-5">
        <h2>Workouts & Exercises</h2>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>
        <a class="btn btn-primary btn-lg" href="form">Get started</a>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
   @foreach($workouts as $workout)
     <h4><b> {{ $workout->name }} </b></h4>

      @foreach($workout->exercises as $exercise)

      {{ $exercise->name }} <br>

      @endforeach

    @endforeach
  </div>
</div>
</div>
</div>

{{-- TEST --}}

<div class="row">
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">

   @foreach($workouts as $workout)
     <h4><b> {{ $workout->name }} </b></h4>

      @foreach($workout->exercises as $exercise)

      {{ $exercise->name }} <br>

      @endforeach

    @endforeach
  </div>
</div>
</div>
</div>

    <!-- /.row -->

    {{-- <div class="row">
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <img class="card-img-top" src="img/7.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Lose Weight</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque sequi doloribus.</p>
          </div>
          <div class="card-footer">
            <a href="https://www.fitforfree.nl/sites/fitforfree.nl/files/Fit-For-Free-Trainingsschema-Afvallen-Technogym.pdf" class="btn btn-primary" target="_blank">More Info</a>
          </div>
        </div>
      </div> --}}

        </div>
      </div>

        </div>
      </div>

    </div>

  </div>



@endsection

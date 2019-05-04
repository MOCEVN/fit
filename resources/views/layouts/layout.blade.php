<!DOCTYPE html>
<html lang="{{ str_replace('_', '_', app()->getLocale()) }}">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="widt=device-width, initial-scale=1">

	<title>FIT</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

	<ul class="nav">
  		<li class="nav-item">
    		<a class="nav-link" href="/">Home</a>
  		</li>

  		<li class="nav-item">
   			<a class="nav-link" href="about">About us</a>
 		</li>

  		<li class="nav-item">
    		<a class="nav-link" href="contact">Contact</a>
  		</li>

  		<li class="nav-item">
    		<a class="nav-link disabled" href="goals">Goals</a>
  		</li>
	</ul>

	<div class="container">
		@yield('content')
	</div>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>

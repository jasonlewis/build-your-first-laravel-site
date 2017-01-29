<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>My Laravel Website</title>

	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
	<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-one">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">My Laravel Website</a>
			</div>

			<div class="collapse navbar-collapse" id="navbar-collapse-one">
				<ul class="nav navbar-nav">
					<li>
						<a href="{{ route('home') }}">Home</a>
					</li>
					<li>
						<a href="{{ route('about') }}">About</a>
					</li>
					<li>
						<a href="{{ route('contact.form') }}">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
		@yield('content')
	</div>
</body>
</html>

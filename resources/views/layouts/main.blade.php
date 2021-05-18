<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<link rel="stylesheet" href="{{asset('css/app.css')}}">
		<title>@yield('pageTitle')</title>
	</head>
	<body>		
		<main>
			{{-- Lista film completa--}}
			<div class="container mt-3">

				<h1>@yield('pageTitle')</h1>
				@yield('main-content')

			</div>
			{{-- //Lista film completa--}}
		</main>		
	</body>
</html>
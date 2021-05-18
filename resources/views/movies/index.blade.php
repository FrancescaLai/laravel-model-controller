<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<link rel="stylesheet" href="{{asset('css/app.css')}}">
		<title>All movies</title>
	</head>
	<body>		
		<main>
			{{-- Lista film completa--}}
			<div class="container">

				<h1>All Movies</h1>

				<ol class="listed-movies">
					@foreach ($movies as $movie)
					<li>
						<h3>{{$movie->title}}</h3>
						<h4>Movie Director: {{$movie->director}}</h4>
						<p>Genre: {{$movie->genres}}</p>
						<a href="{{route('movies.show', [ 'movie' => $movie->id ])}}">Dettaglio film</a>
					</li>
					@endforeach
				</ol>
			</div>
			{{-- //Lista film completa--}}
		</main>		
	</body>
</html>
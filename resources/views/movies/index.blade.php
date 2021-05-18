@extends('layouts.main')

@section('pageTitle')
	All Movies
@endsection

@section('main-content')
    <div class="mb-3 text-right">
		<button type="button" class="btn btn-outline-success">Add movie</button>
	</div>
	
	<table class="table table-striped">
		<thead class="thead-dark">
			<tr>
				<th scope="col">Title</th>
				<th scope="col">Director</th>
				<th scope="col">Genres</th>
				<th scope="col">Actions</th>
			</tr>
		</thead>
		<tbody>
            @foreach ($movies as $movie)
		<tr>
			<td>{{$movie->title}}</td>
			<td>{{$movie->director}}</td>
			<td>{{$movie->genres}}</td>
			<td><a href="{{route('movies.show', [ 'movie' => $movie->id ])}}"><button type="button" class="btn btn-outline-info">Details</button></a></td>
		</tr>
		@endforeach
		</tbody>	
	</table>
@endsection
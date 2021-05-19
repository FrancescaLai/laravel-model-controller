@extends('layouts.main')

@section('pageTitle')
	All Movies
@endsection

@section('main-content')
    <div class="mb-3 text-right">
		<a href="{{route('movies.create')}}"><button type="button" class="btn btn-outline-success">Add movie</button></a>
	</div>
	
	<table class="table table-striped">
		<thead class="thead-dark">
			<tr>
				<th scope="col">Poster</th>
				<th scope="col">Title</th>
				<th scope="col">Director</th>
				<th scope="col">Genres</th>
				<th scope="col">Actions</th>
			</tr>
		</thead>
		<tbody>
            @foreach ($movies as $movie)
		<tr>
			<td><img src="{{$movie->cover_img}}" alt="{{$movie->title}}"></td>
			<td>{{$movie->title}}</td>
			<td>{{$movie->director}}</td>
			<td>{{$movie->genres}}</td>
			<td><a href="{{route('movies.show', [ 'movie' => $movie->id ])}}"><button type="button" class="btn btn-outline-info">Details</button></a></td>
		    <td>
				<form action="{{route('movies.destroy', ['movie' => $movie->id ])}}" method="POST">
					@method('DELETE')
					@csrf
				    <button type="submit" class="btn btn-outline-danger">Delete</button>
				</form>
			</td>
		</tr>
		@endforeach
		</tbody>	
	</table>
	@if (session('message'))
		<div class="alert alert-success">
			{{ session('message')}}
		</div>
	@endif
@endsection
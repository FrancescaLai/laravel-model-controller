@extends('layouts.main')

@section('pageTitle')
    {{$movie->title}}
@endsection

@section('main-content')
    <a href="{{route('movies.index')}}">Torna alla Home</a>

    <h2>{{$movie->year}}</h2>
    <p>{{$movie->plot}}</p>
@endsection


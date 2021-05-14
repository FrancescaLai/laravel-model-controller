<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MovieController extends Controller
{
    public function index(){

        $movies = Movie::all();

        return view('movies.index', ['movies' => $movies]);
    }

    public function show($id){

        $movie = Movie::find($id);

        return view('movies.show', ['movie' => $movie]);
    }
}

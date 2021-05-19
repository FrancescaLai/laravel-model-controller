<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;



class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $movies = Movie::all();

        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $year = date('Y') +1;

        $request->validate([
            'title' => 'required|string|max:100',
            'director' => 'required|string|max:50',
            'genres' => 'required|string|max:50',
            'plot' => 'required|string',
            'year' => 'required|numeric|min:1900|max:'.$year
            ]);

        $movieNew = Movie::create($request->all());

        //Se in Movie.php decido di usare protected/guarded qui devo 1) riscrivere la riga sopra come è ora
        // 2) Commentare tutte le righe commentate qui sotto

        // $movieNew = new Movie();

        // $movieNew->title = $data['title'];
        // $movieNew->director = $data['director'];
        // $movieNew->genres = $data['genres'];
        // $movieNew->plot = $data['plot'];
        // $movieNew->year = $data['year'];
        // if( !empty($data['cover_img']) && isset($data['cover_img']) ){
        //     $movieNew->cover_img = $data['cover_img'];
        // }
        
        // $movieNew->save();

        return redirect()->route('movies.index', $movieNew);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {       
     return view('movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();

        return redirect()->route('movies.index')->with('message', 'The movie has been eliminated');
    }
}

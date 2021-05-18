@extends('layouts.main')

@section('pageTitle')
    Add a new Movie 
@endsection

@section('main-content')

    {{-- Altro snippet per errore con input non correttamente compilata (ora sto usando la class @error) --}}
    {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
             <li>{{ $error }}</li>
         @endforeach
        </ul>
    </div>
    @endif --}}
    {{-- //Altro snippet per errore con input non correttamente compilata (ora sto usando la class @error) --}}
    

    <div class="mt-5">
        <form action="{{route('movies.store')}}" method="POST">
            @method('POST')
            @csrf

            <div class="form-group">
                <label for="cover_img">Poster Movie</label>
                <input type="text" class="form-control" id="cover_img" name="title" placeholder="Image URL">
            </div>
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="New title">
            </div>
            <div class="form-group">
                <label for="director">Director</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="director" name="director" placeholder="Name director">
            </div>
            <div class="form-group">
                <label for="genres">Genres</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="genres" name="genres" placeholder="Genre">
            </div>
            <div class="form-group">
                <label for="plot">Plot</label>
                <textarea class="form-control @error('title') is-invalid @enderror" id="plot" name="plot" rows="20" placeholder="Enter the plot"></textarea>
            </div>
            <div class="form-group">
                <label for="plot">Year</label>
                <select class="form-control @error('title') is-invalid @enderror" id="year" name="year">
                    @for ($i = 1900; $i <= date('Y') + 1; $i++)
                        <option value="{{$i}}">{{$i}}</option>
                    @endfor
                  </select>
            </div>
            
            


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>   
@endsection

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>
        <main>

            <a href="{{route('movies.index')}}">Torna alla Home</a>

            <h1>{{$movie->title}}</h1>
            {{-- <h2>{{$movie->year}}</h2> --}}
            <p>{{$movie->plot}}</p>

        </main>
    </body>
</html>


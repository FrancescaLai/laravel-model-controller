<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All movies</title>
</head>
<body>
    

   <h1>All movies</h1>

   <ul>
       @foreach ($movies as $movie)
       <li>
           <h3>{{$movie->title}}</h3>
           <p>{{$movie->author}}</p>

           <a href="{{route('movies.show', ['movie' => $movie->id])}}">Dettagli film</a>
       </li>
       @endforeach
   </ul>

</body>
</html>
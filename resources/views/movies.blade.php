<h1>MOVIES</h1>

<ul>
    @foreach ($movies as $movie)
        <li>{{ $movie->title }}</li>
    @endforeach
</ul>
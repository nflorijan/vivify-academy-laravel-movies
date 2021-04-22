@extends('layouts.app')

@section('title', 'Vivify Movies')

@section('content')
  <h2>Movies</h2>
  <ul class="list-group list-group-flush">
    @foreach ($movies as $movie)
      <li class="list-group-item">
        <h4><a href="{{ route('movie', ['movie' => $movie->id]) }}">{{ $movie->title }}</a></h4>
        <p>{{ Str::limit($movie->storyline, 80, '...') }}</p>
      </li>
    @endforeach
  </ul>
@endsection
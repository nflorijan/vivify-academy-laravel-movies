@extends('layouts.app')

@section('title', $movie->title)

@section('content')
  <h4>{{ $movie->title }}</h4>
  <p><strong>Genre:</strong> {{ $movie->genre }}</p>
  <p><strong>Director:</strong> {{ $movie->director }}</p>
  <p><strong>Published at:</strong> {{ $movie->published_at }}</p>
  <p>{{ $movie->storyline }}</p>
@endsection
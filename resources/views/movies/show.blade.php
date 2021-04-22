@extends('layouts.app')

@section('title', $movie->title)

@section('content')
  <h4>{{ $movie->title }}</h4>
  <p><strong>Genre:</strong> {{ $movie->genre }}</p>
  <p><strong>Director:</strong> {{ $movie->director }}</p>
  <p><strong>Published at:</strong> {{ $movie->published_at }}</p>
  <p>{{ $movie->storyline }}</p>
  <h4>Comments:</h4>
  <ul>
    @forelse ($movie->comments as $comment)
      <li>
        {{ $comment->content}}
        <br>
        <span>Date: {{ $comment->published_at}}</span>
      </li>
      @empty
      <span>No Comments</span>
    @endforelse
  </ul>
  <form action="/movies/{{ $movie->id }}/comments" method="POST">
    @csrf
    <div class="form-group">
      <label for="movie-content">Add Comment</label>
      <input type="hidden" name="published_at" value="{{ date('Y-m-d') }}">
      <textarea 
        name="content" 
        id="movie-content" 
        class="form-control  
        @error('content')is-invalid @enderror" 
        rows="2" 
        placeholder="Post content"></textarea>
      @error('content')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
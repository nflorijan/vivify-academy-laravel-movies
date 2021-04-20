@extends('layouts.app')

@section('title', 'Add a Movie')

@section('content')
    <h2>Add Movie</h2>
    <form action="/movies" method="POST">
      @csrf
      <div class="form-group">
        <label for="movie-title">Movie title</label>
        <input 
          name="title" 
          id="movie-title" 
          type="text" 
          class="form-control" 
          placeholder="Movie title"
          >
      </div>
      <div class="form-group">
        <label for="movie-genre">Movie genre</label>
        <input 
          name="genre" 
          id="movie-genre" 
          type="text" 
          class="form-control" 
          placeholder="Movie genre"
          >
      </div>
      <div class="form-group">
        <label for="movie-date">Published at</label>
        <input 
          name="published_at" 
          id="movie-date" 
          type="date" 
          class="form-control"
          min='1900-01-01' max='{{ date('Y-m-d') }}' 
          >
      </div>
      <div class="form-group">
        <label for="movie-story">Storyline</label>
        <textarea 
          name="storyline" 
          id="movie-story" 
          class="form-control"
          ></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Add movie</button>
    </form>
@endsection



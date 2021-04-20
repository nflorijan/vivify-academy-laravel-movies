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
          class="form-control @error('title')is-invalid @enderror" 
          placeholder="Movie title"
          >
          @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
      </div>
      <div class="form-group">
        <label for="movie-director">Movie director</label>
        <input 
          name="director" 
          id="movie-director" 
          type="text" 
          class="form-control @error('director')is-invalid @enderror" 
          placeholder="Movie director"
          >
          @error('director')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
      </div>
      <div class="form-group">
        <label for="movie-genre">Movie genre</label>
        <input 
          name="genre" 
          id="movie-genre" 
          type="text" 
          class="form-control @error('genre')is-invalid @enderror" 
          placeholder="Movie genre"
          >
          @error('genre')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
      </div>
      <div class="form-group">
        <label for="movie-date">Published at</label>
        <input 
          name="published_at" 
          id="movie-date" 
          type="date" 
          class="form-control @error('published_at')is-invalid @enderror"
          min='1900-01-01' max='{{ date('Y-m-d') }}' 
          >
          @error('published_at')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
      </div>
      <div class="form-group">
        <label for="movie-story">Storyline</label>
        <textarea 
          name="storyline" 
          id="movie-story" 
          class="form-control @error('storyline')is-invalid @enderror"
          ></textarea>
          @error('storyline')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
      </div>
      <button type="submit" class="btn btn-primary">Add movie</button>
    </form>
@endsection



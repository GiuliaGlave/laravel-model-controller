@extends('layouts.app')

@section('page-name')
Movie List
@endsection

@section('movie-list')

<div class="container my-5">
  <div class="row row-cols-4 g-3">

  @foreach ($movies as $movie)
  <div class="col">
    <div class="card ">
      <div class="card-body d-flex justify-content-between flex-column">
        <h5 class="card-title">{{$movie->title}}</h5>
        <p class="card-text">{{$movie->original_title}}</p>
        <p class="card-text"><small>{{$movie->date}}</small></p>
        <p class="card-text d-flex justify-content-end "><small class="text-muted">{{$movie->nationality}}</small></p>
      </div>
      <div class="card-footer">
        <small class="text-muted d-flex justify-content-center">voto: {{$movie->vote}}</small>
      </div>
    </div>
  </div>
   @endforeach
  
  </div>
</div>
@endsection




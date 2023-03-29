@extends('layouts.app')

@section('page-name')
Movie List
@endsection

@section('movie-list')

<section class="pt-5 ">
    <ul class="my-5">
        @foreach ($movies as $movie)
      <li class="mb-4">
        <a href="#">        
          <div class="series">{{$movie->title}}</div>
          <div class="series">{{$movie->original_title}}</div>
          <div class="series">{{$movie->nationality}}</div>
          <div class="series">{{$movie->date}}</div>
          <div class="series">{{$movie->vote}}</div>
        </a>
      </li>
      @endforeach
    </ul>
@endsection




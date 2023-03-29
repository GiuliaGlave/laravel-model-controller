<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function movieList(){
        $movies = Movie::all();
      
        return view('movie_list', compact('movies'));
    }
}
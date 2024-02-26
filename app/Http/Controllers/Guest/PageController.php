<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all(); // Recupera tutti i film dal database
        return view('welcome', compact('movies')); // Passa i film alla view
    }

    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }
}


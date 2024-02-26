@extends('layouts.app')

@section('page-title', $movie->title)

@section('main-content')

<div class="row p-5">
    <div class="col-12 p-5 my-5">
        <div class="card bg-primary movie-blue">
            <div class="card-body text-center">
                <h1 class="text-warning fs-1 fw-bold">
                    Titolo: {{ $movie->title }}
                </h1>

                <p class="text-warning fs-1">
                    Titolo Originale: {{ $movie->original_title }}
                </p>

                <p class="text-warning fs-1">
                   Nazionalità: {{ $movie->nationality }}
                </p>

                <p class="text-warning fs-1">
                    Data: {{ $movie->date }}
                </p>

                <p class="text-warning fs-1">
                    Voto: {{ $movie->vote }}
                </p>
            </div>
        </div>
    </div>
    <a href="{{ route('movies.index') }}" class="btn btn-primary text-center w-25 p-3 mb-5 m-auto movie-blue">
        <span class="text-warning fw-bold fs-3">Back To Home <i class="fa-solid fa-home"></i></span>
    </a>
</div>
@endsection
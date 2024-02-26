@extends('layouts.app')

@section('page-title', 'Tutti i Film')

@section('main-content')

<div class="row">
    @foreach ($movies as $index => $movie)
        <div class="col-12 col-sm-6 px-5 py-4">
            <div class="card bg-primary movie-blue">
                <div class="card-body text-center">
                    <h2 class="text-warning">
                        {{ $movie->title }}
                    </h2>

                    <a href="{{ route('movies.show', ['movie' => $movie->id]) }}" class="btn btn-warning text-center movie-yellow">
                        <span class="text-primary fw-bold">Go To Movie <i class="fa-solid fa-film"></i></span>
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
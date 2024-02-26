@extends('layouts.app')

@section('page-title', 'Tutti i Film')

@section('main-content')
<h1>
    Movies
</h1>

<div class="row">
    @foreach ($movies as $index => $movie)
        <div class="col-12 col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h3>
                        {{ $movie->title }}
                    </h3>

                    <a href="{{ route('movies.show', ['movie' => $movie->id]) }}" class="btn btn-primary">
                        vai al film
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
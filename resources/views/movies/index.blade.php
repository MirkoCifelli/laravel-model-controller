@extends('layouts.app')

@section('page-title', 'Tutti i Film')

@section('main-content')
<h1 class="text-center">
    Film
</h1>

<div class="row justify-content-center ">
    @foreach ($movies as $index => $movie)
        <div class="col-3 m-3 ">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center">
                        {{ $movie->title }}
                    </h3>
                    <ul class=" list-unstyled text-center">
                        <li>
                           Titolo Originale: {{$movie->original_title}}
                        </li>
                        <li>
                          Nazionalita: {{$movie->nationality}}
                        </li>
                        <li>
                          Data: {{$movie->date}}
                        </li>
                        <li>
                           Voto: {{$movie->vote}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
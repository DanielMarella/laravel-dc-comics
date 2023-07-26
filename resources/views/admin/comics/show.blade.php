@extends('layouts.app')

@section('title', 'Single Comic')

@section('main-content')



<div class="container">
    <h1 class="mb-3">
        Comic: {{ $comic->title}}
    </h1>
    <div class="row">
        <div class="card col-12" >
            <img src="{{ $comic->thumb}}" class="card-img-top w-25" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{ $comic->title}}</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Price: {{ $comic->price}} </li>
                <li class="list-group-item">Series: {{ $comic->series}}</li>
                <li class="list-group-item">Sale Date: {{ $comic->sale_date}}</li>
                <li class="list-group-item">Type: {{ $comic->type}}</li>
                <li class="list-group-item">Artists: {{ $comic->artists}}</li>
                <li class="list-group-item">Writers: {{ $comic->writers}}</li>
            </ul>
            <div class="card-body">
                <p class="card-text">{{ $comic->description}}</p>

            </div>
        </div>
    </div>
</div>

@endsection
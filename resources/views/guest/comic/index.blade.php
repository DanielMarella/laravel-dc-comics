@extends('layouts.app')

@section('title', 'Comics List')

@section('main-content')

<h1>
    Comics list
</h1>

    <ul>
        @foreach ($comicList as $comic)
            <li class="mb-4">
                {{ $comic->title}}
                {{ $comic->description}}
                {{ $comic->thumb}}
                {{ $comic->price}}
                {{ $comic->series}}
                {{ $comic->sale_date}}
                {{ $comic->type}}
                {{ $comic->artists}}
                {{ $comic->writers}}

            </li>
        @endforeach
    </ul>
@endsection
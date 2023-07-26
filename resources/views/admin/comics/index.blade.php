@extends('layouts.app')

@section('title', 'Admin Comics Index')

@section('main-content')

<div class="container">
    
    <h1 class="mb-5">
        Comics Index
    </h1>
    <div class="row">
        <div class="col-12">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">
                            id
                        </th>
                        <th scope="col">
                            Title
                        </th>
                        <th scope="col">
                            Price
                        </th>
                        <th scope="col">
                            Series
                        </th>
                        <th scope="col">
                            Sale_date
                        </th>
                        <th scope="col">
                            Type
                        </th>
                        <th scope="col">
                            Action
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($comicList as $comic)
                        
                    <tr>
                        <th scope="row">{{ $comic->id}}</th>
                        <td>
                            {{ $comic->title}}
                        </td>
                        <td>
                            {{ $comic->price}}
                        </td>
                        <td>
                            {{ $comic->series}}
                        </td>
                        <td>
                            {{ $comic->sale_date}}
                        </td>
                        <td>
                            {{ $comic->type}}
                        </td>
                        <td>
                             <a class="btn btn-sm btn-primary" href="{{route('admin.comics.show', $comic->id)}}">View</a>
                             <a class="btn btn-sm btn-success" href="{{route('admin.comics.edit', $comic->id)}}">Edit</a>

                             <form action="{{route('admin.comics.destroy', [ $comic->id ])}}" class="d-inline" method="POST">
                                @csrf
                                @method('DELETE')
                                 <button type="submit" class="btn btn-sm btn-danger">Remove</button>
                             </form>
                        </td>
                    </tr>
                </tbody>   
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
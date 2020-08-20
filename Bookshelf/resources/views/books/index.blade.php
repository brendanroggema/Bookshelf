@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <td>Title</td>
            <td>Writer</td>
            <td>Year</td>
            <td>Actie</td>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
                <td>{{$book->title}}</td>
                <td>{{$book->writer}}</td>
                <td>{{$book->year}}</td>
                <td><a href="{{ route('books.edit',$book->id)}}" class="btn btn-primary">Wijzig</a></td>
                <td>
                    <form method="post" action="{{ route('books.destroy', $book->id) }}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">verwijder</button>
                    </form>

                </td>
            </tr>
        @endforeach
        </tbody>
        <a href="{{ route('books.create')}}" class="btn btn-primary">Create</a>
    </table>
@endsection

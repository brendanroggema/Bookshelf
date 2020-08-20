@extends('layouts.app')

@section('content')
    <form method="post" action="{{ route('books.update', $book->id) }}">
        @method('PATCH')
        <div class="form-group">
            @csrf
            <label>Title</label>
            <input type="text" class="form-control" name="title" value="{{$book->title}}"/>
        </div>
        <div class="form-group">
            <label>Writer</label>
            <input type="text" class="form-control" name="writer" value="{{$book->writer}}"/>
        </div>
        <div class="form-group">
            <label>Year</label>
            <input type="text" class="form-control" name="year"value="{{$book->year}}"/>
        </div>

        <button type="submit" class="btn btn-primary">Change</button>
    </form>
@endsection

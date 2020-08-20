@extends('layouts.app')
@section('content')
    <form method="post" action="{{ route('books.store') }}">
        <div class="form-group">
            @csrf
            <label>Title</label>
            <input type="text" class="form-control" name="title"/>
        </div>
        <div class="form-group">
            <label>Writer</label>
            <input type="text" class="form-control" name="writer"/>
        </div>
        <div class="form-group">
            <label>Year</label>
            <input type="text" class="form-control" name="year"/>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
@endsection

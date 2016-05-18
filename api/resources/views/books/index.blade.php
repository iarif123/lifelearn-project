@extends('layouts.default')

@section('content')
    <h1 class="title">Books Home Page</h1>

    @if(count($errors)>0)
    <div class = "alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <ul>
        @foreach($books as $book)
            <li>{!! HTML::linkRoute('book', $book->name, array($book->id)) !!}</li>
        @endforeach
    </ul>

    <p>{!! HTML::linkRoute('new_book', 'Create New Book') !!}</p>
@endsection
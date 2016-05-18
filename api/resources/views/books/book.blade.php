@extends('layouts.default')

@section('content')
    <h1>{{ $book->name }}</h1>
    <h3>{{ $book->author }}</h3>
    <p><small>{{ $book->updated_at }}</small></p>

    <span>
        {!! HTML::linkRoute('books', 'Books') !!} |
        {!! HTML::linkRoute('edit_book', 'Edit', array($book->id)) !!} |
        {!! Form::open(array('url' => 'book/delete','method' => 'DELETE', 'style'=>'display:inline;')) !!}
        {!! Form::hidden('id',$book->id) !!}
        {!! Form::submit('Delete') !!}
        {!! Form::close() !!}
    </span>
@endsection
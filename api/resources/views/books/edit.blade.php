@extends('layouts.default')

@section('content')
    <h1>Editing {!! $book->name !!}</h1>

    @if(count($errors)>0)
    <div class = "alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {!! Form::open(array('url' => 'book/update','method' => 'PUT')) !!}
    <p>
        {!! Form::label('name','Name:') !!}<br/>
        {!! Form::text('name', $book->name ) !!}
    </p>

    <p>
        {!! Form::label('author','Author:') !!}<br/>
        {!! Form::text('author', $book->author ) !!}
    </p>
    {!! Form::hidden('id',$book->id) !!}

    <p>{!! Form::submit('Update Book') !!}</p>

    {!! Form::close() !!}
@endsection
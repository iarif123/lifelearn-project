@extends('layouts.default')

@section('content')
    <h1 class="title">Add New Book</h1>

    @if(count($errors)>0)
    <div class = "alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {!! Form::open(array('url' => 'books/create')) !!}
    <p>
        {!! Form::label('name','Name:') !!}<br/>
        {!! Form::text('name', Input::old('name')) !!}
    </p>

    <p>
        {!! Form::label('author','Author:') !!}<br/>
        {!! Form::text('author', Input::old('author')) !!}
    </p>

    <p>{!! Form::submit('Update Book') !!}</p>

    {!! Form::close() !!}
@endsection
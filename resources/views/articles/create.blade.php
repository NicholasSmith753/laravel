@extends('app')

@section('content')
    <h1>Write a New Article</h1>

    <hr/>

    {!! Form::open(['url' => 'articles') !!}
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name') !!}

        {!! Form::label('name', 'Name:') !!}
        {!! Form::textarea('name') !!}
    {!! Form::close() !!}

@stop
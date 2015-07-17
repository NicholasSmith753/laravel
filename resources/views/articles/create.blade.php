@extends('app')

@section('content')
    <h1>Write a New Article</h1>

    <hr/>

    {!! Form::open(['url' => 'articles']) !!}
        <div class="formgroup">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}

        </div>

        <div class="formgroup">
            {!! Form::label('body', 'Body:') !!}
            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">
            {!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control']) !!}
        </div>

    {!! Form::close() !!}

@stop
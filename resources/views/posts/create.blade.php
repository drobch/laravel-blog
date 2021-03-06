@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create post</h1>

        {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}

            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
            </div>

            <div class="form-group">
                {{Form::label('body', 'Body text')}}
                {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body text'])}}
            </div>
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection


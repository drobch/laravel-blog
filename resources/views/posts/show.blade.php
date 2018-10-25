@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/posts" class="btn btn-link">Back to posts</a>


        <h1>{{$post->title}}</h1>
        <p>
            {{$post->body}}
        </p>
        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>

        <hr>
        <a href="/posts/{{$post->id}}/edit" class="btn btn-default float-left">Edit</a>
        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-left']) !!}
            {{Form::hidden('_method', 'DELETE')}}
            {{ Form::submit('Delete', ['class' => 'btn btn-link']) }}
        {!! Form::close() !!}
    </div>
@endsection


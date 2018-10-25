@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Dashboard</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                @if(count($posts) > 0)
                    <p>Your blog posts</p>
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($posts as $post)
                            <tr>
                                <td><a href="/posts/{{$post->id}}">{{$post->title}}</a></td>
                                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                                <td>
                                    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-left']) !!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{ Form::submit('Delete', ['class' => 'btn btn-link']) }}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach

                    </table>
                @else
                    <p>You have no posts</p>
                @endif



            </div>
        </div>
    </div>
</div>
@endsection

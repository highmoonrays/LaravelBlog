@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
    <div>
        {{$post->body}}
    </div>
    <small>Written on {{$post->created_at}} By {{$post->user->name}}</small>
    <br>
    <a href="/posts" class="btn btn-dark">Back</a>

    @if(!Auth::guest())
        @if(Auth::user()->id === $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-dark">Edit Post</a>

            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull->right']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!! Form::close() !!}
        @endif
    @endif
@endsection

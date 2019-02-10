@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/posts" class="btn btn-primary btn-sm">Go Back</a>
        <h1>{{$post->title}}</h1>
        <div class="card mt-2">
            <div class="card-body">
                <h3>{{$post->title}}</h3>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <img style="width:100%;" src="/storage/cover_images/{{$post->cover_image}}" />
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12 mt-sm-2">
                    {!!$post->body!!}
                    </div>
                </div>
                <small>written on {{date('d-m-Y H:i:s', strtotime($post->created_at)) }} by {{$post->user->name}}</small>
                <hr/>
                @auth
                    @if(Auth::user()->id == $post->user->id)
                        <a href="/posts/{{$post->id}}/edit" class="btn btn-primary" />Edit</a>
                        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {!! Form::close() !!}
                    @endif
                @endauth
            </div>
        </div>
    </div>
@endsection
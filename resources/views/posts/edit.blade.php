@extends('layouts.app')

@section('content')
    <div class="container mb-2">
        <h1>Edit Post</h1>
        {!! Form::model($post,['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

        @include('posts.form', ['button_name' =>'Update'])

        {{Form::hidden('_method', 'PUT')}}

        {!! Form::close() !!}
    </div>
@endsection

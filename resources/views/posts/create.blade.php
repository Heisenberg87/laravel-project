@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Post</h1>

    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        @include('posts.form', ['button_name' =>'Create'])
{!! Form::close() !!}
</div>
@endsection
@extends('layouts.app')

@section('content')
    <h3>Posts</h3>
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card mt-2 mb-2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img style="width:100%;" src="/storage/cover_images/{{$post->cover_image}}" />
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <a href="/posts/{{$post->id}}"><h3>{{$post->title}}</h3></a>
                            <small>written on {{date('d-m-Y H:i:s', strtotime($post->created_at)) }} by {{$post->user->name}}</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
            {{$posts->links()}}
        </div>
    @else
        <p>No posts found</p>
    @endif
@endsection
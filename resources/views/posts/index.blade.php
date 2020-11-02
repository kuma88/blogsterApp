@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts)> 0)
        <div class ="container">
            @foreach($posts as $post)
            <div class="card">
                <div class='card-body'>
                    <div class = "col-md-8 col-sm-6">
                        <h3 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</h3>
                        <small class="card-text">Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                    <div class = "col-md-4 col-sm-4">
                        <img class="card-img-top" style="width:300px;height:200px;" src='/storage/cover_images/{{$post->cover_image}}'>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    {{$posts->links()}}
    @else
     <p>No Posts Found</p>
    @endif
@endsection
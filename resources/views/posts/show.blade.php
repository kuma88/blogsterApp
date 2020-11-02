@extends('layouts.app')

@section('content')
    <a href="/posts" class= "btn btn-default">Return</a>
    <h1>{{$post->title}}</h1>
    <img class="card-img-top col-md-8 col-sm-12" style="width:500px;height:500px;" src='/storage/cover_images/{{$post->cover_image}}'>
    <br>
    <div>
        <!--"this converts to !!convert to html text!!"-->
        <h4>{!!$post->body!!}<h4> 
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>

    @if(!Auth::guest())
        @if(Auth::user()-> id == $post->user_id)
        <a href="/posts/{{$post->id}}/edit" class= "btn-outline-primary">Edit Post</a>

            <form action="/posts/{{ $post->id }}" method="POST" class = 'pull-right'>
                @csrf
                @method('DELETE')
                {{Form::Submit('Delete this Post', ['class' => 'btn btn-warning'])}}
            </form>
        @endif
    @endif
@endsection
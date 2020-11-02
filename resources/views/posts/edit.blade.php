@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::model($post, [
        'route' => ['posts.update', $post->id],
         'method' => 'PUT', 'enctype'=>'multipart/form-data']) !!}
        @csrf
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('title', 'Description')}}
            {{Form::textarea('body', $post->body, ['id' => 'summary-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
        <!--{{Form::hidden('')}}-->
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::Submit('Enter', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection

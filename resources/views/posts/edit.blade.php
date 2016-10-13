@extends('layouts.master')

@section('content')
    <form method="POST" action="{{ action('PostsController@update', $post->id) }}">
        {!! csrf_field() !!}
        {!! method_field('PUT') !!}
        @if($errors->has('title'))
            <div class="alert alert-danger">
                {{ $errors->first('title') }}
            </div>
        @endif
        Title: <input type="text" name="title" value="{{ (old('title') == null) ? $post->title : old('title') }}">
        <br>
        @if($errors->has('url'))
            <div class="alert alert-danger">
                {{ $errors->first('url') }}
            </div>
        @endif
        Url: <input type="text" name="url" value="{{ (old('url') == null) ? $post->url : old('url') }}">
        <br>
        @if($errors->has('content'))
            <div class="alert alert-danger">
                {{ $errors->first('content') }}
            </div>
        @endif
        Content: <textarea name="content">{{ (old('content') == null) ? $post->content : old('content') }}</textarea>
        <br>
        <button class="btn btn-primary">Submit</button>
    </form>
@stop

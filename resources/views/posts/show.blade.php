@extends('layouts.app')
@section('content')
    <h1>

        <a href="{{route('posts.edit',$post->id)}}">{{$post->title}}</a></h1>
    <p>{{$post->content}}</p>
    <div class="text-center">
        <img src="{{$post->path}}" width="550" alt="">
    </div>
@endsection

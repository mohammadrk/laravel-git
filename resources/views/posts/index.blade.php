@extends('layouts.app')
@section('content')
    <ul>
        @foreach($posts as $post)

            <li style="margin: 25px">
                <img src="{{$post->path}}" width="85" alt="">
                <a href="{{route('posts.show',$post->id)}}">
                    {{$post->title}}
                </a></li>
        @endforeach

    </ul>
@endsection

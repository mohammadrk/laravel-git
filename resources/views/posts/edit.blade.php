@extends('layouts.app')
@section('content')


    {!! Form::model($post,['method' => 'PATCH', 'action' => ['PostsController@update',$post->id]]) !!}
    <div class="form-group">
        {!! Form::label('title','عنوان : ' ) !!}
        {!! Form::text('title',$post->title ,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('body', 'توضحیات:') !!}
        {!! Form::textarea('body', $post->content,['class'=>'form-control']) !!}
    </div>
    <br>
    <div class="form-group">
        {!! Form::submit('بروز رسانی', ['class' => 'btn btn-success']) !!}
    </div>
    {!! Form::close() !!}

    {!! Form::model($post, ['method' => 'DELETE','action'=>['PostsController@destroy',$post->id]]) !!}
    <div class="form-group">
        {!! Form::submit('حذف', ['class' => 'btn btn-success']) !!}
    </div>

    {!! Form::close() !!}
    {{--
        <form method="post" action="/posts/{{$post->id}}">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <input type="text" name="title" placeholder="عنوان مطلب" value="{{$post->title}}">
            <br>
            <textarea name="body" placeholder="توضییحات" >{{$post->content}}</textarea>
            <br>
            <button name="submit" type="submit">ذخیره</button>
        </form>--}}
    {{--    <form method="post" action="/posts/{{$post->id}}">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
           <button type="submit" name="submit">حذف</button>
        </form>--}}

@endsection


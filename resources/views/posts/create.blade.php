@extends('layouts.app')
@section('content')

    @if ($errors->any())

            <div class="alert alert-danger">
                @foreach($errors->all() as $error)

                   {{$error}}<br>

                    @endforeach
                </div>


    @endif

{!! Form::open(['method' => 'POST', 'action' => 'PostsController@store','files'=>true]) !!}
   <div class="form-group">
    {!! Form::label('title', 'عنوان:') !!}
    {!! Form::text('title',null,['class'=>'form-control','placeholder'=>'عنوان خود را وارد کنید ']) !!}
</div>
<div class="form-group">
        {!! Form::label('body', 'توضحیات:') !!}
        {!! Form::textarea('body', null,['class'=>'form-control','placeholder'=>'توضیحات خود را وارد کنید']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('file', 'فایل:') !!}
        {!! Form::file('file', null,['class'=>'form-control']) !!}
    </div>
<br>
<div class="form-group">
    {!! Form::submit('ذخیره', ['class' => 'btn btn-success']) !!}
</div>
{!! Form::close() !!}



    {{--<form method="post" action="posts">
        @csrf
        <input type="text" name="title" placeholder="عنوان مطلب">
        <br>
        <textarea name="body" placeholder="توضییحات" ></textarea>
        <br>
        <button name="submit" type="submit">ذخیره</button>
    </form>--}}

    @endsection


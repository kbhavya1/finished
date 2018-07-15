@extends('layouts.app')

@section('profile')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <img src="storage/profile_images/{{ $user->profile_image }}" style="height: 40vh;width: 40vh;float: left;border-radius: 50%;">
                <h1>{{ $user->name }}'s Profile</h1>
            </div>

        {!! Form::open(['action'=>'ImageController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::file('profile_image')}}


            {!!  Form::token(); !!}

        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
        </div>
    </div>
@endsection
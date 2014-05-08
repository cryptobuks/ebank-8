@extends('layouts.layout')

@section('content')
    <p>Register</p>
    {{ Form::open(array('url' => 'foo/bar')) }}
    <div class="form-group">
    {{ Form::label('email', 'E-Mail Address') }}
    {{ Form::text('email', 'example@gmail.com') }}
    </div>
    <div class="form-group">
    {{ Form::label('passwd', 'Password') }}
    {{ Form::password('password') }}
    </div>
    <div class="form-group">
    {{ Form::label('utype', 'User Type') }}
    {{ Form::radio('utype', 'Investor') }}Investor
    {{ Form::radio('utype', 'Enterprise') }}Enterprise
    </div>
    {{ Form::close() }}
@stop
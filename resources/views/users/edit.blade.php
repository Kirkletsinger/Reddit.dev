@extends('layouts.master')

@section('content')
    <form method="POST" action="{{ action('UserController@update', $user->id) }}">
        {!! csrf_field() !!}
        {!! method_field('PUT') !!}
        Name: <input type="text" name="name" value="{{ (old('name') == null) ? $user->name : old('name') }}">
        <br>
        Email: <input type="text" name="email" value="{{ (old('email') == null) ? $user->email : old('email') }}">
        <br>
        Password: <input type="text" name="email" value="{{ (old('passwrod') ==null) ? $user->password :old('password')}}"
        <br>
        <button class="btn btn-primary">Submit</button>
    </form>
@stop

@extends('layouts.master')

@section('content')
		<form method="POST" action="{{ action('UserController@store') }}">
			{!! csrf_field() !!}
			Name: <input type="text" name="name" value="{{ old('name') }}">
			Email: <input type="text" name="email" value="{{ old('email') }}">
      Password: <input type="text" name="password" value="{{ old('password') }}">
			<input type="submit">
		</form>
@stop

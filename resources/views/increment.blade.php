@extends('layouts.master')

@section('content')
	<h2>{{ $num }}</h2>
	<h2>{{++$num}}</h2>
@stop

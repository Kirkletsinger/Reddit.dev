
@extends('layouts.master')

@section('content')
    <h1>Show</h1>

    <table class="table table-striped table-bordered">


    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
     </tr>
    <tr>

        <td>{{ $user->name }}</td>
        <td>{{ $user->url }}</td>
        <td>{{ $user->password }}</td>
   </tr>

    </table>

@stop

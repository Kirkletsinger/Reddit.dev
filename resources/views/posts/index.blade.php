@extends('layouts.master')

@section('content')
    <h1>Index</h1>

    <table class="table table-striped table-bordered">


    <tr>
        <th>Title</th>
        <th>Url</th>
        <th>Content</th>
     </tr>

@foreach ($posts as $post)

    <tr>

        <td>{{ $post->title }}</td>
        <td>{{ $post->url }}</td>
        <td>{{ $post->content }}</td>
   </tr>

@endforeach

    </table>

@stop

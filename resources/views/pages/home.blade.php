@extends('layouts.main-layout')
@section('content')
<table border='1'>
    <tr>
       <th>Title</th>
       <th>Author</th>
       <th>Text</th>
       <th>Likes</th>
    </tr>
    @foreach ($posts as $post)
    <tr>
        <th>{{$post -> title}}</th>
       <th>{{$post -> author}}</th>
       <th>{{$post -> text}}</th>
       <th>{{$post -> likes}}</th>
    </tr>
        
    @endforeach
</table>
@endsection
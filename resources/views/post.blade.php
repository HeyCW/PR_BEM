@extends('layouts.main')
@section('container')
@foreach($posts as $post)
    @if ($slug === $post['slug'])
    <article>
        <h3>{{$post["title"]}}</h3> 
        <h5>By: {{$post['author']}}</h5>
        <p>{{$post["body"]}}</p>
    </article>
    @endif
@endforeach    
    <a href="../blog">Back to Posts</a>
@endsection
@extends('layouts.main')
@section('container')
    <h1>Post Category : {{$category}}</h1>

    @foreach ($posts as $post)
    <article class="mb-5">
        <a href="/posts/{{$post->slug}}" ><h3>{{$post->title}}</h3></a>
        <h5>By: {{$post ->author}}</h5>
        {!! $post->excerpt !!}
    </article>
    @endforeach
@endsection
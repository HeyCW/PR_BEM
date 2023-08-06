@extends('layouts.main')
@section('container')
    <h1>User Posts</h1>

    @foreach ($posts as $post)
    <article class="mb-5 border-bottom pb-4">
        <a href="/posts/{{$post->slug}}" class="text-decoration-none" ><h3>{{$post->title}}</h3></a>

        <h6>By: <a href="/users/{{ $post->author->username }}" class="text-decoration-none" >{{ $post->author->name }}</a></h6>
        <h6><a href="/categories/{{$post->category->slug}}" class="text-decoration-none">{{$post->category->name}}</a></h6>

        {!! $post->excerpt !!}
        <br>
        <a href="/posts/{{$post->slug}}" class="text-decoration-none" >Read more...</a>


    </article>
    @endforeach
@endsection
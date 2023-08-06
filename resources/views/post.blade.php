@extends('layouts.main')
@section('container')
{{-- @foreach($posts as $post) --}}
    {{-- @if ($slug === $post['slug']) --}}
    <article>
        <h3>{{$post->title}}</h3> 
        <h6>By: <a href="/users/{{ $post->author->username }}" class="text-decoration-none" >{{ $post->author->name }}</a></h6>
        <h6><a href="/categories/{{$post->category->slug}}" class="text-decoration-none">{{$post->category->name}}</a></h6>
        {!! $post->body !!}
    </article>
    {{-- @endif --}}
{{-- @endforeach     --}}
    <a href="../blog" class="text-decoration-none d-block mt-3">Back to Posts</a>
@endsection



@extends('layouts.main')
@section('container')
{{-- @foreach($posts as $post) --}}
    {{-- @if ($slug === $post['slug']) --}}
    <article>
        <h3>{{$post->title}}</h3> 
        <a href="/categories/{{$post->category->slug}}"><h5>{{$post->category->name}}</h5></a>
        {!! $post->body !!}
    </article>
    {{-- @endif --}}
{{-- @endforeach     --}}
    <a href="../blog">Back to Posts</a>
@endsection



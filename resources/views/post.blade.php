@extends('layouts.main')
@section('container')
{{-- @foreach($posts as $post) --}}
    {{-- @if ($slug === $post['slug']) --}}

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                    <h3>{{$post->title}}</h3> 
                    <h6>By: <a href="/users/{{ $post->author->username }}" class="text-decoration-none" >{{ $post->author->name }}</a></h6>
                    <h6><a href="/categories/{{$post->category->slug}}" class="text-decoration-none">{{$post->category->name}}</a></h6>
                    <img src="https://source.unsplash.com/1200x350?{{$post->category->name}}" class="img-fluid" alt="Image">

                    <article class="my-5">
                        {!! $post->body !!}
                    </article>
                <a href="../blog" class="text-decoration-none d-block">Back to Posts</a>

            </div>
        </div>
    </div>

    
@endsection



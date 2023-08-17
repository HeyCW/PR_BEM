@extends('dashboard.layouts.main')
@section('container')

{{-- @foreach($posts as $post) --}}
    {{-- @if ($slug === $post['slug']) --}}

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                    <h3 class="mb-3">{{$post->title}}</h3> 
                    <a href="/dashboard/posts/" class="text-decoration-none badge bg-success">Back to Posts</a>
                    <a href="/dashboard/posts/{{$post->slug}}" class="badge bg-warning text-decoration-none">Edit</a>
                    <a href="/dashboard/posts/{{$post->slug}}" class="badge bg-danger text-decoration-none mb-3">Delete</a>
                    <img src="https://source.unsplash.com/1200x350?{{$post->category->name}}" class="img-fluid" alt="Image">

                    <article class="my-5">
                        {!! $post->body !!}
                    </article>

            </div>
        </div>
    </div>

@endsection
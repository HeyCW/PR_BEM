@extends('dashboard.layouts.main')
@section('container')

{{-- @foreach($posts as $post) --}}
    {{-- @if ($slug === $post['slug']) --}}

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                    <h3 class="mb-3">{{$post->title}}</h3> 
                    <a href="/dashboard/posts/" class="text-decoration-none badge bg-success">Back to Posts</a>
                    <a href="/dashboard/posts/{{$post->slug}}/edit" class="badge bg-warning text-decoration-none">Edit</a>
                    <form action="/dashboard/posts/{{$post->slug}}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">Delete</button>
                      </form>
                    <img src="https://source.unsplash.com/1200x350?{{$post->category->name}}" class="img-fluid mt-3" alt="Image">

                    <article class="my-5">
                        {!! $post->body !!}
                    </article>

            </div>
        </div>
    </div>

@endsection
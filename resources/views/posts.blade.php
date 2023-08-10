@extends('layouts.main')
@section('container')
    <h1 class="text-center mb-3">{{ $page }}</h1>
    <div class="row justify-content-center mb-3">
      <div class="col-md-6">
        <form action="/blog">
          @if (request("category"))
              <input type="hidden" name="category" value="{{request("category")}}">
          @endif

          @if (request("author"))
              <input type="hidden" name="author" value="{{request("author")}}">
          @endif
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search" name="search" value= "{{request('search')}}">
            <button class="btn btn-danger" type="submit">Search...</button>
          </div>
        </form>
      </div>
    </div>

    @if ($posts->count())
    <div class="card mb-3 text-center">
        <img src="https://source.unsplash.com/1200x350?{{$posts[0] ->category->name}}" class="card-img-top" alt="Image">
        <div class="card-body">
            <a href="/posts/{{$posts[0]->slug}}" class="text-decoration-none text-dark" ><h5 class="card-title">{{$posts[0] ->title}}</h5></a>
          <p>
            <small class="text-muted">
                <h6>By: <a href="/blog?author={{ $posts[0]->author->username }}" class="text-decoration-none" >{{ $posts[0]->author->name }}</a></h6>
                <h6><a href="/blog?category={{$posts[0]->category->slug}}"  class="text-decoration-none">{{$posts[0]->category->name}}</a></h6>
                <p class="card-text"> {{$posts[0] ->excerpt}} </p>
                <a href="/posts/{{$posts[0]->slug}}" class="text-decoration-none btn btn-primary" >Read more</a>
                <p class="card-text"><small class="text-body-secondary">{{$posts[0]->created_at->diffForHumans()}}</small></p>
            </small>
          </p>
          
        </div>
      </div>
  
    <div class="container">
        <div class="row">
    @foreach ($posts->skip(1) as $post)

                <div class="col-md-3">
                    <div class="card h-100" style="width: 18rem;">
                        <div class="position-absolute bg-dark p-1 text-white" >{{$post->category->name}}</div>
                        <img src="https://source.unsplash.com/500x350?{{$post->category->name}}" class="card-img-top" alt="Imange">
                        <div class="card-body">
                          <h5 class="card-title"><a href="/posts/{{$post->slug}}" class="text-decoration-none" ><h3>{{$post->title}}</h3></a></h5>
                          <h6>By: <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none" >{{ $post->author->name }}</a></h6>
                          <h6><a href="/blog?category={{$post->category->slug}}" class="text-decoration-none">{{$post->category->name}}</a></h6>
                          <p class="card-text">{!! $post->excerpt !!}</p>
                          <p class="card-text"><small class="text-body-secondary">{{$posts[0]->created_at->diffForHumans()}}</small></p>
                          <a href="/posts/{{$post->slug}}" class="text-decoration-none btn btn-primary" >Read more</a>
                        </div>
                    </div>
                </div>
    @endforeach
        </div>
    </div>

    @else
    <p class="text-center fs-4">No post found.</p>
    @endif
    <div class="d-flex justify-content-end">
      {{$posts->links()}}
    </div>
@endsection
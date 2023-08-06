@extends('layouts.main')
@section('container')
    <h1>Post Categories</h1>


    <div class="container">
        <div class="row">

            @foreach ($categories as $category)
            <div class="col-md-4">
                <a href="categories/{{$category ->slug}}" >
                    <div class="card text-bg-dark">
                        <img src="https://source.unsplash.com/1200x1200?{{$category->name}}" class="card-img" alt="img">
                        <div class="card-img-overlay">
                          <h5 class="card-title">{{$category->name}}</h5>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
@endsection
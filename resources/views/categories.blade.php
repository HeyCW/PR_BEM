@extends('layouts.main')
@section('container')
    <h1>Post Categories</h1>

    @foreach ($categories as $category)
    <article class="mb-5">
        <ul>
            <li>
                <a href="categories/{{$category ->slug}}" ><h3>{{$category->name}}</h3></a>
            </li>
        </ul>
    </article>
    @endforeach
@endsection
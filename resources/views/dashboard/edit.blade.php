@extends("dashboard.layouts.main")
@section('container')

<div class="container">
    <div class="row">
        <div class="col-lg-8" style="margin-left: 250px; margin-top: 40px">
            <form method="POST" action="/dashboard/posts/{{$post->slug}}">
                @method("put")
                @csrf
                <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror " name="title" id="title" value="{{old('title', $post->title)}}" >

                    @error('title')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" id="slug" value="{{old('slug', $post->slug)}}">
                    @error('slug')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select name="category_id" id="category" class="form-select">
                        @foreach ($categories as $category)
                        @if (old('category_id',$post->category_id) == $category->id)
                            <option value="{{$category->id}}" selected>{{$category->name}}</option>
                        @else
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>

                {{-- Trix editor --}}

                <div class="mb-3">
                    <label for="body" class="form-label">Body</label>
                    <br>
                    <textarea name="body" id="body" cols="130" rows="10" class="form-text" @error("body") style=" border:1px solid red" @enderror> {{old("body", $post->body)}} </textarea>
                    @error('body')
                    <small><p class="text-danger">{{$message}}</p></small>
                    @enderror
                </div>

                

                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            
        </div>
    </div>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');
    title.addEventListener('change', function() {
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug);
    });
</script>

@endsection

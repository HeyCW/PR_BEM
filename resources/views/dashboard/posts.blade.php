@extends("dashboard.layouts.main")
@section("container")

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <h2 class="mt-3" style="margin-left: 50px">My Posts</h2>

    <table class="table-responsive col-lg-8">
      <a href="/dashboard/posts/create" class="btn btn-primary mb-5" style="margin-left: 50px">Create new post</a>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Category</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($posts as $post)
          <tr>
            <th scope="row"> {{$loop->iteration}} </th>
            <td> {{$post->title}} </td>
            <td> {{$post->category->name}} </td>
            <td> 
              <a href="/dashboard/posts/{{$post->slug}}" class="badge bg-info text-decoration-none">Lihat</a>

              <a href="/dashboard/posts/{{$post->slug}}/edit" class="badge bg-warning text-decoration-none">Edit</a>
      
              <form action="/dashboard/posts/{{$post->slug}}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Are you sure to delete this post?')">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach

          {{-- <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr> --}}
        </tbody>
      </table>
@endsection
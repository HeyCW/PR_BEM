@extends("dashboard.layouts.main")
@section("container")
    <h2 class="mt-3" style="margin-left: 50px">My Posts</h2>

    <table class="table-responsive col-lg-8">
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
              <a href="/dashboard/posts/{{$post->slug}}" class="badge bg-warning text-decoration-none">Edit</a>
              <a href="/dashboard/posts/{{$post->slug}}" class="badge bg-danger text-decoration-none">Delete</a>
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
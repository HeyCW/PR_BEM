@extends("layouts.main")
@section("container")



<main class="form-signin w-100 m-auto">

    <form method="POST" action="/register">
        @csrf
      <h1 class="h3 mb-3 fw-normal mt-5">Register</h1>

      <div class="form-floating">
        <input type="text" class="form-control @error("name") is-invalid @enderror" id="floatingName" name = "name"  placeholder="Name" value="{{old('name')}}">
        <label for="floatingName">Name</label>
      </div>

      @error("name")
      <small class="error-message">{{$message}}</small>
      @enderror

      <div class="mb-2"></div>

      <div class="form-floating">
        <input type="text" class="form-control @error("username") is-invalid @enderror" id="floatingUsername" name="username" placeholder="Username" value="{{old('name')}}">
        <label for="floatingUsername">Username</label>
      </div>

      @error("username")
      <small class="error-message">{{$message}}</small>
      @enderror

      <div class="mb-2"></div>

      <div class="form-floating">
        <input type="email" class="form-control @error("email") is-invalid @enderror" id="floatingInput" name="email" placeholder="name@example.com" value="{{old('name')}}">
        <label for="floatingInput">Email address</label>
      </div>

      @error("email")
      <small class="error-message">{{$message}}</small>
      @enderror

      <div class="mb-2"></div>

      <div class="form-floating">
        <input type="password" class="form-control @error("password") is-invalid @enderror" id="floatingPassword" name="password" placeholder="Password" value="{{old('name')}}">
        <label for="floatingPassword">Password</label>
      </div>

      @error("password")
      <small class="error-message">{{$message}}</small>
      @enderror

      <div class="mb-2"></div>
  
      <div class="form-check text-start my-3">
        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          Remember me
        </label>
      </div>
      <button class="btn btn-primary w-100 py-2" type="submit">Sign Up</button>
    </form>
    <small class="d-block text-center mt-3">Already registered? <a href="/login">Login</a></small>
  </main>
@endsection
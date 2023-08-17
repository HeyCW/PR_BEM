@extends("layouts.main")
@section("container")

@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session("success")}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (session()->has("loginError"))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{session("loginError")}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<main class="form-signin w-100 m-auto">
    <form action="/login" method="POST">
      @csrf
      <h1 class="h3 mb-3 fw-normal mt-5">Please sign in</h1>
  
      <div class="form-floating">
        <input type="email" name="email" class="form-control @error("email") is-invalid @enderror" id="floatingInput" placeholder="name@example.com" value="{{old('email')}}">
        <label for="floatingInput">Email address</label>
      </div>

      @error("email")
      <small class="error-message">  {{$message}} </small>
      @enderror
      

      <div class="form-floating">
        <input type="password" name="password" class="form-control @error("password") is-invalid @enderror" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>

      @error("password")
      <small class="error-message">{{$message}}</small>
      @enderror
  
      <div class="form-check text-start my-3">
        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          Remember me
        </label>
      </div>
      <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    </form>
    <small class="d-block text-center mt-3">Not registered? <a href="/register">Register Now!</a></small>
  </main>
@endsection
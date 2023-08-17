@extends("dashboard.layouts.main")
@section("container")
    <h2 class="mt-3" style="margin-left: 50px">Welcome {{auth()->user()->name}}</h2>
@endsection

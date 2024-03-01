
@extends('backend.master')


@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        

        <a class="btn btn-dark d-flex align-items-center gap-2" href="{{route('sign-in')}}">
                <svg class="bi"><use xlink:href="#file-earmark"/></svg>
                Sign-In
              </a>
      </div>
@endsection()
@extends('layouts.default')

@section('content')
  <div class="jumbotron">
    <h1>Hello Laravel</h1>
    <p class="lead">
      What you see now is <a href="https://learnku.com/courses/laravel-essential-training">Laravel Getting Started Tutorial</a> Sample project home page.
    </p>
    <p>
      Everything will start here.
    </p>
    <p>
      <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">Register now</a>
    </p>
  </div>
@stop

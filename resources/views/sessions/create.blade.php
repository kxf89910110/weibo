@extends('layouts.default')
@section('title', 'Sign In')

@section('content')
<div class="offset-md-2 col-md-8">
  <div class="card ">
    <div class="card-header">
      <h5>Sign In</h5>
    </div>
    <div class="card-body">
      @include('shared._errors')

      <form method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}

          <div class="form-group">
            <label for="email">email:</label>
            <input type="text" name="email" class="form-control" value="{{ old('email') }}">
          </div>

          <div class="form-group">
            <label for="password">Password（<a href="{{ route('password.request') }}">Forget password</a>）:</label>
            <input type="password" name="password" class="form-control" value="{{ old('password') }}">
          </div>

          <div class="form-group">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" name="remember" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Remember Me</label>
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Sign In</button>
      </form>

      <hr>

      <p>Still have no account?<a href="{{ route('signup') }}">Register now</a></p>
    </div>
  </div>
</div>
@stop

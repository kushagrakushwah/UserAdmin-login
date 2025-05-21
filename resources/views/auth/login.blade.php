@extends('layouts.app')

@section('content')
<div class="container mt-5" style="max-width:400px;">
  <h2 class="text-center">Login</h2>
  <form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-group mt-3">
      <label>Email</label>
      <input type="email" name="email" class="form-control" required autofocus>
    </div>
    <div class="form-group mt-3">
      <label>Password</label>
      <input type="password" name="password" class="form-control" required>
    </div>
    <div class="form-check mt-2">
      <input type="checkbox" name="remember" id="remember" class="form-check-input">
      <label for="remember" class="form-check-label">Remember Me</label>
    </div>
    <button class="btn btn-primary w-100 mt-4">Log In</button>
  </form>
</div>
@endsection

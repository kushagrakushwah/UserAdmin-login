@extends('layouts.app')

@section('content')
<div class="container mt-5" style="max-width: 480px;">
    <h2 class="text-center">Register</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group mt-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control" required>
        </div>
        <div class="form-group mt-3">
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}" class="form-control" required>
        </div>
        <div class="form-group mt-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="form-group mt-3">
            <label>Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>
        <button class="btn btn-primary w-100 mt-4">Register</button>
    </form>
</div>
@endsection

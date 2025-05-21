@extends('layouts.app')

@section('content')
<div class="container mt-5" style="max-width: 480px;">
  <h2>Edit Profile</h2>
  @if (session('status'))
    <div class="alert alert-success">{{ session('status') }}</div>
  @endif
  <form method="POST" action="{{ route('profile.update') }}">
    @csrf
    @method('PUT')
    <div class="form-group mt-3">
      <label>Name</label>
      <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control" required>
    </div>
    <div class="form-group mt-3">
      <label>Email</label>
      <input type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary w-100 mt-4">Update Profile</button>
  </form>
</div>
@endsection

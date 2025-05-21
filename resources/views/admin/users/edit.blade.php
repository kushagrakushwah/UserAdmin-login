@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit User</h1>
    <form action="{{ route('admin.users.update', $user) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}" required>
        </div>
        <button type="submit" class="btn btn-warning mt-3">Update User</button>
    </form>
</div>
@endsection

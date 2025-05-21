@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Welcome to the Admin Dashboard</h1>
    <p>Logged in as: {{ auth()->user()->name }}</p>
    
    <!-- Example of admin features (you can add more later) -->
    <div>
        <h3>Manage Users</h3>
        <a href="{{ route('admin.users.index') }}">View Users</a> | <a href="{{ route('admin.users.create') }}">Create New User</a>
    </div>
</div>
@endsection

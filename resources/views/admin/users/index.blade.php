@extends('layouts.app')

@section('content')
<div class="container mt-5">
  <h2>All Registered Users</h2>

  <table class="table table-bordered mt-3">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password (Hashed)</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
      <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->password }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">ATMT</a>
    <div class="d-flex align-items-center">
      @auth
        <div class="me-3 text-dark">
            {{ Auth::user()->name }}
        </div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-outline-danger btn-sm">Logout</button>
        </form>
      @else
        <a href="{{ route('login') }}" class="btn btn-outline-primary btn-sm me-2">Login</a>
        <a href="{{ route('register') }}" class="btn btn-outline-success btn-sm">Register</a>
      @endauth
    </div>
  </div>
</nav>

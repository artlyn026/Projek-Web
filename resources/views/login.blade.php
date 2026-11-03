{{-- @extends('layouts.app')
@section('title', 'Login') --}}

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Dashboard</a>
  </nav>

  <div class="container mt-4">
    <div class="row justify-content-center">
  <div class="col-md-4">
    <div class="card shadow">
      <div class="card-header text-center bg-primary text-white">
        <h5>Login</h5>
      </div>
      <div class="card-body">
        <form action="{{ route('login.process') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
      </div>
    </div>
  </div>
</div>
  </div>
</body>
</html>




<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5" style="max-width:400px">

  <h3>Admin Login</h3>

  @if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
  @endif

  <form method="POST" action="/admin/login">
    @csrf

    <input type="text" name="username" class="form-control mb-2" placeholder="Username">
    <input type="password" name="password" class="form-control mb-3" placeholder="Password">

    <button class="btn btn-primary w-100">Login</button>
  </form>

</div>

</body>
</html>
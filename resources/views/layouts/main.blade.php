<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="/css/style.css">
    <title>{{ $title }}</title>
  </head>
  <body>
    <header>
      <h1>Amazing E-Grocery</h1>
      <div class="btn-logres-wrapper">
        <a href="/register" class="btn-logres">Register</a>
        <a href="/login" class="btn-logres">Login</a>
      </div>
    </header>
    <main>
      @yield('main')
    </main>
    <footer>
      <p>&copy; Amazing E-Grocery 2023</p>
    </footer>
  </body>
</html>
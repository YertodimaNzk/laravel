<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('css')
    <title>{{ $title }}</title>
  </head>
  <body>
    @include('components.header')
    @if(!((Route::is('index')) || (Route::is('register')) || (Route::is('login'))))
      @include('components.navbar')
    @endif
    <main>
      @yield('main')
    </main>
    @include('components.footer')
  </body>
</html>
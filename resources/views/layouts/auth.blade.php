<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    @yield('css')
   
    <title inertia>{{ $title }}</title>
    
  </head>
  <body>
  @yield('main')
  </body>
</html>
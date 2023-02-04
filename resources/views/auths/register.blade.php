@extends('layouts.main')

@section('main')
  <form method="POST" action="/register">
    @csrf
    <h1>Register</h1>
    <div class="container">
      <label for="first-name">First Name:</label>
      <input type="text" id="first-name" name="first-name" />
    </div>
  </form>
  <p><a href="/login">Already have an account? Click here to log in</a></p>
@endsection
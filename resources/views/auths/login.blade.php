@extends('layouts.main')
@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection
@section('main')
       <h1>Login</h1> 
      <form class="form">
        <div class="form-control">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email">
        </div>
        <br>
        <div class="form-control">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password">
        </div>
        <br>
        <input type="submit" value="Submit" class="submit-button">
      </form>
      <p class="register-text">
        Don't have an account? <a href="/register">Click here</a> to register.
      </p>
@endsection

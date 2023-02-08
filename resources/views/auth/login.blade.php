@extends('layouts.auth')
@section('css')
<link rel="stylesheet" href="css/login.css">
@endsection
@section('main')
<div class="container">
  <div class="left-panel">
    <div class="">
      <h1>Amazing E-Grocery</h1>
    </div>
  </div>
  <div class="right-panel">
    <div class="title">Login</div>
    <div class="content">
      <form action="/login" method="post">
        @csrf
        
        <div class="user-details">
          
          <!-- Email -->
          <div class="input-box">
            <span class="details">Email</span>
            <input 
            type="text"
            id="email"
            name="email"
            value="{{ old('email') }}"
            placeholder="Enter your email" required>
          </div>
          
          <!-- Password -->
          <div class="input-box">
            <span class="details">Password</span>
            <input 
            type="password" 
            id="password"
            name="password"
            placeholder="Enter your password" required>
          </div>
        </div>
        
        <!-- Submit -->
        <div class="button">
          <button type="submit" value="Login">Login</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection


@extends('layouts.auth')

@section('css')
  <link rel="stylesheet" href="css/register.css" />
@endsection

@section('main')
<div class="container">
  <div class="left-panel">
    <div class="">
      <h1>Amazing E-Grocery</h1>
    </div>
  </div>
  <div class="right-panel">
    <div class="title">Registration</div>
    <div class="content">
      <form action="/register" method="post" enctype="multipart/form-data">
        @csrf
        
        <div class="user-details">
          
          <!-- First Name -->
          <div class="input-box">
            <span class="details">First Name</span>
            <input 
             type="text" 
             id="first_name" 
             name="first_name"
             value="{{ old('first_name') }}"
             placeholder="Enter your first name here" required autofocus>
          </div>
          
          <!-- Last Name -->
          <div class="input-box">
            <span class="details">Last Name</span>
            <input 
             type="text"
             id="last_name"
             name="last_name"
             value="{{ old('last_name') }}"
             placeholder="Enter your last name here" required>
          </div>
          
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
          
          <!-- Iamge Profile -->
          <div class="input-box">
            <span class="details">Image Profile</span>
            <input 
              type="file" 
              id="image_profile"
              name="image_profile"
              class="file-input"
            >
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
          
          <!-- First Name -->
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input 
            type="password"
            id="password_confirmation"
            name="password_confirmation"
            placeholder="Confirm your password" required>
          </div>
        </div>
        
        <!-- Gender -->
        <div class="gender-details">
          <input type="radio" name="gender" id="male" value="">
          <input type="radio" name="gender" id="female" value="">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="male">
            <span class="option one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="female">
            <span class="option two"></span>
            <span class="gender">Female</span>
          </label>
          </div>
        </div>
        
        <!-- Role -->
        <div class="role-details">
          <input type="radio" name="role" id="user" value="">
          <input type="radio" name="role" id="admin" value="">
          <span class="role-title">Role</span>
          <div class="category">
            <label for="user">
            <span class="option one"></span>
            <span class="role">User</span>
          </label>
          <label for="admin">
            <span class="option two"></span>
            <span class="role">Admin</span>
          </label>
          </div>
        </div>
        
        <!-- Submit -->
        <div class="button">
          <button type="submit" value="Register">Register</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
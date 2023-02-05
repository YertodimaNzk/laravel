@extends('layouts.main')

@section('main')
  <h1>Register</h1>
  <form method="POST" action="/register">
    @csrf
    <div class="form-wrapper">
      <div class="form-col">
        <div class="form-col-col">
          <label for="first-name">First Name:</label>
          <input type="text" id="first-name" name="first-name" value="{{ old('first-name') }}" />
        </div>
        <div class="form-col-col">
          <label for="last-name">Last Name:</label>
          <input type="text" id="last-name" name="last-name" value="{{ old('last-name') }}" />
        </div>
      </div>
      <div class="form-col">
        <div class="form-col-col">
          <label for="email">Email:</label>
          <input type="text" id="email" name="email" value="{{ old('email') }}" />
        </div>
        <div class="form-col-col">
          <label>Role</label>
          <select id="role" name="role">
            <option value="user">User</option>
            <option value="admin">Admin</option>
          </select>
        </div>
      </div>
      <div class="form-col">
        <div class="form-col-col">
          <label>Gender</label>
          <div class="col-gender">
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="male" name="gender" value="female">
            <label for="female">Female</label>
          </div>
        </div>
        <div class="form-col-col">
          <label for="picture">Display Picture</label>
          <input type="image" />
        </div>
      </div>
      <div class="form-col">
        <div class="form-col-col">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" />
        </div>
        <div class="form-col-col">
          <label for="c-pass">Confirm Password</label>
          <input type="password" id="c-pass" name="c-pass" />
        </div>
      </div>
    </div>
    <button class="btn-submit" type="submit">Register</button>
  </form>
  <p><a href="/login">Already have an account? Click here to log in</a></p>
@endsection
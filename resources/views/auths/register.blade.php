@extends('layouts.main')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
@endsection

@section('main')
  <h1>Register</h1>
  @error('email')
  <div class="error-messages">
    {{ $message }}
  </div>
  @enderror
  <form method="post" action="/register">
    @csrf
    <div class="form-wrapper">
      <div class="form-col">
        <div class="form-col-col">
          <label for="first_name">First Name:</label>
          <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" />
        </div>
        <div class="form-col-col">
          <label for="last_name">Last Name:</label>
          <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" />
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
            @foreach ($roles->name as $role)
            <option value="{{ $role }}">{{ $role }}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-col">
        <div class="form-col-col">
          <label>Gender</label>
          <div class="col-gender">
            @foreach ($genders->desc as $gender)
            <input type="radio" id="{{ $gender }}" name="{{ $gender  }}" value="{{ $gender }}">
            <label for="{{ $gender }}">{{ $gender }}</label>
            @endforeach
          </div>
        </div>
        <div class="form-col-col">
          <label for="display_image_link">Display Image</label>
          <input type="file" id="display_image_link" name="display_image_link"/>
        </div>
      </div>
      <div class="form-col">
        <div class="form-col-col">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" />
        </div>
        <div class="form-col-col">
          <label for="password_confirmation">Confirm Password</label>
          <input type="password" id="password_confirmation" name="password_confirmation" />
        </div>
      </div>
    </div>
    <button class="btn-submit" type="submit">Register</button>
  </form>
  <p><a href="/login">Already have an account? Click here to log in</a></p>
@endsection
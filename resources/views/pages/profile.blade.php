@extends('')

@section('css')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection
@section('')

<div class="profile-container">
  <div class="profile-picture">
    <img src="{{$profile_picture; }}" alt="Profile Picture">
    <input type="file" class="browse-picture" name="profile_picture">
  </div>
  <div class="profile- details">
    <p>First Name: <input type="text" name="first_ name" value="{{$first_name; }}"></p>
    <p>Last Name: <input type="text" name="last_ name" value="{{$last_name; }}"></p>
    <p>Email: <input type="email" name="email" value="{{$email; }}"></p>
    <p>Role: <input type="text" name="role" value="{{$role; }}"></p>
    <p>Gender:
      <input type="radio" name="gender" value="male" {{$gender == 'male' ? 'checked' : ''; }} Male
      <input type="radio" name="gender" value="female" {{$gender == 'female' ? 'checked' : ''; }} Female
    </p>
    <p>Password: <input type="password" name="password"></p>
    <p>Confirm Password: <input type="password" name="confirm_ password"></p>
  </div>
</div>
@endsection

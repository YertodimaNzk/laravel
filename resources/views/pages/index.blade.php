@extends('layouts.main')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('btn-logres')
  <div class="btn-logres-wrapper">
    <a href="/register" class="btn-logres">Register</a>
    <a href="/login" class="btn-logres">Login</a>
   </div>
@endsection

@section('main')
  <div class="index-title">
    <h1>Find and Buy Your Grocery Here</h1>
  </div>
@endsection
@extends('layouts.main')

@section('css')
<link rel="stylesheet" href="{{ asset('css/item.css') }}" />
@endsection()
@section('main')
<div class="item-wrapper">
  <div class="image-wrapper">
    <img src="img/items/{{ $item->image_link }}" />
  </div>
  <div class="decs-wrapper">
    <p>{{ $item->name }}</p>
    <p>{{ $item->desc }}</p>
  </div>
</div>
@endsection
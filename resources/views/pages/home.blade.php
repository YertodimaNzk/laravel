@extends('layouts.main')

@section('css')
<link rel="stylesheet" href="{{ asset('css/home.css') }}" />
@endsection
@section('main')
<div class="items-wrapper">
  @foreach ($items as $item)
  <div class="item-wrapper">
    <div class="image-wrapper">
      <img src="img/items/{{ $item->image_link }}" />
    </div>
    <p>{{ $item->name }}</p>
    <a href="/item/{{ $item->id }}">Detail</a>
  </div>
  @endforeach
</div>
<div class="item-pages">
  {{ $items->links() }}
</div>
@endsection
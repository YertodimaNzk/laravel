@section('css')
<link rel="stylesheet" href="{{ asset('css/cart.css') }}">
@endsection

<div class="cart-container">
  @foreach($cart_items as $cart_item)
    <div class="cart-item">
      <img src="{{ $cart_item->image_url }}" alt="{{ $cart_item->name }}">
      <div class="item-details">
        <p class="item-name">{{ $cart_item->name }}</p>
        <p class="item-price">${{ $cart_item->price }}</p>
      </div>
      <form action="{{ route('cart.delete', $cart_item->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="delete-btn">Delete</button>
      </form>
    </div>
  @endforeach
</div>
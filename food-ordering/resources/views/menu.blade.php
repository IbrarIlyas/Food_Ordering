@extends('layout')

@section('content')
<h1 class="mb-4">Menu</h1>
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif
<div id="cartMessage" class="alert alert-success text-center d-none"></div>

<div class="row" id="menu">
  @foreach($menuItems as $item)
    <div class="col-md-4 mb-4">
      <div class="card h-100">
      <img src="{{ asset('images/menu/' . $item->image) }}" alt="{{ $item->name }}" style="width: 180px; margin: 0 auto; display: block;">
      <div class="card-body">
          <h5 class="card-title">{{ $item->name }}</h5>
          <p>${{ number_format($item->price, 2) }}</p>
          <button class="btn btn-success w-100" onclick="addToCart({{ $item->id }}, '{{ $item->name }}', {{ $item->price }})">Add to Cart</button>
        </div>
      </div>
    </div>
  @endforeach
</div>

<div class="text-center">
  <a href="{{ route('checkout') }}" class="btn btn-primary mt-4">Go to Checkout</a>
</div>

<script>
function addToCart(id, name, price) {
  let cart = JSON.parse(localStorage.getItem('cart')) || {};
  if (!cart[id]) {
    cart[id] = { name: name, price: price, qty: 1 };
  } else {
    cart[id].qty += 1;
  }
  localStorage.setItem('cart', JSON.stringify(cart));
  // Show success message
  const msg = document.getElementById('cartMessage');
  msg.textContent = `${name} added to cart!`;
  msg.classList.remove('d-none');

  // Hide after 5 seconds
  setTimeout(() => {
    msg.classList.add('d-none');
  }, 5000);
}
</script>
@endsection

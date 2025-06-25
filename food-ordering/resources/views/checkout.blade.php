@extends('layout')

@section('content')
<h1 class="mb-4">Checkout</h1>

<form method="POST" action="{{ route('submit.order') }}" onsubmit="return prepareCartData();">
  @csrf

  <div id="cartItems"></div>

  <input type="hidden" name="cart_json" id="cartJson">

  <div class="mb-3 mt-4">
    <label for="name" class="form-label">Your Name</label>
    <input type="text" name="name" class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="text" name="phone" class="form-control" required>
  </div>

  <button type="submit" class="btn btn-success">Submit Order</button>
</form>

<script>
function renderCart() {
  const cart = JSON.parse(localStorage.getItem('cart')) || {};
  const container = document.getElementById('cartItems');
  let html = '<ul class="list-group">';
  let total = 0;
  for (let id in cart) {
    const item = cart[id];
    total += item.qty * item.price;
    html += `<li class="list-group-item d-flex justify-content-between">
              ${item.name} x ${item.qty}
              <span>$${(item.qty * item.price).toFixed(2)}</span>
            </li>`;
  }
  html += `<li class="list-group-item d-flex justify-content-between fw-bold">
             Total <span>$${total.toFixed(2)}</span>
           </li></ul>`;
  container.innerHTML = html;
}

function prepareCartData() {
  const cart = JSON.parse(localStorage.getItem('cart')) || {};
  if (Object.keys(cart).length === 0) {
    alert("Cart is empty!");
    return false;
  }
  document.getElementById('cartJson').value = JSON.stringify(cart);
  localStorage.removeItem('cart');
  return true;
}

renderCart();
</script>
@endsection

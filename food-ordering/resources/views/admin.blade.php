@extends('layout')

@section('content')
  <h1 class="mb-4">All Orders</h1>

  @foreach($orders as $order)
    <div class="card mb-3">
      <div class="card-header">
        <strong>{{ $order->customer_name }}</strong> ({{ $order->customer_phone }}) 
        - {{ $order->created_at->format('Y-m-d H:i') }}
      </div>
      <ul class="list-group list-group-flush">
        @foreach($order->items as $item)
          <li class="list-group-item d-flex justify-content-between">
            <span>{{ $item->menuItem->name }}</span>
            <span>Quantity: {{ $item->quantity }}</span>
          </li>
        @endforeach
      </ul>
    </div>
  @endforeach
@endsection

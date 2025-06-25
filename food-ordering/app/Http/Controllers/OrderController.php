<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $order = \App\Models\Order::create([
            'customer_name' => $request->name,
            'customer_phone' => $request->phone,
        ]);
    
        $cart = json_decode($request->cart_json, true);
    
        foreach ($cart as $id => $item) {
            \App\Models\OrderItem::create([
                'order_id' => $order->id,
                'menu_item_id' => $id,
                'quantity' => $item['qty'],
            ]);
        }
    
        return redirect('/')->with('success', 'Order placed successfully!');
    }
    
}

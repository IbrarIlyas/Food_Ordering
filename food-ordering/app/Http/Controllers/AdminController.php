<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
{
    $orders = \App\Models\Order::with('items.menuItem')->latest()->get();
    return view('admin', compact('orders'));
}

}

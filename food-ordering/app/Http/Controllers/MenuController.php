<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menuItems = \App\Models\MenuItem::all();
        return view('menu', compact('menuItems'));
    }
    
    public function checkout()
    {
        $menuItems = \App\Models\MenuItem::all();
        return view('checkout', compact('menuItems'));
    }
    

}

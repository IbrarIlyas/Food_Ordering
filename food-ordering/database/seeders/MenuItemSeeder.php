<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MenuItem;

class MenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MenuItem::insert([
            ['name' => 'Burger', 'price' => 5.99, 'image' => 'burger.jpg'],
            ['name' => 'Pizza', 'price' => 8.49, 'image' => 'pizza.jpg'],
            ['name' => 'Pasta', 'price' => 6.25, 'image' => 'pasta.jpg'],
            ['name' => 'Salad', 'price' => 4.75, 'image' => 'salad.jpg'],
        ]);
    }
}

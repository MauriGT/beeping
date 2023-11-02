<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Order::factory(20)->create()->each(function ($order){
            $order->products()->attach(Product::all()->random(3), ['qty' => random_int(1, 5), 'created_at' => now(), 'updated_at' => now()]);
        });
    }
}

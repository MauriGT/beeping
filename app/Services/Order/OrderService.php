<?php

namespace App\Services\Order;

use App\Models\Order;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class OrderService
{
    /**
     * @return Builder[]|Collection
     */
    public function calculateTotalCost()
    {
        return Order::with('products')->get()->each(function (Order $order) {
            $order->total_cost = $order->getTotalCost();
        });
    }
}

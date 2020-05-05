<?php
declare(strict_types=1);

namespace App\Facade\Order;

class OrderDAO
{
    public static function create(Order $order): void
    {
        /** @var OrderItem $orderItem */
        foreach ($order->orderItems() as $orderItem) {
            echo "{$orderItem->item()->name()} 注文データを作成\n";
        }
    }
}
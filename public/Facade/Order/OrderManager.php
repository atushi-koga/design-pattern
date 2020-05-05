<?php
declare(strict_types=1);

namespace App\Facade\Order;

class OrderManager
{
    public static function create(Order $order): void
    {
        $itemDao = new ItemDAO();
        foreach ($order->orderItems() as $orderItem) {
            $itemDao->setAside($orderItem);
        }

        OrderDAO::create($order);
    }
}
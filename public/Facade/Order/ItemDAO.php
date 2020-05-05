<?php
declare(strict_types=1);

namespace App\Facade\Order;

class ItemDAO
{
    public function setAside(OrderItem $orderItem): void
    {
        echo "{$orderItem->item()->name()} 在庫引き当てを実施\n";
    }
}
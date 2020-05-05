<?php
declare(strict_types=1);

namespace App\Facade\Order;

class Order
{
    /**
     * @var OrderItem[]
     */
    private $orderItems;

    public function __construct(OrderItem...$orderItems)
    {
        $this->orderItems = $orderItems;
    }

    public function orderItems(): array
    {
        return $this->orderItems;
    }
}
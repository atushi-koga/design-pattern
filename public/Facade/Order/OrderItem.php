<?php
declare(strict_types=1);

namespace App\Facade\Order;

class OrderItem
{
    /**
     * @var Item
     */
    private $item;
    /**
     * @var int
     */
    private $count;

    public function __construct(Item $item, int $count)
    {
        $this->item = $item;
        $this->count = $count;
    }

    public function item(): Item
    {
        return $this->item;
    }
}
<?php
declare(strict_types=1);

namespace tests\Facade;

use App\Facade\Order\Item;
use App\Facade\Order\Order;
use App\Facade\Order\OrderItem;
use App\Facade\Order\OrderManager;
use PHPUnit\Framework\TestCase;

class OrderFacadeTest extends TestCase
{
    public function testFacade()
    {
        $order = new Order(
            new OrderItem(new Item('plain bread'), 1),
            new OrderItem(new Item('french bread'), 2),
            new OrderItem(new Item('croissant'), 3)
        );
        ob_start();
        OrderManager::create($order);
        $actual = ob_get_clean();
        $expected = <<<EOL
plain bread 在庫引き当てを実施
french bread 在庫引き当てを実施
croissant 在庫引き当てを実施
plain bread 注文データを作成
french bread 注文データを作成
croissant 注文データを作成

EOL;
        $this->assertEquals($expected, $actual);
    }
}
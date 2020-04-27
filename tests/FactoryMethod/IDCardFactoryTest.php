<?php
declare(strict_types=1);

namespace tests\FactoryMethod;

use App\FactoryMethod\IDCard\IDCardFactory;
use PHPUnit\Framework\TestCase;

class IDCardFactoryTest extends TestCase
{
    public function testCreate()
    {
        ob_start();
        $cardFactory = new IDCardFactory();
        $cardFactory->create('田中 一郎')->use();
        $cardFactory->create('田中 二郎')->use();
        $cardFactory->create('田中 三郎')->use();

        $expected = <<<EOL
田中 一郎のカードを使います
田中 二郎のカードを使います
田中 三郎のカードを使います

EOL;

        $this->assertEquals($expected, ob_get_clean());
    }
}
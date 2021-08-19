<?php
declare(strict_types=1);

namespace Test\Singleton;

use App\Singleton\SingletonSample;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testSingleton()
    {
        $obj1 = SingletonSample::getInstance();
        $obj2 = SingletonSample::getInstance();
        $this->assertTrue($obj1->id() === $obj2->id());
        $this->assertTrue($obj1 === $obj2);

        try {
            $clone = clone $obj1;
        } catch (\RuntimeException $e) {
            $this->assertTrue(true);
            return;
        }
        $this->fail();
    }
}

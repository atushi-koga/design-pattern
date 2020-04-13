<?php
declare(strict_types=1);

namespace tests\Strategy;

use App\Strategy\ReadFileStrategy\Item;
use App\Strategy\ReadFileStrategy\ReadFileContext;
use App\Strategy\ReadFileStrategy\ReadCSVStrategy;
use App\Strategy\ReadFileStrategy\ReadTSVStrategy;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class ReadFileStrategyTest extends TestCase
{
    public function testStrategy()
    {
        $expected = [
            new Item('限定Tシャツ', 'ABC0001', 3800, new DateTimeImmutable('2006/03/11')),
            new Item('ぬいぐるみ', 'ABC0002', 1500, new DateTimeImmutable('2005/12/01')),
            new Item('クッキーセット', 'ABC0003', 800, new DateTimeImmutable('2006/05/20')),
        ];

        $fixedLengthContext = new ReadFileContext(
            new ReadCSVStrategy(__DIR__ . '/csv.txt')
        );
        $this->assertEquals(
            $expected,
            $fixedLengthContext->action()
        );

        $tsvContext = new ReadFileContext(
            new ReadTSVStrategy(__DIR__ . '/tsv.txt')
        );
        $this->assertEquals(
            $expected,
            $tsvContext->action()
        );
    }
}
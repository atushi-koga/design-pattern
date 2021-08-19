<?php
declare(strict_types=1);

namespace Test\Adapter;

use App\Adapter\File\DisplayPlainFile;
use PHPUnit\Framework\TestCase;

class DisplayShowFileTest extends TestCase
{
    public function testAdapter()
    {
        $this->assertEquals('source', (new DisplayPlainFile(__DIR__ . "/source.txt"))->display());
    }
}

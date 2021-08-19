<?php
declare(strict_types=1);

namespace Test\Bridge;

use App\Bridge\Display\CountDisplay;
use App\Bridge\Display\Display;
use App\Bridge\Display\FileDisplayImpl;
use App\Bridge\Display\StringDisplayImpl;
use PHPUnit\Framework\TestCase;

class DisplayTest extends TestCase
{
    public function testStringDisplay()
    {
        ob_start();
        (new Display(new StringDisplayImpl('hello')))->display();
        $actual = ob_get_clean();
        $expected = <<<EOL
+-----+
|hello|
+-----+

EOL;
        $this->assertEquals($expected, $actual);
    }

    public function testCountDisplay()
    {
        ob_start();
        (new CountDisplay(new StringDisplayImpl('hello')))->multiDisplay(2);
        $actual = ob_get_clean();
        $expected = <<<EOL
+-----+
|hello|
|hello|
+-----+

EOL;
        $this->assertEquals($expected, $actual);
    }

    public function testFileDisplay()
    {
        ob_start();
        (new Display(new FileDisplayImpl(__DIR__ . "/file_display.txt")))->display();
        $actual = ob_get_clean();
        $expected = <<<EOL
+----+
good morning
good afternoon
good evening
+----+

EOL;
        $this->assertEquals($expected, $actual);
    }
}

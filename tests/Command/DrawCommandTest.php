<?php
declare(strict_types=1);

namespace tests\Command;

use App\Command\DrawCommand\DrawCanvas;
use App\Command\DrawCommand\DrawCommandInvoker;
use App\Command\DrawCommand\DrawMacroCommand;
use App\Command\DrawCommand\MouseEvent;
use App\Command\DrawCommand\Point;
use PHPUnit\Framework\TestCase;

class DrawCommandTest extends TestCase
{
    public function testCommand()
    {
        $invoker = new DrawCommandInvoker(new DrawMacroCommand(), new DrawCanvas());
        ob_start();
        $invoker->mouseDragged(new MouseEvent(new Point(5, 10)));
        $this->assertEquals("[draw 5,10]", ob_get_clean());

        ob_start();
        $invoker->mouseDragged(new MouseEvent(new Point(10, 20)));
        $this->assertEquals("[draw 10,20]", ob_get_clean());

        ob_start();
        $invoker->repaint();
        $this->assertEquals("[draw 5,10][draw 10,20]", ob_get_clean());
    }
}
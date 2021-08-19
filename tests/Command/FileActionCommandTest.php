<?php
declare(strict_types=1);

namespace Test\Command;

use App\Command\FileActionCommand\CompressCommand;
use App\Command\FileActionCommand\CopyCommand;
use App\Command\FileActionCommand\File;
use App\Command\FileActionCommand\FileActionCommandQueue;
use App\Command\FileActionCommand\TouchCommand;
use PHPUnit\Framework\TestCase;

class FileActionCommandTest extends TestCase
{
    public function testCommand()
    {
        $queue = new FileActionCommandQueue();
        $file = new File('sample.text');
        $queue->addCommand(new TouchCommand($file));
        $queue->addCommand(new CompressCommand($file));
        $queue->addCommand(new CopyCommand($file));

        ob_start();
        $queue->run();

        $expected = <<<EOL
sample.textを作成しました
sample.textを圧縮しました
copy_of_sample.textを作成しました

EOL;

        $this->assertEquals($expected, ob_get_clean());
    }
}

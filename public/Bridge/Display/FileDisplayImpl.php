<?php
declare(strict_types=1);

namespace App\Bridge\Display;

class FileDisplayImpl implements DisplayImpl
{
    /**
     * @var string
     */
    private $filePath;

    public function __construct(string $filePath)
    {
        if (!is_readable($filePath)) {
            throw new \InvalidArgumentException("file is not readable:{$filePath}");
        }
        $this->filePath = $filePath;
    }

    public function open(): void
    {
        $this->printLine();
    }

    public function print(): void
    {
        $handle = fopen($this->filePath, 'r');
        while (($buffer = fgets($handle, 4096)) !== false) {
            echo "{$buffer}";
        }
        echo "\n";
        if (!feof($handle)) {
            throw new \Exception("unexpected fgets() fail");
        }
        fclose($handle);
    }

    public function close(): void
    {
        $this->printLine();
    }

    private function printLine(): void
    {
        echo "+----+\n";
    }
}
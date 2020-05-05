<?php
declare(strict_types=1);

namespace App\Bridge\Display;

class StringDisplayImpl implements DisplayImpl
{
    /**
     * @var string
     */
    private $string;

    public function __construct(string $string)
    {
        $this->string = $string;
    }

    public function open(): void
    {
        $this->printLine();
    }

    public function print(): void
    {
        echo "|{$this->string}|\n";
    }

    public function close(): void
    {
        $this->printLine();
    }

    private function printLine(): void
    {
        echo "+";
        for ($i = 0; $i < mb_strlen($this->string); $i++) {
            echo "-";
        }
        echo "+\n";
    }
}
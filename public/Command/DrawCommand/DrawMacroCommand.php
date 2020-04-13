<?php
declare(strict_types=1);

namespace App\Command\DrawCommand;

class DrawMacroCommand implements DrawCommand
{
    /**
     * @var DrawCommand[]
     */
    private $commands;

    public function __construct(DrawCommand...$commands)
    {
        $this->commands = $commands;
    }

    public function execute(): void
    {
        foreach ($this->commands as $command) {
            $command->execute();
        }
    }

    public function append(DrawCommand $command): void
    {
        $this->commands[] = $command;
    }

    public function undo(): void
    {
        if (!empty($this->commands)) {
            array_pop($this->commands);
        }
    }

    public function clear(): void
    {
        $this->commands[] = [];
    }
}
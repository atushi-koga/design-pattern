<?php
declare(strict_types=1);

namespace App\Command\FileActionCommand;

class FileActionCommandQueue
{
    /**
     * @var FileActionCommand[]
     */
    private $commands;
    /**
     * @var int
     */
    private $currentIndex;

    public function __construct()
    {
        $this->commands = [];
        $this->currentIndex = 0;
    }

    public function addCommand(FileActionCommand $command): void
    {
        $this->commands[] = $command;
    }

    public function run(): void
    {
        while (!is_null($command = $this->next())) {
            $command->execute();
        }
    }

    public function next(): ?FileActionCommand
    {
        if (count($this->commands) === 0 || count($this->commands) <= $this->currentIndex) {
            return null;
        } else {
            return $this->commands[$this->currentIndex++];
        }
    }
}
<?php
declare(strict_types=1);

namespace App\Command\FileActionCommand;

interface FileActionCommand
{
    public function execute(): void;
}
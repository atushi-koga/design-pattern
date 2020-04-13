<?php
declare(strict_types=1);

namespace App\Command\DrawCommand;

interface DrawCommand
{
    public function execute(): void;
}
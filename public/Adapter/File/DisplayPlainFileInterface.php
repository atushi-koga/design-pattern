<?php
declare(strict_types=1);

namespace App\Adapter\File;

interface DisplayPlainFileInterface
{
    public function display(): string;
}
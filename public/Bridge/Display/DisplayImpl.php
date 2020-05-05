<?php
declare(strict_types=1);

namespace App\Bridge\Display;

interface DisplayImpl
{
    public function open(): void;

    public function print(): void;

    public function close(): void;
}
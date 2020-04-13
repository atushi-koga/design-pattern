<?php
declare(strict_types=1);

namespace App\Command\DrawCommand;

interface Drawable
{
    public function draw(Point $point);
}
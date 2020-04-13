<?php
declare(strict_types=1);

namespace App\Command\DrawCommand;

class DrawCanvas implements Drawable
{
    public function draw(Point $point)
    {
        echo "[draw {$point->x()},{$point->y()}]";
    }
}
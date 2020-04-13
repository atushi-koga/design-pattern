<?php
declare(strict_types=1);

namespace App\Command\DrawCommand;

class DrawPointCommand implements DrawCommand
{
    /**
     * @var Drawable
     */
    private $drawable;
    /**
     * @var Point
     */
    private $point;

    public function __construct(Drawable $drawable, Point $point)
    {
        $this->drawable = $drawable;
        $this->point = $point;
    }

    public function execute(): void
    {
        $this->drawable->draw($this->point);
    }
}
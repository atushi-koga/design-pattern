<?php
declare(strict_types=1);

namespace App\Command\DrawCommand;

class MouseEvent
{
    /**
     * @var Point
     */
    private $point;

    public function __construct(Point $point)
    {
        $this->point = $point;
    }

    public function point(): Point
    {
        return $this->point;
    }
}
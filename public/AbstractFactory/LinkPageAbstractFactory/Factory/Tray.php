<?php
declare(strict_types=1);

namespace App\AbstractFactory\LinkPageAbstractFactory\Factory;

abstract class Tray extends Item
{
    /**
     * @var Item[]
     */
    protected $tray = [];

    public function __construct(string $caption)
    {
        parent::__construct($caption);
    }

    public function add(Item $item): void
    {
        $this->tray[] = $item;
    }
}
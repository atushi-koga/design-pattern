<?php
declare(strict_types=1);

namespace App\AbstractFactory\LinkPageAbstractFactory\Factory;

abstract class Item
{
    /**
     * @var string
     */
    protected $caption;

    public function __construct(string $caption)
    {
        $this->caption = $caption;
    }

    public abstract function makeHTML(): string;
}
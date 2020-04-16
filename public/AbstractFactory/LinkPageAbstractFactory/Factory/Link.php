<?php
declare(strict_types=1);

namespace App\AbstractFactory\LinkPageAbstractFactory\Factory;

abstract class Link extends Item
{
    /**
     * @var string
     */
    protected $url;

    public function __construct(string $caption, string $url)
    {
        parent::__construct($caption);
        $this->url = $url;
    }
}
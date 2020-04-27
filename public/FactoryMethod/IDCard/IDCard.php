<?php
declare(strict_types=1);

namespace App\FactoryMethod\IDCard;

class IDCard extends Product
{
    /**
     * @var string
     */
    private $owner;

    public function __construct(string $owner)
    {
        $this->owner = $owner;
    }

    public function use(): void
    {
        echo "{$this->owner}のカードを使います\n";
    }

    public function getOwner(): string
    {
        return $this->owner;
    }
}
<?php
declare(strict_types=1);

namespace App\FactoryMethod\IDCard;

abstract class Product
{
    abstract public function use(): void;

    abstract public function getOwner(): string;
}
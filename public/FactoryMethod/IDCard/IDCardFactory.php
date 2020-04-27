<?php
declare(strict_types=1);

namespace App\FactoryMethod\IDCard;

class IDCardFactory extends Factory
{
    /** @var string[] */
    private $owners;

    public function __construct(string...$owners)
    {
        $this->owners = $owners;
    }

    protected function createProduct(string $owner): Product
    {
        return new IDCard($owner);
    }

    protected function registerProduct(Product $product): void
    {
        $this->owners[] = $product->getOwner();
    }
}
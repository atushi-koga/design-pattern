<?php
declare(strict_types=1);

namespace App\Strategy\ReadFileStrategy;

use DateTimeImmutable;

class Item
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $code;
    /**
     * @var int
     */
    private $price;
    /**
     * @var DateTimeImmutable
     */
    private $releaseDate;

    public function __construct(
        string $name,
        string $code,
        int $price,
        DateTimeImmutable $releaseDate
    ) {
        $this->name = $name;
        $this->code = $code;
        $this->price = $price;
        $this->releaseDate = $releaseDate;
    }
}
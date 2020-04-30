<?php
declare(strict_types=1);

namespace App\Iterator\BookShelf;

class BookShelf implements IteratorAggregate
{
    /**
     * @var Book[]
     */
    private $value;

    public function __construct(Book...$books)
    {
        $this->value = $books;
    }

    public function iterator(): BookShelfIterator
    {
        return new GetBookIterator($this);
    }

    public function count(): int
    {
        return count($this->value());
    }

    public function getBookAt(int $index): Book
    {
        if (empty($this->value[$index])) {
            throw new \InvalidArgumentException("invalid index:{$index}");
        }

        return $this->value[$index];
    }

    public function value(): array
    {
        return $this->value;
    }
}
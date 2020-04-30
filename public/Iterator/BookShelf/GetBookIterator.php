<?php
declare(strict_types=1);

namespace App\Iterator\BookShelf;

class GetBookIterator implements BookShelfIterator
{
    /**
     * @var BookShelf
     */
    private $bookShelf;

    /**
     * @var int
     */
    private $pointer = 0;

    public function __construct(BookShelf $bookShelf)
    {
        $this->bookShelf = $bookShelf;
    }

    public function hasNext(): bool
    {
        return $this->pointer < $this->bookShelf->count();
    }

    public function next(): Book
    {
        return $this->bookShelf->getBookAt($this->pointer++);
    }
}
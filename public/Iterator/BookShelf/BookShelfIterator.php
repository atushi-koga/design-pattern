<?php
declare(strict_types=1);

namespace App\Iterator\BookShelf;

interface BookShelfIterator
{
    public function hasNext(): bool;

    public function next(): Book;
}
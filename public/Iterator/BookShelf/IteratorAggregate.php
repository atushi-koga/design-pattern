<?php
declare(strict_types=1);

namespace App\Iterator\BookShelf;

interface IteratorAggregate
{
    public function iterator(): BookShelfIterator;
}
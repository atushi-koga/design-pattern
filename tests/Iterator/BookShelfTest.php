<?php
declare(strict_types=1);

namespace Test\Iterator;

use App\Iterator\BookShelf\Book;
use App\Iterator\BookShelf\BookShelf;
use PHPUnit\Framework\TestCase;

class BookShelfTest extends TestCase
{
    public function testIterator()
    {
        $bookShelf = new BookShelf(
            new Book('around the world.'),
            new Book('bible.'),
            new Book('cinderella.'),
            new Book('Daddy-Long-Legs.')
        );
        $iterator = $bookShelf->iterator();

        ob_start();
        while ($iterator->hasNext()) {
            echo $iterator->next()->name();
        }
        $this->assertEquals(
            "around the world.bible.cinderella.Daddy-Long-Legs.",
            ob_get_clean()
        );
    }
}

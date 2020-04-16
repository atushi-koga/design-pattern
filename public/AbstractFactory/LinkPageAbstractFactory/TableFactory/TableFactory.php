<?php
declare(strict_types=1);

namespace App\AbstractFactory\LinkPageAbstractFactory\TableFactory;

use App\AbstractFactory\LinkPageAbstractFactory\Factory\Factory;
use App\AbstractFactory\LinkPageAbstractFactory\Factory\Link;
use App\AbstractFactory\LinkPageAbstractFactory\Factory\Page;
use App\AbstractFactory\LinkPageAbstractFactory\Factory\Tray;

class TableFactory extends Factory
{
    public function createLink(string $caption, string $url): Link
    {
        // TODO: Implement createLink() method.
    }

    public function createTray(string $caption): Tray
    {
        // TODO: Implement createTray() method.
    }

    public function createPage(string $title, string $author): Page
    {
        // TODO: Implement createPage() method.
    }
}